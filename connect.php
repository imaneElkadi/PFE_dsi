<?php 
$servername='127.0.0.1:3308';
$username='root';
$mp='';
$bd='gestionwebsite';
$cnx= new mysqli($servername,$username,$mp,$bd);
if ($cnx->connect_error){
    die("Error:$con-> connect_error");
  }
?>