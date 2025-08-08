<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Laporan Barang Rusak</title>
</head>
<body>

<h2>Form Laporan Barang Rusak di Gudang</h2>
<form action="" method="post" enctype="multipart/form-data">
  <label>Nama Petugas:</label><br>
  <input type="text" name="nama_petugas"><br><br>
  <label>Jam Laporan (HH:MM):</label><br>
  <input type="time" name="jam_laporan" required><br><br>

  <label>ID Barang:</label><br>
  <select name="id_barang">
    <option value="BRG001">BRG001</option>
    <option value="BRG002">BRG002</option>
    <option value="BRG003">BRG003</option>
    <option value="BRG004">BRG004</option>
    <option value="BRG005">BRG005</option>
    <option value="BRG006">BRG006</option>
    <option value="BRG007">BRG007</option>
    <option value="BRG008">BRG008</option>
    <option value="BRG009">BRG009</option>
    <option value="BRG010">BRG010</option>
  </select><br><br>

  <label>Jumlah Rusak:</label><br>
  <input type="number" name="jumlah_rusak"><br><br>
  <label>Tanggal Ditemukan Rusak:</label><br>
  <input type="date" name="tanggal" required><br><br>
  <label>Lokasi Gudang:</label><br>
  <input type="text" name="lokasi_gudang"><br><br>
  <label>Penyebab:</label><br>
  <input type="text" name="penyebab"><br><br>
  <label>Upload Foto:</label><br>
  <input type="file" name="foto"><br><br>

  <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $barang = array(
        "BRG001" => "Air Mineral Botol 600ml",
        "BRG002" => "Roti Tawar",
        "BRG003" => "Mie Instan Goreng",
        "BRG004" => "Biskuit Kaleng",
        "BRG005" => "Susu Kotak 1L",
        "BRG006" => "Sapu Lantai",
        "BRG007" => "Ember Plastik 20L",
        "BRG008" => "Lampu LED 12W",
        "BRG009" => "Panci Stainless 24cm",
        "BRG010" => "Piring Keramik"
    );

    $nama = $_POST["nama_petugas"];
    $id = $_POST["id_barang"];
    $jam = $_POST["jam_laporan"];
    $nama_barang = $barang[$id];
    $jumlah_rusak = $_POST["jumlah_rusak"];
    $tgl = $_POST["tanggal"];
    $lokasi = $_POST["lokasi_gudang"];
    $penyebab = $_POST["penyebab"];
 
     // Menentukan shift dari jam
    $jam_int = intval(substr($jam, 0, 2));
    if ($jam_int >= 6 && $jam_int < 14) {
        $shift = "Shift 1";
    } elseif ($jam_int >= 14 && $jam_int < 22) {
        $shift = "Shift 2";
    } else {
        $shift = "Shift 3";
    }


    // Simpan file foto
    $nama_file = $_FILES["foto"]["name"];
    move_uploaded_file($_FILES["foto"]["tmp_name"], $nama_file);

    // Tampilkan hasil
    echo "<h2>Data Laporan:</h2>";
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><td>Nama Petugas</td><td>$nama</td></tr>";
    echo "<tr><td>Shift</td><td>$shift</td></tr>";
    echo "<tr><td>ID Barang</td><td>$id</td></tr>";
    echo "<tr><td>Nama Barang</td><td>$nama_barang</td></tr>";
    echo "<tr><td>Jumlah Rusak</td><td>$jumlah_rusak</td></tr>";
    echo "<tr><td>Lokasi</td><td>$lokasi</td></tr>";
    echo "<tr><td>Penyebab</td><td>$penyebab</td></tr>";
    echo "<tr><td>Foto Barang</td><td><img src='$nama_file' width='150'></td></tr>";
    echo "</table>";
}
?>

</body>
</html>
