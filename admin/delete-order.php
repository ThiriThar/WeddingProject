<?php
    include('connection.php');
    $q = "DELETE FROM orderlist WHERE no='{$_GET['no']}'";
    $con -> query($q);
    header('location: order.php');
?>