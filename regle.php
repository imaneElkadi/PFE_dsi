<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Ontha</title>

  


    


<div class="regle">



  <style>
body{
    margin:0;
    padding:0;
}

.calculator-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #E5DFF7;
 
}

.calculator-form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #F8F1FC;
  padding: 40px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
 
}

.calculator-form h2 {
  margin: 0 0 20px 0;
  font-size: 36px;
  color: #7F3D8F;
  text-align: center;
}

.form-inputs {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

.form-inputs label {
  margin-bottom: 5px;
  font-size: 18px;
  color: #7F3D8F;
}

.form-inputs input {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: none;
  background-color: #F1EBF7;
  font-size: 16px;
  color: #7F3D8F;
  margin-bottom: 10px;
}

#calculate-btn {
  background-color: #7F3D8F;
  color: #FFFFFF;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 18px;
  cursor: pointer;
  transition: background-color 0.2s;
}

#calculate-btn:hover {
  background-color: #52346B;
}

.calculator-result {
  background-color: #F8F1FC;
  padding: 40px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
  margin-left: 40px;
  
}

.calculator-result h3 {
  margin: 0 0 20px 0;
  font-size: 28px;
  color: #7F3D8F;
}

.ovulation-date, .next-period-date {
  font-size: 24px;
  color: #52346B;
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}



/* about retour button */


.learn-more {
 position: relative;
 display: inline-block;
 cursor: pointer;
 outline: none;
 border: 0;
 vertical-align: middle;
 text-decoration: none;
 font-family: inherit;
 font-size: 15px;

}

button.learn-more {
 font-weight: 600;
 color: #382b22;
 text-transform: uppercase;
 padding: 1.25em 2em;
 background: #fff0f0;
 border: 2px solid #b18597;
 border-radius: 0.75em;
 -webkit-transform-style: preserve-3d;
 transform-style: preserve-3d;
 -webkit-transition: background 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
 transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), background 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
}

button.learn-more::before {
 position: absolute;
 content: '';
 width: 100%;
 height: 100%;
 top: 0;
 left: 0;
 right: 0;
 bottom: 0;
 background: #f9c4d2;
 border-radius: inherit;
 -webkit-box-shadow: 0 0 0 2px #b18597, 0 0.625em 0 0 #ffe3e2;
 box-shadow: 0 0 0 2px #b18597, 0 0.625em 0 0 #ffe3e2;
 -webkit-transform: translate3d(0, 0.75em, -1em);
 transform: translate3d(0, 0.75em, -1em);
 transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), box-shadow 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-box-shadow 150ms cubic-bezier(0, 0, 0.58, 1);
}

button.learn-more:hover {
 background: #ffe9e9;
 -webkit-transform: translate(0, 0.25em);
 transform: translate(0, 0.25em);
}

button.learn-more:hover::before {
 -webkit-box-shadow: 0 0 0 2px #b18597, 0 0.5em 0 0 #ffe3e2;
 box-shadow: 0 0 0 2px #b18597, 0 0.5em 0 0 #ffe3e2;
 -webkit-transform: translate3d(0, 0.5em, -1em);
 transform: translate3d(0, 0.5em, -1em);
}

button.learn-more:active {
 background: #ffe9e9;
 -webkit-transform: translate(0em, 0.75em);
 transform: translate(0em, 0.75em);
}

button.learn-more:active::before {
 -webkit-box-shadow: 0 0 0 2px #b18597, 0 0 #ffe3e2;
 box-shadow: 0 0 0 2px #b18597, 0 0 #ffe3e2;
 -webkit-transform: translate3d(0, 0, -1em);
 transform: translate3d(0, 0, -1em);
}
.ret{
    margin-top:450px;
    margin-right:320px;
}

.footer__logo {
    position: absolute;
  top: 0;
  left: 0;
	}
	
	.footer__logo img {
	height: 50px;
	}

    .pngr {
        position: absolute;
  top: 10px;
  right: 10px;
}

.pngr img {
    width: 200px;
  height: auto;
}

.pngr2{
    position: absolute;
  top: 0;
  left: 35%;
  transform: translateX(-50%);
}
.pngr2 img{
    width: 50%; /* adjust size as desired */

}
        </style>
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


<script>

const calculateBtn = document.getElementById('calculate-btn');
const ovulationDateDiv = document.querySelector('.ovulation-date');
const nextPeriodDateDiv = document.querySelector('.next-period-date');

calculateBtn.addEventListener('click', () => {
  const lastPeriodDate = new Date(document.getElementById('last-period-date').value);
  const cycleLength = parseInt(document.getElementById('cycle-length').value);
  
  // Calculate the ovulation date
  const ovulationDate = new Date(lastPeriodDate.getTime() + (cycleLength - 14) * 24 * 60 * 60 * 1000);
  const ovulationDateFormatted = ovulationDate.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
  
  // Calculate the next period date
  const nextPeriodDate = new Date(lastPeriodDate.getTime() + cycleLength * 24 * 60 * 60 * 1000);
  const nextPeriodDateFormatted = nextPeriodDate.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
  
  // Update the ovulation date and next period date displays
  ovulationDateDiv.textContent = ovulationDateFormatted;
  nextPeriodDateDiv.textContent = nextPeriodDateFormatted;
});


</script>

</div>
</body>
</html>