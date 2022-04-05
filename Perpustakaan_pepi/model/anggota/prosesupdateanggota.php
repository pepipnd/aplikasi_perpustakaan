<?php
    include "../../config/koneksi.php";


    $id_anggota      = $_POST['id_anggota'];
    $Nama_anggota    = $_POST['Nama_anggota'];
    $Jenis_kelamin   = $_POST['Jenis_kelamin'];
    $alamat          = $_POST['alamat'];
    $no_hp          = $_POST['no_hp'];


    $sql = "Update tabel_anggota set
           Nama_anggota         = '".$Nama_anggota."',
           Jenis_kelamin        = '".$Jenis_kelamin."',
           alamat               = '".$alamat."',
           no_hp                = '".$no_hp."'

           where id_anggota = '".$id_anggota."'
           ";

    $db->query($sql);

    header('Location: ../../beranda.php?page=anggota&alert=edit');

?>