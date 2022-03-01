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

            foreach($categories as $category){
                echo " <tr >
                        <td>$category[category_id]</td>
                        <td>$category[category_title]</td>
                        <td>$category[category_img]</td>  
                         <td>
                        <a href=\"editCategory.php?category_id=$category[category_id]\" class=\"butoniGreen\">Edit</a>
                        <a href=\"deleteCategory.php?category_id=$category[category_id]\" class=\"butoniRed\">Delete</a>
                        </td>
                       </tr>";
            }
            ?>
           
        </table>

      
    </div>

    
</body>
</html>