<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>INACRAFT 2019</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      
      
<!----------->      
<form class="form-horizontal" method="POST" action="<?=site_url('quiz/tes_submit')?>">
<fieldset>

<!-- Form Name -->
<legend><h3>Form Kuesioner</h3></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nama">Nama</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="Nama" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="umur">Umur</label>  
  <div class="col-md-4">
  <input id="umur" name="umur" type="text" placeholder="Umur" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="jenis_kelamin">Jenis Kelamin</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="jenis_kelamin-0">
      <input type="radio" name="jenis_kelamin" id="jenis_kelamin-0" value="L" checked="checked">
      Laki-laki
    </label> 
    <label class="radio-inline" for="jenis_kelamin-1">
      <input type="radio" name="jenis_kelamin" id="jenis_kelamin-1" value="P">
      Perempuan
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="pekerjaan">Pekerjaan</label>
  <div class="col-md-4">
    <select id="pekerjaan" name="pekerjaan" class="form-control">
      <option value="1">TNI/POLRI</option>
      <option value="2">BUMN</option>
      <option value="3">Swasta\Pengusaha/Wiraswasta</option>
      <option value="4">Pelajar/Mahasiswa</option>
      <option value="5">Profesional</option>
      <option value="6">Ibu Rumah Tangga</option>
      <option value="7">Pensiunan</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="no_telpon">Nomer Telpon</label>  
  <div class="col-md-4">
  <input id="no_telpon" name="no_telpon" type="text" placeholder="Nomer Telpon" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="bersedia"></label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="bersedia-0">
      <input type="checkbox" name="bersedia" id="bersedia-0" value="1">
      Bersedia dihubungi dikemudian hari
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Alamat Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="domisili">Domisili</label>  
  <div class="col-md-4">
  <input id="domisili" name="domisili" type="text" placeholder="Domisili" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="penghasilan">Penghasilan</label>
  <div class="col-md-4">
    <select id="penghasilan" name="penghasilan" class="form-control">
      <option value="1">&lt; Rp. 3.000.000</option>
      <option value="2">Rp. 3.000.000 - Rp. 5.000.000</option>
      <option value="3">Rp. 5.000.000 - Rp. 10.000.000</option>
      <option value="4">Rp. 10.000.000 - Rp. 25.000.000</option>
      <option value="5">&gt; Rp. 25.000.001</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="bank">Bank Utama Yang Digunakan</label>
  <div class="col-md-4">
    <select id="bank" name="bank" class="form-control">
      <option value="1">BNI</option>
      <option value="2">BCA</option>
      <option value="3">Mandiri</option>
      <option value="4">BRI</option>
      <option value="5">BPD</option>
      <option value="6">Niaga</option>
      <option value="7">Mega</option>
      <option value="8">Lainnya</option>
    </select>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="produk_dimiliki">Produk Yang Dimiliki Di bank Utama</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="produk_dimiliki-0">
      <input type="checkbox" name="produk_dimiliki" id="produk_dimiliki-0" value="1">
      Tabungan
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_dimiliki-1">
      <input type="checkbox" name="produk_dimiliki" id="produk_dimiliki-1" value="2">
      Giro
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_dimiliki-2">
      <input type="checkbox" name="produk_dimiliki" id="produk_dimiliki-2" value="3">
      Deposit
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_dimiliki-3">
      <input type="checkbox" name="produk_dimiliki" id="produk_dimiliki-3" value="4">
      Kartu Kredit
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_dimiliki-4">
      <input type="checkbox" name="produk_dimiliki" id="produk_dimiliki-4" value="5">
      KPR
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_dimiliki-5">
      <input type="checkbox" name="produk_dimiliki" id="produk_dimiliki-5" value="6">
      KTA
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_dimiliki-6">
      <input type="checkbox" name="produk_dimiliki" id="produk_dimiliki-6" value="7">
      Investasi
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_dimiliki-7">
      <input type="checkbox" name="produk_dimiliki" id="produk_dimiliki-7" value="8">
      Asuransi
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_dimiliki-8">
      <input type="checkbox" name="produk_dimiliki" id="produk_dimiliki-8" value="9">
      Modal Usaha
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_dimiliki-9">
      <input type="checkbox" name="produk_dimiliki" id="produk_dimiliki-9" value="10">
      Lainnya
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="isproduk_bni">Apakah Memiliki Produk BNI</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="isproduk_bni-0">
      <input type="radio" name="isproduk_bni" id="isproduk_bni-0" value="1" checked="checked">
      Ya
    </label> 
    <label class="radio-inline" for="isproduk_bni-1">
      <input type="radio" name="isproduk_bni" id="isproduk_bni-1" value="0">
      Tidak
    </label>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="produk_bni">Produk yang Dimiliki Di BNI</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="produk_bni-0">
      <input type="checkbox" name="produk_bni" id="produk_bni-0" value="1">
      Tabungan
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_bni-1">
      <input type="checkbox" name="produk_bni" id="produk_bni-1" value="2">
      Giro
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_bni-2">
      <input type="checkbox" name="produk_bni" id="produk_bni-2" value="3">
      Deposit
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_bni-3">
      <input type="checkbox" name="produk_bni" id="produk_bni-3" value="4">
      Kartu Kredit
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_bni-4">
      <input type="checkbox" name="produk_bni" id="produk_bni-4" value="5">
      KPR
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_bni-5">
      <input type="checkbox" name="produk_bni" id="produk_bni-5" value="6">
      KTA
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_bni-6">
      <input type="checkbox" name="produk_bni" id="produk_bni-6" value="7">
      Investasi
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_bni-7">
      <input type="checkbox" name="produk_bni" id="produk_bni-7" value="8">
      Asuransi
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_bni-8">
      <input type="checkbox" name="produk_bni" id="produk_bni-8" value="9">
      Modal Usaha
    </label>
	</div>
  <div class="checkbox">
    <label for="produk_bni-9">
      <input type="checkbox" name="produk_bni" id="produk_bni-9" value="10">
      Lainnya
    </label>
	</div>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="target">Target / Rencana Di Masa Depan (Pilih Berdasarkan Prioritas)</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="target-0">
      <input type="checkbox" name="target" id="target-0" value="1">
      Sekolah / Kuliah
    </label>
	</div>
  <div class="checkbox">
    <label for="target-1">
      <input type="checkbox" name="target" id="target-1" value="2">
      Menikah
    </label>
	</div>
  <div class="checkbox">
    <label for="target-2">
      <input type="checkbox" name="target" id="target-2" value="3">
      Beli Rumah Baru
    </label>
	</div>
  <div class="checkbox">
    <label for="target-3">
      <input type="checkbox" name="target" id="target-3" value="4">
      Beli Kendaraan Baru
    </label>
	</div>
  <div class="checkbox">
    <label for="target-4">
      <input type="checkbox" name="target" id="target-4" value="5">
      Wisata / Berlibur
    </label>
	</div>
  <div class="checkbox">
    <label for="target-5">
      <input type="checkbox" name="target" id="target-5" value="6">
      Buka Usaha
    </label>
	</div>
  </div>
</div>


<!-- Select submit -->
<div class="form-group">
<label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
<center>  
<button type="submit" class="btn btn-primary">SUBMIT !!</button>
</center>  
  </div>
</div>


</fieldset>
</form>
      
<!----------->      
            
    </div>
  </div>
</div>

</body>
</html>
