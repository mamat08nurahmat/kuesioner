<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Maaf, Anda tidak diperbolehkan masuk tanpa login !');
            redirect('');
        };
        $this->load->model('model_app');
    }

    function index(){
        $data=array(
            'title'=>'Dashboard',
            'active_dashboard'=>'active',
            'dt_contact'=>$this->model_app->getAllData('contact'),
			'dt_dashboard'=>$this->db->query('
SELECT 
DATE_FORMAT(q.tanggal_quiz, "%d-%m-%Y") as tanggal ,u.nama ,count(q.kd_user) as jumlah 
FROM quiz q
INNER JOIN users u ON q.kd_user=u.kd_user
GROUP BY u.nama
ORDER BY jumlah DESC			
			')->result(),
			
        );
		
		//print_r($data);die();
        $this->load->view('element/v_header',$data);
        $this->load->view('pages/v_dashboard');
        $this->load->view('element/v_footer');
    }

	
	function dev(){
		
		$this->load->view('v_dashboard');
		
	}
}