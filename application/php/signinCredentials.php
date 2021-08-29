<?php
    session_start();
    include("./connection.php");
    $error="";
    

    //IF SIGNED IN USER IS ADMIN, VALIDATES ENTRIES AND REDIRECTS TO ADMIN PAGE
    //IF NOT ADMIN, CHECK IF GIVEN CREDENTIALS MATCHES ANY USER, IF YES, REDIRECTS TO USER PAGE
    if(isset($_POST['signin'])){
        if(empty($_POST['username']) || empty($_POST['password'])){
            $error="Please Fill The Missing Fields!";
        }else if($_POST['username'] == "Admin"){
            $username= $_POST['username'];
            $password= $_POST['password'];
            $query= "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
            $result= mysqli_query($con, $query);
            $row= mysqli_num_rows($result);
            if($row == 1){
                $_SESSION['user']= $username;
                header("location: ./adminideafy.php"); 
            }else{
                $error= "Invalid Username or Password";
            }
        }else{
            $username= $_POST['username'];
            $password= $_POST['password'];
            $query= "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
            $result= mysqli_query($con, $query);
            $row= mysqli_num_rows($result);
            if($row == 1){
                $_SESSION['user']= $username;
                header("location: ./userideafy.php");
            }else{
                $error= "Invalid Username or Password";
            }
        }
        mysqli_close($con);
    }
?>