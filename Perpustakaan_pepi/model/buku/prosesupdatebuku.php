<?php
    include "../../config/koneksi.php";


    $Id_buku      = $_POST['Id_buku'];
    $isbn    = $_POST['isbn'];
    $nama_buku  = $_POST['nama_buku'];
    $penulis          = $_POST['penulis'];
    $penerbit          = $_POST['penerbit'];
    $tahun_terbit          = $_POST['tahun_terbit'];


    $sql = "Update tabel_buku set
           isbn                    = '".$isbn."',
           nama_buku               = '".$nama_buku."',
           penulis                 = '".$penulis."',
           penerbit                = '".$penerbit."',
           tahun_terbit            = '".$tahun_terbit."'

           where Id_buku = '".$Id_buku."'
           ";

    $db->query($sql);

    header('Location: ../../beranda.php?page=buku&alert=edit');

?>