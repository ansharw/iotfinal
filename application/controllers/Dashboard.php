<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->data['title'] = 'Dashboard';
        $this->load->model('model_control');
    }

    public function index()
    {
        $this->render_template('dashboard', $this->data);
    }

    public function recentData()
    {
        $data = $this->model_control->getRecentAll();
        header('Content-Type: application/json');
        echo json_encode($data);  
    }
}
