<?php 
include 'db.php';


session_start();
error_reporting(0);
if($_SESSION['status_login']  != true ){
    header("location:index.php?pesan=belum");
}

$kode=$_POST['kode'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];
$satuan=$_POST['satuan'];
$tanggal=$_POST['tanggal'];
$kategori=$_POST['kategori'];
$status=$_POST['status'];
$harga=$_POST['harga'];

$query = "UPDATE inventaris SET   nama_barang='$nama' ,jumlah='$jumlah',satuan='$satuan', tgl_datang ='$tanggal'
,kategori='$kategori',status_barang='$status',harga='$harga' WHERE kode_barang='$kode'";


$execute = mysqli_query($conn,$query);
if($execute){
    echo '<script>alert("Update data berhasil")</script>';
    echo '<script>window.location="daftar.php"</script>';
}else{
    echo 'gagal '.mysqli_error($conn);
}

?>
