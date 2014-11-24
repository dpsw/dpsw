<?php

class UserController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function registrationAction()
    {
    	if ($this->request->isPost() ) {
    		if ($this->security->checkToken()) {
                    //Токен верный
    			echo "token good";
    			die();
        	}
        	if ($form->isValid($this->request->getPost()) == false) {
                foreach ($form->getMessages() as $message) {
                    echo $message;
                }
            }
            // Доступ к POST данным
            $name = $this->request->getPost("username");
            $email = $this->request->getPost("email");
            $password = $this->request->getPost("password");
            var_dump($name);
            var_dump($email);
            var_dump($password);
            die();
        }
        else{
        	echo "where params??";
        	die();
        }
    }

}

