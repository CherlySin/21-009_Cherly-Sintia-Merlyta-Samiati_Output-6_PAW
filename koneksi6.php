<?php
$host = "localhost";
$user = "root";
$password = "";
$dbnama = "pertemuan_5";

$koneksi = mysqli_connect ($host,$user,$password,$dbnama);
if(!$koneksi){
        echo "koneksi gagal";
}
?>