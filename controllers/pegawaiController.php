<?php
require_once '../koneksi.php';
require_once '../models/Pegawai.php';

//1.tangkap request element form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$email  = $_POST['email'];
$agama = $_POST['agama'];
$iddivisi = $_POST['divisi'];
$foto   = $_POST['foto'];

$tombol = $_POST['proses'];

//2. menyimpan data di atas dalam sebuah array
$data = [
    $nip,
    $nama,
    $email,
    $agama,
    $iddivisi,
    $foto,
];

//3. proses
$obj = new pegawai();
switch ($tombol){
    case 'simpan':
        $obj->simpan($data);
    break;
    case 'edit';
        $data[] = $_POST['idx']; //tangkap hidden field
        $obj->edit($data);
    break;
    case 'hapus';
        $id[] = $_POST['idx'];
        $obj->hapus($id);
    break;
    default://tombol batal
    header('Location:http://localhost/UTS/index.php?hal=dataPegawai');
}

//4. landing page
header('Location:http://localhost/UTS/index.php?hal=dataPegawai');
