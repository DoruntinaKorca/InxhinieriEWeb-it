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
    include 'adminHeader.php';
    ?>

    <div class="adminMainContent">
    <h2 >Add Menu</h2>
   
     
      <form action="" method="POST" class="editUser" enctype="multipart/form-data">
      <label for="">Title: </label>
        <input type="text" name="menu_title" value="" class="klv"> 
        
        <label for="">Price: </label>
        <input type="text" name="menu_price" value="" class="klv"> 

        <label for="">Img: </label>
        <br>
        <input type="file" name="menu_img" value=""> 
        <br>
        <label for="">Description: </label>
        <input type="text" name="menu_description" value="" class="klv"> 
        
     
        <input type="submit" name="AddSaveMenu" value="save" class="klv kb">
</form>
<?
include '../controllers/menuController.php';
?>
    </div>
   

</body>
</html>
<?
}
?>