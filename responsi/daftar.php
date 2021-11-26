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
    <link rel="stylesheet" href="dashboard.css" type="text/css">
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
                <a href="logout.php">  <button class="btn btn-outline-success " type="submit">logout</button> </a>
              </div>
            </div>
          </nav>
    
<a href="tambah.php"><button style="margin-top: 30px;" class="btn btn-outline-success" type="submit">+Tambah</button> </a>


<div class="tabel1">

        <table class="table table-hover">
        <thead style="background-color: rgb(2, 2, 92);">
        <tr style="color: white;">
            <th scope="col">No</th>
            <th scope="col">Kode</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah </th>
            <th scope="col">Satuan</th>
            <th scope="col">Tanggal Datang</th>
            <th scope="col">Kategori</th>
            <th scope="col">Status</th>
            <th scope="col">Harga Satuan</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>


        <tbody>
        
        <?php
$i=1;
$tes = mysqli_query($conn, "SELECT * FROM inventaris ");

if(mysqli_num_rows($tes) > 0){
    while($p = $tes->fetch_object()){
?>
<tr>   
    <td> <?php echo $i; ?> </td>
    <td> <?= $p -> kode_barang ?> </td>
    <td> <?= $p -> nama_barang ?> </td>
    <td> <?= $p -> jumlah ?> </td>
    <td> <?= $p -> satuan ?> </td>
    <td> <?= $p -> tgl_datang ?> </td>
    <td> <?= $p -> kategori ?> </td>
    <td> <?= $p -> status_barang ?> </td>
    <td> Rp.<?php echo number_format($p -> harga) ?> </td>
    <td> Rp.<?php echo number_format($p -> harga * $p -> jumlah) ?> </td>
    <td> <a href="update.php?kode_barang=<?= $p->kode_barang ?> ">  <button class="btn btn-outline-success" style="background-color:  rgb(2, 2, 92); color :white" type="submit">Edit</button> </a> 
    <a href="delete.php?kode_barang=<?= $p->kode_barang ?>  ">  <button class="btn btn-outline-success" style="background-color:  rgb(2, 2, 92);color :white" type="submit">Hapus</button> </a></td>
    <?php $i++; 
    $tot= $tot + $p -> harga * $p -> jumlah;
    ?>

</tr>
<?php
    
    }
}
    ?>
        </tbody>
        </table>
        <?php echo 'Total invertaris = Rp. ';echo number_format($tot) ; ?>
</div>
    
  

    

    
    

</body>

</html>
