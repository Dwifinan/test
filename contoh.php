<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'test');

if(isset($_POST['proses'])){
    $judul = $_POST['judul'];
    $isi   = $_POST['isi'];

    // Perbaikan: Menggunakan sintaks INSERT INTO dengan tanda kurung kurawal {} untuk nilai kolom
    $query = "INSERT INTO todo (`judul`, `isi`) VALUES ('$judul', '$isi')";

    // Perbaikan: Memeriksa apakah query berhasil dijalankan
    if(mysqli_query($koneksi, $query)) {
        echo "Data Berhasil Ditambahkan";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh</title>
</head>
<body>
    <form action="" method="post">
        <h2>Form Input</h2>
        <table>
            <tr>
                <td>judul</td>
                <td>:</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>isi</td>
                <td>:</td>
                <td><input type="text" name="isi"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="proses">Kirim</button></td>
            </tr>
        </table>
    </form>
</body>
</html>