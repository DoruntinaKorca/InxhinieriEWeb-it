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
<?
      include 'header.php';
    ?>
  <div class="container">
    <div id="pjesaCakes">
      <div class="middleContent centerClass">
        <h1>Explore cakes</h1>

        <div class="exKatrori">
          <?
          include '../repositories/categoryRepository.php';
          $categoryRepository = new categoryRepository();
          $categories = $categoryRepository->getAllCategories();
          foreach($categories as)
          
          ?>
          <div class="exploreKatrori katroratt">
            <img src="images/chokocake.jpg" alt="">
            <a href="Desserts.php">
              <h2 >Cakes</h2>
            </a>
          </div>
          <div class="exploreKatrori katroratt">
          <img src="images/chokocake.jpg" alt="">
            <a href="Desserts.php">
              <h2>Waffles</h2>
            </a>
          </div>
          <div class="exploreKatrori katroratt">
          <img src="images/chokocake.jpg" alt="">
            <a href="Desserts.php">
              <h2>Cupcakes</h2>
            </a>
          </div>
          <div class="exploreKatrori  katroratt">
          <img src="images/chokocake.jpg" alt="">
            <a href="Desserts.php">
              <h2>Candy</h2>
            </a>
          </div>
          <div class="exploreKatrori katroratt">
          <img src="images/chokocake.jpg" alt="">
            <a href="Desserts.php">
              <h2>Donuts</h2>
            </a>
          </div>
          <div class="exploreKatrori katroratt">
          <img src="images/chokocake.jpg" alt="">
            <a href="Desserts.php">
              <h2>Pies</h2>
            </a>
          </div>
          <div class="exploreKatrori katroratt" >
          <img src="images/chokocake.jpg" alt="">
            <a href="Desserts.php">
              <h2>Biscuits</h2>
            </a>
          </div>
          <div class="exploreKatrori katroratt">
          <img src="images/chokocake.jpg" alt="">
            <a href="Desserts.php">
              <h2>Crepes</h2>
            </a>
          </div>
          <div class="exploreKatrori katroratt">
          <img src="images/chokocake.jpg" alt="">
            <a href="Desserts.php">
              <h2>Milk Shakes</h2>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?
    include 'footer.php';
    ?>
</body>

</html>