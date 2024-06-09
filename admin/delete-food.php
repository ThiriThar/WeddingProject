<?php
    include('connection.php');
    $q = "DELETE FROM food WHERE no='{$_GET['no']}'";
    $con -> query($q);
    header('location: food.php');
?>