<?
 
session_start(); 
if(!isset($_SESSION['username'])){
  header("location:Login.php");
}
else{
 
?>
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
           
         
 <? 
          include '../repositories/categoryRepository.php';
      $categoryRepository = new categoryRepository();

      $categories = $categoryRepository->getCategories();
          
          foreach($categories as $category){
            ?>
                <div class="exploreKatrori katroratt">
            <img src="images/<?echo $category['category_img'];?>" alt="">
            <a href="Desserts.php">
              <h2 ><? echo $category['category_title'] ?></h2>
            </a>
          </div>
            <?
          }
          ?>
          
          </div>
        </div>
      </div>
    </div>
    <?
    include 'footer.php';
    ?>
    <script src="js/cake.js"></script>
    <script src="js/navButton.js"></script>
  </body>
</html>
<?
}
?>