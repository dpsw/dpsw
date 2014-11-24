<?php
use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Email as EmailValidator;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
		$this->view->setVar("regist_form", $this->getRegistrationForm());
    }

    public function checkregistrationformAction()
    {
    	$form = $this->getRegistrationForm();
    	if ($this->request->isPost()) {
			if ($form->isValid($this->request->getPost()) == false) {
                foreach ($form->getMessages() as $message) {
                    echo $message, '<br>';
                }
			}
			else{
				// if ($this->security->checkToken()) {
    //                 echo 'Токен верный';

    //             }
                //else{
					echo 'Все плохо';
				//}
			}
    	}
	}

    public function getRegistrationForm()
    {
    	$csrf = new \Phalcon\Forms\Element\Hidden('csrf');
        $csrf->addValidator(new \Phalcon\Validation\Validator\Identical(array(
            'value' => $this->getCsrf(),//$this->security->getSessionToken(),
            'message' => 'CSRF токен потерян'
        )));

        //type="name" name="name" id="name" class="form-control" placeholder="Ваше имя"
        $username = new \Phalcon\Forms\Element\Text('username');

        //$username->addFilter('trim');
        $username->addValidator(new PresenceOf(array(
            'message' => 'Имя обязательно',
        )));
        $username->addValidator(new StringLength(array(
            'min' => 3,
            'messageMinimum' => 'Имя должно быть больше 3 символов'
        )));
        

        $username->addValidator(new StringLength(array(
            'max' => 44,
            'messageMinimum' => 'Имя должно быть не больше 44 символов'
        )));

        //type="email" name="email" id="email" class="form-control" placeholder="Email"
        $email = new \Phalcon\Forms\Element\Text('email');
        $email->addValidator( new EmailValidator(array(
   				'message' => 'Email не правильный'
        )));
		//type="password" name="password" id="password" class="form-control" placeholder="Пароль"
        $password = new \Phalcon\Forms\Element\Password('password');
		$password->addValidator(new PresenceOf(array(
            'message' => 'Пароль обязателен',
        )));


        $form = new Form();

		$form->add($username);
		$form->add($email);
		$form->add($password);
		$form->add($csrf);
		return $form;
    }

    public function getCsrf()
    {
        return $this->security->getToken();
    }

}

