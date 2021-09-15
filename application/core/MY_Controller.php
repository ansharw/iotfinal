<?php
class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
}

class Admin_Controller extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (empty($this->session->userdata('logged_in'))) {
			$session_data = array('logged_in' => FALSE);
			$this->session->set_userdata($session_data);
		}
        
	}

	public function logged_in()
	{
		$session_data = $this->session->userdata();
		if ($session_data['logged_in'] == TRUE) {
			redirect('dashboard', 'refresh');
		}
	}

	public function not_logged_in()
	{
		$session_data = $this->session->userdata();
		if ($session_data['logged_in'] == FALSE) {
			redirect('auth/login', 'refresh');
		}
	}

	public function render_template($page = NULL, $data = array())
	{
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/layout', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view($page, $data);
		$this->load->view('_partials/footer', $data);
		$this->load->view('_partials/js', $data);
	}
}
