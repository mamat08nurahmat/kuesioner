<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

input.checkbox {
  padding: 100px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

select {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
select.invalid {
  background-color: #ffdddd;
}




/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
/*=======================================*/
/* Checkbox */
input[type=checkbox] + label {
  display: block;
  margin: 0.2em;
  cursor: pointer;
  padding: 0.2em;
}

input[type=checkbox] {
  display: none;
}

input[type=checkbox] + label:before {
  content: "\2714";
  border: 0.1em solid #000;
  border-radius: 0.2em;
  display: inline-block;
  width: 1em;
  height: 1em;
  padding-left: 0.2em;
  padding-bottom: 0.3em;
  margin-right: 0.2em;
  vertical-align: bottom;
  color: transparent;
  transition: .2s;
}

input[type=checkbox] + label:active:before {
  transform: scale(0);
}

input[type=checkbox]:checked + label:before {
  background-color: MediumSeaGreen;
  border-color: MediumSeaGreen;
  color: #fff;
}

input[type=checkbox]:disabled + label:before {
  transform: scale(1);
  border-color: #aaa;
}

input[type=checkbox]:checked:disabled + label:before {
  transform: scale(1);
  background-color: #bfb;
  border-color: #bfb;
}


/* radio */
[type="radio"]:checked,
[type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
}
[type="radio"]:checked + label,
[type="radio"]:not(:checked) + label
{
    position: relative;
    padding-left: 28px;
    cursor: pointer;
    line-height: 20px;
    display: inline-block;
    color: #666;
}
[type="radio"]:checked + label:before,
[type="radio"]:not(:checked) + label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 18px;
    height: 18px;
    border: 1px solid #ddd;
    border-radius: 100%;
    background: #fff;
}
[type="radio"]:checked + label:after,
[type="radio"]:not(:checked) + label:after {
    content: '';
    width: 12px;
    height: 12px;
    background: MediumSeaGreen;
    position: absolute;
    top: 4px;
    left: 4px;
    border-radius: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
[type="radio"]:not(:checked) + label:after {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
}
[type="radio"]:checked + label:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}

</style>
<body>

<form id="regForm" action="<?=site_url("/quiz/tes_submit")?>" method="POST">
  <h1>Kuesioner:</h1>
  <!-- One "tab" for each step in the form: -->

  <!-- TAB 1 -->
  <div class="tab">

    <p>Nama</p>
    <p><input placeholder="Nama lengkap..." oninput="this.className = ''" name="nama"></p>

    <p>Umur</p>
    <p><input placeholder="Umur..." oninput="this.className = ''" name="umur"></p>

    <p>Jenis Kelamin</p>
    <p>
      <input type="radio" id="L" name="jenis_kelamin" value="L" checked>
      <label for="L">Laki-Laki</label>
    </p>

    <p>
      <input type="radio" id="P" name="jenis_kelamin" value="P">
      <label for="P">perempuan</label>
    </p>

    <p>PEKERJAAN</p>    
    <p>
    <select oninput="this.className = ''" name="pekerjaan">
    <option value="">-PILIH-</option>
    <option value="1">ASN</option>
    <option value="2">TNI/POLRI</option>    
    <option value="3">BUMN</option>
    <option value="4">Swasta/Pengusaha/Wirausaha</option>
    <option value="5">Pelajar/Mahasiswa</option>
    <option value="6">Profesional</option>
    <option value="7">Ibu Rumah tangga</option>
    <option value="8">Pensiunan</option>
    </select>
    </p>

  </div>

  <!-- TAB 2 -->  
  <div class="tab">

    
    <p>No Telpon</p>
    <p><input placeholder="Nomer Telpon" oninput="this.className = ''" name="no_telpon"></p>
 
    <p>-</p>
    <p>    
      <input type="checkbox" id="bersedia" name="bersedia" value="bersedia">
      <label for="bersedia">Bersedia dihubungi dikemudian hari</label>
    </p>

    <p>Alamat Email</p>
    <p><input placeholder="Alamat Email..." oninput="this.className = ''" name="email"></p>

    <p>Domisili</p>
    <p><input placeholder="Domisili..." oninput="this.className = ''" name="domisili"></p>

    <p>Penghasilan</p>    
    <p>
    <select oninput="this.className = ''" name="penghasilan">
    <option value="">-PILIH-</option>
    <option value="1">< Rp.3.000.000</option>
    <option value="2">Rp.3.000.000 - Rp.5.000.000</option>
    <option value="3">Rp.5.000.000 - Rp.10.000.000</option>
    <option value="4">Rp.10.000.000 - Rp.25.000.000</option>
    <option value="5">> Rp.25.000.000 </option>
    </select>
    </p>






  </div>

  <!-- TAB 3 -->  
  <div class="tab">

  <p>Bank Utama Yang Digunakan</p>    
    <p>
    <select oninput="this.className = ''" name="bank_utama">
    <option value="">-PILIH-</option>
    <option value="BNI">BNI</option>
    <option value="BCA">BCA</option>
    <option value="Mandiri">Mandiri</option>
    <option value="BRI">BRI</option>
    <option value="BPD">BPD</option>
    <option value="Niaga">Niaga</option>
    <option value="Mega">Mega</option>
    <option value="Lainnya">Lainnya</option>
    </select>
    </p>

    <p>Produk Yang Dimiliki Di bank Utama</p>
    <p>    
      <input type="checkbox" id="tabungan_utama" name="produk_bank_utama[]" value="tabungan_utama">
      <label for="tabungan_utama">Tabungan</label>
      <input type="checkbox" id="giro_utama" name="produk_bank_utama[]" value="giro_utama">
      <label for="giro_utama">Giro</label>
      <input type="checkbox" id="deposit_utama" name="produk_bank_utama[]" value="deposit_utama">
      <label for="deposit_utama">Deposit</label>
      <input type="checkbox" id="kartu_kredit_utama" name="produk_bank_utama[]" value="kartu_kredit_utama">
      <label for="kartu_kredit_utama">Kartu Kredit</label>
    </p>

  </div>


  <!-- TAB 4 -->  
  <div class="tab">

  <p>Apakah Memiliki Produk BNI</p>
    <p>
      <input type="radio" id="test1" name="produk_bni" value="YA" checked>
      <label for="test1">Ya</label>
    </p>
    <p>
      <input type="radio" id="test2" name="produk_bni" value="TIDAK">
      <label for="test2">Tidak</label>
    </p>


    <p>Produk Yang Dimiliki Di BNI</p>
    <p>    
      <input type="checkbox" id="tabungan_bni" name="produk_bank_bni[]" value="tabungan_bni">
      <label for="tabungan_bni">Tabungan</label>
      <input type="checkbox" id="giro_bni" name="produk_bank_bni[]" value="giro_bni">
      <label for="giro_bni">Giro</label>
      <input type="checkbox" id="deposit_bni" name="produk_bank_bni[]" value="deposit_bni">
      <label for="deposit_bni">Deposit</label>
      <input type="checkbox" id="kartu_kredit_bni" name="produk_bank_bni[]" value="kartu_kredit_bni">
      <label for="kartu_kredit_bni">Kartu Kredit</label>
    </p>

    <p>Target / Rencana Di Masa Depan (Pilih Berdasarkan Prioritas)</p>
    <p>    
      <input type="checkbox" id="sekolah" name="rencana[]" value="sekolah">
      <label for="sekolah">Sekolah/Kuliah</label>
      <input type="checkbox" id="menikah" name="rencana[]" value="menikah">
      <label for="menikah">Menikah</label>
      <input type="checkbox" id="beli_rumah" name="rencana[]" value="beli_rumah">
      <label for="beli_rumah">Beli Rumah Baru</label>
      <input type="checkbox" id="beli_kendaraan" name="rencana[]" value="beli_kendaraan">
      <label for="beli_kendaraan">Beli Kendaraan Baru</label>
      <input type="checkbox" id="wisata" name="rencana[]" value="wisata">
      <label for="wisata">Wisata/Berlibur</label>
      <input type="checkbox" id="buka_usaha" name="rencana[]" value="buka_usaha">
      <label for="buka_usaha">Buka Usaha</label>
    </p>

  </div>


  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
      confirm('Subbmit?');    
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  s = x[currentTab].getElementsByTagName("select");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field INPUT is empty...
    if (y[i].value == "" ) {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
/*
    // If a field SELECT is empty...
    if (s[i].value == "" ) {
      // add an "invalid" class to the field:
      s[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
*/


  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>
