<!-- login_process.php -->
<?php
session_start();
require "connect.php";

// Retrieve username and password from the form
$username = $_POST['id'];
$password = $_POST['pwd'];

// Query the database to check if the user exists
$sql = "SELECT * FROM user WHERE id = '$username' AND password = '$password'";
$result = $cnx->query($sql);

if ($result->num_rows > 0) {
    // User found, redirect to the home page or perform additional actions
    header("location:profil.php");
} else {
    // User not found, display an error message or redirect to a failure page
    echo "<script>alert('password or id is wrong');</script>";
    echo "<script>javascript:window.location='obl.php';</script>";
    exit();
}

$sql2 = "SELECT * FROM user WHERE id = '$username' AND password = '$password'";
$res = $cnx->query($sql2);

while($resul=$res->fetch_assoc()){
   $a =$resul['nomPrenom'];
   $b=$resul['email'];
}

$_SESSION['nom']=$a;
$_SESSION['email']=$b



?>
