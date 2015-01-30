<?php
namespace Magandi\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Email as EmailValidator;
use Phalcon\Validation\Validator\Identical;

class LoginForm extends Form
{

    public function initialize()
    {
        // $csrf = new \Phalcon\Forms\Element\Hidden('csrf');
        // $csrf->addValidator(new \Phalcon\Validation\Validator\Identical(array(
        //     '_value' => $this->security->getToken(),
        //     'message' => 'Сработала защита от атак (CSRF)'
        // )));

        $csrf = new Hidden('csrf');

        $csrf->addValidator(new Identical(array(
            'value' => $this->security->getSessionToken(),
            'message' => 'Сработала защита от атак (CSRF)'
        )));

        $email = new \Phalcon\Forms\Element\Text('email');
        $email->addValidators(array(
            new PresenceOf(array(
                        'message' => 'Email обязателен',
                    )),
            new EmailValidator(array(
           				'message' => 'Email не корректен'
                ))
        ));

        $password = new \Phalcon\Forms\Element\Password('password');
		$password->addValidators(array(
            new PresenceOf(array(
                        'message' => 'Пароль обязателен',
                    )),
            new StringLength(array(
                        'min' => 5,
                        'messageMinimum' => 'Пароль должен быть больше 5 символов'
                    )),
            new StringLength(array(
                        'max' => 20,
                        'messageMinimum' => 'Пароль должен быть не больше 20 символов'
                    ))
        ));

		$this->add($email);
		$this->add($password);
		$this->add($csrf);
    }
}
