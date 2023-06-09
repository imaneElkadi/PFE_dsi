<html>
    <head>
        <title>
the Ontha
        </title>
        <link rel="stylesheet" href="paye.css">
    </head>
<body>
  <main class="container">
    <div class="main">
      <!-- Payment Method Section  -->
      <section class="payment_method">
        <h2 class="ship_head">Payment</h2>
        <div class="card_info">
          <div class="card_head">
            <h2 class="card_title">Debit or Credit Card</h2>
          </div>
          <div class="card_types">
            <img class="card_img" src="https://cdn-icons-png.flaticon.com/512/349/349221.png" alt="" />
            <img class="card_img" src="https://cdn-icons-png.flaticon.com/512/349/349230.png" alt="" />
            <img class="card_img" src="https://cdn-icons-png.flaticon.com/512/349/349228.png" alt="" />
            <img class="card_img" src="https://img.icons8.com/fluency/512/mastercard.png" alt="" />
          </div>
          <form action="">
            <input type="text" name="Name" value="" placeholder="Card Holder" maxlength="60" />
            <input type="text" name="Number" value="" placeholder="Card Number" maxlength="16" />
            <div>
              <input type="text" name="Name" value="" placeholder="Expire" maxlength="4" />
              <input type="text" name="Name" value="" placeholder="CVC" maxlength="3" />
            </div>
          </form>
          <span class="save_card">Save Card</span>
        </div>
        <div class="e_payment">
          <div class="pay">
            <img src="https://cdn-icons-png.flaticon.com/512/6124/6124998.png" alt="" />
          </div>
          <div class="pay">
            <img src="https://cdn-icons-png.flaticon.com/512/5977/5977576.png" alt="" />
          </div>
          <div class="pay">
            <img src="https://cdn-icons-png.flaticon.com/512/196/196565.png" alt="" />
          </div>
        </div>
        <button class="confirm_btn">Confirm</button>
      </section>
      <!-- Order Summary Section  -->
      <section class="order_summary">
        <h2 class="order_head">Orders</h2>
        <div class="order_price">
          <hr />
          <div class="price">
            <p>Order price:</p>
            
          </div>
          <div class="price">
            <p>Shipping:</p>
            
          </div>
          <div class="price">
            <p>Tax:</p>
          </div>
          <br />
          <hr />
          <div class="total_price">
            <p class="dark">Total:</p>
          </div>
        </div>
      </section>
    </div>
  </main>
<script src="paye.js"></script>
</body>

</html>