<?php
session_start();

require "connect.php";
$id=$_POST["id"];
$nomP=$_POST["name"];
$_SESSION['id']=$_POST["id"];
$_SESSION['pwd']=$_POST["pwd"];
$email=$_POST["email"];
$ps=$_POST["pwd"];
$re="insert into user values('$id','$nomP','$email','$ps')";
if($cnx->query($re)){
header('Location:index.php');

}

 ?>