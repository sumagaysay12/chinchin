<?php
    include "conn.php";
    session_start();

    $email = $_SESSION['email'];

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
    <title>CREATE POST | <?php echo $name;?></title>
    <style>
    body {
        background-image: url('img/ce.jpg');
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
        padding-right: 10px;
        padding-bottom: 3px;
        padding-left: 3px;
        overflow: hidden;
        font-family: Verdana;
        font-weight: bold;
        background-color: violet;
        opacity: 0.9;
        color: black;
        font-size: 15px;
        text-align: center;
        text-decoration: none;

    }

    .nice a:hover {
        color: black;
        background: white;
    }

    .eun h1 {
        text-align: center;
        font-size: 50px;
        font-family: 'Gill Sans';
        font-weight: bold;
        margin-left: 38%;
        margin-right: 38%;
        border-radius: 20px;
        background-color: lightgray;
        opacity: 0.9;
    }

    .tric {
        padding: 5px;
        padding-bottom: 10px;
        text-align: center;
        background-color: light;
        opacity: 0.8;
        border-radius: 20px;
        width: 30%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
        color: white;
    }

    .tric label {
        font-family: Impact;
        font-size: 20px;
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

    <div class="eun">
        <h1> Create Post </h1>
    </div>

    <div class="tric">
        <form action="process.php" method="POST">

            <label> Title of your Post </label> </br>
            <input type="text" name="title" required placeholder="Add Title Here..."> </p>

            <label> Select Date </label> </br>
            <input type="date" name="mydate" required> </p>

            <label> Add Description </label> </br>
            <textarea cols="50" rows="10" name="desc"></textarea> </p>

            <input type="hidden" name="posted_by" value="<?php echo $name; ?>">

            <input type="submit" name="create_post" value="POST">

        </form>
    </div>

</body>

</html>