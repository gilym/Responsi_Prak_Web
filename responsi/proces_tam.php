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

$query = "INSERT INTO inventaris (kode_barang,nama_barang,jumlah,satuan,tgl_datang,kategori,status_barang,harga) values ('$kode' , '$nama' , '$jumlah' ,'$satuan','$tanggal','$kategori','$status','$harga')";
$execute = mysqli_query($conn,$query);
if($execute){
    echo '<script>alert("Tambah data berhasil")</script>';
    echo '<script>window.location="daftar.php"</script>';
}else{
    echo 'gagal '.mysqli_error($conn);
}

?>
