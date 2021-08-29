<?php session_start(); ?>
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
    <link rel="stylesheet" href="../css/savedideas.css">
    <title>Saved Ideas</title>
</head>
<body>
<div id="nav">
        <img src="../images/IDEA logo white.png" alt="logo" id="logo">
        <div id="title"><p>Ideafy</p></div>
        <a href="./deleteideas.php" id="clear">Clear all</a>
        <a href="./goback.php" id="back">Go back</a>
        <a href="./logout.php" id="signout">Sign out</a>
    </div>
    <br><br><br><br><br><br><br>
    <h3 id="gen-ideas">
        <?php 
            echo $_SESSION['user'];
        ?>
        's Saved Ideas
    </h3> 
    <div id="ideas">
    <?php 
    //FETCHES ALL SAVED IDEAS OF USER 
    include("./connection.php");
    $getIdeas= "SELECT idea FROM savedideas WHERE user='".$_SESSION['user']."'";
    $generatedIdeas= mysqli_query($con, $getIdeas);
    if(mysqli_num_rows($generatedIdeas) < 1){
        echo "<div class='idea'><p style='text-align:center'>&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;No saved ideas</p></div>";
    }
    while($rows= mysqli_fetch_array($generatedIdeas)){
            if($rows['idea'] != ""){
                echo "<div class='idea'><p>".$rows['idea'];
                echo "</p><a class='delete'><i class='fas fa-trash-alt'></i></a></div>";
            }
    }
    mysqli_close($con);
?>
    </div>

    <div id="saved-ideas-Bg"></div>
    <div id="footer">
        <p id="footer-text">&copy; 2020, All Rights Reserved, Developed by <span style="color: #ff5757;">Osama
                AlhajAli</span></p>
    </div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
        $('.delete').click(function (e) {
            e.preventDefault();
            const item= e.target;
            let idea= item.parentElement;
            idea= idea.parentElement;
            idea.classList.add('onDelete');
            idea.addEventListener('transitionend', function(){
                $(idea).remove();
            })
        });
    </script>
</body>
</html>