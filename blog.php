<!DOCTYPE html>
<html>
<head>
  <title>Women's Beauty Hub</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<style>
body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

header {
  background-color: #cc9cb4;
  padding: 20px;
  display: flex;
  align-items: center;
}

.logo img {
  height: 40px;
  margin-right: 20px;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline-block;
  margin-right: 20px;
}

nav ul li a {
  text-decoration: none;
  color: #fff;
  padding: 10px;
  transition: color 0.3s ease;
}

nav ul li a:hover {
  color: #ffc0cb;
}

.hero {
  /* background-image: url("hero-image.jpg"); */
  background: linear-gradient(106.5deg, rgba(255, 215, 185, 0.91) 23%, rgba(223, 159, 247, 0.8) 93%);
  background-size: cover;
  background-position: center;
  color: rgb(85, 83, 83);
  text-align: center;
  padding: 150px 0;
}

.hero h1 {
  font-size: 48px;
  margin-bottom: 20px;
}

.hero p {
  font-size: 24px;
  margin-bottom: 40px;
}

.video-bg {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: -1;
}

.content {
  max-width: 800px;
  margin: 0 auto;
  padding: 40px;
  color:white;
}

.content h2 {
  font-size: 36px;
  margin-bottom: 20px;
  color:white;
}

.content p {
  font-size: 18px;
  line-height: 1.5;
  margin-bottom: 20px;
  color:white;
}

.image-gallery {
  display: flex;
  overflow-x: scroll;
  padding-bottom: 20px;
  border-radius: 10px;
}

.image-gallery img {
  width: 300px;
  margin-right: 20px;
  border
}

footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 20px;
}

</style>
<body>
  <header>
    <div class="logo">
      <img src="logoo.png" >
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="description.php">About</a></li>
        <li><a href="wellness.php">Wellness</a></li>
        <li><a href="shop.php">Shopping</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <h1>Welcome to Women's Beauty Hub</h1>
    <p>Discover the latest trends, tips, and products to enhance your natural beauty.</p>
  </section>

  <video class="video-bg" src="shop/ved3.mp4" autoplay muted loop></video>

  <main>
    <section class="content">
      <h2>Beauty and Health</h2>
      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum dolor in metus volutpat consectetur. Sed varius sapien vel mauris rhoncus efficitur.</p> -->
      <p>Women's beauty and health are interconnected aspects that contribute to their overall well-being. Beauty goes beyond physical appearance and encompasses various dimensions, including inner confidence, self-care, and a healthy lifestyle.

When it comes to beauty, it's important to remember that every woman possesses her unique qualities and features that make her special. Embracing and celebrating one's individuality is a key aspect of beauty. Taking care of oneself involves nourishing the body, mind, and soul.

Maintaining good health is vital for women to feel their best and radiate beauty from within. This includes adopting a balanced diet rich in nutritious foods, engaging in regular physical activity, and prioritizing mental well-being. Regular exercise not only helps in maintaining a healthy weight but also boosts energy levels, reduces stress, and promotes better sleep.</p>
      <div class="image-gallery">
        <img src="pics/p1.jpg" alt="Image 1">
        <img src="pics/p2.jpg" alt="Image 2">
        <img src="pics/p3.jpg" alt="Image 3">
        <img src="pics/p4.jpg" alt="Image 4">
        <img src="pics/p5.jpg" alt="Image 5">
        <img src="pics/p6.jpg" alt="Image 6">
      </div>
      <p>Remember, beauty is not defined by societal standards or trends. Each woman possesses her unique beauty, and taking care of her health, both physically and mentally, is the key to enhancing that beauty</p>
    </section>
  </main>

  <footer>
    <div class="footer-content">
      <p>&copy; 2023 The ontha. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
