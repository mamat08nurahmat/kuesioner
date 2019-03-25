<?php
class Penjualan extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Maaf, Anda tidak diperbolehkan masuk tanpa login !');
            redirect('');
        };
        $this->load->model('model_app');
        $this->load->helper('currency_format_helper');
    }

    function index(){
        $data=array(
            'title'=>'Penjualan Produk',
            'active_penjualan'=>'active',
            'data_penjualan'=>$this->model_app->getAllDataPenjualan(),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('pages/v_penjualan');
        $this->load->view('element/v_footer');

        $this->session->unset_userdata('limit_add_cart');
        $this->cart->destroy();
    }

//    GET DATA
    function pages_tambah_penjualan(){
        $data=array(
            'title'=>'Tambah Penjualan Barang',
            'active_penjualan'=>'active',
            'kd_penjualan'=>$this->model_app->getKodePenjualan(),
            'data_produk'=>$this->model_app->getProdukJual(),
            'data_store'=>$this->model_app->getAllData('store'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('pages/v_add_penjualan');
        $this->load->view('element/v_footer');
    }

    function detail_penjualan(){
        $id= $this->uri->segment(3);
        $data=array(
            'title'=>'Detail Penjualan Produk',
            'active_penjualan'=>'active',
            'dt_penjualan'=>$this->model_app->getDataPenjualan($id),
            'produk_jual'=>$this->model_app->getProdukPenjualan($id),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('pages/v_detail_penjualan');
        $this->load->view('element/v_footer');
    }

    function get_detail_produk(){
        $id['kd_produk']=$this->input->post('kd_produk');
        $data=array(
            'detail_produk'=>$this->model_app->getSelectedData('produk',$id)->result(),
        );
        $this->load->view('pages/ajax_detail_produk',$data);
    }

    function get_detail_store(){
        $id['kd_store']=$this->input->post('kd_store');
        $data=array(
            'detail_store'=>$this->model_app->getSelectedData('store',$id)->result(),
        );
        $this->load->view('pages/ajax_detail_store',$data);
    }

//    INSERT DATA
    function tambah_penjualan_to_cart(){
        $data = array(
            'id'    => $this->input->post('kd_produk'),
            'qty'   => $this->input->post('qty'),
            'price' => $this->input->post('harga'),
            'name'  => $this->input->post('nm_produk'),
        );
        $this->cart->insert($data);
        redirect('penjualan/pages_tambah_penjualan');
    }

    function simpan_penjualan(){
        $data = array(
            'kd_penjualan'=>$this->input->post('kd_penjualan'),
            'kd_store'=>$this->input->post('kd_store'),
            'total_harga'=>$this->input->post('total_harga'),
            'tanggal_penjualan'=>date("Y-m-d",strtotime($this->input->post('tanggal_penjualan'))),
            'kd_user'=>$this->session->userdata('ID'),
            'buyer'=>$this->input->post('buyer'),
            'alamat_buyer'=>$this->input->post('alamat_buyer'),
        );
        $this->model_app->insertData("penjualan_header",$data);

        foreach($this->cart->contents() as $items){
            $kd_produk = $items['id'];
            $qty = $items['qty'];
            $data_detail = array(
                'kd_penjualan' => $this->input->post('kd_penjualan'),
                'kd_produk'=> $kd_produk,
                'qty'=>$qty,
            );
            $this->model_app->insertData("penjualan_detail",$data_detail);

            $update['stok'] = $this->model_app->getKurangStok($kd_produk,$qty);
            $key['kd_produk'] = $kd_produk;
            $this->model_app->updateData("produk",$update,$key);
        }
        $this->session->unset_userdata('limit_add_cart');
        $this->cart->destroy();
        redirect('penjualan');
    }


//    DELETE
    function hapus_produk(){
        $id= $this->uri->segment(3);
        $bc=$this->model_app->getSelectedData("penjualan_header",$id);
        foreach($bc->result() as $dph){
            $sess_data['kd_penjualan'] = $dph->kd_penjualan;
            $this->session->set_userdata($sess_data);
        }

        $kode = explode("/",$_GET['kode']);
        if($kode[0]=="tambah")
        {
            $data = array(
                'rowid' => $kode[1],
                'qty'   => 0
            );
            $this->cart->update($data);
        }
        else if($kode[0]=="edit")
        {
            $data = array(
                'rowid' => $kode[1],
                'qty'   => 0
            );
            $this->cart->update($data);
            $hps['kd_penjualan'] = $kode[2];
            $hps['kd_produk'] = $kode[3];
            $this->model_app->deleteData("penjualan_detail",$hps);

            $key_produk['kd_produk'] = $hps['kd_produk'];
            $d_u['stok'] = $kode[4]+$kode[5];
            $this->model_app->updateData("produk",$d_u,$key_produk);
        }
        redirect('penjualan/pages_edit/'.$this->session->userdata('kd_penjualan'));
    }

    function hapus(){
        $hapus['kd_penjualan'] = $this->uri->segment(3);
        $q = $this->model_app->getSelectedData("penjualan_detail",$hapus);
        foreach($q->result() as $d){
            $d_u['stok'] = $this->model_app->getTambahStok($d->kd_produk,$d->qty);
            $key['kd_produk'] = $d->kd_produk;
            $this->model_app->updateData("produk",$d_u,$key);
        }
        $this->model_app->deleteData("penjualan_header",$hapus);
        $this->model_app->deleteData("penjualan_detail",$hapus);
        redirect('penjualan');
    }
}
