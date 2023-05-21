<?php 
$servername='127.0.0.1:3308';
$username='root';
$mp='';
<<<<<<< HEAD
$bd='ontha';
=======
$bd='gestionwebsite';
>>>>>>> 35ba77e15b6ef810e1668b07c59979066e1fa663
$cnx= new mysqli($servername,$username,$mp,$bd);
if ($cnx->connect_error){
    die("Error:$con-> connect_error");
  }
?>