<?php
    $dbHost= "localhost";
    $dbUsername= "root";
    $dbPassword= "";
    $dbName= "ideagenerator";

    $con= mysqli_connect($dbHost, $dbUsername, $dbPassword)
    or die("Server Connection Failed");

    mysqli_select_db($con,$dbName)
    or die("Database Connection Failed");
?>