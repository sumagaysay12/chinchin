<?php
    include "conn.php";
    session_start();

    $email=$_SESSION['email'];

    $getname=mysqli_query($conn, "SELECT * FROM users WHERE email= '$email'");
    while($row=mysqli_fetch_object($getname)){

        $name= $row -> name;

    }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | <?php echo $name;?></title>
    <style>
    body {
        background-image: url('img/d.jpg');
        background-size: auto;
        background-size: cover;

    }

    .nice {
        border: 1px solid violet;
        height: 27px;
        background-color: violet;
    }

    .nice a {
        float: right;
        padding-top: 5px;
        padding-right: 3px;
        padding-bottom: 3px;
        overflow: hidden;
        font-family: Verdana;
        font-weight: bold;
        padding-left: 10px;
        background-color: violet;
        opacity: 0.9;
        color: black;
        font-size: 15px;
        text-align: center;
        text-decoration: none;
    }

    .nice a:hover {
        color: black;
        background: whitesmoke;
    }

    .love h1 {
        text-align: center;
        color: black;
        font-size: 50px;
        font-family: 'Gill Sans';
        font-weight: bold;
        border-radius: 3px;
        background-color: skyblue;
        opacity: 0.9;
    }

    .me {
        padding: 5px;
        padding-bottom: 10px;
        background-color: pink;
        opacity: 0.9;
        border-radius: 20px;
        color: black;
    }
    </style>
</head>

<body>
    <div class="nice">
        <a href="index.php"> LOGOUT </a>
        <a href="update_profile.php"> UPDATE PROFILE |</a>
        <a href="createpost.php"> CREATE POST |</a>
        <a href="group_project.php"> GROUP PROJECT |</a>
        <a href="gallery.php"> GALLERY |</a>
        <a href="userhome.php"> HOME |</a>
    </div>

    <hr>
    </hr>

    <div class="love">
        <h1> This is Your Post </h1>
    </div>

    <div class="me">
        <?php

        $getpost = mysqli_query($conn,"SELECT * FROM post WHERE posted_by='$name'");
        while($row1=mysqli_fetch_array($getpost)){

            ?>

        <h2>Title: <?php echo $row1['title']; ?> </h2>
        <h3>Date: <?php echo $row1['mydate']; ?> </h3>
        <h3>Description: <?php echo $row1['description']; ?> </h3>
        <hr>
        </hr>


        <?php
        }
    
    ?>
    </div>


</body>

</html>