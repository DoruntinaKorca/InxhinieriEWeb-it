
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
    $category_img = $_POST['category_img'];

    $categoryRepository->updateCategory($id,$category_title,$category_img);
    echo "<script>alert('Category updated successfully');</script>";
    header("location:manageCategory.php");
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
