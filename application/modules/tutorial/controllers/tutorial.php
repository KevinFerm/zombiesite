<?php 
class Tutorial extends MX_controller {
	function __construct()
	{
		parent::__construct();
	} 

	function index()
	{
		
		$this->load->view('header');
		$this->load->view('tutorial');
	}

}

 ?>
