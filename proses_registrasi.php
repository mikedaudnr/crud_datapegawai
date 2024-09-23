<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $no_tlp = $_POST['no_tlp'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $password = $_POST['password'];
    $id_jabatan = $_POST['id_jabatan'];

    if (empty($nama)) {
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='daftar.php';</script>";
    } elseif (empty($nik)) {
        echo "<script>alert('NIK tidak boleh kosong');location.href='daftar.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('password tidak boleh kosong');location.href='daftar.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO tabel_pegawai (nama , nik , no_tlp , alamat , jenis_kelamin , password , id_jabatan) value ('" . $nama . "','" . $nik . "','" . $no_tlp . "','" . $alamat . "','" . $jenis_kelamin . "','" . md5($password) . "','" . $id_jabatan . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan Pegawai');location.href='daftar.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Pegawai');location.href='daftar.php.php';</script>";
        }
    }
}

?>