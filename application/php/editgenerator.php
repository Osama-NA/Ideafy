<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/editgenerator.css">    
    <title>EDIT GENERATOR</title>
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
        <h3><b>Add Idea</b></h3>
        <form action="" method="post">
            <div id="topic">
                <label><b>Topic:</b></label><br>
                <input type="text" id="topic-input" name="topic"  maxlength="25" placeholder="Enter topic" required>
            </div>
            <div id="idea">
                <label><b>Idea:</b></label><br>
                <textarea id="idea-input" name="idea"  maxlength="200" placeholder="Enter idea" required></textarea>
            </div>

            <div id="button">
            <input type="submit" name="addidea" id="add-idea" value="Add idea">
            </div>
        </form>
        <?php 
            include("./connection.php");
            $msg="";
            if(isset($_POST['addidea'])){
                
                
                $topic= $_POST['topic'];
                $idea= $_POST['idea'];

                //ALL TOPIC FETCHED TO CHECK IF TOPIC EXISTS BEFORE ADDING
                $checkQuery= "SELECT * FROM topic WHERE TopicName='".$topic."'";
                $checkResult= mysqli_query($con, $checkQuery);
                $row= mysqli_num_rows($checkResult);

                //TO INSERT NEW TOPIC, MAX ID IN TABLE TOPIC IS FETCHED FROM DATABASE AND INCREMENTED BY 1
                //THEN USED AS TopicID FOR NEW TOPIC
                $getTopicID="SELECT MAX(TopicID) AS maxID from topic";
                $TopicID_result= mysqli_query($con, $getTopicID);
                $topicID= mysqli_fetch_array($TopicID_result);
                $topicID=  $topicID['maxID'] + 1;

                if($row < 1 &&  $topic != "Random"){ //IF TOPIC DOESN'T EXIST ADD IDEA AND ITS TOPIC
                    $addTopic= "INSERT INTO topic VALUES (".$topicID.",'".$topic."')";
                    $addT= mysqli_query($con, $addTopic);

                    $addIdea= "INSERT INTO ideas VALUES (".$topicID.",'".$idea."')";
                    $addI= mysqli_query($con, $addIdea);

                    $msg= "Idea added";
                }else if($row == 1){ //IF TOPIC EXISTS JUST ADD IDEA TO TOPIC
                    $getTopicID= "SELECT TopicID FROM topic WHERE TopicName='".$topic."'";
                    $topicID= mysqli_query($con, $getTopicID);
                    $ID= mysqli_fetch_array($topicID);
                    $ID= $ID['TopicID'];

                    $addIdea= "INSERT INTO ideas VALUES (".$ID.",'".$idea."')";
                    $addI= mysqli_query($con, $addIdea);

                    $msg= "Idea added";
                }  
            }
            echo "<p id='message'>".$msg."</p> ";
            mysqli_close($con);
        ?>
    </div>

    <div id="IG">
    <form action="" method="POST">
    <h3><b>Remove A Topic</b></h3>
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
                        
                    ?>
                </select>
            </div>
            <input type="submit" id="delete-icon" name="submit" value="">
        </div>
    </form>
    <?php 
        //REMOVE A TOPIC
        if(isset($_POST['submit'])){
            
            $topic= $_POST['topic'];
            $getTopicID= "SELECT TopicID FROM topic WHERE TopicName='".$topic."'";
            $topicID= mysqli_query($con, $getTopicID);
            $ID= mysqli_fetch_array($topicID);
            $ID= $ID['TopicID'];

            //DELETE IDEAS OF SELECTED TOPIC
            $deleteIdeas= "DELETE FROM ideas WHERE TopicID= '".$ID."'";
            $delete= mysqli_query($con, $deleteIdeas);

            //DELETE SELECTED TOPIC
            $deleteTopic= "DELETE FROM topic WHERE TopicName= '".$topic."'";
            $delete2= mysqli_query($con, $deleteTopic);
            
            echo "<p id='remove-message'>Topic Removed Succesfully</p>";
        }
        mysqli_close($con);
    ?>
    </div>

    

    <div id="footer">
        <p id="footer-text">&copy; 2020, All Rights Reserved, Developed by <span style="color: #ff5757;">Osama
                AlhajAli</span></p>
    </div>
</body>
</html>