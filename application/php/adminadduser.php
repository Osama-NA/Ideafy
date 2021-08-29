<?php 
    session_start();
    include('./connection.php');
    $msg= "";

    //ADMIN'S ADD USER
    //CHECKS IF USER EXISTS, IF NOT, ADDS USER
    if(isset($_POST['adduser'])){
        if(isset($_POST['addusername']) && isset($_POST['addpassword'])){
            $addusername= $_POST['addusername'];
            $addpassword= $_POST['addpassword'];
            $checkQuery= "SELECT * FROM users WHERE username='".$addusername."'";
            $check= mysqli_query($con, $checkQuery);
            $row= mysqli_num_rows($check);
            if($row < 1 ){
                $addUser= "INSERT INTO users Values('".$addusername."', '".$addpassword."')";
                $add= mysqli_query($con, $addUser);
                $msg="User Added Succesfully";
            }else{
                $msg= "Username Already Taken, Try Again.";
            }
        }else{
            $msg="Please Fill All Fields.";
        }
        mysqli_close($con);
    }
?>