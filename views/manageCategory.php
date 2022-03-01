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
    <h2>Manage Category</h2>
        
    <br><br>
    <a href="addCategory.php" class="butoniU"> Add Category </a>
    <br> <br>
        <table class="tbl-full">
            <tr >
                <th >Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
           
            <?
            include '../repositories/categoryRepository.php';
            $categoryRepository = new categoryRepository();
            $categories = $categoryRepository->getAllCategories();

            foreach($categories as $category){?>
                 <tr > 
                        <td><?echo $category['category_id']?></td>
                        <td><?echo $category['category_title']?></td>
                        <td><img src="images/<?echo $category['category_img']?>" alt=""></td>  
                         <td>
                        <a href="editCategory.php?category_id=<?echo $category['category_id']?>" class="butoniGreen">Edit</a>
                        <a href="deleteCategory.php?category_id=<?echo $category['category_id']?>" class="butoniRed">Delete</a>
                        </td>
                       </tr>
               <?
            }
            ?>
           
        </table>

      
    </div>
    <?
    include 'includes/adminFooter.php';
    ?>
    
</body>
</html>
<?
}
?>