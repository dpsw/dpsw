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
        $this->view->setVar("facebook_url", 
            $this->facebook->facebookLoginURL(urldecode($this->getUrl.'/user/afterfacebookregist'))
        );
        $url = 'https://oauth.vk.com/authorize';

        $params = array(
            'client_id'     => '4655868',
            'scope'         => 'email,status',
            'redirect_uri'  => $this->getUrl.'/user/aftervkregist',
            'response_type' => 'code',
            'v'             => '5.27'
        );

        $vk_regist_url = $url . '?' . urldecode(http_build_query($params));
        $this->view->setVar("vk_url", $vk_regist_url);   
    }

}

