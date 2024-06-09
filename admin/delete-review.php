<?php
    include('connection.php');
    $q = "DELETE FROM review WHERE no='{$_GET['no']}'";
    $con -> query($q);
    header('location: review.php');
?>