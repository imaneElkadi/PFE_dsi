

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The ONTHA</title>
  <link rel="stylesheet" href="profile.css">
</head>
<body>
  <!-- Header section -->
  <header>
  <nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="paye.php">Shop</a></li>
    <li><a href="blog.php">Blog</a></li>
    <li><a href="description.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
  <div class="footer__logo">
      <img src="logoo.png" alt="Logo">
    </div>
  
  <style>

nav {
  background-color: #f7d3e3; /* set background color */
  height: 80px; /* set height */
  display: flex; /* enable flexbox */
  justify-content: center; /* center items horizontally */
  align-items: center; /* center items vertically */
  border-bottom: 2px solid #e6a9c6; /* add bottom border */
  box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2); /* add box shadow */
 
}

ul {
  list-style: none; /* remove bullet points */
  display: flex; /* enable flexbox */
  margin: 0;
  padding: 0;
}

li {
  margin: 0 15px; /* add margin between items */
}

a {
  color: #333; /* set link color */
  text-decoration: none; /* remove underline */
  font-size: 20px; /* set font size */
  font-weight: bold; /* set font weight */
  transition: all 0.3s ease; /* add transition effect */
  position: relative; /* enable absolute positioning */
}

a:before {
  content: ""; /* add empty content */
  position: absolute; /* set position to absolute */
  bottom: -5px; /* position element below text */
  left: 0; /* align to left */
  width: 100%; /* set width to 100% */
  height: 3px; /* set height */
  background-color: #e6a9c6; /* set background color */
  visibility: hidden; /* hide element by default */
  transform: scaleX(0); /* scale element horizontally */
  transition: all 0.3s ease; /* add transition effect */
}

a:hover:before {
  visibility: visible; /* show element on hover */
  transform: scaleX(1); /* scale element horizontally */
}

a:hover {
  color: #ff69b4; /* change link color on hover */
}

  </style>
</nav>


    <div class="header__content">
      <h1><p style=" padding-top: 50px;" class="cursor typewriter-animation">While physical features can
         be pleasing, a woman's inner beauty, strength, 
        and resilience are what truly make her beautiful 🖤 .
    
        <style>

          /* Google Fonts */
@import url(https://fonts.googleapis.com/css?family=Anonymous+Pro);

/* Cursor */
.cursor{
    position: relative;
    width: 24em;
    margin: 0 auto;
    border-right: 1px solid rgba(255,255,255,.75);
    font-size: 130px;
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
    transform: translateY(-50%); 
     
}
/* Animation */
.typewriter-animation {
  animation: 
    typewriter 5s steps(50) 1s 1 normal both, 
    blinkingCursor 500ms steps(50) infinite normal;
}
@keyframes typewriter {
  from { width: 0; }
  to { width: 100%; }
}
@keyframes blinkingCursor{
  from { border-right-color: rgba(255,255,255,.75); }
  to { border-right-color: transparent; }
}






        </style>
        <script>

        </script>
      </p></h1>
      <form action="aboutMe.php">
      <div class="aboutME">

<button class="btn3" type="submit">
    <div class="wrapper">
        <p class="text">About me </p>

        <div class="flower flower1">
            <div class="petal one"></div>
            <div class="petal two"></div>
            <div class="petal three"></div>
            <div class="petal four"></div>
        </div>
        <div class="flower flower2">
            <div class="petal one"></div>
            <div class="petal two"></div>
            <div class="petal three"></div>
            <div class="petal four"></div>
        </div>
        <div class="flower flower3">
            <div class="petal one"></div>
            <div class="petal two"></div>
            <div class="petal three"></div>
            <div class="petal four"></div>
        </div>
        <div class="flower flower4">
            <div class="petal one"></div>
            <div class="petal two"></div>
            <div class="petal three"></div>
            <div class="petal four"></div>
        </div>
        <div class="flower flower5">
            <div class="petal one"></div>
            <div class="petal two"></div>
            <div class="petal three"></div>
            <div class="petal four"></div>
        </div>
        <div class="flower flower6">
            <div class="petal one"></div>
            <div class="petal two"></div>
            <div class="petal three"></div>
            <div class="petal four"></div>
        </div>
    </div>
</button>
</div>
</form>
    </div>
  </header>




  </div>

  <!-- About section -->
  <section class="about">

   
  </section>

  <!-- Blog section -->
  <section class="blog">
  
<div style="display:flex;" >


      <!-- <div class="blog__post"> -->
        
      <div class="cadre" >
  <h2>Ovulation and Period Calculator</h2>
  <p> Amazing things  what woman's body is capable of.</p>
  <a href="regle.php">Click here to learn more</a>
</div>

<div class="shopping-guide" >
  <h2>Shop for your Fashion</h2>
  <!-- <p style="color:black;">Find the latest fashion trends and styles for women at our online store.</p> -->
  <a href="shop.php" class="cta-button">Shop Now</a>
</div>
  <!-- </div> -->

  
</div>


</section>
  <!-- Contact section -->
  <section class="get-in-touch">
  <div class="container">
  <div class="footer__logo">
      <img src="logoo.png" alt="Logo">
</div>
    
    <h2 class="get-in-touch__heading">Get in touch</h2>
    <center>
    <p style="      font-family: 'Montserrat', sans-serif;
    font-size: 24px;
    line-height: 1.5;
    color: #333;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Got a question or feedback? Contact us!</p></center>
    <form class="get-in-touch__form" action="send.php" method="post">
      <div class="form-group">
        
        <input class="form-control" name="nom" type="text" placeholder="Name" required>
      </div>
      <div class="form-group">
        <input class="form-control" type="email" name="email" placeholder="Email" required>
      </div>

      <div class="form-group">
        <textarea class="form-control" name="message" placeholder="Message" required></textarea>
      </div>
      <div>
<center>
 
<button class="btn2" type="submit"> Send</button>

      </center>
      </div>
    </form>
  </div>
</section>

  <!-- Footer section -->
  <footer>
    <div class="footer__logo">
      <img src="logoo.png" alt="Logo">
    </div>
    
    <div class="footer__info">
      <p style="color:black;"> © 2023 The ONTHA</p>
    </div>
  </footer>
</body>
</html>
