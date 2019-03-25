<?php
class Chart extends CI_Controller{
    function __construct(){
      parent::__construct();
      //load chart_model from model
      $this->load->model('chart_model');
    }

    function index(){
		//print_r('chart');die();
      $data = $this->chart_model->get_data()->result();
		print_r($data);die();
//        $data = $this->db->query("SELECT kd_user,count(kd_quiz) as jumlah FROM quiz GROUP BY kd_user")->result();
      $x['data'] = json_encode($data);
      $this->load->view('chart_view',$x);
    }
}
