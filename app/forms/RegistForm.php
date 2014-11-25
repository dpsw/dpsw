<?php
namespace Magandi\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Email as EmailValidator;
use Phalcon\Validation\Validator\Identical;

class RegistForm extends Form
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

        $username = new \Phalcon\Forms\Element\Text('username');
        $username->addValidators(array(
            new PresenceOf(array(
                        'message' => 'Имя обязательно',
                    )),
            new StringLength(array(
                        'min' => 3,
                        'messageMinimum' => 'Имя должно быть больше 3 символов'
                    )),
            new StringLength(array(
                        'max' => 44,
                        'messageMinimum' => 'Имя должно быть не больше 44 символов'
                    ))
        ));

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

        $this->add($username);
		$this->add($email);
		$this->add($password);
		$this->add($csrf);
    }
}
