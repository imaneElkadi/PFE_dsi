<?php
require "connect.php";
$id=$_POST["id"];
$nomP=$_POST["name"];
$email=$_POST["email"];
$ps=$_POST["Password"];
$re="insert into utilisateur values('$id','$nomP','$email','$ps')";
if($cnx->query($re)){
header('Location:index.php');

}

 ?>