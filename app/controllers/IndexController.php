<?php

class IndexController extends ControllerBase
{

    public function initialize()
    {
//        $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome');
        parent::initialize();
    }
    
    public function indexAction()
    {
//        echo "<h1>Hello!</h1>";
    }

}