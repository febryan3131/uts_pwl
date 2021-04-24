<?php
class Pegawai{
    //member1 var
    private $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        //mengglobalkan variabel $dbh yang berada di koneksi.php
        global $dbh;
        //kemudian isi dari $dbh akan dijadikan isi dari variabel private $koneksi dengan kode dibawah.
        $this->koneksi = $dbh;
    }
    //member3 method CRUD
    public function dataPegawai(){
        $sql = "SELECT pegawai.*, divisi.nama AS divisi FROM pegawai INNER JOIN divisi ON divisi.id = pegawai.iddivisi";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getPegawai($id){
        $sql = "SELECT pegawai.*, divisi.nama AS divisi FROM pegawai INNER JOIN divisi ON divisi.id = pegawai.iddivisi WHERE pegawai.id = ?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function dataAgama(){
        $sql = "SELECT * FROM divisi";
        //fungsi query, eksekusi query dan ambil datanya
        $rs = $this->koneksi->query($sql);
        return $rs;
    }
    public function simpan($data){
        $sql = "INSERT INTO pegawai(nip,nama,email,agama,iddivisi,foto) values (?,?,?,?,?,?)";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function edit($data){
        $sql = "UPDATE pegawai SET nip=?,nama=?,email=?,agama=?,iddivisi=?,foto=? WHERE id=?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id){
        $sql = "DELETE FROM pegawai WHERE id=?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($id);
    }
}