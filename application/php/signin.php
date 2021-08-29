<?php
    include("./signinCredentials.php");
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
    <link rel="stylesheet" href="../css/signin.css">
    <title>Sign in</title>
</head>

<body>

    <div id="nav-bg"></div>
    <div id="nav">
        <img src="../images/IDEA logo.png" alt="logo" id="logo">
        <div id="title"><a href="./index.php">Ideafy</a></div>
        <a href="./index.php" id="home">Home</a>
        <a href="./signup.php" id="signup">Sign up</a>
    </div>

    <h2 id="signin-text">Sign in and Grab an Idea <span style="color: #ff5757;">!</span></h2>

    <div id="signin-container">
        <form action="" method="post">
            <div id="username">
                <label>Username:</label><br>
                <input type="text" id="username-input" name="username" size="20" maxlength="20" placeholder="John Smith">
            </div>
            <div id="password">
                <label>Password:</label><br>
                <input type="password" id="password-input" name="password" size="20" minlength="8" placeholder="********">
            </div>

            <div id="signin-buttons">
                <a href="signup.php" id="signup-btn">Sign up</a>
                <input type="submit" id="signin-btn" name="signin" value="Sign in">
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