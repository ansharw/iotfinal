<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends Admin_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->data['title'] = 'Kandang Otomatis';
        $this->load->model('model_auth');

        $this->load->view('_partials/header', $this->data);
		$this->load->view('_partials/js', $this->data);
    }

    public function login()
	{
        $this->logged_in();

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if($this->form_validation->run() == TRUE) {
            $username_exists = $this->model_auth->check_username($this->input->post('username'));

            if($username_exists == TRUE) {
                $login = $this->model_auth->login($this->security->xss_clean($this->input->post('username')), $this->security->xss_clean($this->input->post('password')));

                if($login) {
                    $logged_in_sess = [
                        'user_id' => $login['user_id'],
                        'user_name' => $login['username'],
                        'name' => $login['name'],
                        'logged_in' => TRUE
                    ];
                    
                    $this->session->set_userdata($logged_in_sess);
                    redirect('dashboard', 'refresh');
                } else {                    
                    $this->session->set_flashdata('errors', 'Login gagal, silahkan coba kembali!!');
                    $this->load->view('login', $this->data);
                }
            } else {
                $this->session->set_flashdata('errors', 'Login gagal, silahkan coba kembali!!!!');
                $this->load->view('login', $this->data);
            }
        } else {          
            $this->load->view('login', $this->data);
        }
    }
    
    public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login', 'refresh');
	}
}