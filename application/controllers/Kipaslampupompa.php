<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kipaslampupompa extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->data['title'] = 'Kipas, Lampu dan Pompa';
        $this->load->model('model_control');
    }

    public function index($kipas_id = null, $lampu_id = null, $pompa_id = null)
    {
        $this->data['kipas'] = $this->model_control->getKipas($kipas_id);
        $this->data['lampu'] = $this->model_control->getLampu($lampu_id);
        $this->data['pompa'] = $this->model_control->getPompa($pompa_id);
        $this->render_template('kipaslampupompa', $this->data);
    }

    public function ambilData()
    {
        $data = $this->model_control->getAllData();
        header('Content-Type: application/json');
        echo json_encode($data); 
    }

    public function datatableKp()
    {
        $postData = $this->input->post();

        $data = $this->model_control->getDataKp($postData);

        echo json_encode($data);
    }

    public function datatableLm()
    {
        $postData = $this->input->post();

        $data = $this->model_control->getDataLm($postData);

        echo json_encode($data);
    }

    public function datatablePm()
    {
        $postData = $this->input->post();

        $data = $this->model_control->getDataPm($postData);

        echo json_encode($data);
    }
}
