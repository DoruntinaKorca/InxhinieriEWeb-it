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
  
    $menu_description = $_POST['description_img'];

    $file = $_FILES['menu_img'];
    $menu_img = $_FILES['menu_img']['name'];
    $fileTmpName = $_FILES['menu_img']['tmp_name'];
    $fileSize = $_FILES['menu_img']['size'];
    $fileError = $_FILES['menu_img']['error'];
    $fileType = $_FILES['menu_img']['type'];

    $fileExt = explode('.',$menu_img);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt, $allowed)){
        if($fileError===0){
            if($fileSize < 10000000){
               $fileNameNew=uniqid('',true).".".$fileActualExt;
               
               $fileDestination = '../views/images/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

             //   $menu = new menu($menu_title, $menu_price,$menu_img,$menu_description);

                $menuRepository = new menuRepository();
                $menuRepository->updateMenu($id,$menu_title,$menu_price,$menu_img,$menu_description);
                echo "<script>alert('Menu updated successfully');</script>";
                header("location:manageCakes.php");
            }else{
                echo "ur file is too big";
            }
        }else{
            echo "There was an error uploading your file";
        }
    }else{
        echo "u cannot upload files of this type";
    }



  
}

?>
      <form action="" method="POST" class="editUser" enctype="multipart/form-data">
      <label for="">Id: </label>
        <input type="text" name="menu_id" value="<?=$menu['menu_id']?>" class="klv" readonly> 
        <label for="">title: </label>
        <input type="text" name="menu_title" value="<?=$menu['menu_title']?>" class="klv"> 
        <label for="">price: </label>
        <input type="text" name="menu_price" value="<?=$menu['menu_price']?>" class="klv"> 
        <label for="">description: </label>
        <input type="text" name="menu_description" value="<?=$menu['menu_description']?>" class="klv"> 
        <label for="">img: </label>
        <br>
        <input type="file" name="menu_img" value="<?=$menu['menu_img']?>" > 
        <br>
       
        

        <input type="submit" name="saveMenu" value="save" class="klv kb">
</form>

    </div>
   

</body>
</html>
<?
}
?>