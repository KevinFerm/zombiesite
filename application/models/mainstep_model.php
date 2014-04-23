<?php
class Mainstep_model extends CI_Model {
    public function getBaseStep($stepnum) {
        return $this->db->query("SELECT * FROM mainstep WHERE user_email=0 AND step_num='{$stepnum}'")->result_array();
    }


    public function getBaseSteps() {
        $step1 = $this->getBaseStep(1);
        $step2 = $this->getBaseStep(2);
        $step3 = $this->getBaseStep(3);
        $step4 = $this->getBaseStep(4);
        $steps = array($step1, $step2, $step3, $step4);
        return $steps;
    }

    public function getUserSubSteps($email, $step) {
        return $this->db->query("SELECT * FROM substep WHERE user_email='{$email}' AND step_num='{$step}'")->result_array();
    }

}
