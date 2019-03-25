<?php
class Cetak extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Maaf, Anda tidak diperbolehkan masuk tanpa login !');
            redirect('');
        };
        $this->load->model('model_app');
        $this->load->helper('currency_format_helper');
    }

    function print_penjualan(){
        $id=$this->uri->segment(3);
        $data=array(
            'title'=>'Penjualan',
            'dt_contact'=>$this->model_app->getAllData('contact'),
            'dt_penjualan'=>$this->model_app->getDataPenjualan($id),
            'produk_jual'=>$this->model_app->getProdukPenjualan($id),
        );
        $this->load->view('pages/v_print_penjualan',$data);
    }

}