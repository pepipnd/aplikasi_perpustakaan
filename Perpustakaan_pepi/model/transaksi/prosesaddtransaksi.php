<?php 
    include "../../config/koneksi.php";

   
    $tanggal_transaksi    = $_POST['tanggal_transaksi'];
    $Id_anggota             = $_POST['Id_anggota'];
    $Id_pegawai              = $_POST['Id_pegawai'];
    $Id_buku              = $_POST['Id_buku'];
    $quantity              = $_POST['quantity'];
    $jenis_transaksi              = $_POST['jenis_transaksi'];


    $sql = "INSERT INTO tabel_transaksi 
    (
        tanggal_transaksi,
        Id_anggota,
        Id_pegawai ,
        Id_buku,
        quantity,
        jenis_transaksi 
    ) 
    VALUES 
    (
        '".$tanggal_transaksi."',
        '".$Id_anggota."',
        '".$Id_pegawai."',
        '".$Id_buku."',
        '".$quantity."',
        '".$jenis_transaksi."'
    )";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=transaksi');

?>