<?php
    include('connection.php');
    $q = "DELETE FROM makeup WHERE no='{$_GET['no']}'";
    $con -> query($q);
    header('location: makeup.php');
?>