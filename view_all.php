<?php
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM users";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>

<head>


    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>View Page</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
            integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Custom stylesheet -->
        <style>
        body {
            background-image: url('image/wallpaperflare.com_wallpaper.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            ;

        }
        </style>

    </head>
</head>


<body style="font-family:courier;" style="text-align:center;">

    <h1 class="font-weight-bold py-4 bg-dark rounded" style=" font-size:70px; text-align:center; color:#C99C68
">
        <i class="fas fa-utensils"></i> Mission
        Food
        Delivery Service
    </h1>

    <h2 class="pt-2 font-weight-bold" style="color:Lavender; text-align:center; font-weight:bold; font-size:25px;">
        Bringing
        Good Food into Your
        Everyday
        Lives.</h2><br>




    <div class="container text-center">
        <br><br>
        <h3 class="pt-2 font-weight-bold" style="color:White; text-align:center; font-weight:bold; font-size:35px;">
            User Table</h3><br>


        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
            if ($result->num_rows > 0) {
                //output data of each row
                while ($row = $result->fetch_assoc()) {
                    ?>

                    <tr>
                        <td><?php echo $row['users_id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><a class="fas fa-edit btnedit" style="	color: Chartreuse;"
                                href=" user_update.php?id=<?php echo $row['users_id']; ?>"></a>
                            <t><a class="fas fa-trash-alt" style=" color: red;"
                                    href="user_delete.php?id=<?php echo $row['users_id']; ?>"></a>
                        </td>
                    </tr>

                    <?php
                }
            }
        ?>

                </tbody>
            </table>
        </div>

        <br><br><br><br><br>


        <?php
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM orders";

//execute the query

$result = $conn->query($sql);


?>

        <h3 class="pt-2 font-weight-bold" style="color:White; text-align:center; font-weight:bold; font-size:35px;">
            Order Table</h3><br>


        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Food</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Payment Type</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
            if ($result->num_rows > 0) {
                //output data of each row
                while ($row = $result->fetch_assoc()) {
                    ?>

                    <tr>
                        <td><?php echo $row['orders_id']; ?></td>
                        <td><?php echo $row['food_name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['payment_type']; ?></td>
                        <td><?php echo $row['total']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><a class="fas fa-edit btnedit" style="	color: Chartreuse;"
                                href="update.php?id=<?php echo $row['orders_id']; ?>"></a>
                            <t><a class="fas fa-trash-alt" style=" color: red;"
                                    href="delete.php?id=<?php echo $row['orders_id']; ?>"></a>
                        </td>
                    </tr>

                    <?php
                }
            }
        ?>

                </tbody>
            </table>
        </div>

        <br><br><br><br><br>


        <?php
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM order_details";

//execute the query

$result = $conn->query($sql);


?>

        <h3 class="pt-2 font-weight-bold" style="color:White; text-align:center; font-weight:bold; font-size:35px;">
            Order Details Table</h3><br>


        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Quantity</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
        if ($result->num_rows > 0) {
            //output data of each row
            while ($row = $result->fetch_assoc()) {
                ?>

                    <tr>
                        <td><?php echo $row['details_id']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><a class="fas fa-edit btnedit" style="	color: Chartreuse;"
                                href="update.php?id=<?php echo $row['details_id']; ?>"></a>
                            <t><a class="fas fa-trash-alt" style=" color: red;"
                                    href="delete.php?id=<?php echo $row['details_id']; ?>"></a>
                        </td>
                    </tr>

                    <?php
            }
        }
    ?>

                </tbody>
            </table>
        </div>


        <br><br><br><br><br>


        <?php
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM wallet_details";

//execute the query

$result = $conn->query($sql);


?>

        <h3 class="pt-2 font-weight-bold" style="color:White; text-align:center; font-weight:bold; font-size:35px;">
            Wallet Details Table</h3><br>

        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ATM</th>
                            <th>Cvv</th>
                            <th>Balance</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
            if ($result->num_rows > 0) {
                //output data of each row
                while ($row = $result->fetch_assoc()) {
                    ?>

                    <tr>
                        <td><?php echo $row['wallet_id']; ?></td>
                        <td><?php echo $row['card_number']; ?></td>
                        <td><?php echo $row['cvv']; ?></td>
                        <td><?php echo $row['balance']; ?></td>
                        <td><a class="fas fa-edit btnedit" style="	color: Chartreuse;"
                                href="update.php?id=<?php echo $row['wallet_id']; ?>"></a>
                            <t><a class="fas fa-trash-alt" style=" color: red;"
                                    href="delete.php?id=<?php echo $row['wallet_id']; ?>"></a>
                        </td>
                    </tr>

                    <?php
                }
            }
        ?>

                </tbody>
            </table>
        </div>

        <br><br><br><br><br>


        <?php
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM feedback";

//execute the query

$result = $conn->query($sql);


?>
        <h3 class="pt-2 font-weight-bold" style="color:White; text-align:center; font-weight:bold; font-size:35px;">
            Feedback Table</h3><br>


        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Rating</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            ?>

                    <tr>
                        <td><?php echo $row['feedback_id']; ?></td>
                        <td><?php echo $row['rating']; ?></td>
                        <td><a class="fas fa-edit btnedit" style="	color: Chartreuse;"
                                href="update.php?id=<?php echo $row['feedback_id']; ?>"></a>
                            <t><a class="fas fa-trash-alt" style=" color: red;"
                                    href="delete.php?id=<?php echo $row['feedback_id']; ?>"></a>
                        </td>
                    </tr>

                    <?php
        }
    }
?>

                </tbody>
            </table>
        </div>



</body>

</html>