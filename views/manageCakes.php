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

            foreach($menus as $menu){
                echo " <tr >
                        <td>$menu[menu_id]</td>
                        <td>$menu[menu_title]</td>
                        <td>$menu[menu_price]</td>
                        <td>$menu[menu_img]</td>
                        <td>$menu[menu_description]</td>
                          
                         <td>
                        <a href=\"editMenu.php?menu_id=$menu[menu_id]\" class=\"butoniGreen\">Edit</a>
                        <a href=\"deleteMenu.php?menu_id=$menu[menu_id]\" class=\"butoniRed\">Delete</a>
                        </td>
                       </tr>";
            }
            ?>
           
        </table>

      
    </div>

    
</body>
</html>