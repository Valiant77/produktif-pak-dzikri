<?php

//include koneksi db
include('koneksi.php');

//get data
$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

//query
$query = "INSERT INTO tbl_siswa (nisn, nama_lengkap, alamat) VALUES ('$nisn', '$nama_lengkap', '$alamat')";

//cek kondisi
if ($connection->query($query)) {
    header("location: index.php");
}
else {
    echo "Data gagal disimpan...";
}
?>