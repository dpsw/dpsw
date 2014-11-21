<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	$user = new User();
    	$user->name = 'Test';
    	$user->surname = 'Test';
    	$user->email = 'test@test.com';
    	$user->save();
    }

}

