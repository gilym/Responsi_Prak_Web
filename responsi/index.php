<!DOCTYPE html>
<?php  
error_reporting(0);
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Bukawarung</title>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style type="text/css">
body{
	background: linear-gradient(to right, #b92b27, #1565c0)
}
.box{
	margin: 200px auto;
        width: 500px;
        padding: 10px;
        border: 1px solid #ccc;
    background: #191919;
    ;
    text-align: center;
    transition: 0.25s;
    
}

.box h2 {
    color: white;
    text-transform: uppercase;
    font-weight: 500;
	margin-bottom: 30px;
}

.box .reg{
	color: white;
    font-weight: 450;
	margin-bottom: 10px;
	margin-top: 10px;
}

</style>
</head>
<body>
<?php
session_start();
if(isset ($_GET ['pesan'])){
	if($_GET ['pesan'] == "gagal"){
		echo '<script>alert("Password atau Username Salah")</script>';
	}
	else if($_GET ['pesan'] == "belum" ){
		echo '<script>alert("Silahkan Login Terlebih Dahulu")</script>';
	}
	else if($_GET ['pesan']== "logout"){
		echo '<script>alert("Anda Telah Logout")</script>';
	}
}
?>
	<div class="box">

		<h2>Login </h2>
		<form action="index.php" method="POST">
			<input type="text" name="user" class="form-control" placeholder="Username" ><br>
			<input type="password" name="pass" class="form-control" placeholder="Password" ><br>
			<input type="submit" name="submit" class="btn btn-primary" value="Login" >
		</form>
		<div class="reg"> <a href="register.php"> Belum Punya Akun ? Register</a> </div>
		
	</div>

	<?php 
if(isset($_POST['submit'])){
	session_start();
	
		$hostname = 'localhost';
		$username = 'root';
		$password = '';
		$dbname   = 'responsi';
		$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');

	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$query = mysqli_query($conn, "SELECT * FROM petugas WHERE username = '$user' && password = '$pass'");
	$cek = mysqli_num_rows($query);

	if($cek > 0){
		$_SESSION['username']= $user;
		$_SESSION['password']= $pass;
		$_SESSION['status_login'] = true;
		echo '<script>window.location="dashboard.php"</script>';
	}else{
		header("location:index.php?pesan=gagal");
	}
}

?>

</body>
</html>