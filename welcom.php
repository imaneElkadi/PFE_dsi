<?php
session_start();
      include  "connect.php";
      $i=$_SESSION['id'];
      $p=$_SESSION['pwd'];
      $req="select * from user where id='$i' and password= '$p' ";
      $res=$cnx->query($req);
      if($res->num_rows != 0){
      header('Location:obl.php');}
      else if($res->num_rows == 0)
        header('Location:profil.php');
   
     
    ?>
    

