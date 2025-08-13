<?php

include("config.php");

// Apakah tombol daftar sudah diklik atau belum
if(isset($_POST['daftar'])){
    // Mengambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // buat query
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // Cek apakah berhasil
    if( $query ) {
        // Kalau berhasil
        header('Location: index.php?status=sukses');
    } else {
        // Kalau gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>