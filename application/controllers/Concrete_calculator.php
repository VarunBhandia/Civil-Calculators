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
        $width = $this->input->post('width');
        $hieght = $this->input->post('hieght');
        $length_unit = $this->input->post('length_unit');
        $width_unit = $this->input->post('width_unit');
        $hieght_unit = $this->input->post('hieght_unit');
        $qty = $this->input->post('qty');
        $A = $this->input->post('a');
        $B = $this->input->post('b');
        $C = $this->input->post('c');
        
        if($length_unit == 'f'){$length = $length*0.3;}
        if($width_unit == 'f'){$width = $width*0.3;}
        if($hieght_unit == 'f'){$hieght = $hieght*0.3;}
        
        $concrete_req = round($length * $width * $hieght * $qty,2);
        $cement = round($concrete_req *1.54*($A/($A+$B+$C))*(1440/50),2);
        $fine_agg = round($concrete_req *1.54*($B/($A+$B+$C)),2);
        $course_agg = round($concrete_req *1.54*($C/($A+$B+$C)),2);

        $data = array(
            'length' => $length,
            'width' => $width,
            'hieght' => $hieght,
            'qty' => $qty,
            'a' => $A,
            'b' => $B,
            'c' => $C,
            'concrete_req' => $concrete_req,
            'cement' => $cement,
            'fine_agg' => $fine_agg,
            'course_agg' => $course_agg
        );

        $this->$model->insert($data,$this->table);


        if ($concrete_req != false) {
            $data['concrete_req'] = $concrete_req;
            $data['cement'] = $cement;
            $data['fine_agg'] = $fine_agg;
            $data['course_agg'] = $course_agg;
        } else {
            $data['result_slab'] = "No result !";
        }
        $this->load->view('Concrete/index',$data);
    }

    public function insert_hole()
    {
        $model = $this->model;
        $creationdate = date('Y-m-d H:i:s');       
        $diameter = $this->input->post('diameter');
        $hieght = $this->input->post('hieght');
        $diameter_unit = $this->input->post('diameter_unit');
        $hieght_unit = $this->input->post('hieght_unit');
        $qty = $this->input->post('qty');
        $A = $this->input->post('a');
        $B = $this->input->post('b');
        $C = $this->input->post('c');
        
        if($diameter_unit == 'f'){$diameter = $length*0.3;}
        if($hieght_unit == 'f'){$hieght = $hieght*0.3;}
        
        $concrete_req_hole = round($qty*((3.14*$diameter*$diameter*$hieght)/4),2);
        $cement = round($concrete_req_hole *1.54*($A/($A+$B+$C))*(1440/50),2);
        $fine_agg = round($concrete_req_hole *1.54*($B/($A+$B+$C)),2);
        $course_agg = round($concrete_req_hole *1.54*($C/($A+$B+$C)),2);

        $data = array(
            'diameter' => $diameter,
            'hieght' => $hieght,
            'qty' => $qty,
            'a' => $A,
            'b' => $B,
            'c' => $C,
            'concrete_req_hole' => $concrete_req_hole,
            'cement' => $cement,
            'fine_agg' => $fine_agg,
            'course_agg' => $course_agg
        );

        $this->$model->insert($data,'hole');


        if ($concrete_req_hole != false) {
            $data['concrete_req_hole'] = $concrete_req_hole;
            $data['cement'] = $cement;
            $data['fine_agg'] = $fine_agg;
            $data['course_agg'] = $course_agg;
        } else {
            $data['result_hole'] = "No result !";
        }
        $this->load->view('Concrete/index',$data);
    }

    public function slab_calc_pdf()
    { 
        $this->load->library('Pdf');
        $this->load->view('Concrete/slab_calc_pdf');
    }

    public function hole_calc_pdf()
    { 
        $this->load->library('Pdf');
        $this->load->view('Concrete/hole_calc_pdf');
    }
}
?>
