<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Booking</title>
    <link rel="icon" href="img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: #281542;
        }
        h1, h4{
            color: #fdce64;
        }
        .btn.addbtn{
            background-color: #ff6780;
            color: white;
        }
        th{
            color: white;
        }
        td{
            color: white;
        }
    </style>
</head>
<body>
    <br>
    <center>
        <img src="img/logo.png" width="100px">
        <h1>BORCELLE BOOKINGS</h1>
        <h4>Modify - Remove Items</h4>
    </center>
    <br><br>
    <table class="container">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Product</th>
                <th>Name</th>
                <th>Price</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                error_reporting(1);
                include('connection.php');
                $data = "SELECT * FROM booking ORDER BY no DESC";
                $val = $con -> query($data);
                $displayNo = 1;
                if ($val -> num_rows > 0) {
                    while(list($no, $username, $phone, $address, $product, $name, $price) = mysqli_fetch_array($val)){
                        echo "<tr>";
                        echo "<td>".$displayNo++."</td>";
                        echo "<td>".$username."</td>";
                        echo "<td>".$phone."</td>";
                        echo "<td>".$address."</td>";
                        echo "<td>".$product."</td>";
                        echo "<td>".$name."</td>";
                        echo "<td>".$price."</td>";
                        echo "<td><a href='delete-booking.php?no=$no'><img src='img/delete.png' style='border-radius: 20px; margin-left: 20px;' width='50'></a></td>";
                        echo "</tr>";
                    }
                }
                else {
                    echo "<tr><td colspan = '8' class='text-center'><br>There Are No Booking Yet.</b></td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>