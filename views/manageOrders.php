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
            <tr >
                <td>1</td>
                <td>doruntina korca</td>
                <td>doruntinak</td>
                <td>dk40651@ubt-uni.net</td>
                <td>
                 
                    <a href="#" class="butoniRed">Delete</a>
                </td>
            </tr>
            <tr >
                <td>2</td>
                <td>doruntina korca</td>
                <td>doruntinak</td>
                <td>dk40651@ubt-uni.net</td>
                <td>
                    
                    <a href="#" class="butoniRed">Delete</a>
                </td>
            </tr>
            <tr >
                <td>3</td>
                <td>doruntina korca</td>
                <td>doruntinak</td>
                <td>dk40651@ubt-uni.net</td>
                <td>
                    
                    <a href="#" class="butoniRed">Delete</a>
                </td>
            </tr>
        </table>


    </div>

    <?
    include 'adminFooter.php';
    ?>
</body>
</html>