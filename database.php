<?php
    $host = "localhost";
    $username = "root";
    $password = "mysql";
    $con=mysqli_connect($host,$username,$password);
    if(!$con)
    {
        die("Connection Error");
    }
?>