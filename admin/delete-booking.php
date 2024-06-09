<?php
    include('connection.php');
    $q = "DELETE FROM booking WHERE no='{$_GET['no']}'";
    $con -> query($q);
    header('location: booking.php');
?>