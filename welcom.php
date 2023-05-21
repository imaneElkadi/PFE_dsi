<?php
session_start();
      require "connect.php";
<<<<<<< HEAD

      $i=$_SESSION['id'];
      $p=$_SESSION['pwd'];
      $req="select * from user where id='$i' and password= '$p' ";
      $res=$cnx->query($req);
      if($res->num_rows!=0){
      header('Location:profil.php');}
      else if($res->num_rows==0){
    
   
         header('Location:obl.php'); 
         echo" <script> alert(' your id or password is not correct');</script>";
      
   
      } ?>
=======
      $i=$_POST["idutil"];
      $p=$_POST["Pwd"];
      $req="select * from utilisateur where idutilisateur='$i' and passwordd= '$p' ";
      if($res=$cnx->query($req)){
        header('Location:obl.php');}
        else{
        header('Location:page2.php');}
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">

        
    </head>
    <body>
    </body>
    </html>
>>>>>>> 35ba77e15b6ef810e1668b07c59979066e1fa663
