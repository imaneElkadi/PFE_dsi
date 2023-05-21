<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Créer un site e-commerce</title>
  <link rel="stylesheet" href="shoop.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
</head>
<body>
  <!-- Barre de navigation -->
  <nav>
  <div class="logo">
    <img src="logoo.png" alt="Logo">
  </div>
    <div class="onglets">
    <div class="navbar">
  <a href="dress.php" class="link">Dresses</a>
  <a href="pant.php" class="link">Pants</a>
  <a href="jacket.php" class="link">Jackets</a>
  <a href="shoes.php" class="link">Shoes</a>
  <a href="top.php" class="link">Tops</a>
</div>
      <form>
        <input type="search" placeholder="Rechercher">
      </form>
      
      <p><i class="far fa-heart"></i></p>
      <p><i class="fas fa-shopping-cart"></i></p>
    </div>
  </nav>
  <!-- Fin de la barre de navigation -->
  
  <!-- Header -->
   <header>
     <h1>This is your shop, your home.</h1>
     <a href="contact.php">
  <button>Contact us <i class="fas fa-paper-plane"></i></button>
</a>
   </header>
  <!-- Fin du header -->
  
  <!-- Section principale -->
  <section class="main">
    
    <!-- Toutes les cartes -->
    
    <div class="cards">
      
      <div class="card">
        <img src="https://static.nike.com/a/images/f_auto/q_auto:eco/t_PDP_864_v1/0697fd03-09fd-4b3b-be0b-11b009c671d9/short-en-molleton-sportswear-pour-z5Kgjx.jpg">
        <div class="card-header">
          <h4 class="title">Short Nike</h4>
          <h4 class="price">199$</h4>
        </div>
        <div class="card-body">
          <p>Short moulant pour homme</p>
        </div>
      </div>
      
      <div class="card">
        <img src="https://static.nike.com/a/images/f_auto/q_auto:eco/t_PDP_864_v1/eric5lwitzffpoisq0rj/chaussure-blazer-mid-77-vintage-pour-pMfjs8.jpg">
        <div class="card-header">
          <h4 class="title">Paire de chaussures stylées</h4>
          <h4 class="price">69$</h4>
        </div>
        <div class="card-body">
          <p>Des paires de chaussures stylées pour femme</p>
        </div>
      </div>
      
      <div class="card">
        <img src="https://static.nike.com/a/images/f_auto/q_auto:eco/t_PDP_864_v1/abb537eb-0e70-4e1f-903e-ec46b8657c0d/short-de-training-en-tissu-fleece-dri-fit-pour-n97b2F.jpg">
        <div class="card-header">
          <h4 class="title">Short pour courir</h4>
          <h4 class="price">39$</h4>
        </div>
        <div class="card-body">
          <p>Sport pour courir en plain air pour homme</p>
        </div>
      </div>
      
     </div>
    <!-- Fin de toutes les cartes -->
    
    <!-- Video de presentation -->
    <div class="video">
      <iframe src="https://www.youtube.com/embed/2COSkxxOtXY" allowfullscreen></iframe>
    </div>
    <!-- Fin de la video de presentation -->
  </section>
  <!-- Fin de la section principale -->
  
  <!-- Pied de page -->
  <footer>
    <p>&copy; Contactez-nous au 06 98 87 82 00</p>
    <div class="social-media">
      <p><i class="fab fa-facebook-f"></i></p>
      <p><i class="fab fa-twitter"></i></p>
      <p><i class="fab fa-instagram"></i></p>
      <p><i class="fab fa-linkedin-in"></i></p>
    </div>
  </footer>
  <!-- Fin du pied de page -->
</body>
</html>