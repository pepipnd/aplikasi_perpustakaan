<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "perpustakaan_pepi";

$db = mysqli_connect($host,$user,$pass,$db);

if(!$db){
    die("database tidak terhubung");
}