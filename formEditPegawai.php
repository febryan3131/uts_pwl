<?php
require_once 'models/Pegawai.php';
$ar_agama = ['Islam','Hindu','Budha','Katolik','Kristen','Kong hucu'];
$obj = new pegawai();
$rs = $obj->dataagama();
//tangkap request id di url
$id = $_REQUEST['id'];
$edit = $obj->getPegawai($id);
?>

<h3>Form Pegawai</h3>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="controllers/pegawaiController.php">
  <div class="form-group row">
    <label for="nip" class="col-4 col-form-label">NIP</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nip" name="nip" value="<?= $edit['nip'] ?>" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" value="<?= $edit['nama'] ?>" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" value="<?= $edit['email'] ?>" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Agama</label> 
    <div class="col-8">
    <?php
    $no = 0;
    foreach($ar_agama as $agama){
    //edit agama
    $cek = ($edit['agama'] == $agama) ? "checked" : "";
    ?>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="agama" id="agama_<?= $no ?>" type="radio" class="custom-control-input" value="<?= $agama ?>" <?= $cek ?> required="required" > 
        <label for="agama_<?= $no ?>" class="custom-control-label"><?= $agama?></label>
      </div>
    <?php
    $no++;
    } ?>

    </div>
  </div>
  <div class="form-group row">
    <label for="--- Pilih Divisi ---" class="col-4 col-form-label">Divisi</label> 
    <div class="col-8">
      <select id="--- Pilih Divisi ---" name="divisi" required="required" class="custom-select">
        <option value="">-- Pilih Divisi --</option>
        <?php
        foreach($rs as $d){
        //edit divisi
        $sel = ($edit['iddivisi'] == $d['id']) ? "selected" : "";
          ?>
          <option value="<?= $d['id'] ?>"<?= $sel ?>> <?= $d['nama'] ?> </option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="foto" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="foto" name="foto" value="<?= $edit['foto'] ?>" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="hidden" name="idx" value="<?= $id ?>"/>
      <button name="proses" type="submit" value="edit" class="btn btn-primary">Edit</button>
    </div>
  </div>
</form>