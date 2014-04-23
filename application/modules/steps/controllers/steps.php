<?php 

// Author Joakim Danielsson
class Steps extends MX_Controller{
	
	function __construct()
	{
		parent::__construct();

	}
	function createStep()
	{
		$data['title'] = "My step Title";
		$data['text'] = "My step Text";
		$this->db->insert("substep", $data);

		$this->load->view('step_view', $data);
		$this->load->model('steps_model');
	}

	function index(){
		$this->load->model("steps_model");

		$data["result"] = $this->steps_model->showStep();

		$this->load->view("step_view", $data);
	}

}

?>