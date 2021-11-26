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
    

          
          <div class="box">

<h2 style="text-align: center;">Tambah Inventaris  </h2>
<form action="proces_tam.php" method="POST">
<table cellpadding="9" cellspacing="10" >
    <tr>
        <td>Kode Barang</td> <td> <input type="text" name="kode" class="form-control" placeholder="Kode Barang" ></td>
    </tr>
    <tr>
        <td>Nama Barang</td><td> <input type="text" name="nama" class="form-control" placeholder="Nama Barang" ></td>
    </tr>
    <tr>
        <td>Jumlah</td><td> <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" ></td>
    </tr>
    <tr>
        <td>Satuan</td><td> <input type="text" name="satuan" class="form-control" placeholder="Satuan" ></td>
    </tr>
    <tr>
        <td>Tanggal Datang</td><td> <input type="date" name="tanggal" class="form-control" placeholder="Tanggal" ></td>
    </tr>
    <tr>
        <td>Kategori</td>
        <td>
            <select name="kategori" id="inputState" class="form-control">
        <option selected value="Bangunan">Bangunan</option>
        <option selected value="Kendaraan" >Kendaraan</option>
        <option selected value="Alat Tulis Kantor">Alat Tulis Kantor</option>
        <option selected value="Elektronik">Elektronik</option>
     
       
      </select></td>
    </tr>
    <tr>
        <td>Status</td>
        <td>
           <input type="radio" id="baik" name="status" value="Baik">
  <label for="baik">Baik</label>
  <input type="radio" id="perawatan" name="status" value="Perawatan">
  <label for="perawatan">Perawatan</label>
  <input type="radio" id="rusak" name="status" value="Rusak">
  <label for="rusak">Rusak</label>
        
        
        </td>
    </tr>
    <tr>
        <td>Harga Satuan</td><td> <input type="text" name="harga" class="form-control" placeholder="Username" ></td>
    </tr>
    
</table>
<div class="submit">
<button type="submit" class="btn btn-primary">Simpan</button>
<button type="reset" class="btn btn-primary">Batal</button>
</div>

</form>

</div>
    
    

</body>

</html>
