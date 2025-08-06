<!DOCTYPE html>
<head>
    <html lang="id">
</head>
<body>
    <form>
        <h1>Form Pembukaan Rekening Baru</h1>
        <label>Nama: </label>
        <input type="text" id="nama">
        <label>No Telepon: </label>
        <input type="text" id="notelp"><br><br>
        <label>Alamat</label><br>
        <label>Desa</label>
        <input type="text" id="desa">
        <label>Kecamatan</label>
        <input type="text" id="kec"><br>
        <label>Kota/Kabupaten</label>
        <input type="text" id="kotkab">
        <label>Provinsi</label>
        <input type="text" id="prov">
        <br><br>
        <input type="submit" value="Kirim">
    </form>
<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $notelp = $_POST['notelp'];
    $desa = $_POST['desa'];
    $kec = $_POST['kec'];
    $kotkab = $_POST['kotkab'];
    $prov = $_POST['prov'];
    
    echo "<h2>Data Pembukaan Rekening Baru</h2>";
    echo "Nama: $nama<br>";
    echo "No Telepon: $notelp<br>";
    echo "Desa: $desa<br>";
    echo "Kecamatan: $kec<br>";
    echo "Kota/Kabupaten: $kotkab<br>";
    echo "Provinsi: $prov<br>";
}
?>
</body>
</html>