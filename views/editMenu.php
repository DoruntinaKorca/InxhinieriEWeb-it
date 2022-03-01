
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
    <h2 >Edit Menu</h2>
  
    <?php
include '../repositories/menuRepository.php';
$menu_id = $_GET['menu_id'];

$menuRepository = new menuRepository();

$menu = $menuRepository->getMenuById($menu_id);

if(isset($_POST['saveMenu'])){


    $id = $menu_id;
    $menu_title = $_POST['menu_title'];
    $menu_price = $_POST['menu_price'];
    $menu_img = $_POST['menu_img'];
    $menu_description = $_POST['description_img'];

    $menuRepository->updateMenu($id,$menu_title,$menu_price,$menu_img,$menu_description);
    echo "<script>alert('Menu updated successfully');</script>";
    header("location:manageCakes.php");
}

?>
      <form action="" method="POST" class="editUser">
      <label for="">Id: </label>
        <input type="text" name="menu_id" value="<?=$menu['menu_id']?>" class="klv" readonly> 
        <label for="">title: </label>
        <input type="text" name="menu_title" value="<?=$menu['menu_title']?>" class="klv"> 
        <label for="">price: </label>
        <input type="text" name="menu_price" value="<?=$menu['menu_price']?>" class="klv"> 
        <label for="">img: </label>
        <br>
        <input type="file" name="menu_img" value="<?=$menu['menu_img']?>" > 
        <br>
        <label for="">description: </label>
        <input type="text" name="menu_description" value="<?=$menu['menu_description']?>" class="klv"> 
        

        <input type="submit" name="saveMenu" value="save" class="klv kb">
</form>

    </div>
   

</body>
</html>
