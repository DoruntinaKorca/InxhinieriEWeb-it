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

    function deleteOrderById($Id){
        $conn = $this->connection;

        $sql = "DELETE FROM dessertorder WHERE Id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$Id]);
        echo "<script> alert('Order has been deleted successfully!') </script>";
    }
    

}

?>