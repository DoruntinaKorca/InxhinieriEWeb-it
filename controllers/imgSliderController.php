<?
include '../models/imgSlider.php';
include '../repositories/sliderRepository.php';

    if(isset($_POST['saveImgSlider'])){
        if(empty($_POST['slider_title']) ){
            echo "please fill all fields!";
        }else{
            $slider_title = $_POST['slider_title'];
           

            $file = $_FILES['slider_img'];
            $slider_img = $_FILES['slider_img']['name'];
            $fileTmpName = $_FILES['slider_img']['tmp_name'];
            $fileSize = $_FILES['slider_img']['size'];
            $fileError = $_FILES['slider_img']['error'];
            $fileType = $_FILES['slider_img']['type'];
    
            $fileExt = explode('.',$slider_img);
            $fileActualExt = strtolower(end($fileExt));
    
            $allowed = array('jpg','jpeg','png');
    
            if(in_array($fileActualExt, $allowed)){
                if($fileError===0){
                    if($fileSize < 10000000){
                       $fileNameNew=uniqid('',true).".".$fileActualExt;
                       
                       $fileDestination = '../views/images/'.$fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);

                        $imgSlider = new imgSlider($slider_title, $slider_img);

                        $sliderRepository = new sliderRepository();
                        $sliderRepository->insertSlider($imgSlider);
                        echo "fotoja u upload me sukses !! ";
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