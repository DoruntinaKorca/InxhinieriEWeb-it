<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cakes</title>
    <link rel="stylesheet" href="css/style.css" />
    <script
      src="https://kit.fontawesome.com/e15bba1921.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <nav id="navbar">
      <div id="logo" class="centerClass">
        <img src="Images/cake.png" alt="logo" />
        <h2 class="hdy">Cake</h2>
      </div>
      <a href="#" class="toggle-buttonn"> 
        <span class="barr"></span>
        <span class="barr"></span>
        <span class="barr"></span>
      </a>
      <div id="navUl">
        <a href="#">Home</a>
        <a href="Categories.html">Categories</a>
        <a href="ContactUs.html">Contact</a>
        <a href="AboutUs.html">About Us</a>
        <a href="Register.php">Register</a>
        <!--   <a href="Register.html"><img class="userProfile" src="Images/user.png" alt="user"></a> 
 !-->
      </div>
    </nav>
    <div id="homepageContainer">
      <div class="homepageSlider">
        <div class="slide active">
          <img src="images/is4.jpg" alt="" />
          <div class="sliderInfo">
            <h2>Peanut cake</h2>
          </div>
        </div>
        <div class="slide">
          <img src="images/is2.jpg" alt="" />
          <div class="sliderInfo">
            <h2>Cupcakes</h2>
          </div>
        </div>
        <div class="slide">
          <img src="images/is1.jpg" alt="" />
          <div class="sliderInfo">
            <h2>Grape Cheesecake</h2>
          </div>
        </div>
        <div class="slide">
          <img src="images/is8.jpg" alt="" />
          <div class="sliderInfo">
            <h2>Tart</h2>
          </div>
        </div>
        <div class="navigation">
          <div class="btn active"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
        </div>
      </div>
      <div id="exploreCakess">
        <div class="middleContent centerClass">
          <h1>Explore cakes</h1>
          <div class="exploreThem">
            <div class="exploreKatrori firstSquare">
              <a href="Desserts.html">
                <h2>Cakes</h2>
              </a>
            </div>
            <div class="exploreKatrori secondSquare">
              <a href="Desserts.html"> <h2>Waffles</h2></a>
            </div>
            <div class="exploreKatrori thirdSquare">
              <a href="Desserts.html"><h2>Cupcakes</h2></a>
            </div>
          
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div id="logo" class="centerClass" class="footerlogo">
        <img src="Images/cake.png" alt="logo" />
        <h2 class="dbi">Cake</h2>
      </div>
      <div class="contactOn centerClass">
        <h3>Contact us on:</h3>
        <div class="footerIcons centerClass">
          <i class="fab fa-facebook fa-2x"></i>
          <i class="fab fa-instagram fa-2x"></i>
          <div class="footerEmail">
            <i class="fas fa-envelope fa-2x"></i>
          </div>
          <div>
            <i class="fas fa-phone-square-alt fa-2x"></i>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/cake.js"></script>
    <script src="js/navButton.js"></script>
  </body>
</html>