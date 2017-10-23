<!DOCTYPE html>
<html>
<head>
	<title>Connection</title>
</head>
<body>
	<h4>Welcome New User</h4>

	<h6>Thank You for Registration</h6>
</body>
</html>
<?php

$host ="localhost";
$user ="root";
$pass ="";

$email =$_POST['email'];
$first_name=$_POST['fname'];
$last_name=$_POST['kname'];
$password=$_POST['password'];
	if($first_name)

{
	$koneksi=mysqli_connect($host,$user,$pass);
	mysqli_select_db ($koneksi,'authentication');
	$sql="insert into tuser value('$email','$first_name','$last_name','$password')";
	$hasil=mysqli_query($koneksi,$sql);
}

	if($koneksi->connect_errno){
		echo "Gagal koneksi Ke server";
	
?>