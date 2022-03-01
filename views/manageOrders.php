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
    <h2>Manage Orders</h2>
        

        <br><br>
    <?//<a href="#" class="butoniU"> Add Users </a>?>
    <br> <br>
        <table class="tbl-full">
            
            <tr >
                <th >Id</th>
                <th>fullname</th>
                <th>username</th>
                <th>email</th>
                <th>Actions</th>
            </tr>
            <?
            include '../repositories/orderRepository.php';
            $orderRepository = new OrderRepository();
            $orders = $orderRepository->getAllOrders();

                foreach($orders as $order){
                    echo "
                    <tr >
                <td>$order[Id]</td>
                <td>$order[Name]</td>
                <td>$order[PhoneNumber]</td>
                <td>$order[Email]</td>
                <td>$order[Address]</td>
                <td>
                 
                    <a href=\"deleteOrder.php?Id=$order[Id]\" class=\"butoniRed\">Delete</a>
                </td>
            </tr>
                    ";
                    
                }
            ?>
            
        </table>


    </div>

</body>
</html>