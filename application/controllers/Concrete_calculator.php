<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Concrete_calculator extends CI_Controller
{
    public $table = 'slabs';
    public $controller = 'Concrete_calculator';
    public $message = 'Calculators';
    public $primary_id = "id";
    public $model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
        $this->model = 'Model';
        date_default_timezone_set('Asia/Kolkata');
    }

    public function index()
    {
        $model = $this->model;
        $data['controller'] = $this->controller;
        $this->load->view('Concrete/index');
    }

    public function insert_slab()
    {
        $model = $this->model;
        $creationdate = date('Y-m-d H:i:s');       
        $length = $this->input->post('length');
        $data = array(
            'length' => $length
        );

        $this->$model->insert($data,$this->table);

        $this->session->set_flashdata('add_message','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>Added Successfully!</div>');

        redirect('Concrete_calculator');
    }

}
?>
