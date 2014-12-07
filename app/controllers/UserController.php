<?php

use Magandi\Forms\RegistForm;
use \Phalcon\Db\Column;

class UserController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function registrationAction()
    {
        $form = new RegistForm();
        if ($this->request->isPost()) {
            if ($form->isValid($this->request->getPost()) == false) {
                foreach ($form->getMessages() as $message) {
                    $this->flash->error($message);
                }
            }
            else{
                $checkUser = User::findFirst(array(
                    "email = :email: AND email IS NOT NULL",
                    "bind"      =>  array(
                                        "email" => $this->request->getPost('email'),
                                    ),
                    "bindTypes" =>  array(
                                        "email" => Column::BIND_PARAM_STR
                                    )
                ));
                if($checkUser )
                {
                    if( !$this->security->checkHash($this->request->getPost('password'), $checkUser->getPassword()))
                    {
                        $this->flash->error('Ваши данные не подтверждены');
                        return $this->response->redirect('');
                    }
                    $this->view->setVar("user_name", $checkUser->getName()); 
                    return $this->dispatcher->forward(array(
                                "action" => "afterregist",
                            ));
                }

                $user = new User();
                $user->assign(array(
                    'name' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),
                    'password' => $this->security->hash($this->request->getPost('password'))
                ));
                if ($user->save()) {        
                    $this->view->setVar("user_name", $this->request->getPost('username')); 
                    return $this->dispatcher->forward(array(
                                "action" => "afterregist"
                            ));
                }
                $this->flash->error($user->getMessages());
            }
        }
        return $this->response->redirect('');

    }

    public function afterregistAction()
    {

    }

    public function afterfacebookregistAction()
    {
        $fb_user = $this->facebook->fbLogin();

        $checkUser_by_facebook = User::findFirst(array(
            "facebook_id = :facebook_id: AND facebook_id IS NOT NULL",
            "bind"      =>  array(
                                "facebook_id"   => $fb_user['id']
                            ),
            "bindTypes" =>  array(
                                "facebook_id" => Column::BIND_PARAM_STR
                            )
        ));

        $checkUser_by_email = User::findFirst(array(
            "email = :email: AND email IS NOT NULL",
            "bind"      =>  array(
                                "email"         => $fb_user['email']
                            ),
            "bindTypes" =>  array(
                                "email" => Column::BIND_PARAM_STR
                            )
        ));

        if($checkUser_by_facebook)
        {
            if(!$checkUser_by_facebook->getEmail())
            {
                $checkUser_by_facebook->setEmail($fb_user['email']);    
                $checkUser_by_facebook->save();

                $this->view->setVar("user_name", $checkUser_by_facebook->getName());
                return $this->dispatcher->forward(array(
                                    "action" => "afterregist"
                                ));   
            }
        }
        if($checkUser_by_email)
        {
            if(!$checkUser_by_email->getFacebookId())
            {
                $checkUser_by_email->setFacebookId($fb_user['id']);    
                $checkUser_by_email->save();

                $this->view->setVar("user_name", $checkUser_by_email->getName());
                return $this->dispatcher->forward(array(
                                    "action" => "afterregist"
                                ));   
            }
        }
        //// IF DON'T FIND USER BY EMAIL AND FACEBOOK 
        $user = new User();
        $user->assign(array(
            'name' => $fb_user['first_name'],
            'surname' => $fb_user['last_name'],
            'email' => $fb_user['email'],
            'facebook_id' => $fb_user['id'],
        ));
        if ($user->save()) {
            $this->view->setVar("user_name", $fb_user['first_name']);
            return $this->dispatcher->forward(array(
                                "action" => "afterregist"
                            ));         
        }
        $this->flash->error($user->getMessages());
        return $this->response->redirect('');
    }

    public function aftervkregistAction()
    {
        $client_id = '4655868';
        $clientSecret = 'keYT9yc8H7OP9N0OZ96v';
        $redirect_uri = 'http://magandi.local/user/aftervkregist'; 
        $code = $this->request->get('code');

        if ($code) {
            $params = array(
                'client_id'     => $client_id,
                'client_secret' => $clientSecret,
                'code'          => $code,
                'redirect_uri'  => $redirect_uri
            );

            $token = json_decode(file_get_contents('https://oauth.vk.com/access_token' . '?' . urldecode(http_build_query($params))), true);

            if (isset($token['access_token'])) {
                $params = array(
                    'uids'         => $token['user_id'],
                    'fields'       => 'uid,first_name,last_name,screen_name,sex,bdate,photo_big',
                    'access_token' => $token['access_token']
                );
                $return_vk_response = json_decode(file_get_contents('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params))), true);
                $user_vk = $return_vk_response ? $return_vk_response['response'][0]: NULL;
                
                if($user_vk){

                    $checkUser_by_vk = User::findFirst(array(
                        "vk_id = :vk_id: AND vk_id IS NOT NULL",
                        "bind"      =>  array(
                                            "vk_id"   => $user_vk['uid']
                                        ),
                        "bindTypes" =>  array(
                                            "vk_id" => Column::BIND_PARAM_STR
                                        )
                    ));

                    $checkUser_by_email = User::findFirst(array(
                        "email = :email: AND email IS NOT NULL",
                        "bind"      =>  array(
                                            "email"         => $user_vk['email']
                                        ),
                        "bindTypes" =>  array(
                                            "email" => Column::BIND_PARAM_STR
                                        )
                    ));

                    if($checkUser_by_vk)
                    {
                        if(!$checkUser_by_vk->getEmail())
                        {
                            $checkUser_by_vk->setEmail($fb_user['email']);    
                            $checkUser_by_vk->save();

                            $this->view->setVar("user_name", $checkUser_by_vk->getName());
                            return $this->dispatcher->forward(array(
                                                "action" => "afterregist"
                                            ));   
                        }
                    }
                    if($checkUser_by_email)
                    {
                        if(!$checkUser_by_email->getVkId())
                        {
                            $checkUser_by_email->setVkId($user_vk['uid']);    
                            $checkUser_by_email->save();

                            $this->view->setVar("user_name", $checkUser_by_email->getName());
                            return $this->dispatcher->forward(array(
                                                "action" => "afterregist"
                                            ));   
                        }
                    }    


                    $user = new User();
                    $user->assign(array(
                        'name' => $user_vk['first_name'],
                        'surname' => $user_vk['last_name'],
                        'email' => $user_vk['email'],
                        'vk_id' => $user_vk['uid'],
                    ));
                    if ($user->save()) {        
                        $this->view->setVar("user_name", $user_vk['first_name']);     
                        return $this->dispatcher->forward(array(
                                "action" => "afterregist"
                            ));
                    }
                }
            }
        }
        else{
            $this->flash->error('Не удалось зарегестрироваться с помощью ВКонтакте.');
        }
        return $this->response->redirect('');
    }

}

