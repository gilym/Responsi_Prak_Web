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
    <link rel="stylesheet" href="dashboard.css">
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
                      <li><a class="dropdown-item"  href="bangunan.php">Bangunan</a></li>
                      <li><a class="dropdown-item" href="kendaraan.php">Kendaraan</a></li>
                      <li><a class="dropdown-item" href="tulis.php">Alat Tulis Kantor</a></li>
                      <li><a class="dropdown-item" href="elektronik.php">Elektronik</a></li>
            
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

<div class="box">

<h2 style="text-align: center;">Update Inventaris  </h2>
<form action="proces_up.php" method="POST">
<table cellpadding="9" cellspacing="10" >
    <tr>
        <td>Kode Barang</td> <td> <input type="text" name="kode" class="form-control" value="<?= $p ->kode_barang ?>" ></td>
    </tr>
    <tr>
        <td>Nama Barang</td><td> <input type="text" name="nama" class="form-control"  value="<?= $p ->nama_barang ?>"></td>
    </tr>
    <tr>
        <td>Jumlah</td><td> <input type="text" name="jumlah" class="form-control"  value="<?= $p ->jumlah ?>" ></td>
    </tr>
    <tr>
        <td>Satuan</td><td> <input type="text" name="satuan" class="form-control"  value="<?= $p ->satuan ?>" ></td>
    </tr>
    <tr>
        <td>Tanggal Datang</td><td> <input type="date" name="tanggal" class="form-control"  value="<?= $p ->tgl_datang ?>" ></td>
    </tr>
    <tr>
        <td>Kategori</td>
        <td>
            <select name="kategori" id="inputState"class="form-control" >
              <?php
              if($p->kategori=='Bangunan'){?>
                <option   value="Bangunan" selected >Bangunan</option>
                <option  value="Kendaraan"  >Kendaraan</option>
                <option  value="Alat Tulis Kantor" >Alat Tulis Kantor</option>
                <option  value="Elektronik" >Elektronik</option>
                
                <?php  } 
                
                else if($p->kategori=='Kendaraan'){?>
                  <option   value="Bangunan"  >Bangunan</option>
                <option  value="Kendaraan"  selected >Kendaraan</option>
                <option  value="Alat Tulis Kantor" >Alat Tulis Kantor</option>
                <option  value="Elektronik" >Elektronik</option>
              <?php  } 
              
              else if($p->kategori=='Alat Tulis Kantor'){?>
                  <option   value="Bangunan"  >Bangunan</option>
                <option  value="Kendaraan"  >Kendaraan</option>
                <option  value="Alat Tulis Kantor" selected >Alat Tulis Kantor</option>
                <option  value="Elektronik" >Elektronik</option>
              <?php  } 
             
             else if($p->kategori=='Elektronik'){?>
                  <option   value="Bangunan"  >Bangunan</option>
                <option  value="Kendaraan"  >Kendaraan</option>
                <option  value="Alat Tulis Kantor" >Alat Tulis Kantor</option>
                <option  value="Elektronik" selected >Elektronik</option>
              <?php  }
                
              ?>
       
     
       
      </select></td>
    </tr>
    <tr>
        <td>Status</td>
        <td>
  <input type="radio" id="baik" name="status" value="Baik" <?php if($p -> status_barang == "Baik" ) echo 'checked'?> >
  <label for="baik">Baik</label>
  <input type="radio" id="perawatan" name="status" value="Perawatan" <?php if($p -> status_barang == "Perawatan" ) echo 'checked'?>>
  <label for="perawatan">Perawatan</label>
  <input type="radio" id="rusak" name="status" value="Rusak" <?php if($p -> status_barang == "Rusak" ) echo 'checked'?>>
  <label for="rusak">Rusak</label>
        
        
        </td>
    </tr>
    <tr>
        <td>Harga Satuan</td><td> <input type="text" name="harga" class="form-control"  value="<?= $p ->harga ?>"></td>
    </tr>
    
</table>
<div class="submit">
<button type="submit" class="btn btn-primary">Simpan</button>
<button type="reset" VALUE="Back" onClick="history.go(-1);" class="btn btn-primary">Batal</button>
</div>

</form>

</div>





    

</body>

</html>
