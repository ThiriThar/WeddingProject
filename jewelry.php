<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BORCELLE Jewelry</title>
    <link rel="icon" href="img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/94a4a3e87f.js" crossorigin="anonymous"></script>
    <style>
        .navbar ul li a {
            color: white;
            font-weight: 700;
        }
        .navbar ul li a:hover{
            color: #ff6780;
            font-weight: 700;
        }
        .btn.btn-cus{
            background-color: #281542;
            color: white;
        }
        .btn.btn-cus:hover{
            background-color: #fdce64;
            color: white;
        }
        .content{
            background-color: grey;
            height: 500px;
        }
        .images{
            position: relative;
            float: left;
        }
        .main-img{
            width: 500px;
            height: 400px;
            object-fit: cover;
        }
        .secondary-img{
            position: absolute;
            top: 50px;
            left: 320px;
            width: 250px;
            height: auto;
            border: 5px solid #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .second{
            float: right;
        }
        .third-img{
            width: 500px;
            height: 400px;
            object-fit: cover;
        }
        .text-overlay{
            position: absolute;
            max-width: 400px;
            left: 420px;
        }
        .review{
            width: 100%;
            height: 300px;
            background-image: url(img/bg2.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        .overlay{
            position: relative;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
        }
        a.btn.btn-pink{
            background-color: #ff6780;
            color: white;
        }
        a.btn.btn-pink:hover{
            background-color: #281542;
            color: white;
        }
        footer h5{
            color: #fdce64;
            font-weight: 700;
        }
        footer ul li a{
            text-decoration: none;
        }
        footer ul li a:hover{
            text-decoration: overline;
        }
    </style>
</head>
<body>
    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #281542;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="index.html"><img src="img/logo.png" width="80px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="groom.php">GROOM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bride.php">BRIDE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active"  aria-current="page" style="color: #fdce64;" href="jewelry.php">JEWELRY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="makeup.php">MAKEUP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bouquet.php">BOUQUET</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="food.php">FOOD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hall.php">HALL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="entertainment.php">ENTERTAINMENT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- BANNER -->
    <div class="content">
        <div class="container">
            <div class="images">
                <br><br>
                <img src="img/adv7.webp" class="main-img">
                <img src="img/adv8.webp" class="secondary-img">
            </div>
            <div class="second">
                <br><br>
                <img src="img/adv9.webp" class="third-img">
            </div>
            <center>
                <div class="text-overlay">
                    <br><br><br><br><br>
                    <h2 style="color: white; font-weight: 700;">LET'S MAKE YOUR DREAMS COME TRUE</h2>
                    <p style="color: white;">Welcome to our BORCELLE Wedding Designer where you can choose several different materials, accessories and products for your wedding.</p>
                    <a href="groom.php" class="btn btn-cus">PURCHASE</a>
                </div>
            </center>
        </div>
    </div>

    <!-- ADVERTISEMENT -->
    <div class="adv">
        <center>
            <br><br>
            <p>"Trust our wedding designer company to handle everything from venue selection to floral arrangements, so you can enjoy a stress-free and unforgettable wedding day."</p>
            <br>
            <div class="row">
                <div class="col-4"><img src="img/chanel.png" width="100px"></div>
                <div class="col-4"><img src="img/LV.svg" width="80px"></div>
                <div class="col-4"><img src="img/gucci.png" width="80px"></div>
            </div>
            <br><br><br>
        </center>
    </div>

    <!-- CONTENT -->
    <div class="container">
        <div class="heading">
            <center>
                <h1>AVAILABLE JEWELRY & CROWNS PRODUCTS</h1>
                <p>Purchase in an affordable price, pay with cash - debit - credit.</p>
            </center>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
                error_reporting(1);
                include('connection.php');
                $data = "SELECT * FROM jewelry ORDER BY no DESC";
                $val = $con->query($data);
                if ($val -> num_rows > 0) {
                    while (list ($no, $name, $price, $img) = mysqli_fetch_array($val)) {
                        echo "<div class='col-4'>
                                <br><br><br>
                                <div class='card'>
                                    <img src = 'admin/img/$img' class='card-img' height = '300' width = '300' style = 'border-radius: 20px; object-fit: cover;'>
                                    <div class = 'card-content'>
                                        <center><h2>$name</h2>
                                        <p>Price - $$price</p>
                                        <a href = 'order.php? name=$name&price=$price'>
                                        <img src = 'img/purchase.png' width = '80'></a></center>
                                    </div>
                                </div>
                            </div>";
                    }
                }
                else {
                    echo "<h1 colspan = '8' class = 'text-center'><b>No Product Available Yet!</b></h1>";
                }
            ?>
        </div>
    </div>

    <!-- REVIEW -->
    <br><br>
    <div class="review">
        <div class="overlay">
            <center>
                <br><br><br><br>
                <h2 style="color: white; font-weight: 700;">FREE TO GIVE YOUR HONEST REVIEWS</h2>
                <p style="color: white;">We are always pleased to fulfill your demands and increase your satisfaction by improving our best based on your honest feedback, review and suggestions.</p>
                <a href="review.php" class="btn btn-pink">GIVE FEEDBACK</a>
            </center>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="text-center text-lg-start text-white" style="background-color: #281542">
        <div class="container p-4 pb-0">
            <section>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <img src="img/logo.png" width="80px">
                        <br><br>
                        <h5 style="color: #fdce64; font-weight: 700;">BORCELLE WEDDING DESIGNER</h5>
                    </div>

                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0"></div>
  
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">QUICK LINKS</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="index.html" class="text-white">Home</a>
                            </li>
                            <li>
                                <a href="groom.php" class="text-white">Groom</a>
                            </li>
                            <li>
                                <a href="bride.php" class="text-white">Bride</a>
                            </li>
                            <li>
                                <a href="jewelry.php" class="text-white">Jewelry</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">QUICK LINKS</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="makeup.php" class="text-white">Make-up</a>
                            </li>
                            <li>
                                <a href="bouquet.php" class="text-white">Bouquet</a>
                            </li>
                            <li>
                                <a href="food.php" class="text-white">Food</a>
                            </li>
                            <li>
                                <a href="hall.php" class="text-white">Wedding Hall</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">QUICK LINKS</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="entertainment.php" class="text-white">Entertainment</a>
                            </li>
                            <li>
                                <a href="order.php" class="text-white">Order</a>
                            </li>
                            <li>
                                <a href="booking.php" class="text-white">Booking</a>
                            </li>
                            <li>
                                <a href="review.php" class="text-white">Review</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <hr class="mb-4"/>
            <section>
                <p class="d-flex justify-content-center align-items-center">
                    <span class="me-3">Give us your honest opinions & suggestions</span>
                    <a href="review.php" class="btn btn-outline-light">Review!</a>
                </p>
            </section>
  
            <hr class="mb-4" />
            <section class="mb-4 text-center">
                <a class="btn btn-outline-light btn-floating m-1" href="borcellenicole" role="button"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="borcelledesigner" role="button"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="www.borcelle.com" role="button"><i class="fab fa-google"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="nicoleborcelle" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="borcellewedding" role="button"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="thirithar" role="button"><i class="fab fa-github"></i></a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">© 2024 Copyright:
            <a class="text-white" href="https://borcellewedding.com/">BORCELLEWeddingDesigner.com</a>
        </div>
    </footer>
</body>
</html>