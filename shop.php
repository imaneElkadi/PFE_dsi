<!DOCTYPE html>
<html>
<head>
  <title>The Ontha</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color:#D2B4DE;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    h1 {
      margin: 0;
    }

    .container {
      max-width: 900px;
      margin: 20px auto;
    }

    .product {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .product-image {
      flex-basis: 30%;
      margin-right: 20px;
    }

    .product-image img {
      max-width: 100%;
      height: auto;
    }

    .product-details {
      flex-basis: 70%;
    }

    .product-title {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .product-price {
      color: #888;
      margin-bottom: 10px;
    }

    .product-description {
      margin-bottom: 10px;
    }

    .button {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .button:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <header>
    <h1>The Ontha shopping</h1>
  </header>

  <div class="container">
    <div class="product">
      <div class="product-image">
        <img src="product1.jpg" alt="Product 1">
      </div>
      <div class="product-details">
        <h2 class="product-title">Product 1</h2>
        <p class="product-price">$19.99</p>
        <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus tincidunt risus, vel facilisis nulla congue et.</p>
        <button class="button">Add to Cart</button>
      </div>
    </div>

    <div class="product">
      <div class="product-image">
        <img src="product2.jpg" alt="Product 2">
      </div>
      <div class="product-details">
        <h2 class="product-title">Product 2</h2>
        <p class="product-price">$24.99</p>
        <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus tincidunt risus, vel facilisis nulla congue et.</p>
        <button class="button">Add to Cart</button>
      </div>
    </div>

    <div class="product">
      <div class="product-image">
        <img src="product3.jpg" alt="Product 3">
      </div>
      <div class="product-details">
        <h2 class="product-title">Product 3</h2>
        <p class="product-price">$14.99</p>
        <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus tincidunt risus, vel facilisis nulla congue et.</p>
        <button class="button">Add to Cart</button>
      </div>
    </div>
  </div>
</body>
</html>

