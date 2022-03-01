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

    <main>
      <div class="content">
        
        <div class="about_content">
          <div class="nested_about">
            <h3 id="about_title"><i>More about us...</i></h3>

            <p id="text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
                praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
                excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia 
                deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum 
                facilis est et expedita distinctio.
            </p>
            <br />
            <p id="text1">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo 
                minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, 
                omnis dolor repellendus. 
            </p>
            <br />
            <p id="text2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
                in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
         
          <div class="about_container">
           
                  <div class="about_item">
                    <img class="photos" src="Images/cake1.jpg" alt="">
                  </div>

                  <div class="about_item">
                    <img class="photos" src="Images/cake2.jpg" alt="">
                  </div>

                  <div class="about_item">
                    <img class="photos" src="Images/cake3.jpg" alt="">
                  </div>
              
                  <div class="about_item">
                    <img class="photos" src="Images/cake4.jpg" alt="">
                  </div>

                  <div class="about_item">
                    <img class="photos" src="Images/cake5.jfif" alt="">
                  </div>

                  <div class="about_item">
                    <img class="photos" src="Images/cake6.jfif" alt="">
                  </div>
                
                  <div class="about_item">
                    <img class="photos" src="Images/cake7.jfif" alt="">
                  </div>

                  <div class="about_item">
                    <img class="photos" src="Images/cake8.jfif" alt="">
                  </div>

                  <div class="about_item">
                    <img class="photos" src="Images/cake9.jfif" alt="">
                  </div>
               
                  <div class="about_item">
                    <img class="photos" src="Images/cake10.jfif" alt="">
                  </div>

                  <div class="about_item">
                    <img class="photos" src="Images/cake11.jfif" alt="">
                  </div> 

                  <div class="about_item">
                    <img class="photos" src="Images/cake12.jfif" alt="">
                  </div>
            
          </div> 
      </div>
    </main>
    <?
    include 'footer.php';
    ?>
  </body>
</html>
}
