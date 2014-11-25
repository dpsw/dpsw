<?php
namespace Magandi\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Email as EmailValidator;

class RegistForm extends Form
{

    public function initialize()
    {
        $csrf = new \Phalcon\Forms\Element\Hidden('csrf');
        $csrf->addValidator(new \Phalcon\Validation\Validator\Identical(array(
            'value' => $this->security->getSessionToken(),
            'message' => 'CSRF токен потерян'
        )));

        $username = new \Phalcon\Forms\Element\Text('username');

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

        $email = new \Phalcon\Forms\Element\Text('email');
        $email->addValidator( new EmailValidator(array(
   				'message' => 'Email не корректен'
        )));
		
        $password = new \Phalcon\Forms\Element\Password('password');
		$password->addValidator(new PresenceOf(array(
            'message' => 'Пароль обязателен',
        )));

        $password->addValidator(new StringLength(array(
            'min' => 5,
            'messageMinimum' => 'Пароль должен быть больше 5 символов'
        )));

        $password->addValidator(new StringLength(array(
            'max' => 20,
            'messageMinimum' => 'Пароль должен быть не больше 20 символов'
        )));

        $this->add($username);
		$this->add($email);
		$this->add($password);
		$this->add($csrf);
    }
}
