<!DOCTYPE html>
<head>
    <html lang="id">
</head>
<body>
    <form action="perpusrev.php" method="post">
        <h1>From buku baru</h1>
            <label>kode buku:</labael>
            <input type="text" name="kodebuku"> <br><br>
            <label>nama buku: </label>
            <input type="text" name="namabuku"> <br><br>
            <label>penerbit buku: </label>
            <input type="text" name="penerbitbuku"> <br><br>
            <label>pengarang buku: </label>
            <input type="text" name="pengarangbuku"> <br><br>
            <label>tahuhn terbit: </label>
            <input type="text" name="tahunterbit"> <br><br>
            <lebel>jenis buku: </label>
            <input type="text" name="jenisbuku"> <br><br>
            <label>jumlah buku: </label>
            <input type="text" name="jumlahbuku"> <br><br>
            <label>cover buku:</label>
            <input type="file" name="coverbuku"> <br><br>

             <input type="submit" value="Kirim">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $kode_buku = $_POST["kodebuku"];
   $nama_buku = $_POST["namabuku"];
   $penerbit_buku = $_POST["penerbitbuku"];
   $pengarang_buku = $_POST["pengarangbuku"];
   $tahun_terbit = $_POST["tahunterbit"];
   $jenis_buku= $_POST["jenisbuku"];
   $jumlah_buku = $_POST["jumlahbuku"];
   $cover_buku = $_POST["coverbuku"];

    
    echo "<h2>Data buku baru</h2>";
    echo "kode buku: $kode_buku<br>";
    echo "nama buku: $nama_buku<br>";
    echo "penerbit buku: $penerbit_buku<br>";
    echo "pengarang buku: $pengarang_buku<br>";
    echo "tahun terbit $tahun_terbit<br>";
    echo "jenis buku: $jenis_buku<br>";
    echo "jumlah buku: $jumlah_buku<br>";
    if ($cover_buku) {
        echo "Cover Buku: <strong>$cover_buku</strong><br>";
    }

}
?>
<h3>Daftar Buku di Perpustakaan</h3>
<table border="1" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Sampul</th>
        <th>kode buku</th>
        <th>nama  buku</th>
        <th>penerbit buku</th>
        <th>pengarang buku</th>
        <th>Tahun Terbit</th>
        <th>Jenis Buku</th>
        <th>Jumlah Buku</th>
        <th>cover buku</th>
    </tr>
    <tr>
        <td>1</td>
        <td><img src="the.jpg" alt="ust.muhammad baidhowi as'ad" width="60"></td>
        <td>9786321015969</td>
        <td>the winning mindset</td>
        <td>metamedia </td>
        <td>maha dewa</td>
        <td>1 agustus 2024</td>
        <td>non fiksi</td>
        <td>1</td>
        <td>the.jpg</td>
    </tr>
</table>
