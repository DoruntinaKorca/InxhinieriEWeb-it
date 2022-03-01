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
    <h2>Manage Menu</h2>
        
    <br><br>
    <a href="addMenu.php" class="butoniU"> Add Menu </a>
    <br> <br>
        <table class="tbl-full">
            <tr >
                <th >Id</th>
                <th>Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            <?
            include '../repositories/menuRepository.php';
            $menuRepository = new menuRepository();
            $menus = $menuRepository->getAllMenus();

           foreach($menus as $menu){?>
                 <tr > 
                        <td><?echo $menu['menu_id']?></td>
                        <td><?echo $menu['menu_title']?></td>
                        <td><?echo $menu['menu_price']?></td>
                        <td><?echo $menu['menu_description']?></td>
                        <td><img src="images/<?echo $menu['menu_img']?>" alt=""></td> 
                        
                         <td>
                        <a href="editMenu.php?menu_id=<?echo $menu['menu_id']?>" class="butoniGreen">Edit</a>
                        <a href="deleteMenu.php?menu_id=<?echo $menu['menu_id']?>" class="butoniRed">Delete</a>
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