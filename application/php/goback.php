<?php 
    //USED IN savedideas.php | editgenerator.php | addnewuser.php
    session_start();
    if($_SESSION['user'] == "Admin"){
        header("location: ./adminideafy.php");
    }else{
        header("location: ./userideafy.php");
    }
?>

