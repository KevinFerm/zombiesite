<?php

class Facebook_Button extends MX_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $fb_config = array(
            'appId'  => '241088286075556',
            'secret' => 'e9045f6502ce93890009103dadaf91b1'
        );

        $this->load->library('facebook', $fb_config);

        $user = $this->facebook->getUser();
        if ($user) {
            try {
                $data['user_profile'] = $this->facebook
                    ->api('/me','GET');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }

        if ($user) {
            $data['logout_url'] = $this->facebook
                ->getLogoutUrl();
        } else {
            $data['login_url'] = $this->facebook
                ->getLoginUrl(array ( 
                'display' => 'popup',
                'redirect_uri' => 'http://42foo.com/zombiesite/index.php'
                ));
        }

        $this->load->view('facebook_button',$data);
    }
}