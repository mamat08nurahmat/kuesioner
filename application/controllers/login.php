<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
/*
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Maaf, Anda tidak diperbolehkan masuk tanpa login !');
            redirect('login');
        };
*/		
        $this->load->model('model_app');
    }

    function index(){
/*
        $data=array(
            'title'=>'Quiz',
            //'active_quiz'=>'active',
			'kd_quiz'=>$this->model_app->getKodeQuiz(),
            //'data_penjualan'=>$this->model_app->getAllDataPenjualan(),
        );
//        $this->load->view('element/v_header_public',$data);
        $this->load->view('pages/v_quiz_public',$data);		
*/		
        $data=array(
            'title'=>'Login Page'
        );
        $this->load->view('pages/v_login',$data);
    }


    function login(){

        $data=array(
            'title'=>'Login Page'
        );
        $this->load->view('pages/v_login',$data);

    }
	
	
    function cek_login() {
        //Field validation succeeded.  Validate against database
        $npp = $this->input->post('npp');
        $password = $this->input->post('password');
        //query the database
        $result = $this->model_app->login($npp, $password);
// print_r($result);die();        
        if($result) {
            $sess_array = array();
            foreach($result as $row) {
                //create the session
                $sess_array = array(
                    'ID' => $row->kd_user,
                    'NPP' => $row->npp,
                    'PASS'=>$row->password,
                    'NAME'=>$row->nama,
                    'LEVEL' => $row->level,
                    'KD_INSTITUSI' => $row->kd_institusi,
                    'login_status'=>true,
                );
                //set session with value from database
                $this->session->set_userdata($sess_array);
                redirect('dashboard','refresh');
            }
            return TRUE;
        } else {
            //if form validate false
            redirect('dashboard','refresh');
            return FALSE;
        }
    }

	function cek_sesi(){
		print_r($_SESSION);
		
	}
	
    function logout() {
        $this->session->unset_userdata('ID');
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('PASS');
        $this->session->unset_userdata('NAME');
        $this->session->unset_userdata('LEVEL');
        $this->session->unset_userdata('login_status');
        $this->session->set_flashdata('notif','Thank you for using this app');
        redirect('login');
    }
}
