<form>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Form Registrasi IT Club Data science</h1>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">Nim</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="jk_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="ps" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <input id="ps" name="ps" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill web dan Programming</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="swdp" id="swdp_0" type="checkbox" class="custom-control-input" value="HTML"> 
        <label for="swdp_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="swdp" id="swdp_1" type="checkbox" class="custom-control-input" value="CSS"> 
        <label for="swdp_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="swdp" id="swdp_2" type="checkbox" class="custom-control-input" value="Javascript"> 
        <label for="swdp_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="swdp" id="swdp_3" type="checkbox" class="custom-control-input" value="RWD boostrap"> 
        <label for="swdp_3" class="custom-control-label">RWD boostrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="swdp" id="swdp_4" type="checkbox" class="custom-control-input" value="PHP"> 
        <label for="swdp_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="swdp" id="swdp_5" type="checkbox" class="custom-control-input" value="Phyton"> 
        <label for="swdp_5" class="custom-control-label">Phyton</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="swdp" id="swdp_6" type="checkbox" class="custom-control-input" value="Java"> 
        <label for="swdp_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="td" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <input id="td" name="td" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$ps = $_POST['ps'];
$swdp = $_POST['swdp'];
$td = $_POST['td'];
$email = $_POST['email'];

//cetak

echo "<h2>Informasi yang Anda Kirim:</h2>";
echo "Nim: $nim <br>";
echo "Nama: $nama <br>";
echo "Jenis Kelamin: $jk <br>";
echo "Program Sudi: $ps <br>";
echo "Skill web dan Programing:";
foreach ($swdp as $value){
    echo "$value ,";
}
echo "<br>";
echo "Tempat Domisili: $td <br>";
echo "Email: $email";

?>