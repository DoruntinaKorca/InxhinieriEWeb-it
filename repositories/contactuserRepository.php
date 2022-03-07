<?php
include '../database/databaseConnection.php';

class ContactUserRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUser($contactuser){
        $conn = $this->connection;
        
        $id = $contactuser->getId();
        $name = $contactuser->getName();
        $lastname = $contactuser->getLastname();
        $email = $contactuser->getEmail();
        $phone = $contactuser->getPhone();
        $message = $contactuser->getMessage();

        
        $sql = "INSERT INTO contactuser (id,name,lastname,email,phone,message) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$id,$name,$lastname,$email,$phone,$message]);
        echo "<script> alert('User has been inserted successfuly!') </script>";
    }


    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM contactuser";
        $statement = $conn->query($sql);
        $contactusers = $statement->fetchAll();

        return $contactusers;
    }

    function getUserByNameAndLastname($name,$lastname){

    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM contactuser WHERE id='$id'";
        $statement=$conn->query($sql);
        $contactuser =  $statement->fetch();

        return $contactuser;
    }
    
    function updateUser($id,$name,$lastname,$email,$phone,$message){
        $conn = $this->connection;
        
        $sql = "UPDATE contactuser SET name=?,lastname=?,email=?,phone=?,message=? where id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$lastname,$email,$phone,$message,$id]);
        echo "<script> alert ('User has been update succesfully!') </script>";
    }

    function deleteUserById($id){
        $conn = $this->connection;

        $sql = "DELETE FROM contactuser WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert ('User has been deleted succesfully!') </script>";
    }

} 

?>