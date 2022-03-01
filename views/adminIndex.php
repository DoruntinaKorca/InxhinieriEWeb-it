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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
  <?
  include 'includes/adminHeader.php';
  ?>

    <div class="adminMainContent">
    <h2><? echo "Welcome to your dashboard ".$_SESSION['username'];?></h2>
        <div class="adminWrapper contentW">
        

        <div class="AdminCol-4 ab1 footerCenter">
            <? include '../repositories/userRepository.php';
                $userRepo = new userRepository();
                $u = $userRepo->countUsers();
                echo"<h1>$u</h1> ";
            ?>
            
            <br>
            <h4>Users</h4>
        </div>

        <div class="AdminCol-4 ab2 footerCenter">
            <? $userRepo = new userRepository();
                $u = $userRepo->countCategories();
                echo"<h1>$u</h1> ";
                ?>
            <br>
            <h4>Categories</h4>
        </div>

        <div class="AdminCol-4 ab3 footerCenter">
            <? $userRepo = new userRepository();
                $u = $userRepo->countMenus();
                echo"<h1>$u</h1> ";
                ?>
            <br>
            <h4>Menus</h4>
        </div>

        <div class="AdminCol-4 ab4 footerCenter">
            <? $userRepo = new userRepository();
                $u = $userRepo->countOrders();
                echo"<h1>$u</h1> ";
                ?>
            <br>
            <h4>Orders</h4>
        </div>

        </div>
    </div>

   <?
   include 'includes/adminFooter.php';
   ?>
</body>
</html>
<?
}
?>