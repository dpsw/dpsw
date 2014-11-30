<?php

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
                    $this->view->setVar("user_name", $this->request->getPost('username')); 
                    return $this->response->redirect('user/afterregist');
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
        // var_dump($fb_user);
        // die();
        $user = new User();
        $user->assign(array(
            'name' => $fb_user['first_name'],
            'surname' => $fb_user['last_name'],
            'email' => $fb_user['email'],
            'facebook_id' => $fb_user['id'],
        ));
        if ($user->save()) {
            $this->view->setVar("user_name", $fb_user['first_nsame']);         
            return $this->response->redirect('user/afterregist');
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
                $userInfo = json_decode(file_get_contents('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params))), true);
                var_dump($userInfo);
                die();
            }
        }
        else{
            $this->flash->error('Не удалось зарегестрироваться с помощью ВКонтакте.');
            return $this->response->redirect('');
        }
    }

}

