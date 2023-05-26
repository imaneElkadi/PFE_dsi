

<!-- signup_process.php -->
<?php
require "connect.php";

// Retrieve username and password from the form
$username = $_POST['idutil'];
$password = $_POST['Password'];
$name = $_POST['name'];
$email = $_POST['email'];
// Check if the username already exists
$sql = "SELECT * FROM user WHERE id = '$username'";
$result = $cnx->query($sql);

if ($result->num_rows > 0) {
    // Username already taken, display an error message or redirect to a failure page
    echo "<script>alert('Username not valide');</script>";
    echo "<script>javascript:window.location='index.php';</script>";
    exit();
} else {
    // Insert the new user into the database
    $sql = "INSERT INTO user VALUES ('$username','$name','$email', '$password')";
    $cnx->query($sql);
   
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The ONTHA</title>
    <link rel="stylesheet" href="pages2.css">
</head>
<body>
    <header>
    <div class="logo">
    <img src="logoo.png" alt="Logo">
  </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="description.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!-- <li class="profile"><a href="profil.php">My Profile</a></li> -->
            </ul>
        </nav>
        <h1>Welcome <?php   
        $nom=$_POST['name'];
        echo"$nom";
        ?></h1>
    </header>

    <form action="valider.php" method="POST">
        <div class="container">
            <fieldset class="age">
                <legend>Choose your age:</legend>
                <label>
                    <input type="radio" name="age" value="18-30" required>
                    <span>18-30 years old</span>
                </label>
                <label>
                    <input type="radio" name="age" value="31-45">
                    <span>31-45 years old</span>
                </label>
                <label>
                    <input type="radio" name="age" value="46-60">
                    <span>46-60 years old</span>
                </label>
            </fieldset>
            <hr>
            
            <fieldset class="height">
                <legend>Choose your height:</legend>
                <label>
                    <input type="radio" name="height" value="140-155" required>
                    <span>140-155 cm</span>
                </label>
                <label>
                    <input type="radio" name="height" value="156-172">
                    <span>156-172 cm</span>
                </label>
                <label>
                    <input type="radio" name="height" value="173-185">
                    <span>173-185 cm</span>
                </label>
            </fieldset>
            <hr>
            
            <fieldset class="weight">
                <legend>Choose your weight:</legend>
                <label>
                    <input type="radio" name="weight" value="35-45" required>
                    <span>35-45 kg</span>
                </label>
                <label>
                    <input type="radio" name="weight" value="46-55">
                    <span>46-55 kg</span>
                </label>
                <label>
                    <input type="radio" name="weight" value="56-65">
                    <span>56-65 kg</span>
                </label>
                <label>
                    <input type="radio" name="weight" value="66-75">
                    <span>66-75 kg</span>
                </label>
              
              
            </fieldset>
            <hr>
            
            <fieldset class="skin">
                <legend>Choose your skin color:</legend>
                <label>
                    <input type="radio" name="skinColor" value="light_skin" required>
                    <span>Fair or light skin</span>
                </label>
               
                <label>
                    <input type="radio" name="skinColor" value="brown_skin">
                    <span>Dark or brown skin</span>
                </label>
                <label>
                    <input type="radio" name="skinColor" value="black_skin">
                    <span>Black skin</span>
                </label>
            </fieldset>
            <hr>
            
            <fieldset class="body">
                <legend>Choose your body shape:</legend>
                <label>
                    <input type="radio" name="bodyShape" value="pear" required>
                    <span>Triangle/Pear</span>
                </label>
                <label>
                    <input type="radio" name="bodyShape" value="hourglass">
                    <span>Hourglass</span>
                </label>
               
                <label>
                    <input type="radio" name="bodyShape" value="rectangle">
                    <span>Rectangle/Straight</span>
                </label>
                <label>
                    <input type="radio" name="bodyShape" value="apple">
                    <span>Apple</span>
                </label>
                <a  class="lien" href="image.php">Learn more about body shapes.</a>
            </fieldset>
          
            <hr>

            <button type="submit" style="font-size:30px;">Register</button>
        </div>
    </form>
    <footer>
    <div class="footer-info">
        <div>
            <h4>About Us</h4>
            <ul>
              <p>Welcome to our website! We are
                 your ultimate destination for beauty and shopping
                 , curated exclusively for women.

Indulge in a world of glamorous products and discover
 the latest trends in beauty, skincare, and fashion. 
 Our carefully selected collection offers a diverse range 
of high-quality products that cater to your unique style and preferences.</p>
            </ul>
        </div>
        <div>
            <h4>Services</h4>
            <ul>
                <li><a href="shop.php">Shopping</a></li>
                <li><a href="skin.php">Skin care</a></li>
                <li><a href="h.php">Hair</a></li>
                <li><a href="wellness.php">Wellness</a></li>
                <li><a href="mo.php">MakeUp</a></li>
                
            </ul>
        </div>
        <!-- Add more divs for additional information -->
    </div>
    <hr class="footer-divider">
    <a class="btn btn-icon btn-facebook" href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
<a class="btn btn-icon btn-twitter" href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
<a class="btn btn-icon btn-googleplus" href="#"><i class="fa fa-google-plus"></i><span>Google+</span></a>
<a class="btn btn-icon btn-pinterest" href="#"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
<a class="btn btn-icon btn-linkedin" href="#"><i class="fa fa-linkedin"></i><span>LinkedIn</span></a>

    <hr class="footer-divider">
    <div class="footer-credits">
        &copy; 2023 The ONTHA. All rights reserved.
    </div>
</footer>

</body>
</html>
