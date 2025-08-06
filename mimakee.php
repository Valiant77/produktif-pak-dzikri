<!DOCTYPE html>
<head>
    <html lang="id">
</head>
<body>

<h2>Form Laporan Barang Rusak di Gudang</h2>

<form action="proses-barang-rusak.php" method="post" enctype="multipart/form-data">
  Nama Petugas:<br>
  <input type="text" name="nama_petugas"><br><br>
  ID Barang (SKU/Kode):<br>
  <input type="text" name="id_barang"><br><br>
  Nama Barang:<br>
  <input type="text" name="nama_barang"><br><br>
  Jumlah Barang Rusak:<br>
  <input type="number" name="jumlah_rusak"><br><br>
  Tanggal Ditemukan Rusak:<br>
  <input type="date" name="tanggal"><br><br>
  Lokasi Gudang:<br>
  <input type="text" name="lokasi_gudang"><br><br>
  Penyebab Kerusakan:<br>
  <input type="text" name="penyebab"><br><br>
  
  <input type="submit" value="Kirim Laporan">
</form>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_petugas = $_POST["nama_petugas"];
    $id_barang = $_POST["id_barang"];
    $nama_barang = $_POST["nama_barang"];
    $jumlah_rusak = $_POST["jumlah_rusak"];
    $tanggal = $_POST["tanggal"];
    $lokasi_gudang = $_POST["lokasi_gudang"];
    $penyebab = $_POST["penyebab"];


    echo "<h2>Data Laporan Anda:</h2>";
    echo "Nama Petugas: " . $nama_petugas . "<br>";
    echo "ID Barang: " . $id_barang . "<br>";
    echo "Nama Barang: " . $nama_barang . "<br>";
    echo "Jumlah Rusak: " . $jumlah_rusak . "<br>";
    echo "Tanggal Ditemukan Rusak: " . $tanggal . "<br>";
    echo "Lokasi Gudang: " . $lokasi_gudang . "<br>";
    echo "Penyebab Kerusakan: " . $penyebab . "<br>";



    echo "<p>Baik, laporan Anda sudah kami terima. Kami akan memproses laporan ini dan menghubungi Anda dalam <strong>1x24 jam</strong>.</p>";
}
?>

<br>
<a href="form-barang-rusak.html">Laporkan Lagi</a>


