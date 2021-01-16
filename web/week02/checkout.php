<?php
    session_start();
    if(!isset($_SESSION["cart_item"])) {
      header('Location: services.php'); // redirect to index.php
    }
?>

<HTML>
<HEAD>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</HEAD>
<BODY>

<div class="row center">
  <div class="container">
    <form action="checkout_action.php">
      <div class="row">
        <div class="col-50">
          <h3>Billing Address</h3>
          <label for="fname"><i class="fa fa-user"></i> Full Name</label>
          <input type="text" id="fullname" name="fullname" placeholder="John M. Doe" required>
          <label for="email"><i class="fa fa-envelope"></i> Email</label>
          <input type="text" id="email" name="email" placeholder="john@example.com" required>
          <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
          <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
          <label for="city"><i class="fa fa-institution"></i> City</label>
          <input type="text" id="city" name="city" placeholder="New York" required>

          <div class="row">
            <div class="col-50">
              <label for="state">State</label>
              <input type="text" id="state" name="state" placeholder="NY" required>
            </div>
            <div class="col-50">
              <label for="zip">Zip</label>
              <input type="text" id="zip" name="zip" placeholder="10001" required>
            </div>
          </div>
        </div>

      </div>
      <input type="submit" value="Continue to checkout" class="btn">
    </form>
    <div>

    <a href="services.php"> <button class="btn1">Return to cart</button> </a>
    </div>
  </div>


</BODY>
</HTML>