<?php
    include('connection.php');
    $q = "DELETE FROM bouquet WHERE no='{$_GET['no']}'";
    $con -> query($q);
    header('location: bouquet.php');
?>