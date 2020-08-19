<?php
require "config.php";


$conn = mysqli_connect("localhost","root","","justcode");
if($conn->connect_error)
{
    die("connection faile :" .$conn->connect_error);
}
?>