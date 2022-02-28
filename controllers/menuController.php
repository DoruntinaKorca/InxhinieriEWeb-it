<?
include '../models/menu.php';
include '../repositories/menuRepository.php';

    if(isset($_POST['AddSaveMenu'])){
        if(empty($_POST['menu_title']) || empty($_POST['menu_price']) || empty($_POST['menu_description'])){
            echo "please fill all fields!";
        }else{
            $menu_title = $_POST['menu_title'];
            $menu_price = $_POST['menu_price'];
            $menu_description = $_POST['menu_description'];
           

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

                        $menu = new menu($menu_title, $menu_price,$menu_img,$menu_description);

                        $menuRepository = new menuRepository();
                        $menuRepository->insertMenu($menu);
                        echo "Menu added successfully !! ";
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
        
    }

   


?>