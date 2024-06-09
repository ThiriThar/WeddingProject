<?php
    $con = mysqli_connect("localhost", "root", "", "weddingdb");
    if(mysqli_connect_error()){
        echo "Connection failed!".mysqli_connect_error();
    }
?>