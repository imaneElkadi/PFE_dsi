
<link rel="stylesheet" href="contact.css">
<button data-text="Awesome" class="button">
    <span class="actual-text">&nbsp;Contact&nbsp;</span>
    <span class="hover-text" aria-hidden="true">&nbsp;Contact&nbsp;</span>
</button>
<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
   
    background-color: rgb(215, 215, 215);
  
    }

  
    .container {
      display: flex;
      flex-direction: row;
      max-width: 900px;
      margin: 20px auto;
      background-color: #f2f2f2;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .nav-bar {
      flex-basis: 20%;
      background-color: #f9c5d1; /* Baby pink color */
      color: #fff;
      padding: 20px;
    }

    .nav-bar ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .nav-bar li {
      margin-bottom: 10px;
    }

    .nav-bar a {
      color: #fff;
      text-decoration: none;
    }

    .content {
      flex-basis: 80%;
      padding: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input,
    textarea {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    .btn1 {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .btn1:hover {
      background-color: #555;
    }
  </style>
</head>
<body>


  <div class="container">
    <nav class="nav-bar">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="description.php">About Us</a></li>
        <li><a href="services.php">Services</a></li>
        
      </ul>
    </nav>

    <div class="content">
      <form action="comment.php" method="POST">
        <div class="form-group">
          <label for="name">User Name</label>
          <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="tel" id="phone" name="phone">
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" required></textarea>
        </div>

        <button  class ="btn1" type="submit">Send</button>
  </form>
    
  </div>
</body>
</html>
