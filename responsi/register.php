



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="box.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="box">

<h2 style="text-align: center;">Daftar Akun  </h2>
<form action="proces_reg.php" method="POST">
    <div class="name">Username </div>
    <input type="text" name="user" class="form-control" placeholder="Username" ><br>
    <div class="name">password </div>
    <input type="text" name="pass" class="form-control" placeholder="Password" ><br>
    <div class="name">Nama Lengkap </div>
    <input type="text" name="nama" class="form-control" placeholder="Username" ><br>
    <div class="name">Email </div>
    <input type="text" name="email" class="form-control" placeholder="Username" ><br>
    <div class="name">Nomor Telepon </div>
    <input type="text" name="Nohp" class="form-control" placeholder="Username" ><br>
    <input type="submit" name="reg" class="btn btn-primary" value="Register" >
    
</form>
<a href="index.php" style="text-align: left;">Kembali</a>
</div>





    
</body>
</html>