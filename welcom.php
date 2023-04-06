<?php
      require "connect.php";

      $i=$_POST["iduti"];
      $p=$_POST["pwd"];
      $req="select * from utilisateur where idutilisateur='$i' and passwordd= '$p' ";
      if($res=$cnx->query($req)){
      while($resu=$res->fetch_assoc()){
      header('Location:');}
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">

        
    </head>
    <body>
        
        <?php  header('Location:obl.php'); ?>
        <script> alert(" your id or password is not correct");</script>
    </body>
    </html>