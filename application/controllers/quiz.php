<?php
class Quiz extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Maaf, Anda tidak diperbolehkan masuk tanpa login !');
            redirect('login');
        };
/*
*/		
        $this->load->model('model_app');
//        $this->load->helper('currency_format_helper');
    }

    function index(){
		
		
//print_r($this->model_app->getKodeQuiz());die();
		
        $data=array(
            'title'=>'Quiz',
            //'active_quiz'=>'active',
			'kd_quiz'=>$this->model_app->getKodeQuiz(),
            //'data_penjualan'=>$this->model_app->getAllDataPenjualan(),
        );
		$data['data_hadiah'] = $this->db->query("SELECT * FROM hadiah WHERE stok >0")->result();
		
//        $this->load->view('element/v_header_public',$data);
        $this->load->view('pages/v_quiz_public',$data);
  //      $this->load->view('element/v_footer_public');

//        $this->session->unset_userdata('limit_add_cart');
//        $this->cart->destroy();
    }

	function submit(){
//$kd_hadiah ='H-001';	
//print_r($this->model_app->getKurangStokHadiah($kd_hadiah));die();		
		
//print_r($_POST);		
//print_r('submittttttttttt');die();		
//$kd_quiz = $this->input->post('kd_user');
//$kd_hadiah = $this->input->post('kd_hadiah');

	        $data = array(
            'kd_quiz'    => $this->input->post('kd_quiz'),
            'kd_user'   =>$_SESSION['ID'], //$this->input->post('kd_user'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'no_telpon'  => $this->input->post('no_telpon'),
        'q1'  => $this->input->post('q1'),
        'q1lainnya'  => $this->input->post('q1lainnya'),
        'q2'  => $this->input->post('q2'),
        'q2lainnya'  => $this->input->post('q2lainnya'),
        'q3'  => $this->input->post('q3'),
        'q3lainnya'  => $this->input->post('q3lainnya'),
        'tanggal_quiz'  =>  date("Y-m-d H:i:s"), //date("Y-m-d"),
        'kd_hadiah'  => $this->input->post('kd_hadiah'),
        );
        $this->model_app->insertData('quiz',$data);
        $this->model_app->getKurangStokHadiah($this->input->post('kd_hadiah'));
		
        redirect("/quiz/quiz_list");
//        redirect("quiz/draw/".$kd_quiz);
///!!!!!!!!!!!!!!!! kurang stok hadiah
	
	}


	function quiz_list(){
		
		$kd_user = $_SESSION['ID'];
// 		print_r($kd_user);die();
		
		if($kd_user=='K-001'){
		$where = "";
		}else{
		$where = "WHERE q.kd_user='$kd_user'";			
		}
		
        $data=array(
            'title'=>'Data list Quiz',
            'active_penjualan'=>'active',
			
            'data_quiz'=>$this->db->query("
			SELECT 
			q.tanggal_quiz,q.nama_lengkap,h.nama_hadiah,u.nama 
			FROM quiz q
			INNER JOIN hadiah h ON q.kd_hadiah=h.kd_hadiah
			INNER JOIN users u ON q.kd_user=u.kd_user 
			".$where."
			ORDER BY q.tanggal_quiz DESC
			")->result()			
//            'data_penjualan'=>$this->model_app->getAllDataPenjualan(),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('pages/v_quiz_list');
        $this->load->view('element/v_footer');


		
	}
	
	
	
	
    function draw($kode_quiz){
		
        $data['kode_quiz'] = $this->uri->segment(3);
		        
		$data['data_hadiah'] = $this->db->query("SELECT * FROM hadiah WHERE stok >0")->result();
				
		//$data['data_hadiah'] = $this->get_hadiah();
		
//		print_r($data);die();
		
		
$this->load->view('pages/v_quiz_draw',$data);		
		
    }
	

    function get_hadiah(){
		
        $q = $this->db->query("SELECT * FROM hadiah")->result();

echo json_encode($q);		
		//print_r($kode_quiz);die();
		
    }
	
	function draw1(){
		
$this->load->view('pages/v_draw');		
		
		
	}
	
	function form(){
		
		$this->load->view('v_form');
		
	}
	
	function tes_submit(){
		
print_r($_POST);die();		
		
	}
	
	
		function tes(){
		
$this->load->view('v_tes');		
		
		
	}

	
}
