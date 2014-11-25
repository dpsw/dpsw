<?php
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

