<?php
require_once('koneksi.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jenis= $_POST['jenis'];
    //$warna = $_POST['warna'];

    if (empty($nama)|| empty($jenis)) {
        echo "Tidak Boleh Kosong...";
    }

    elseif(!preg_match("/^[a-zA-z]*$/", $nama)){
        echo "Nama sayuran tidak boleh angka";
    } else {

    $sql = "INSERT INTO tb_sayuran (kode,nama,jenis) VALUES ('$kode','$nama','$jenis')";


    if(mysqli_query($con,$sql)){
        echo 'Berhasil Menambah Sayuran';
    }else{
        echo 'Gagal Menambah Sayuran';
    }
}
    mysqli_close($con);
}
?>