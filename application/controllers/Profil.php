<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->data['title'] = 'Profil Pengembang Aplikasi';
        $this->load->model('model_control');
    }

    public function index()
    {
        $this->render_template('profil', $this->data);
    }
}
