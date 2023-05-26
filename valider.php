
<?php
session_start();

if (isset($_POST['age'])) {
  $age = $_POST['age'];
$_SESSION['age']=$age;
}

if (isset($_POST['height'])) {
  $height = $_POST['height'];
  $_SESSION['height']=$height;
}

if (isset($_POST['weight'])) {
  $weight = $_POST['weight'];
  $_SESSION['weight']=$weight;
}

if (isset($_POST['skinColor'])) {
  $skinColor = $_POST['skinColor'];
  $_SESSION['skinColor']=$skinColor;
}

if (isset($_POST['bodyShape'])) {
  $bodyShape = $_POST['bodyShape'];
  $_SESSION['bodyShape']=$bodyShape;
}












































?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>THE ONTHA</title>
  <link rel="stylesheet" href="valider.css">
</head>
<body>

<header>
<h1 >Additional information :</h1>
    <div class="logo">
    <img src="logoo.png" alt="Logo">
  </div>
</header>
<img src="shop/hijab.png" style="display: block; 
  max-width: 100%;
  width:200px;
  height: 200px; 
  margin:  auto 100px;
 
  ">
  <img src="shop/nohijabi.png" style=" position: absolute;
  top: 200px;
  right: 300px;
  max-width: 100%;
  height: 200px;
  width=:200px;
  ">
  <form action="choice.php" method="POST">
  <div class="cadre">
  <h2>Do you wear Hijab?</h2>
<div class="radio-container">
  <input type="radio" id="radio1" name="hijabi" value="hijabi" />
  <label for="radio1" class="radio-label">Yes</label>
</div>

<div class="radio-container" style=" margin-left: 20px;">
  <input type="radio" id="radio2" name="hijabi" value="nohijabi" />
  <label for="radio2" class="radio-label">No</label>
</div>
</div>
<button type="submit"> Valider</button>
</form>

</body>
</html>