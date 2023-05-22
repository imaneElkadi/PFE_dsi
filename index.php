
<!DOCTYPE html>
<html>
  <head data-aos="fade-top">
    <title>Women's Beauty Website</title>
    <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="front.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   
  </head>
  <body>
    <header>
      <nav>
        <img src="pics/logoo.png">
        
        <h1>the ontha</h1>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="description.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact-us</a></li>
        </ul>
      </nav>
    </header>
    <div class="haut" data-aos="fade-top">
      <br><br>
  <h1>the women's world</h1>
  <h5>join us my ladies te get the right beauty grow up steps </h5>
    </div>
    <div class="f">
      <h1>Get ready my ladies</h1>
    </div>
    <div class="im">

    </div>
    <div class="txt" data-aos="fade-left">
      <h1>BEAUTY <span> & ELEGANCE</span> </h1>
       <h3> "The ontha" website is designed  <br>
        to cater to the diverse interestsandneeds of beauty <br>
         enthusiasts across the globe. <br>
         </h3> 
       <p> it's space for beauty lovers to discover <br>
        and explore the latest  trends, products, and techniques <br>
         in the beauty industry.<br>
          <br>
        it olso can offer advice and tips on beauty routines,skin concerns<br>
        hair problems, and makeup application for different skin <br>
           types and tones. <br>
         </p> </div> 
    <!-- form login................................................................... -->
    <form method="POST" action="page2.php">
    <form method="POST" action="validinsert.php" data-aos="fade-right">
<div class="container">
  <div class="box"></div>
  <div class="container-forms">
    <div class="container-info">
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Have an account?
            </p>
            <div class="btn">
              Log in
            </div>
          </div>
        </div>
      </div>
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Don't have an account? 
            </p>
            <div class="btn">
              Sign up
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-form">
      <div class="form-item log-in">
        <div class="table">
          <div class="table-cell">
            
            <input name="id" placeholder="idutilisateur" type="text" />
            <input name="pwd" placeholder="Password" type="Password" />
            <input name="idutil" placeholder="idutilisateur" type="text" />
            <input name="Pwd" placeholder="Password" type="Password" />
                        <div class="btn">
             <a href="welcom.php">log in</a>
            </div>
          </div>
        </div>
      </div>
      <div class="form-item sign-up">
        <div class="table">
          <div class="table-cell">
            <input name="id" placeholder="idUtilisateur" type="text" />
              <input name="name" placeholder="Full Name" type="text" />
                <input name="email" placeholder="email" type="email" />
                  <input name="Password" placeholder="Password" type="Password" />
            <div class="bttn">
             <button type="submit"> Sign up</button>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="u.js"></script>
  <!-- end form login........................... -->
  <div class="img" data-aos="fade-top">
    <img src="pics/img1.jpeg">
    <img src="pics/img.jpg">
  </div>
    <!--........................... -->



    <main data-aos="fade-top">
      <section id="hero">
        <h1>Welcome to Women's Beauty Website</h1>
        <p>learn more about our Website perpse</p>
        <a href="description.php" class="btn">Learn More</a>
        <img src="pics/iman.jpeg">
      </section>
      <section id="services" data-aos="fade-left">
        <h2>Our Services</h2>
        <ul>
          <li> <a href="mo.php"> Makeup/outfits</a></li>
          <li> <a href="h.php"> Hair</a></li>
          <li> <a href="skin.php"> Skincare</a></li>
          <li> <a href="wellness.php"> Wellness</a></li>
  
        </ul>
      </section>
 <!-- hair and modeling space ...........................................................-->

      <h1 class="title" data-aos="fade-right"> Hairstyle to try this season</h1>
<div class="slider" x-data="{start: true, end: false}">
  <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
    <div class="slider__item">
      <img class="slider__image" src="pics/hr1.jpg" alt="Image">
      <div class="slider__info">
      </div>
    </div>
    <div class="slider__item">
      <img class="slider__image" src="pics/hr2.jpg" alt="Image">
      <div class="slider__info">
        
      </div>
    </div>
    <div class="slider__item">
      <img class="slider__image" src="pics/hr3.jpg" alt="Image">
      <div class="slider__info">
      </div>
    </div>
    <div class="slider__item">
      <img class="slider__image" src="pics/hr4.jpg" alt="Image">
      <div class="slider__info">
      </div>
    </div>
    <div class="slider__item">
      <img class="slider__image" src="pics/hr5.jpg" alt="Image">
      <div class="slider__info">
      </div>
    </div>
    <div class="slider__item">
      <img class="slider__image" src="pics/hr6.jpg" alt="Image">
      <div class="slider__info">
      </div>
    </div>
    <div class="slider__item">
      <img class="slider__image" src="pics/hr7.jpg" alt="Image">
      <div class="slider__info">
      </div>
    </div>
    <div class="slider__item">
      <img class="slider__image" src="pics/hr8.jpg" alt="Image">
      <div class="slider__info">
      </div>
    </div>
    <div class="slider__item">
      <img class="slider__image" src="pics/hr9.jpg" alt="Image">
      <div class="slider__info">
      </div>
    </div>
    <div class="slider__item">
      <img class="slider__image" src="pics/hr10.jpg" alt="Image">
      <div class="slider__info">
      </div>
    </div>
    <div class="slider__item">
      <img class="slider__image" src="pics/hr11.jpg" alt="Image">
      <div class="slider__info">
      </div>
    </div>
  </div>
  <div class="slider__nav">
    <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
    <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
  </div>
</div>
<!-- tous..................... -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js'>
  </script>
  <h1 class="title" data-aos="fade-left">DIFFERENT THINGS FOR YOU </h1>
<div class="slider" x-data="{start: true, end: false}">
  <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
    <div class="slider__item">
      <img class="slider__image" src="pics/hr1.jpg" alt="Image">
    </div>
    <div class="slider__item">
      <img class="slider__image" src="pics/hr2.jpg" alt="Image">
      <div class="slider__info">
        
      </div>
    </div>
    <div class="slider__item">
      <img class="slider__image" src="pics/hr3.jpg" alt="Image">
      <div class="slider__info">
      </div>
    </div>
    <div class="slider__item">
      <img class="slider__image" src="pics/hr4.jpg" alt="Image">
      <div class="slider__info">
      </div>
    </div>
    <div class="slider__item">
      <img class="slider__image" src="pics/hr5.jpg" alt="Image">
      <div class="slider__info">
      </div>
    </div>
    <div class="slider__item">
      <img class="slider__image" src="pics/hr5.jpg" alt="Image">
      <div class="slider__info">
      </div>
    </div>
  </div>
  <div class="slider__nav">
    <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
    <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
  </div>
</div>
<h1 class="title" data-aos="fade-right">the best haircuts for every face type  </h1>
<div class="hr" data-aos="fade-left" >
<a href="long.php">
<img src="pics/hrr1.jpg">
</a>
<a href="square.php">
<img src="pics/hrr2.jpg">
</a>
<a href="heart.php">
<img src="pics/hrr3.jpg">
</a>
<a href="oval.php">
<img src="pics/hrr4.jpg">
</a>
</div>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js'>
  </script>
    </main>
    <footer data-aos="fade-top">
        <div class="div1">&copy; the ONTHA <br>
      <p>&copy; the ONTHA <br>
      &copy; www.theOntha.com <br>
      -email:swdsara5@gmail.com <br>
      -adresse 
      </div>
       </p>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>