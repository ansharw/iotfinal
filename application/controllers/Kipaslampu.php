<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kipaslampu extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->data['title'] = 'Fan and Lamp';
    }

    public function index()
    {
        $this->render_template('kipaslampu', $this->data);
    }
}
