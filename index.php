<?php
include "config.php";

if (isset($_POST['submit'])) {
    $conn= mysqli_connect('localhost', 'root', '', 'foodservice');


    $Fullname = $_POST['name'];
    $Email = $_POST['email'];
    $Address = $_POST['address'];
    $Contact = $_POST['contact'];
    $Foodname = $_POST['food_name'];
    $Price = $_POST['price'];
    $Date = $_POST['date'];
    $Payment = $_POST['payment_type'];
    $Total = $_POST['total'];
    $Status = $_POST['status'];
    $Quantity = $_POST['quantity'];
    $Atm = $_POST['card_number'];
    $Cardcvv = $_POST['cvv'];
    $Cardbal = $_POST['balance'];
    $Rating = $_POST['rating'];
 

    $sql = "INSERT INTO `users`(`name`, `email`, `address`, `contact` ) VALUES ('$Fullname','$Email','$Address','$Contact' )";


    $result = $conn->query($sql);

    if ($result) {
        $sql2 = "INSERT INTO `orders`(`food_name`,`price`,`date`,`payment_type`,`total`, `status`) VALUES ('$Foodname', '$Price', '$Date', '$Payment', '$Total', '$Status' )";
        $result = $conn->query($sql2);
    }


    if ($result) {
        $sql3 = "INSERT INTO `order_details`(`quantity`) VALUES ('$Quantity')";

        $result = $conn->query($sql3);
    }

    

    if ($result) {
        $sql4 = "INSERT INTO `wallet_details`(`card_number`, `cvv`, `balance`) VALUES ('$Atm','$Cardcvv', '$Cardbal')";
        $result = $conn->query($sql4);
    }

    if ($result) {
        $sql5 = "INSERT INTO `feedback`(`rating`) VALUES ('$Rating')";
        $result = $conn->query($sql5);
        
        echo "New record created successfully.";
    } else {
        echo "Error:". $sql . "<br>". $conn->error;
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mission Food Delivery Service</title>

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


<body>


    <h1 class="font-weight-bold py-4 bg-dark rounded" style=" font-size:70px; text-align:center; color:#C99C68;">
        <i class="fas fa-utensils"></i> Mission
        Food
        Delivery Service
    </h1>

    <h2 class="pt-2 font-weight-bold" style="color:Lavender; text-align:center; font-weight:bold; font-size:25px;">
        Bringing
        Good Food into Your
        Everyday
        Lives.</h2><br>
    <div class="d-flex justify-content-center">
        <br><br>

        <form action="" method="POST" style="font-size:22px; color:lime; text-align:left; font-weight:bold; ">

            <fieldset style=" font-family:verdana;">
                <div class="style" style="border: 10px inset; padding: 10px;">


                    Name:<br>
                    <input type=" text" name="name" style="width:800px">
                    <br>

                    Email:<br>
                    <input type="email" name="email" style="width:800px">
                    <br>
                    Address:<br>
                    <input type="text" name="address" style="width:800px">
                    <br>
                    Contact:<br>
                    <input type="number" name="contact" style="width:800px">
                    <br>

                    Food:<br>
                    <input list="food_name" name="food_name" style="width:803px">
                    <datalist id="food_name">
                        <option value="Cheese Burger">
                        <option value="French Fries ">
                        <option value="Pizza">
                        <option value="Carbonara">
                    </datalist>

                    <br>
                    <label for="price">Price:</label><br>
                    <select id="price" name="price" style="width:803px">
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="150">150</option>
                        <option value="200">200</option>
                    </select>
                    <br>

                    <label for="quantity">Quantity:</label><br>
                    <input type="number" id="quantity" name="quantity" min="1" max="10" style="width:800px">

                    <br>

                    Date:<br>
                    <input type="date" name='date' style="width:800px">
                    <br>

                    <label for="payment_type">Payment Type:</label><br>
                    <select id="payment_type" name="payment_type" style="width:803px">
                        <option value="Debit card">Debit card</option>
                        <option value="Credit card">Credit card</option>
                    </select>
                    <br>

                    Total Amount:<br>
                    <input type="number" name="total" style="width:800px">
                    <br>

                    Status:<br>
                    <input type="text" name="status" style="width:800px">

                    <br>
                    ATM:<br>
                    <input type="number" name="card_number" style="width:800px">
                    <br>
                    Cvv:<br>
                    <input type="number" name="cvv" style="width:800px">
                    <br>
                    Balance:<br>
                    <input type="number" name="balance" style="width:800px">
                    <br>
                    <label for="rating">Rating:</label><br>
                    <input type="number" id="rating" name="rating" min="1" max="10" style="width:800px">

                </div>
                <br>
                <input type="submit" name="submit" value="Submit"
                    style=" color:#282621;font-weight:bold; width:800px; margin-left: 3%"><br>
            </fieldset>
        </form>




</body>

</html>