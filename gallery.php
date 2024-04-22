<?php
    include "conn.php";
    session_start();

    $email =$_SESSION['email'];

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
    <title>GALLERY | <?php echo $name;?></title>
    <style>
    body {
        background-image: url('img/bi.jpg');
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
        background: whitesmoke;
    }

    .eun h1 {
        text-align: center;
        font-size: 50px;
        font-family: 'Gill Sans';
        font-weight: bold;
        margin-left: 41%;
        margin-right: 41%;
        border-radius: 20px;
        background-color: lightgray;
        opacity: 0.9;
    }

    .row {
        padding: 30px;
    }

    .col1 {
        text-align: center;
        float: left;
        width: 23%;
        padding: 10px 10px 20px 10px;
        border: 2px solid purple;
        background-color: floralwhite;
        box-shadow: 10px 10px 5px rgb(253, 253, 173);
    }


    .col1 span {
        text-align: center;
        font-size: 25px;
        font-family: 'Gill Sans';
        font-weight: bold;
    }

    .col1-desc p {
        font-family: 'Lucida Sans';
        margin-right: 5%;
        margin-left: 5%;
    }

    .col1 img {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .col1:hover {
        transform: rotate(4deg);
    }

    .row::after {
        content: " ";
        display: table;
        clear: both;
    }

    @media screen and (max-width:600px) {
        .col1 {
            width: 100%;
        }

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
        <h1> GALLERY </h1>
    </div>

    <div class="row">


        <div class="col1">
            <img src="img/1.jpg" width="100%">
            <span> Selfie After Citeweek</span>
            <p class="col1-desc">
                
            </p>
        </div>

        <div class="col1">
            <img src="img/5.jpg" width="100%">
            <span> Final Defence </span>
            <p class="col1-desc">
              
            </p>
        </div>


        <div class="col1">
            <img src="img/3.jpg" width="100%">
            <span> CHAMPIONSHIP </span>
            <p class="col1-desc">

            </p>
        </div>

        <div class="col1">
            <img src="img/4.jpg" width="100%">
            <span> Stroll Around the Mall</span>
            <p class="col1-desc">
                
            </p>
        </div>

        <div class="col1">
            <img src="img/7.jpg" width="100%">
            <span> New Year Picture with Cousins </span>
            <p class="col1-desc">

            </p>
        </div>

        <div class="col1">
            <img src="img/8.jpg" width="100%">
            <span> My Baby DoggiesSA </span>
            <p class="col1-desc">
                
            </p>
        </div>
    </div>

</body>

</html>