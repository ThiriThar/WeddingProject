<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Entertainment</title>
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
            background-image: url("img/bg10.jpg");
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
            <h3 style="color: #fdce64;">Add Entertainment Items</h3>
            <?php
                error_reporting(1);
                include('connection.php');
                if(isset($_POST['add'])) {
                    $add_name = $_POST['name'];
                    $add_hour = $_POST['hour'];
                    $add_price = $_POST['price'];
                    $img = $_FILES['image']['name'];

                    $query = mysqli_query($con, "INSERT INTO entertainment(name, hour, price, image) value ('$add_name', '$add_hour', '$add_price', '$img')");

                    if($query) {
                        move_uploaded_file($_FILES['image']['tmp_name'],"img/".$img);
                        echo "<script>alert('New item has been successfully added.');</script>";
                        echo "<script>window.location.href = 'entertainment.php'</script>";
                    }
                    else {
                        echo "<script>alert('Some error has occurred. Please try again.');</script>";
                    }
                }
            ?>

            <div class="addEntertainment"><br>
                <form method="POST" enctype="multipart/form-data">
                    <label for="name">Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="hour">Hour:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="hour" name="hour" required><br><br>

                    <label for="price">Price:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="price" name="price" required><br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="image">Image:</label>
                    <input type="file" id="image" name="image" required><br><br>

                    <button type="submit" name="add" class="btn">Add Item</button><br><br>
                </form>
            </div>
        </div>
    </center>
</body>
</html>