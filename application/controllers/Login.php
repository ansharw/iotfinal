<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['title'] = 'Kandang Otomatis';
        $this->load->view('_partials/header', $this->data);
		$this->load->view('_partials/js', $this->data);
    }

	public function index()
	{
		$this->load->view('login');
	}
}