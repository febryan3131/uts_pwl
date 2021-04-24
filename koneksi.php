<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=dbpegawai;host=localhost';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // $dbh->setAttribute(PDO::MSYQL_ATTR_USE_BUFFERED_QUERY,TRUE);
    //echo 'Koneksi Berhasil';
}
catch( PDOException $e ) {
    echo 'Gagal Koneksi DB karena '.$e->getMessage();
}

?>