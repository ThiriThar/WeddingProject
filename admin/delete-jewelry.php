<?php
    include('connection.php');
    $q = "DELETE FROM jewelry WHERE no='{$_GET['no']}'";
    $con -> query($q);
    header('location: jewelry.php');
?>