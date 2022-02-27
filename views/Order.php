<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cakes</title>
  
  <link rel="stylesheet" href="css/style.css" />

  <script src="https://kit.fontawesome.com/e15bba1921.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav id="navbar">
    <div id="logo" class="centerClass">
      <img src="Images/cake.png" alt="logo" />
      <h2>Cake</h2>
    </div>
    <div id="navUl" class="centerClass">
      <a href="#">Home</a>
      <a href="Categories.html">Categories</a>
      <a href="ContactUs.html">Contact</a>
      <a href="AboutUs.html">About Us</a>
      <a href="Register.html">Register</a>
      <!--   <a href="Register.html"><img class="userProfile" src="Images/user.png" alt="user"></a> 
 !-->
    </div>
  </nav>


  <div class="fotojaBack">


    <h3>Confirm your order by filling this form</h3>

    <fieldset class="katrori1" id="katrori1">
      <legend class="legjenda">Selected Dessert</legend>

      <div class="menuImg" id="menuImg">
        <img src="Images/pink10.jpg" alt="fotojaMenu">
      </div>

      <div class="menuData">
        <h2>Dessert</h2>
        <p>2.3€</p>
        <div class="sasia" id="sasia">Quantity</div>
        <input type="number" name="qty" class="inputiSasia" value="1" required>
      </div>
    </fieldset>

   
      <form  id="katrori2" action="Desserts.html">
      <legend class="legjenda">Delivery Details </legend>
      <div class="sasia" >Name</div>
      <input type="text" id="emri" placeholder="Full Name" name="name" class="inputiSasia" required>
      <label for="name" id="emriErr" class="errorInput"></label>

      <div class="sasia" >Phone Number</div>
      <input type="text" id="numri" placeholder="Phone Number" name="phoneNumber" class="inputiSasia" required>
      <label for="phoneNumber" id="numriErr" class="errorInput"></label>

      <div class="sasia" >Email</div>
      <input type="text" id="imella"placeholder="Email" name="email" class="inputiSasia" required>
      <label for="email" id="imellaErr"  class="errorInput"></label>

      <div class="sasia" >Address</div>
      <input type="text" id="adresa" placeholder="Address" name="address" class="inputiSasia" required>
      <label for="address" id="adresaErr" class="errorInput"></label>

      <button  class="confirmOrder" id="confirmOrder"> Confirm Order</button>
     
  </form>
  
   
  </div>
  <?
    include 'footer.php';
    ?>
<script src="js/order.js"></script>
</body>
</html>