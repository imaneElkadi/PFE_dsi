<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="csssignup.css">
</head>
<body>
<video autoplay loop muted plays and-inline class="back-video">
            <source src="pics/vid.mp4" type="video/mp4">
        </video>
<div class="form-box">
<form class="form" method="POST" action="validinsert.php">
    <span class="title">Sign up</span>
    <span class="subtitle">Create a free account with your email.</span>
    <div class="form-container">
    <input type="text" name="id" class="input" placeholder="id" >
      <input type="text" class="input" placeholder="Full Name" name="name">
			<input type="email" class="input" placeholder="Email" name="email">
			<input type="password" class="input" placeholder="Password" name="password">
    </div>
    <button type="submit" >Sign up</button>
</form>
</div>
</body>
</html>