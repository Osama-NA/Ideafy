<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/ideafystyle.css"> 
    <title>IDEA GENERATOR</title>
</head>
<body>
    <div id="nav">
        <img src="../images/IDEA logo white.png" alt="logo" id="logo">
        <div id="title"><p>Ideafy</p></div>
        <a href="./signup.php" id="signup">Sign up</a>
        <a href="./signin.php" id="signin">Sign in</a>
    </div>

    <div id="brainlamp-img"></div>

    <h3 id="id-gen-title">IDEA GENERATOR</h3> 

    <form action="" method="POST">
        <div id="idea-generator">
            <label>Topic</label>
            <div id="select">
                <select name="topic" id="">
                    <?php
                        include("./connection.php");

                        $select= "SELECT TopicName from topic";
                        $result= mysqli_query($con, $select);
                        
                        while($row= mysqli_fetch_array($result)){
                            echo "<option value='".$row['TopicName']."'>".$row['TopicName']."</option>";
                        }

                        mysqli_close($con);
                    ?>
                </select>
            </div>
            <input type="submit" id="lamp-icon" name="submit" value="">
        </div>
    </form>
    <br>
    
    <div id="ideas">
        <?php
        
        include("./connection.php");

        if(isset($_POST['submit'])){
            $topic= $_POST['topic'];
            $idea="";

                //QUERY TO GET TopicID OF SELECTED TOPIC
                $topicIDQuery= "SELECT TopicID FROM topic WHERE TopicName= '".$topic."'";
                $topicID= mysqli_query($con, $topicIDQuery);
                $ID= mysqli_fetch_array($topicID);
                $ID= $ID['TopicID'];
    
                //QUERY TO GET RANDOM IDEA OF A SELECTED TOPIC
                $selectedIdea= "SELECT idea FROM ideas WHERE TopicID=".$ID." ORDER BY RAND() LIMIT 1";
                $getIdea= mysqli_query($con, $selectedIdea);
                $sIdea= mysqli_fetch_assoc($getIdea);
                $sIdea= $sIdea['idea'];
                $idea=$sIdea;
                echo "<div class='idea'><p>".$idea."</p></div>";
        }
            
        mysqli_close($con);
        ?>
    </div>

    <div id="footer">
        <p id="footer-text">&copy; 2020, All Rights Reserved, Developed By <span style="color: #ff5757;">
        OsamaAlhajAli</span></p>
        <a id="signin-footer" href="./signin.php">Sign In To Create Your Own Idea Generator<i class="fas fa-sign-in-alt"></i></a> 
    </div>
    
</body>
</html>