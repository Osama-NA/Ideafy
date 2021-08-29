<?php
    //DELETES ALL SAVED IDEAS OF USER, WHEN CLEAR ALL IS CLICKED IN savedideas.php
    include("./connection.php");
    session_start();

    $deleteIdeas= "DELETE FROM savedideas WHERE user='".$_SESSION['user']."'";
    $delete= mysqli_query($con, $deleteIdeas);
    header("location: ./savedideas.php");
    mysqli_close($con);
?>