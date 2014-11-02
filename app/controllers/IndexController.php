<?php

class IndexController extends ControllerBase
{

    public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Здрасьте');
        parent::initialize();
    }
    
    public function indexAction()
    {
        $filename = 'MOJOJALEX_%%timestamp%%.csv';
        $what_replace = '%%timestamp%%';
        $some = str_replace($what_replace, date('Ymd'), $filename );
        var_dump($some);
        echo "<h1>Hello!</h1>";
    }

}