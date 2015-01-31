<?php

use Phalcon\Acl;
use Phalcon\Acl\Role;
use Phalcon\Acl\Resource;
use Phalcon\Events\Event;
use Phalcon\Mvc\User\Plugin;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Acl\Adapter\Memory as AclList;

/**
 * SecurityPlugin
 *
 * This is the security plugin which controls that users only have access to the modules they're assigned to
 */
class SecurityPlugin extends Plugin
{

    /**
     * Returns an existing or new access control list
     *
     * @returns AclList
     */
    public function getAcl()
    {

        //throw new \Exception("something");

        if (!isset($this->persistent->acl)) {

            $acl = new AclList();

            $acl->setDefaultAction(Acl::DENY);

            //Register roles
            $roles = array(
                'customer'  => new Role('customer'),
                'seller'  => new Role('seller'),
                'admin'     => new Role('admin'),
                'guests' => new Role('guests')
            );
            foreach ($roles as $role) {
                $acl->addRole($role);
            }

            /////////////////////
            //Private area resources for Customer
            $privateCustomerResources = array(
                'customer'     => array('index')
            );
            foreach ($privateCustomerResources as $resource => $actions) {
                $acl->addResource(new Resource($resource), $actions);
            }
            //Grant access to private area to role Customer
            foreach ($privateCustomerResources as $resource => $actions) {
                foreach ($actions as $action){
                    $acl->allow('customer', $resource, $action);
                }
            }
            /////////////////////

            /////////////////////
            //Private area resources for Seller
            $privateSellerResources = array(
                'seller'     => array('index')
            );
            foreach ($privateSellerResources as $resource => $actions) {
                $acl->addResource(new Resource($resource), $actions);
            }
            //Grant access to private area to role Seller
            foreach ($privateSellerResources as $resource => $actions) {
                foreach ($actions as $action){
                    $acl->allow('seller', $resource, $action);
                }
            }
            /////////////////////

            /////////////////////
            //Private area resources for Admin
            $privateAdminResources = array(
                'admin'     => array('index')
            );
            foreach ($privateAdminResources as $resource => $actions) {
                $acl->addResource(new Resource($resource), $actions);
            }
            //Grant access to private area to role Admin
            foreach ($privateAdminResources as $resource => $actions) {
                foreach ($actions as $action){
                    $acl->allow('admin', $resource, $action);
                }
            }
            /////////////////////

            /////////////////////
            //Public area resources
            $publicResources = array(
                'index'         => array('index'),
                'user'          => array('index', 'login', 'afterfacebookregist','afterregist', 'registration', 'logout'),
                'errors'        => array('show401','show404','show500')
            );
            foreach ($publicResources as $resource => $actions) {
                $acl->addResource(new Resource($resource), $actions);
            }

            //Grant access to public areas to both users and guests
            foreach ($roles as $role) {
                foreach ($publicResources as $resource => $actions) {
                    foreach ($actions as $action){
                        $acl->allow($role->getName(), $resource, $action);
                    }
                }
            }
            /////////////////////

            //The acl is stored in session, APC would be useful here too
            $this->persistent->acl = $acl;
        }

        return $this->persistent->acl;
    }

    /**
     * This action is executed before execute any action in the application
     *
     * @param Event $event
     * @param Dispatcher $dispatcher
     */
    public function beforeDispatch(Event $event, Dispatcher $dispatcher)
    {
        $auth = $this->session->get('auth');
//        var_dump($auth);die();
        if (!$auth){
            $role = 'guests';
        } else {
            $role = $auth['role'];
        }

        $controller = $dispatcher->getControllerName();
        $action = $dispatcher->getActionName();

        $acl = $this->getAcl();

        $allowed = $acl->isAllowed($role, $controller, $action);
//        var_dump($role);
//        var_dump($allowed);
//        die();
        if ($allowed != Acl::ALLOW) {
            return $this->response->redirect('errors/show401');
//            return $dispatcher->forward(array(
//                'controller' => 'errors',
//                'action'     => 'show401'
//            ));
//            return false;
        }
    }
}
