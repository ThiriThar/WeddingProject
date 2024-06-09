<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BORCELLE Review</title>
    <link rel="icon" href="img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/94a4a3e87f.js" crossorigin="anonymous"></script>
    <style>
        body{
            background-image: url('img/background.avif');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
        }
        .overlay{
            position: relative;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .form{
            background-image: url('img/a1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
            border-radius: 20px;
            width: 60%;
            margin-left: 250px;
        }
        .container{
            position: relative;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.4);
        }
        h1{
            color: #ff6780;
        }
        p{
            color: white;
        }
        label{
            color: #ff6780;
            font-weight: 700;
        }
        .btn.btn-cus{
            background-color: #281542;
            color: white;
        }
        .btn.btn-cus:hover{
            background-color: #ff6780;
            color: white;
        }
    </style>
</head>
<body class = "overlay">
    <br><br>
    <div class="form">
        <div class="container">
            <center>
            <br>
            <h1>BORCELLE FEEDBACK FORM</h1>
            <p>Free to provide us honest reviews and suggestions to improve our business.</p>
            <?php
                error_reporting(1);
                include('connection.php');
                if (isset($_POST['confirm'])) {
                    $username = $_POST['username'];
                    $message = $_POST['message'];
                    $rating = $_POST['rating'];

                    $query = "INSERT INTO `review` VALUES ('', '$username', '$message', '$rating')";
                    $con -> query($query);
                    echo "<script>window.location.href = 'index.html'</script>";
                }
            ?>
            <form method="POST" enctype="multipart/form-data">
                <label for="username">Username:</label>&nbsp;
                <input type="text" id="username" name="username" required><br><br>

                <label for="message">Message:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <textarea class="help-box" id="helpBox" cols="30" rows="7" name="message" required></textarea><br><br>

                <label for="rating">Ratings:</label>&nbsp;&nbsp;&nbsp;
                <input type="text" id="rating" name="rating" required><br><br>

                <button type="submit" class="btn btn-cus" name="confirm">Submit</button><br><br>
            </form>
            </center>
        </div>
    </div>
</body>
</html>