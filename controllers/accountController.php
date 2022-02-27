<?
include '../models/user.php';
include '../repositories/userRepository.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['fullname']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])){
        echo "please fill all fields";
    }else{
        
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password= $_POST['password'];
        $role = false;
        
        $user = new User($fullname, $username, $email, $password, $role);

        $userRepository = new userRepository();

        if($userRepository->invalidEmail($email)){
            if(!$userRepository->checkIfUserAlreadyExists($username, $password)){
                echo "<script>alert('A user with this email or password already exists') </script>";
            }else{
                $userRepository->insertUser($user);
            }
        }else{
            echo "<script>alert('Invalid email') </script>";
            
        }
        
        
    }
}



if(isset($_POST['loginButton'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
        echo "please fill all fields";
    }else{
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userRepository = new userRepository();
        $userRepository->login($email,$password);
        header("location:index.php");
    }
}




?>