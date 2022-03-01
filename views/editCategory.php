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
    <h2 >Edit Category</h2>
  
    <?php
    
include '../repositories/categoryRepository.php';
$category_id = $_GET['category_id'];

$categoryRepository = new categoryRepository();

$category = $categoryRepository->getUserById($category_id);

 if(isset($_POST['saveCategory'])){
   

    $id = $category_id;
    $category_title = $_POST['category_title'];
   
    $file = $_FILES['category_img'];
    $category_img = $_FILES['category_img']['name'];
    $fileTmpName = $_FILES['category_img']['tmp_name'];
    $fileSize = $_FILES['category_img']['size'];
    $fileError = $_FILES['category_img']['error'];
    $fileType = $_FILES['category_img']['type'];

    $fileExt = explode('.',$category_img);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt, $allowed)){
        if($fileError===0){
            if($fileSize < 10000000){
               $fileNameNew=uniqid('',true).".".$fileActualExt;
               
               $fileDestination = '../views/images/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

               // $category = new category($category_title, $category_img);

                $categoryRepository = new categoryRepository();
                $categoryRepository->updateCategory($id,$category_title,$category_img);
                echo "<script>alert('Category updated successfully');</script>";
                header("location:manageCategory.php");
                
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
        <input type="text" name="category_id" value="<?=$category['category_id']?>" class="klv" readonly> 
        <label for="">title: </label>
        <input type="text" name="category_title" value="<?=$category['category_title']?>" class="klv"> 
        <label for="">img: </label>
        <br>
        
        <input type="file" name="category_img" value="<?=$category['category_img']?>"> 
        <br>

        <input type="submit" name="saveCategory" value="save" class="klv kb">
</form>

    </div>
   

</body>
</html>
<?
}
?>