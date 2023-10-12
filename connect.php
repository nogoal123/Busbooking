<?php
$name = $_POST['name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

// Database  connection
$conn = new mysqli('localhost','root','','bca');
if($conn->connect_error){

    die ('Connection Failed : '.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into login(name,Email,Password)
    value (?,?,?)");
    $stmt ->bind_param("sss",$name,$Email,$Password);
    $stmt ->execute();
    header("Location:home.html");
    $stmt ->close();
    $conn ->close();
}

?>