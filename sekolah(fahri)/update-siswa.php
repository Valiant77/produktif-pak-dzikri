<?php

//include bla bla you know the drill
include('koneksi.php');

//get data
$id_siswa = $_POST['id_siswa'];
$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

//query
$query = "UPDATE tbl_siswa SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', alamat = '$alamat' WHERE id_siswa = '$id_siswa'";

//cek kondisi
if ($connection->query($query)) {
    header("location: index.php");
}
else {
    echo "Data gagal diperbarui...";
}
?>