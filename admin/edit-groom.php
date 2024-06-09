<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Groom</title>
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
        .box{
            background-image: url("img/groom.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 80%;
            border-radius: 15px;
        }
        .btn{
            background-color: #281542;
            color: white;
        }
        .btn:hover{
            background-color: #fdce64;
            color: white;
        }
        label{
            color: #fdce64;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <br>
    <h1 style="text-align: center; color: #fdce64;">BORCELLE WEDDING DESIGNER</h1>
    <br>
    <center>
        <div class="box container">
            <br>
            <h3 style="color: #fdce64;">Edit Groom Items</h3>
            <?php
                error_reporting(1);
                include('connection.php');
                $no = $_GET['no'];
                $val = $con -> query("SELECT * FROM groom WHERE no=$no");
                $data = mysqli_fetch_array($val);
                if(isset($_POST['edit'])) {
                    $add_name = $_POST['name'];
                    $add_perfume = $_POST['perfume'];
                    $add_price = $_POST['price'];
                    $add_size = $_POST['size'];
                    $img = $_FILES['image']['name'];

                    $con -> query("UPDATE groom SET Suit='$add_name', Perfume='$add_perfume', Price='$add_price', Size='$add_size' WHERE no=$no");
                    header('location:groom.php');
                }
            ?>
            <div class="addGroom">
                <form method="POST" enctype="multipart/form-data">
                    <label for="name">Suit:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="name" name="name" value="<?php echo $data['Suit'] ?>" required><br><br>

                    <label for="perfume">Perfume:</label>&nbsp;&nbsp;
                    <input type="text" id="perfume" name="perfume" value="<?php echo $data['Perfume'] ?>" required><br><br>

                    <label for="price">Price:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="price" name="price" value="<?php echo $data['Price'] ?>" required><br><br>

                    <label for="size">Size:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="size" name="size" value="<?php echo $data['Size'] ?>" required><br><br>

                    <button type="submit" name="edit" class="btn">Update Item</button><br><br>
                </form>
            </div>
        </div>
    </center>
</body>
</html>