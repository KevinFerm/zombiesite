<?php
class Ajax extends CI_Controller {

	function index()
	{
		
	}

	function slide($id,$num)
	{
		$this->load->model('Tutorial_Model');
		$data['tabel'] = $this->Tutorial_Model->getSlide($id);
		$data['num'] = $num;
		$this->load->view('slide', $data);
	}
}
?>