<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Makeup</title>
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
        <h1>Makeup Looks</h1>
        <h4>Add - Modify - Remove Items <a href="add-makeup.php" class="btn addbtn">+ ADD</a></h4>
    </center>
    <br><br>
    <table class="container">
        <thead>
            <tr>
                <th>No</th>
                <th>Type</th>
                <th>Price</th>
                <th>Artist</th>
                <th>Image</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                error_reporting(1);
                include('connection.php');
                $data = "SELECT * FROM makeup ORDER BY no DESC";
                $val = $con -> query($data);
                $displayNo = 1;
                if ($val -> num_rows > 0) {
                    while(list($no, $name, $price, $artist, $img) = mysqli_fetch_array($val)){
                        echo "<tr>";
                        echo "<td>".$displayNo++."</td>";
                        echo "<td>".$name."</td>";
                        echo "<td>".$price."</td>";
                        echo "<td>".$artist."</td>";
                        echo "<td><img src = 'img/$img' width='100' height='100' style='border-radius: 20px;'</td>";
                        echo "<td><a href='edit-makeup.php?no=$no&image=$img'><img src='img/edit.png' style='border-radius: 20px; margin-left: 20px;' width='80'></a></td>";
                        echo "<td><a href='delete-makeup.php?no=$no&image=$img'><img src='img/delete.png' style='border-radius: 20px; margin-left: 20px;' width='50'></a></td>";
                        echo "</tr>";
                    }
                }
                else {
                    echo "<tr><td colspan = '8' class='text-center'><br>There Are No Data Yet.</b></td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>