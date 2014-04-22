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
            $data['logout_url'] = $this->facebook
                ->getLogoutUrl();
        } else {
            $data['login_url'] = $this->facebook
                ->getLoginUrl();
        }

        $this->load->view('facebook_button',$data);
    }
}