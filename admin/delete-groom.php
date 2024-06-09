<?php
    include('connection.php');
    $q = "DELETE FROM groom WHERE no='{$_GET['no']}'";
    $con -> query($q);
    header('location: groom.php');
?>