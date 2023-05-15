<?php
      require "connect.php";

      $i=$_POST["iduti"];
      $p=$_POST["pwd"];
      $req="select * from utilisateur where idutilisateur='$i' and passwordd= '$p' ";
      if($res->numrow()==0){
      while($resu=$res->fetch_assoc()){
      header('Location:page2.php');}}
      
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">

        
    </head>
    <body>
        
        <?php 
         header('Location:obl.php'); ?>
        <script> alert(" your id or password is not correct");</script>
    </body>
    </html>