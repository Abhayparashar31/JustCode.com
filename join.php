<?php
require "database/connection.php";
if(isset($_POST['join'])){
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$city = $_POST["city"];
 $sql="insert into users (name,email,pass,phone,city) values ('".$name."','".$email."','".$password."','".$phone."','".$city."')";
 $result=mysqli_query($conn,$sql);
 header("location:index.php");
}
if(isset($_POST['login'])){
    $name = $_POST["u1"];
    $email = $_POST["email"];
    $password = $_POST["p1"];
    $sql="select * from users where name = '".$name."'and email = '".$email."'and pass = '".$password."'";
    $result=mysqli_query($conn,$sql);
    $row= mysqli_fetch_array($result);
    $_SESSION['login']=$row['id'];
    header("location:Homepage.php?name=".$row['name']."&id=".$row['id']);
}