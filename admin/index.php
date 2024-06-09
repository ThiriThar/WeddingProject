<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="login">
        <?php
            error_reporting(1);
            if(isset($_GET['log'])) {
                $user = $_GET['u'];
                $pass = $_GET['p'];

                if ($user == '' || $pass == '') {
                    echo "<p style=\"color: red; text-align: center;\">Please fill username and password.</p>";
                }
                else {
                    if ($user == "thiri" && $pass == "310306") {
                        header('location:home.html');
                    }
                    else {
                        echo "<p style=\"color: red; text-align: center;\">Invalid username and password.</p>";
                    }
                }
            }
        ?>

        <div class="container">
            <div class="left-login">
                <img src="img/logo.png">
            </div>
            <div class="right-login pt-5">
                <h2 style="color: #fdce64; font-weight: 700;" class="pb-4">BORCELLE Login</h2>
                <h5 style="color: #fdce64; font-weight: 700;" class="pb-4">Welcome Back Admin!</h5>
                <form>
                    <div class="pb-3">
                        <label class="form-label" style="color: #fdce64;">Username</label>
                        <input type="text" class="form-control" name="u">
                    </div>
                    <div class="pb-4">
                        <label class="form-label" style="color: #fdce64;">Password</label>
                        <input type="text" class="form-control" name="p">
                    </div>
                    <button type="submit" name="log" class="btn btn-cus">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>