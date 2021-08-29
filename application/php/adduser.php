<?php 
    session_start();
    include('./connection.php');
    $error= "";

    if(isset($_POST['signup'])){
        if(isset($_POST['regusername']) && isset($_POST['regpassword']) && isset($_POST['confpassword'])){
            $regusername= $_POST['regusername'];
            $regpassword= $_POST['regpassword'];
            $confpassword= $_POST['confpassword'];

        
            if($regpassword == $confpassword){
                $checkQuery= "SELECT * FROM users WHERE username='".$regusername."'";
                $checkResult= mysqli_query($con, $checkQuery);
                $row= mysqli_num_rows($checkResult);

                //if no registered user has same username then add registrant
                if($row < 1 && strcmp($regusername,"Admin") && strcmp($regusername,"admin")){
                    $signupQuery= "INSERT INTO users Values('".$regusername."', '".$regpassword."')";
                    $insertResult= mysqli_query($con, $signupQuery);
                    $_SESSION['user']= $regusername;

                    header("location: userideafy.php");
                }else{
                    $error= "Username Already Taken, Try Again.";
                }
            }else{
                $error= "Password Doesn't Match.";
            }
        }else{
            $error="Please Fill All Fields.";
        }
        mysqli_close($con);
    }
?>