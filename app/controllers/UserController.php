s<?php

use Magandi\Forms\RegistForm;


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
                $user = new User();
                $user->assign(array(
                    'name' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),
                    'password' => $this->security->hash($this->request->getPost('password'))
                ));
                if ($user->save()) {
                    echo 'regist';
                    die();
                }
                $this->flash->error($user->getMessages());
            }
        }
        return $this->response->redirect('');
    }

}

