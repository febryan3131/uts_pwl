<?php
require_once 'models/Pegawai.php';
//ciptakan objek dari class pegawai
$obj = new Pegawai();
//panggil method tampilkan data
$rs = $obj->dataPegawai();
?>
<h3>Data Pegawai</h3>
<?php
if (isset($member)){                       
?>
<a href="index.php?hal=formPegawai" class="btn btn-primary">Tambah</a>
<?php } ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIP</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Agama</th>
      <th scope="col">Divisi</th>
      <th scope="col">Foto</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $no = 1;
  foreach($rs as $pgwi){
  ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $pgwi['nip']; ?></td>
      <td><?= $pgwi['nama']; ?></td>
      <td><?= $pgwi['email']; ?></td>
      <td><?= $pgwi['agama']; ?></td>
      <td><?= $pgwi['divisi']; ?></td>
      <td><?= $pgwi['foto']; ?></td>
      <td>
      <form method="POST" action="controllers/pegawaiController.php">
      <a href="index.php?hal=detailPegawai&id=<?= $pgwi['id']; ?>" class="btn btn-info">Detail</a>
      <?php
      if(isset($member)){
      $role = $member['role']; 
      }
      if ($role == 'admin' || $role == 'manager'){                       
      ?>
      <a href="index.php?hal=formEditPegawai&id=<?= $pgwi['id']; ?>" class="btn btn-warning">Edit</a>

      <button name="proses" value="hapus" onclick="return confirm('Yakin Ingin diHapus?')" class="btn btn-danger">Hapus</button>
      
      <input type="hidden" name="idx" value="<?= $pgwi['id']; ?>"/>
      <?php } ?>
      </form>
      </td>
    </tr>
    <?php
    $no++;
    }
    ?>
  </tbody>
</table>