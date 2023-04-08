<?php 
$servername='localhost';
$username='root';
$mp='';
$bd='ONTHA';
$cnx= new mysqli($servername,$username,$mp,$bd);
if ($cnx->connect_error){
    die("Error:$con-> connect_error");
  }
?>