<?php 
    include "../../config/koneksi.php";

   
    $Id_petugas    = $_POST['Id_petugas'];
    $username             = $_POST['username'];
    $password              = $_POST['password'];
    $level              = $_POST['level'];
    $dibuatpada              = $_POST['dibuatpada'];


    $sql = "INSERT INTO tabel_user 
    (
        Id_petugas,
        username,
        password,
        level,
        dibuatpada
    ) 
    VALUES 
    (
        '".$Id_petugas."',
        '".$username."',
        '".$password."',
        '".$level."',
        '".$dibuatpada."'
    )";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=user');

?>