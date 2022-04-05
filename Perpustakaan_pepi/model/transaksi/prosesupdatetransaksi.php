<?php
    include "../../config/koneksi.php";


    $Id_transaksi      = $_POST['Id_transaksi'];
    $tanggal_transaksi    = $_POST['tanggal_transaksi'];
    $Id_anggota   = $_POST['Id_anggota'];
    $Id_pegawai          = $_POST['Id_pegawai'];
    $Id_buku          = $_POST['Id_buku'];
    $quantity          = $_POST['quantity'];
    $jenis_transaksi          = $_POST['jenis_transaksi'];


    $sql = "Update tabel_transaksi set
           tanggal_transaksi       = '".$tanggal_transaksi."',
           Id_anggota              = '".$Id_anggota."',
           Id_pegawai              = '".$Id_pegawai."',
           Id_buku                 = '".$Id_buku."',
           quantity                = '".$quantity."',
           jenis_transaksi         = '".$jenis_transaksi."'



           where Id_transaksi = '".$Id_transaksi."'
           ";

    $db->query($sql);

    header('Location: ../../beranda.php?page=transaksi&alert=edit');

?>