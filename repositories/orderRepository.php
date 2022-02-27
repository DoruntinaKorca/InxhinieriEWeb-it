<?php 

include '../database/databaseConnection.php';

class OrderRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection=$conn->startConnection();
    }

    function insertOrder($order){
        $conn=$this->connection;

        $name=$order->getName();
        $phoneNumber=$order->getPhoneNumber();
        $email=$order->getEmail();
        $address=$order->getAddress();
     

        $sql="INSERT INTO dessertorder (name,phoneNumber,email,address) VALUES (?,?,?,?)";

        $statement=$conn->prepare($sql);
        $statement->execute([$name, $phoneNumber, $email, $address]);
        echo "<script>alert('Porosia eshte ruajtur me sukses')</script>";
    }
    function getAllOrders(){

        $conn=$this->connection;

        $sql="SELECT * FROM dessertorder";

        $statement=$conn->query($sql);
        $orders=$statement->fetchAll();

        return $orders;
    }

}

$orderRepo=new OrderRepository();
print_r($orderRepo->getAllOrders());
?>