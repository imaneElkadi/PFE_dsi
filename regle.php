<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Ontha</title>
<link rel="stylesheet" href="regle.css">
  


       </head>
<body>
  
				<div class="calculator-container">

                <div class="ret">
                    <form action="profil.php">
                <button class="learn-more" type="submit"> Retour</button>
                </form>
                </div>

                <div class="footer__logo">
      <img src="logoo.png" alt="Logo">
    </div>

    <div class="pngr">
<img src="regle.png" >

    </div>

<div class="pngr2">

<img src="regle2.png" >
</div>

  <div class="calculator-form">
    <h2>Ovulation Calculator</h2>
    <center>
    <div class="form-inputs">
      <label for="last-period-date">Last Period Date:</label>
      <input type="date" id="last-period-date">
      <label for="cycle-length">Average Cycle Length:</label>
      <input type="number" id="cycle-length" min="20" max="45" step="1">
    </div>
    
    <button id="calculate-btn">Calculate</button>
   
  </div>

  </center>
  <div class="calculator-result">
    <h3>Ovulation Date:</h3>
    <p class="ovulation-date"></p>
    <h3>Next Period Date:</h3>
    <p class="next-period-date"></p>
  </div>
 
</div>
<script src="regle.js"></script>

</div>
</body>
</html>