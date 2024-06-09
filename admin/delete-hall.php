<?php
    include('connection.php');
    $q = "DELETE FROM hall WHERE no='{$_GET['no']}'";
    $con -> query($q);
    header('location: hall.php');
?>