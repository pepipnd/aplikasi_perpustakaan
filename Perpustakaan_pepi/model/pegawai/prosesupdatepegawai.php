<?php
    include "../../config/koneksi.php";


    $Id_pegawai      = $_POST['Id_pegawai'];
    $nama_pegawai    = $_POST['nama_pegawai'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $alamat          = $_POST['alamat'];
    $no_hp          = $_POST['no_hp'];
    $jabatan          = $_POST['jabatan'];


    $sql = "Update tabel_pegawai set
           nama_pegawai            = '".$nama_pegawai."',
           jenis_kelamin           = '".$jenis_kelamin."',
           alamat                 = '".$alamat."',
           no_hp                = '".$no_hp."',
           jabatan            = '".$jabatan."'

           where Id_pegawai = '".$Id_pegawai."'
           ";

    $db->query($sql);

    header('Location: ../../beranda.php?page=pegawai&alert=edit');

?>