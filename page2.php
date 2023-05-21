
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The ONTHA</title>
    <link rel="stylesheet" href="pages2.css">

<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <!-- <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li> -->
    <li class="profile"><a href="profil.php">My Profile</a></li>
  </ul>
</nav>
<h1>Welcome .......</h1>
<script src="test.js">
</script>
</head>
<body>

<form action="valider.php" method="POST">
<div class="d1">
<fieldset style="width:300px;"  class="age">
<label for="age" style="font-size:30px; color:#65426c;"> choose your age:</label>
</br>
<label class="container"> 18---30 years old
  <input type="checkbox" name="18/30" value="18/30" >
  <div class="checkmark"></div>
</label>
</br> 
<label class="container"> 31---45 years old
  <input type="checkbox"  name="31/45" value="31/45" >
  <div class="checkmark"></div>
</label>
</br>
<label class="container"> 46---60 years old
  <input type="checkbox" name="46/60" value="46/60"  >
  <div class="checkmark"></div>
</label>
</br>
</fieldset>

<hr>

<fieldset style="width:300px;"  class="height">
<label for="height" style="font-size:30px; color:#65426c;"> choose your height:</label>
</br>
<label class="container"> 140---155 cm
  <input type="checkbox" name="140/155" value="140/155" >
  <div class="checkmark"></div>
</label>
</br> 
<label class="container"> 156---172 cm
  <input type="checkbox" name="156/172" value="156/172" >
  <div class="checkmark"></div>
</label>
</br>
<label class="container"> 173---185 cm
  <input type="checkbox" name="173/185" value="173/185">
  <div class="checkmark"></div>
</label>
</br>
</fieldset>
</div>
<hr>

<div class="d2">
<fieldset style="width:300px;"  class="weight">
<label for="weight" style="font-size:30px; color:#65426c;"> choose your weight:</label>
</br>
<label class="container"> 35---45 kg
  <input type="checkbox" name="35/45" value="35/45" >
  <div class="checkmark"></div>
</label>
</br> 
<label class="container"> 46---55 kg
  <input type="checkbox" name="46/55" value="46/55">
  <div class="checkmark"></div>
</label>
</br>
<label class="container"> 56---65 kg
  <input type="checkbox" name="56/65" value="56/65" >
  <div class="checkmark"></div>
</label>
</br>
<label class="container"> 66---75 kg
  <input type="checkbox" name="66/75" value="66/75">
  <div class="checkmark"></div>
</label>
</br>
<label class="container"> 76---85 kg
  <input type="checkbox" name="76/85" value="76/85" >
  <div class="checkmark"></div>
</label>
</br>
<label class="container"> 86---95 kg
  <input type="checkbox" name="86/95" value="85/95">
  <div class="checkmark"></div>
</label>
</br>
<label class="container"> 96---120 kg
  <input type="checkbox" name="96/120" value="96/120">
  <div class="checkmark"></div>
</label>
</br>
</fieldset>

<hr>

<fieldset style="width:300px; height:300px;"  class="skin">
<label for="skinColor" style="font-size:30px; color:#65426c;"> choose your skin color:</label>
</br>
<label class="container"> Fair or light skin
  <input type="checkbox" name="light_skin" value="light_skin" >
  <div class="checkmark"></div>
</label>
</br> 
<label class="container"> Medium or olive skin
  <input type="checkbox" name="olive_skin" value="olive_skin" >
  <div class="checkmark"></div>
</label>
</br>
<label class="container"> Dark or brown skin
  <input type="checkbox" name="brown_skin" value="brown_skin">
  <div class="checkmark"></div>
</label>
</br>
<label class="container"> Black skin
  <input type="checkbox" name="black_skin" value="black_skin">
  <div class="checkmark"></div>
</label>
</br>
</fieldset>
</div>

<hr>

<div class="d3">
<fieldset style="width:400px; height: 400px; "  class="body">
<label for="body" style="font-size:30px; color:#65426c;"> choose your body shape:</label>
</br>
<label class="container"> Triangle/Pear
  <input type="checkbox" name="pear" value="peare">
  <div class="checkmark"></div>
</label>
</br> 
<label class="container"> Hourglass
  <input type="checkbox" name="hourglass" value="hourglass">
  <div class="checkmark"></div>
</label>
</br>
<label class="container"> Inverted Triangle
  <input type="checkbox" name="inverted_triangle" value="inverted_triangle">
  <div class="checkmark"></div>
</label>
</br>
<label class="container"> Rectangle/Straight
  <input type="checkbox" name="rectangle" value="rectangle">
  <div class="checkmark"></div>
</label>
</br>
<label class="container"> Apple
  <input type="checkbox" name="apple" value="apple">
  <div class="checkmark"></div>
</label>
</br>
<a href="image.php" style="color:black;"> learn more about body shapes.</a>
</fieldset>

<hr>

<fieldset style="width:400px; "  class="hair" >
<label for="hair" style="font-size:30px; color:#65426c;"> choose your hair color:</label>
</br>
<label class="container"> Black
  <input type="checkbox" name="black" value="black">
  <div class="checkmark"></div>
</label>
</br> 
<label class="container"> Brown (light, medium, and dark)
  <input type="checkbox" name="brown" value="brown">
  <div class="checkmark"></div>
</label>
</br>
<label class="container"> Blonde (platinum, golden, ash, and strawberry)
  <input type="checkbox" name="blonde" value="blonde">
  <div class="checkmark"></div>
</label>
</br>
<label class="container">Red (auburn, copper, and ginger)
  <input type="checkbox" name="red" value="red">
  <div class="checkmark"></div>
</label>
</br>
<label class="container">Gray or silver
  <input type="checkbox" name="gray" value="gray">
  <div class="checkmark"></div>
</label>
</br>
<label class="container">White
  <input type="checkbox" name="white" value="white">
  <div class="checkmark"></div>
</label>
</br>
<label class="container">Blue, pink, purple, or other vivid colors (often achieved through hair dye)
  <input type="checkbox" name="colorful" value="colorful">
  <div class="checkmark"></div>
</label>
</br>
</fieldset>

</div>


<hr>


</br>
<div class="btn1">
<button data-label="Register" type="submit"  onsubmit="return validateForm()" class="rainbow-hover">
  <span class="sp">Register</span>
</button>
</div>

</form>

</br>

<footer>
      <p>&copy; the ONTHA</p>
    </footer>

</body>
</html>