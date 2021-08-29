<?php 
    include('./adduser.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/signup.css">
    <title>Sign up</title>
</head>
<body>

    <div id="nav-bg"></div>
    
    <div id="nav">
        <img src="../images/IDEA logo.png" alt="logo" id="logo">
        <div id="title"><a href="index.php">Ideafy</a></div>
        <a href="./index.php" id="home">Home</a>
        <a href="./signin.php" id="signin">Sign in</a> 
    </div>
    
    <h2 id="signup-text">Sign Up and Start Creating<br> Your Idea Generator <span style="color: #ff5757;">!</span></h2>
    
    <div id="signup-container">
        <form action="" method="post">
            <div id="username">
                <labelw>Username</label><br>
                <input type="text" id="username-input" name="regusername" size="20" maxlength="20" placeholder="Bruce Wayne" required>
            </div>
            <div id="password">
                <label>Password</label><br>
                <input type="password" id="password-input" name="regpassword" size="20" minlength="8" maxlength="20" placeholder="********" required>
            </div>
            <div id="conf-password">
                <label>Confirm password</label><br>
                <input type="password" id="conf-password-input" name="confpassword" size="20" minlength="8" maxlength="20" placeholder="********" required>
            </div>

            <div id="signup-buttons">
                <a href="signin.php" id="signin-btn">Sign in</a>
                <input type="submit" id="signup-btn" name="signup" value="Sign up">
            </div>
        </form>
        <?php echo "<p id='error'>".$error."</p>"; ?>
    </div>

    

    <div id="footer">
        <p id="footer-text">&copy; 2020, All Rights Reserved, Developed by <span style="color: #ff5757;">Osama
                AlhajAli</span></p>
        <div id="grab-idea">
            <i class="far fa-lightbulb"></i><a href="./ideafy.php">Grab an idea</a>
        </div>
    </div>
    <img src="../images/signinBg.jpg" alt="background" id="background">

</body>
</html>