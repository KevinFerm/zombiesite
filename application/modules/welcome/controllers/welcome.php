<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Client');
		$data['device'] = $this->Client->device();
		$this->load->view('header',$data);
		$this->load->view('welcome_message');

		if(isset($_GET['title']) && isset($_GET['text']) && isset($_GET['slide']))
		{

			$fb_config = array(
            'appId'  => '241088286075556',
            'secret' => 'e9045f6502ce93890009103dadaf91b1'
	        );

	        $this->load->library('facebook', $fb_config);

	        $user = $this->facebook->getUser();
	        if ($user) {
	            try {
	                $fb_profile = $this->facebook
	                    ->api('/me','GET');
	            } catch (FacebookApiException $e) {
	                $user = null;
	            }
	        }
	        if(isset($fb_profile))
	        {
			$this->load->model('Steps_model');
			$this->Steps_model->insert_into_step($_GET['title'], $_GET['text'], $fb_profile['email'], 0, $_GET['slide']);
			header("Location: /zombiesite");
	        }
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
