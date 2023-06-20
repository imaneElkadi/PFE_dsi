<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    header {
   background-color:#e7c8b2 ;
    box-shadow: 0 2px 5px rgba(16, 14, 14, 0.1);
    height: 60px;
    margin-right: 0px;
  }
  nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1320px;
    margin: 0 auto;
    height: 60px;
    padding: 2px;
  }
  nav img{
    display:flex;
    z-index: 1;
  margin-inline-start: 0%;
    max-width: 60px;
    position: relative;
  }
  nav h1{
    display: flex;
    margin-right:130px;
    font-family: cursive ;
    margin-left: -60px;
  }
  nav ul {
    display: flex;
    list-style: none;
    margin-left: 500px;
  }
  
  nav ul li {
    margin-right: 50px;
  }
  
  nav ul li:last-child {
    margin-right: 0;
  }
  
  nav ul li a {
    color: #333;
    text-decoration: none;
    font-weight: bold;
    transition:
    color 0.2s ease-in-out;
}

nav ul li a:hover {
color: #ffffff;
}
</style>
<body>
<header>
      <nav>
        <img src="pics/logoo.png">
        
        <h1 >the ontha</h1>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="description.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact-us</a></li>
        </ul>
      </nav>
    </header>
</body>
</html>