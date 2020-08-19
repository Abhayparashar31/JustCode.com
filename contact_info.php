<?php
require "database/connection.php";
if(isset($_POST['send'])){
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["msg"];
 $sql="insert into contact (name,email,message) values ('".$name."','".$email."','".$message."')";
 $result=mysqli_query($conn,$sql);
 header("location:Homepage.php");
 die;
}