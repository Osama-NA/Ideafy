<?php include("./adminadduser.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/addnewuser.css">
    <title>Add User</title>
</head>
<body>
<div id="nav">
        <img src="../images/IDEA logo white.png" alt="logo" id="logo">
        <div id="title"><p>Ideafy</p></div>
        <a href="./goback.php" id="back">Go back</a>
        <a href="./logout.php" id="signout">Sign out</a>
    </div>
    <br>

    <div id="add">
        <form action="" method="post">
            <div id="username">
                <label><b>Username:</b></label><br>
                <input type="text" id="username-input" name="addusername" size="20" maxlength="20" placeholder="Elena Williams" required>
            </div>
            <div id="password">
                <label><b>Password:</b></label><br>
                <input type="text" id="password-input" name="addpassword" size="20" minlength="8" maxlength="20" placeholder="********" required>
            </div>

            <div id="button">
            <input type="submit" name="adduser" id="add-user" value="Add user">
            </div>
        </form>
        <?php echo "<p id='message'>".$msg."</p> "?>
        
    </div>

    <div id="footer">
        <p id="footer-text">&copy; 2020, All Rights Reserved, Developed by <span style="color: #ff5757;">Osama
                AlhajAli</span></p>
    </div>
</body>
</html>