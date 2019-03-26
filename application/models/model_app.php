<?php
class Model_app extends CI_Model{
    function __construct(){
    parent::__construct();
    }

    //  ================= AUTOMATIC CODE ==================

    //    KODE kuesioner
    public function getKodeKuesioner()
    {
        $q = $this->db->query("select MAX(RIGHT(kd_kuesioner,3)) as kd_max from kuesioner");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "K-".$kd;
    }

    //    KODE Quiz
    public function getKodeQuiz()
    {
        $q = $this->db->query("select MAX(RIGHT(kd_quiz,3)) as kd_max from quiz");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "Q-".$kd;
    }
	
    //    KODE Hadiah
    public function getKodehadiah()
    {
        $q = $this->db->query("select MAX(RIGHT(kd_hadiah,3)) as kd_max from hadiah");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "H-".$kd;
    }
	
	
    public function getKurangStokHadiah($kd_hadiah)
    {
        $q = $this->db->query("select stok from hadiah where kd_hadiah='".$kd_hadiah."'");
        $stok = "";
        foreach($q->result() as $d)
        {
            $stok = $d->stok - 1;
        }
		$data = array('stok' =>$stok);
		$field_key = array('kd_hadiah' =>$kd_hadiah);
		
		 
        return $this->db->update('hadiah',$data,$field_key);
		
    }	
	
	
    //    KODE PENJUALAN
    public function getKodePenjualan()
    {
        $q = $this->db->query("select MAX(RIGHT(kd_penjualan,3)) as kd_max from penjualan_header");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "O-".$kd;
    }

    //    KODE PRODUK
    function getKodeProduk(){
        $q = $this->db->query("select MAX(RIGHT(kd_produk,3)) as kd_max from produk");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "B-".$kd;
    }

    //    KODE STORE
    public function getKodeStore(){
        $q = $this->db->query("select MAX(RIGHT(kd_store,3)) as kd_max from store");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "P-".$kd;
    }

    //    KODE USER
    public function getKodeUser(){
        $q = $this->db->query("select MAX(RIGHT(kd_user,3)) as kd_max from users");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "K-".$kd;
    }

    public function getTambahStok($kd_produk,$tambah)
    {
        $q = $this->db->query("select stok from produk where kd_produk='".$kd_produk."'");
        $stok = "";
        foreach($q->result() as $d)
        {
            $stok = $d->stok + $tambah;
        }
        return $stok;
    }
    public function getKurangStok($kd_produk,$kurangi)
    {
        $q = $this->db->query("select stok from produk where kd_produk='".$kd_produk."'");
        $stok = "";
        foreach($q->result() as $d)
        {
            $stok = $d->stok - $kurangi;
        }
        return $stok;
    }
    public function getKembalikanStok($kd_produk)
    {
        $q = $this->db->query("select stok from produk where kd_produk='".$kd_produk."'");
        $stok = "";
        foreach($q->result() as $d)
        {
            $stok = $d->stok;
        }
        return $stok;
    }
//-------------------------------------------------------------------
    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function manualQuery($q)
    {
        return $this->db->query($q);
    }
//-------------------------------------------------------------------

    function getProdukJual(){
        return $this->db->query ("SELECT * from produk where stok > 0")->result();
    }

    function getAllDataPenjualan(){
        return $this->db->query("SELECT
                a.kd_penjualan,
                a.tanggal_penjualan,
                a.total_harga,
			    (select count(kd_penjualan) as jum from penjualan_detail where kd_penjualan=a.kd_penjualan) as jumlah
			    from penjualan_header a
			    ORDER BY a.kd_penjualan DESC
		")->result();
    }

    function getDataPenjualan($id){
        return $this->db->query("SELECT * from penjualan_header a
                left join store b on a.kd_store=b.kd_store
                left join users c on a.kd_user=c.kd_user
                where a.kd_penjualan = '$id'")->result();
    }

    function getProdukPenjualan($id){
        return $this->db->query("
                select a.kd_produk,a.qty,b.nm_produk,b.harga
                from penjualan_detail a
                left join produk b on a.kd_produk=b.kd_produk
                where a.kd_penjualan = '$id'")->result();
    }

    function getLapPenjualan($tgl_awal,$tgl_akhir){
        return $this->db->query("SELECT *,sum(a.total_harga) as total_all from penjualan_header a
                left join store b on a.kd_store=b.kd_store
                left join users c on a.kd_user=c.kd_user
                where a.tanggal_penjualan between '$tgl_awal' and '$tgl_akhir'
                ")->result();
    }

    function login($email, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }

}