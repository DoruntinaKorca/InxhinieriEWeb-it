<?
include '../models/category.php';
include '../repositories/categoryRepository.php';

    if(isset($_POST['saveCategoryy'])){
        if(empty($_POST['category_title']) ){
            echo "please fill all fields!";
        }else{
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

                        $category = new category($category_title, $category_img);

                        $categoryRepository = new categoryRepository();
                        $categoryRepository->insertCategory($category);
                        echo "category added successfully !! ";
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