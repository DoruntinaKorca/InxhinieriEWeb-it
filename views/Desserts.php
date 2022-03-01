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
      include 'includes/header.php';
    ?>

    <section class="fotoMenu teksti">
        <h1>Go to <a href="Categories.php" class="textCategory">"Categories"</a>
            for more desserts </h1>
    </section>


    <div class="dessMenu">
        <h3>Dessert Menu</h3>
    </div>

    <div class="menu">
        <div class="elementet">


            <div class="kolona1">
            <?
            include '../repositories/menuRepository.php';
            $menuRepository = new menuRepository();
            $menus = $menuRepository->getAllMenus();
            foreach($menus as $menu){
                ?>
                <div class="k1">
                    <div class="fotojaKatrore">
                        <img src="Images/<?echo $menu['menu_img']?>" alt="foto">
                    </div>
                    <div class="data">
                        <h2><?echo $menu['menu_title']?></h2>
                        <p class="cmimi"><?echo $menu['menu_price']?></p>
                        <p><? echo $menu['menu_description'] ?></p>

                        <a href="Order.php">
                            <button href="Order.php" class="butoniOrder">Order now</button>
                        </a>
                    </div>
                </div>
                <?
            }
            ?>
                


               

            </div>
        </div>
    </div>
    <?
    include 'includes/footer.php';
    ?>
</body>

</html>
<?
}
?>