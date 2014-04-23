<?php 
class Tutorial extends MX_controller {
	function __construct()
	{
		parent::__construct();
	} 

	function index()
	{		
		$this->load->view('header');
		$this->load->model('Tutorial_Model');
		$data['tabel'] = $this->Tutorial_Model->getTutorial();
		$this->load->view('tutorial',$data);
	}
}

 ?>
