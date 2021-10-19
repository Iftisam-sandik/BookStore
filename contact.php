<?php
$host="localhost";
$user="root";
$password="";
$db="bookhub";

$link=mysqli_connect($host,$user,$password,$db);

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$sql="INSERT INTO contact (name,email,message) VALUES('".$name."','".$email."','".$msg."')";
mysqli_query($link,$sql);


