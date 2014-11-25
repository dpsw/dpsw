<?php
use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Email as EmailValidator;
use Magandi\Forms\RegistForm;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        // $this->flash->success("Your information were stored correctly!");
        // $this->flash->error("Your information were stored correctly!");
        // $this->flash->notice("Your information were stored correctly!");
        // $this->flash->warning("Your information were stored correctly!");
		$this->view->setVar("regist_form", 
            new RegistForm()
        );
    }

}

