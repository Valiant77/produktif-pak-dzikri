<!DOCTYPE html>
<head>
    <html lang="id">
</head>
<body>
    <form>
        <h1>From buku baru</h1>
            <label>nama: </label>
            <input type="text" id="nama">
            <label>penerbit buku: </label>
            <input type="text" id="penerbitbuku"> <br><br>
            <label>jumlah buku: </label>
            <input type="text" id="jumlahbuku">
            <label>asal buku: </label>
            <input type="text" id="asalbuku"> <br><br>
            <lebel>jenis buku: </label>
            <input type="text" id="jenisbuku">
            <br><br>

             <input type="submit" value="Kirim">
</form>
<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $penerbitbuku = $_POST['penerbitbuku'];
    $jumlahbuku = $_POST['jumlah buku'];
    $asalbuku = $_POST['asalbuku'];
    $jenisbuku = $_POST['jenisbuku'];
    
    echo "<h2>Data buku baru</h2>";
    echo "Nama: $nama<br>";
    echo "penerbit buku: $penerbit buku<br>";
    echo "jumlah buku: $jumlah buku<br>";
    echo "asal buku: $asal buku<br>";
    echo "jenis buku: $jenis buku<br>";
}
?>
</body>
</html>
            