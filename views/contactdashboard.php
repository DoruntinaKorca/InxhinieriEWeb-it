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
    include 'includes/adminHeader.php';
    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once '../repositories/contactuserRepository.php';
        $contactuserRepository = new ContactUserRepository();
        $contactusers = $contactuserRepository->getAllUsers();
        foreach($contactusers as $contactuser){
            echo
            "
            <tr>
                <td>$contactuser[Id]</td>
                <td>$contactuser[Name]</td>
                <td>$contactuser[Lastname]</td>
                <td>$contactuser[Email]</td>
                <td>$contactuser[Phone]</td>
                <td>$contactuser[Message]</td>
                <td><a href='editcontact.php?id=$contactuser[Id]'>Edit</a</td>
                <td><a href='deletecontact.php?id=$contactuser[Id]'>Delete</a></td>

            </tr>
            
            ";
        }


        ?>
    </table>
</body>
</html>