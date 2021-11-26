<!DOCTYPE html>
<html lang="en">
    <?php
    include 'db.php';

    session_start();
error_reporting(0);
if($_SESSION['status_login']  != true ){
    header("location:index.php?pesan=belum");

}

$cek=$_SESSION['username'];
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu navbar</title>
    <link rel="stylesheet" href="dashboard.css"  type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>

<body>
    <div class="header">
        <h1>Daftar Inventaris Barang <br>Kantor Serba Ada</h1>
    
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dashboard.php">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="daftar.php">Daftar Inventaris</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      List Per Kategori
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item"  href="list_kategori.php?kategori=Bangunan">Bangunan</a></li>
                      <li><a class="dropdown-item" href="list_kategori.php?kategori=Kendaraan">Kendaraan</a></li>
                      <li><a class="dropdown-item" href="list_kategori.php?kategori=Alat Tulis Kantor">Alat Tulis Kantor</a></li>
                      <li><a class="dropdown-item" href="list_kategori.php?kategori=Elektronik">Elektronik</a></li>
            
                    </ul>
                  </li>
                  
                </ul>
                <a href="logout.php">  <button class="btn btn-outline-success" type="submit">logout</button> </a>
              </div>
            </div>
          </nav>
    
<?php

$kode1 = $_GET['kode_barang'];
$query = "SELECT * FROM inventaris WHERE kode_barang = '$kode1' ";
$execute = mysqli_query($conn,$query);
$p = mysqli_fetch_object($execute);
?>
    
<div class="delete" >

<div class="he"> Hapus Data Inventaris</div>

Yakin Menghapus  <?php echo "<font color ='blue'>"; echo $p->nama_barang; ?> ? <?php echo " </font>" ?><br>

<div class="but">
<a href="proses_del.php?kode_barang=<?= $p->kode_barang ?> ">  <button class="btn btn-outline-success" style="background-color:  rgb(2, 2, 92); color :white" type="submit">Hapus</button> </a> 
    <a href="javascript:history.back()" >  <button class="btn btn-outline-success" style="background-color:  rgb(2, 2, 92);color :white" type="submit">Batal</button> </a></td>

</div>




</div>

    
    

</body>

</html>
