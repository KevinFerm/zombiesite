<?php

class Facebook extends MX_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

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