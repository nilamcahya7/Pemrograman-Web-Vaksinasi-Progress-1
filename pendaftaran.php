<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="pendaftaran.css">
</head>

<body>
<nav>
        <ul>
            <li><a href="#">Profile</a></li>
            <li><a href="Tentang.php">Tentang</a></li>
            <li><a href="#">Penyedia Layanan</a></li>
            <li><a href="vaksinasi.php">Home</a></li>
        </ul>
    </nav>
    <h2>Formulir Pendaftaran Vaksinasi Covid-19</h2>
    <div class="warp">
        <div class="container">
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Nomor Nik : </td>
                        <td><input type="number" name="nik" placeholder="Masukan nomor NIK"><br></td>
                    </tr>
                    <tr>
                        <td>Nama : </td>
                        <td><input type="text" name="nama" placeholder="Masukan Nama"><br></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir : </td>
                        <td><input type="date" name="tgl_lahir" placeholder="Masukan Tanggal Lahir"><br><br></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin : </td>
                        <td>
                            <select name="jenis_kelamin">
                                <option value="pilihan">--pilih jenis kelamin--</option>
                                <option value="perempuan">perempuan</option>
                                <option value="laki-laki">laki-Laki</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Handphone : </td>
                        <td><input type="text" name="nomor_ponsel" placeholder="Masukan Nomor ponsel"><br></td>
                    </tr>
                    <tr>
                        <td>alamat : </td>
                        <td><input type="text" name="alamat" placeholder="Masukan Alamat"><br></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" name="Daftar">Daftar</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
<?php
session_start();
include "koneksi.php";

if(isset($_POST['Daftar'])){
    $sql=mysqli_query($con," INSERT INTO pendaftaran_pengguna set
    nik = '$_POST[nik]',
    nama = '$_POST[nama]',
    tgl_lahir = '$_POST[tgl_lahir]',
    jenis_kelamin = '$_POST[jenis_kelamin]',
    nomor_ponsel = '$_POST[nomor_ponsel]',
    alamat = '$_POST[alamat]'");


}

?>