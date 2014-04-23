<?php
class Mainstep extends MX_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->load->model("mainstep_model");
        $data['mainstep'] = $this->mainstep_model->getBaseSteps();
        $user = $this->facebook->getUser();
        if ($user) {
            try {
                $data['user_profile'] = $this->facebook
                    ->api('/me','GET');
                $data['substep'][1] = $this->mainstep_model->getUserSubSteps($data['user_profile']['email'],1);
                $data['substep'][2] = $this->mainstep_model->getUserSubSteps($data['user_profile']['email'],2);
                $data['substep'][3] = $this->mainstep_model->getUserSubSteps($data['user_profile']['email'],3);
                $data['substep'][4] = $this->mainstep_model->getUserSubSteps($data['user_profile']['email'],4);
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }
        $this->load->view('mainstep', $data);
    }
}
