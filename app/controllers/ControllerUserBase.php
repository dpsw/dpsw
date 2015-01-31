<?php

use Phalcon\Mvc\Controller;

class ControllerUserBase extends ControllerBase
{
    public function initialize()
    {
        //// ?????????????????????
        $user_id = $this->session->get('auth')['id'];
        $user = User::findFirst(array(
            "user_id = :user_id: ",
            "bind"      =>  array(
                "user_id" => $user_id,
            ),
        ));
        $this->view->setVar("user", $user);
    }

}
