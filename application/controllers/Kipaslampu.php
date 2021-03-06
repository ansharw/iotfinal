<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kipaslampu extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->data['title'] = 'Fan, Lamp and Pump';
        $this->load->model('model_control');
    }

    public function index($kipas_id = null, $lampu_id = null, $pompa_id = null)
    {
        $this->data['kipas'] = $this->model_control->getKipas($kipas_id);
        $this->data['lampu'] = $this->model_control->getLampu($lampu_id);
        $this->data['pompa'] = $this->model_control->getPompa($pompa_id);
        $this->render_template('kipaslampu', $this->data);
    }

    public function ambilData()
    {
        $data = $this->model_control->getAllData();
        header('Content-Type: application/json');
        echo json_encode($data); 
    }
}
