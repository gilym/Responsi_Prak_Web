<?php 
include 'db.php';


session_start();
error_reporting(0);
if($_SESSION['status_login']  != true ){
    header("location:index.php?pesan=belum");
}

$kode1 = $_GET['kode_barang'];
$query = "SELECT * FROM inventaris WHERE kode_barang = '$kode1' ";
$execute = mysqli_query($conn,$query);
$p = mysqli_fetch_object($execute);



$query = "DELETE FROM inventaris WHERE kode_barang = '$kode1'";


$execute = mysqli_query($conn,$query);
if($execute){
    echo '<script>alert("Data Berhasil Dihapus")</script>';
    echo '<script>window.location="daftar.php"</script>';
}else{
    echo 'gagal '.mysqli_error($conn);
}

?>
