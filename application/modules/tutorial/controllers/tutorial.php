<?php 
class Tutorial extends MX_controller {
	function __construct()
	{
		parent::__construct();
	} 

	function index()
	{	
		$this->load->model('Client');
		$data['device'] = $this->Client->device();
		$this->load->view('header',$data);
		$this->load->model('Tutorial_Model');
		$data['tabel'] = $this->Tutorial_Model->getTutorial();
		$this->load->view('tutorial',$data);
	}
}

 ?>
