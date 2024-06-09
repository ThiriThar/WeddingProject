<?php
    include('connection.php');
    $q = "DELETE FROM bride WHERE no='{$_GET['no']}'";
    $con -> query($q);
    header('location: bride.php');
?>