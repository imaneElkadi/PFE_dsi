<?php
require "connect.php";

$idt = $_POST["idu"];
$req = "SELECT nomPrenom, password FROM user WHERE id='$idt'";
if ($res = $cnx->query($req)) {
    while ($result = $res->fetch_assoc()) {
        $n = $result['nomPrenom'];
        $pw = $result['password'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Result</title>
    <link rel="stylesheet" href="obl.css">
</head>
<body>
    <div class="container">
        <h1>Welcome</h1>
        <div class="card">
            <h2><?php echo "Hi, $n!"; ?></h2>
            <p>Your password is: <?php echo $pw; ?></p>
        </div>
        <br>
        <a href="index.php">Try your  password now</a>
    </div>
</body>
</html>
