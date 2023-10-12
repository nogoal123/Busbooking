<?php  
$name = $_POST['username'];
$mail = $_POST['email'];
$pass = $_POST['password'];

include 'connect.php';

$sql = "INSERT INTO register(username,email,password)
		VALUE(?,?,?)";
		
$stmt = mysqli_stmt_init($conn);

mysqli_stmt_prepare($stmt,$sql);

mysqli_stmt_bind_param($stmt,"sss",$name,$mail,$pass);

mysqli_execute($stmt);

 ?>