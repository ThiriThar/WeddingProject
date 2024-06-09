<?php
    include('connection.php');
    $q = "DELETE FROM entertainment WHERE no='{$_GET['no']}'";
    $con -> query($q);
    header('location: entertainment.php');
?>