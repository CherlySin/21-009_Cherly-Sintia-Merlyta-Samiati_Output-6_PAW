<?php
include "koneksi6.php";

$id = $_POST['id_mhs'];
$id_fak = $_POST['id_fakultas'];
$nama = $_POST['nama_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_mhs VALUES('$id','$id_fak','$nama','$alamat')";
$hasil =mysqli_query($koneksi, $sql);

if (!$hasil){
    echo "Tambah data gagal";
}else{
    echo "Tambah data berhasil<br>";
    echo "<a href='Output6.php'>Show data</a>";
}
?>