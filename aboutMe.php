



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>The ONTHA</title>
  <link rel="stylesheet" href="aboutMe.css">

</head>
<body>

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900|Material+Icons'><link rel="stylesheet" href="./style.css">

</head>
<body> -->
<!-- partial:index.partial.html -->
<!-- <div class="container"> -->
  <!-- Btn-->
  <!-- <button class="btn4"><span>Account Settings</span><i class="material-icons">public</i>
    <ul class="dropdown"> -->
      <!-- <li class="active"><a href="#">Profile Information</a></li> -->
      <!-- <li><a href="#">Change Password</a></li> -->
      <!-- <li><a href="#">Become <b>PRO</b></a></li> -->
      <!-- <li><a href="#">Help</a></li> -->
      <!-- <li><a href="index.php">Log Out</a></li>
    </ul>
  </button>
</div> -->
<!-- partial -->



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
    <!-- Navbar top -->
    <div class="navbar-top">
        <div class="title">
            <h1>Profile</h1>
        </div>

        <!-- Navbar -->
        <ul>
        
            <li>
                <a href="index.php">
                    <i class="fa fa-sign-out-alt fa-2x"></i>
                </a>
            </li>
        </ul>
        <!-- End -->
    </div>
    <!-- End -->

    <!-- Sidenav -->
    <div class="sidenav">
        <div class="profile">
            <img src="logoo.png" alt="" width="100" height="100">

            <div class="name">
                ImDezCode
            </div>
           
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="#profile" class="active">Profile</a>
                <hr align="center">
            </div>
            <div class="url">
                <a href="blog.php">Liste of Recommendation</a>
                <hr align="center">
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="main">
        <h2>IDENTITY</h2>
        <div class="card">
            <div class="card-body">
               
            <?php
            session_start();

            $nom=$_SESSION['nom'];
            $email=$_SESSION['email'];
            $age=0;
            
            ?>
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?php echo "$nom";?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo "$email";?></td>
                        </tr>
                        <!-- <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>Bali, Indonesia</td>
                        </tr> -->
                        <tr>
                            <td>Hobbies</td>
                            <td>:</td>
                            <td><input type="text" id="inputField" >
      <button id="saveButton">Save</button>
     <p id="savedParagraph"></p></td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td>:</td>
                            <td><?php echo "$age";?></td>
                        </tr>
                        <!-- <tr>
                            <td>Skill</td>
                            <td>:</td>
                            <td>PHP, HTML, CSS, Java</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>

        <h2>SOCIAL MEDIA</h2>
        <!-- <div class="card">
            <div class="card-body"> -->
               
            <!-- <div class="container2"> -->
   
    <div class="social-icons">
      <a href="https://www.facebook.com/" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="https://twitter.com/home" class="icon twitter"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/" class="icon instagram"><i class="fab fa-instagram"></i></a>
      <a href="linkedin.com" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
    </div>
  <!-- </div> -->

        <!-- </div>
    </div> -->








<script src="about.js"></script>
</body>
</html>
