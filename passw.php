<?php 
require "connect.php";

    $idt=$_POST["idu"];
    $req="select nomPrenom,passwordd from utilisateur where idutilisateur='$idt'";
    if($res=$cnx->query($req)){
    while($result=$res->fetch_assoc()){
    $n=$result['nomPrenom'];
    $pw=$result['passwordd'];}
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="csssignup.css">
</head>
<body >
<video autoplay loop muted plays and-inline class="back-video">
            <source src="pics/vidd.mp4" type="video/mp4">
        </video>
    <div class="dem"><
<img src="pics/pic4.png" ><br><br>
<fieldset>
<?php
echo " hi $n this is your password $pw"
  ?>
  </fieldset>
 <br>
 <a href="index.php">try your password again </a>
</div>
    
</body>
</html>