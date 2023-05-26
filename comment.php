<?php
require "connect.php";
$name = $_POST['name'];
$email = $_POST['email'];

$message = $_POST['message'];




// Prepare the SQL statement
$sql = "INSERT INTO comment(name,email,comment)  VALUES ('$name', '$email',  '$message')";

// Execute the query
if ($cnx->query($sql) === TRUE) {
    echo "<script>alert('message sent !');</script>";
    echo "<script>javascript:window.location='contact.php';</script>";
} 


?>
