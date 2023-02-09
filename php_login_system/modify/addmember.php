<?php
$name=$_POST["name"];
$username=$_POST["username"];
$role=$_POST["role"];

$sql="INSERT INTO `users`(`id`, `name`, `username`, `role`) VALUES (NULL, '".$name."','".$username."','".$role."')";
include("../db_conn.php");

$conn->query($sql);

header("location:../home.php");
?>