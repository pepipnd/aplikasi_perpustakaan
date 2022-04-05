<?php
    include "../../config/koneksi.php";


    $Id_user      = $_POST['Id_user'];
    $Id_petugas    = $_POST['Id_petugas'];
    $username   = $_POST['username'];
    $password          = $_POST['password'];
    $level          = $_POST['level'];
    $dibuatpada          = $_POST['dibuatpada'];


    $sql = "Update tabel_user set
           Id_petugas         = '".$Id_petugas."',
           username        = '".$username."',
           password               = '".$password."',
           level                = '".$level."',
           dibuatpada                = '".$dibuatpada."'

           where Id_user = '".$Id_user."'
           ";

    $db->query($sql);

    header('Location: ../../beranda.php?page=user&alert=edit');

?>