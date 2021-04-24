<?php
require_once 'models/Pegawai.php';
//tangkap req id di url
$id = $_REQUEST['id'];
$obj = new Pegawai();
$rs = $obj->getPegawai($id);
//print_r($rs); exit();
?>

<div class="card" style="width: 18rem; margin-top:20px; left:35%">
    <?php
    $gambar = (!empty($rs['foto'])) ? $rs['foto'] : "no_image.png";
    ?>
  <img src="image/<?= $gambar ?>" width="40%" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?= $rs['nama'] ?></h5>
    <p class="card-text">
        NIP : <?= $rs['nip'] ?>
        <br>Email : <?= $rs['email'] ?>
        <br>Agama : <?= $rs['agama'] ?>
        <br>Divisi : <?= $rs['divisi'] ?>
    </p>
    <a href="index.php?hal=dataPegawai" class="btn btn-primary">Kembali</a>
  </div>
</div>