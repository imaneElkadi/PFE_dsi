<?php
      require "connect.php";
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