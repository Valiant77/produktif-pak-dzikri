<!DOCTYPE html>
<head>
    <html lang="name">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Form Pembukaan Rekening Baru</h1>

        <table>
            <thead><h2>Data Diri</h2></thead>
            <tbody>
                <tr>
                    <td><label>Nama Nasabah:</label><input type="text" name="nama"></td>
                    <td>
                        <label>Kategori Nasabah:</label>
                        <select name="kategori"><option>Murid</option><option>Guru</option><option>Lainnya</option></select>
                    </td>
                    <td><label>Kelas (Isi "-" bila nasabah bukan murid):</label><input type="text" name="kelas">
                </tr>
                <tr>
                    <td><label>No. Telepon:</label><input type="number" name="notelp"></td>
                    <td><label>Email:</label><input type="text" name="email"></td>
                </tr>
            </tbody>
        </table>

        <table>
            <thead><h2>Alamat Nasabah</h2></thead>
            <tbody>
                <tr>
                    <td><label>Provinsi:</label><input type="text" name="prov"></td>
                    <td><label>Kota/Kabupaten:<input type="text" name="kotkab"></label></td>
                    <td><label>Kecamatan:</label><input type="text" name="kec">
                </tr>
                <tr>
                    <td><label>Desa:</label><input type="text" name="desa"></td>
                    <td><label>Kode Pos:</label><input type="number" name="kodepos"></td>
                </tr>
            </tbody>
        </table>


        <h2>Saldo Awal</h2>
        <input type="number" name="saldo" min="10000">
        <br><br>
        <input type="submit" value="Kirim">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $kelas = $_POST['kelas'];
    $notelp = $_POST['notelp'];
    $email = $_POST['email'];
    $prov = $_POST['prov'];
    $kotkab = $_POST['kotkab'];
    $kec = $_POST['kec'];
    $desa = $_POST['desa'];
    $kodepos = $_POST['kodepos'];
    $saldo = $_POST['saldo'];
    
    echo "<h2>Data Rekening Baru Nasabah</h2>";
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><td>Nama Nasabah</td><td>$nama</td></tr>";
    echo "<tr><td>Kategori Nasabah</td><td>$kategori</td></tr>";
    echo "<tr><td>Kelas</td><td>$kelas</td></tr>";
    echo "<tr><td>No. Telepon</td><td>$notelp</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr></table>";
    echo "<h2>Alamat Nasabah Baru</h2>";
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><td>Provinsi</td><td>$prov</td></tr>";
    echo "<tr><td>Kota / Kabupaten</td><td>$kotkab</td></tr>";
    echo "<tr><td>Kecamatan</td><td>$kec</td></tr>";
    echo "<tr><td>Desa</td><td>$desa</td></tr>";
    echo "<tr><td>Kode Pos</td><td>$kodepos</td></tr></table>";
    echo "<h2>Saldo Awal dan No. Rekening</h2>";
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><td>Saldo Awal</td><td>$saldo</td></tr>";
    echo "<tr><td>No. Rekening Baru</td><td>1777 0332 9481 4201</td></tr></table>";
}
?>
</body>
</html>
