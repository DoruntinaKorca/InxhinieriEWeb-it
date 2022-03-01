<?

include '../database/databaseConnection.php';
class UserRepository{
    private $connection;

                function __construct(){
                    $conn = new DBConnection;

                    $this->connection= $conn->startConnection();
                }



            function invalidEmail($email){
                $result;
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $result = false;
                }else{
                    $result = true;
                }
                return $result;
            }



            function checkIfUserAlreadyExists($username, $email){
                $conn = $this->connection;
                $statement = $conn->prepare('SELECT username AND email FROM users WHERE username = ? OR email = ?;');

                if(!$statement->execute(array($username, $email))){
                    $statement = null;
                    header("location:../views/Register.html?error=statementfailed");
                    exit();
                }
                $resultCheck;
                if($statement->rowCount() > 0){
                    $resultCheck = false;
                }else{
                    $resultCheck = true;
                }
                return $resultCheck;
            }



            function insertUser($user){
                $conn = $this->connection;
            // $id = $user->getUsers_id();
                $fullname = $user->getFullname();
                $username = $user->getUsername();
                $email = $user->getEmail();
                $password = $user->getPassword();
                $role = $user->getRole();
                
                $sql = "INSERT INTO users ( fullname, username, email, password, role) VALUES (?,?,?,?,?)";
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $statement = $conn->prepare($sql);
                $statement->execute([$fullname, $username, $email, $hashedPassword, $role]);
               
                echo "<script>alert('useri u regjistrua me sukses') </script>";
                header("location:../views/Login.php");
            }



            function login($email, $password){
                $conn = $this->connection;
              
                   $statement= $conn->prepare('SELECT * FROM users WHERE email = :email') ;
                   $statement->bindParam(':email',$email);
                   $statement->execute();

                    $user = $statement->fetchAll(PDO::FETCH_ASSOC);
                    
                    if(count($user) > 0 && password_verify($password,$user[0]['password'])){
                      
                            session_start();
                  
                            $_SESSION['login'] = true;
                            $_SESSION['userId'] = $user[0]["users_id"];
                            $_SESSION['username'] = $user[0]["username"];
                              $_SESSION['userEmail'] = $user[0]["email"];
                              $_SESSION['userRole'] = $user[0]["role"];
                              $vlera = $user[0]["username"];
                            // echo "pershendetje".$_SESSION['username'];
                         //    setcookie('username',$vlera,time()+300,'/');
                             if($_SESSION['userRole'] == 0){
                                header("location:../views/index.php");
                             }
                             else{
                                header("location:../views/adminIndex.php");
                             }
                        
                    }else{
                       echo "<script>alert('Your password is incorrect');</script>";
                    }
                    
                }


       

        function getAllUsers(){
            $conn = $this->connection;
            $sql = "SELECT * FROM users";

            $statement = $conn->query($sql);
            $users= $statement->fetchAll();
    
            return $users;
        }



        function getUserById($users_id){
            $conn = $this->connection;
      
            $sql = "SELECT * FROM users WHERE users_id='$users_id'";
            $statement=$conn->query($sql);
            $user = $statement->fetch();
      
            return $user;
          }



        
        function updateUser($id,$fullname,$username,$email,$password){
            $conn = $this->connection;
    
            $sql = "UPDATE users SET fullname=?,username=?,email=?,password=? where users_id=?";
    
            $statement = $conn->prepare($sql);
    
            $statement->execute([$fullname,$username,$email,$password,$id]);
            echo "<script> alert('User has been updated successfuly!') </script>";
        }


        function deleteUserById($users_id){
            $conn = $this->connection;
    
            $sql = "DELETE FROM users WHERE users_id=?";
         
            $statement = $conn->prepare($sql);
       
            $statement->execute([$users_id]);
            echo "<script> alert('User has been deleted successfuly!') </script>";
        }
        function countUsers(){
            $conn = $this->connection;
            $sql = "SELECT * FROM users";

            $statement = $conn->query($sql);
            $users= $statement->fetchAll();
            $u = count($users);
            return $u;
        }

        function countCategories(){
            $conn = $this->connection;
            $sql = "SELECT * FROM categories";

            $statement = $conn->query($sql);
            $categories= $statement->fetchAll();
            $c = count($categories);
            return $c;
        }
        
        function countMenus(){
            $conn = $this->connection;
            $sql = "SELECT * FROM menu";

            $statement = $conn->query($sql);
            $menus= $statement->fetchAll();
            $m = count($menus);
            return $m;
        }
        function countOrders(){
            $conn = $this->connection;
            $sql = "SELECT * FROM dessertorder";

            $statement = $conn->query($sql);
            $orders= $statement->fetchAll();
            $o = count($orders);
            return $o;
        }

      
}
 

?>