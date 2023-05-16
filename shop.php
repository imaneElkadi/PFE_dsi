<!DOCTYPE html>
<html>
<head>
  <title>Shopping Page</title>
  <link rel="stylesheet" href="shop.css">
  <style>
    /* Fancy CSS styles */
      body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .header {
      text-align: center;
      padding: 20px;
      background-color: grey;
      color: black;
    }

    .options {
      text-align: center;
      padding: 20px;
    }

    .options select {
      padding: 10px;
      font-size: 16px;
      border-radius: 4px;
    }

    .products {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .product {
      width: 300px;
      margin: 20px;
      padding: 20px;
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product img {
      width: 100%;
      height: auto;
      margin-bottom: 10px;
    }

    .product h3 {
      margin: 0;
      font-size: 18px;
    }

    .product p {
      color: #888;
      font-size: 14px;
    }
    .logo {
  width: 60px; /* Adjust the width as needed */
  float: left; /* Positions the logo on the left */
}


.logo img {
  width: 100%;
  height: auto;

}
.logo2 {
  width: 60px; /* Adjust the width as needed */
  float: right; /* Positions the logo on the left */
}


.logo2 img {
  width: 100%;
  height: auto;

}
button {
 padding: 1rem 2rem;
 font-weight: 700;
 background: rgb(255, 255, 255);
 color: blueviolet;
 border-radius: .5rem;
 border-bottom: 2px solid blueviolet;
 border-right: 2px solid blueviolet;
 border-top: 2px solid white;
 border-left: 2px solid white;
 transition-duration: 1s;
 transition-property: border-top, 
    border-left, 
    border-bottom,
    border-right,
    box-shadow;
}

button:hover {
 border-top: 2px solid blueviolet;
 border-left: 2px solid blueviolet;
 border-bottom: 2px solid rgb(238, 103, 238);
 border-right: 2px solid rgb(238, 103, 238);
 box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px;
}
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>The Ontha Shopping </h1>
      <div class="logo">
  <img src="logoo.png" alt="Logo">
  
</div>
<div class="logo2">
  <img src="logoo.png" alt="Logo">
  
</div>
    </div>

    <div class="options">
      <label for="gender">Choose Categorie:</label>
      <select id="gender" onchange="location.href=this.value;">
        <option value="dress.php">Dresses</option>
        <option value="pant.php">Pants</option>
        <option value="top.php">Tops</option>
        <option value="jacket.php">Jackets</option>
        <option value="shoes.php">Shoes</option>
      </select>
    </div>

    <div class="products">
      <!-- Product 1 -->
      <div class="product">
        <img src="shop/item1.png" alt="Product 1">
        <h3> 61.50 $</h3>
     
       <a  style="text-decoration:none;" href="https://ma.shein.com/SHEIN-MOD-Ditsy-Floral-Print-Puff-Sleeve-Knot-Front-Split-Thigh-Dress-p-15331173-cat-1727.html?src_identifier=on%3DIMAGE_COMPONENT%60cn%3DIMAGE_COMPONENT_2%60hz%3DhotZone_1%60ps%3D2_1%60jc%3Dreal_1727&src_module=Women&src_tab_page_id=page_home1684184351137&mallCode=1"> View Product</a>
       
       <button>Add to Cart</button>
      </div>

      <!-- Product 2 -->
      <div class="product">
        <img src="shop/item2.png" alt="Product 2">
        <h3>113.0 $</h3>
        <a style="text-decoration:none;" href="https://ma.shein.com/Women-Bow-Decor-Point-Toe-Chunky-Heeled-Pumps-Funky-Red-Lycra-Ankle-Strap-Pumps-p-15589821-cat-1750.html?src_identifier=on%3DIMAGE_COMPONENT%60cn%3DIMAGE_COMPONENT_2%60hz%3DhotZone_8%60ps%3D2_8%60jc%3Dreal_1745&src_module=Women&src_tab_page_id=page_home1684186766144&mallCode=1">View Product</a>
        <button>Add to Cart</button>
      </div>

      <!-- Product 3 -->
      <div class="product">
        <img src="shop/item3.png" alt="Product 3">
        <h3>69.70 $</h3>
       <a style="text-decoration:none;" href="https://ma.shein.com/SHEIN-Unity-E-Women-Coats-p-15493028-cat-1735.html?src_identifier=on%3DIMAGE_COMPONENT%60cn%3DIMAGE_COMPONENT_2%60hz%3DhotZone_3%60ps%3D2_3%60jc%3Dreal_2037&src_module=Women&src_tab_page_id=page_home1684186807013&mallCode=1">View Product</a>
        <button>Add to Cart</button>
      </div>
         <!-- Product 4 -->
         <div class="product">
        <img src="shop/item4.png" alt="Product 3">
        <h3>70.80 $</h3>
       <a style="text-decoration:none;" href="https://ma.shein.com/Contrast-Plaid-Button-Front-Overshirt-p-15074578-cat-1735.html?src_identifier=on%3DIMAGE_COMPONENT%60cn%3DIMAGE_COMPONENT_2%60hz%3DhotZone_3%60ps%3D2_3%60jc%3Dreal_2037&src_module=Women&src_tab_page_id=page_home1684186807013&mallCode=1">View Product</a>
        <button>Add to Cart</button>
      </div>
         <!-- Product 5 -->
         <div class="product">
        <img src="shop/item5.png" alt="Product 3">
        <h3>104.10 $</h3>
       <a style="text-decoration:none;" href="https://ma.shein.com/SHEIN-PETITE-High-Waist-Straight-Leg-Jeans-p-15420271-cat-1934.html?src_identifier=on%3DIMAGE_COMPONENT%60cn%3DIMAGE_COMPONENT_2%60hz%3DhotZone_7%60ps%3D2_7%60jc%3Dreal_1930&src_module=Women&src_tab_page_id=page_home1684189468346&mallCode=1">View Product</a>
        <button>Add to Cart</button>
      </div>
         <!-- Product 6 -->
         <div class="product">
        <img src="shop/item6.png" alt="Product 3">
        <h3>22.20 $</h3>
       <a style="text-decoration:none;" href="https://ma.shein.com/SHEIN-EZwear-Split-Hem-Tube-Top-p-15633259-cat-2223.html?src_identifier=on%3DIMAGE_COMPONENT%60cn%3DIMAGE_COMPONENT_2%60hz%3DhotZone_2%60ps%3D2_2%60jc%3Dreal_1766&src_module=Women&src_tab_page_id=page_home1684189692538&mallCode=1">View Product</a>
        <button>Add to Cart</button>
      </div>
    </div>
  </div>
  <footer>
  <div class="footer-container">
    <p>&copy; 2023 The Ontha</p>
  </div>
</footer>
</body>
</html>
