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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BSIT STUDENT | <?php echo $name;?></title>
    <style>
    body {
        background-image: url('img/1.webp');
        background-size: auto;
        background-size: cover;
        overflow-x: hidden;

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
        background: light;
    }

    .main {
        box-shadow: 3px 5px 10px rgb(167, 124, 189);
        padding-bottom: 150px;
        background-color:;
        opacity: 0.8;
    }

    .main-header {
        padding-top: 3px;
        height: 100px;
        border: 3px solid rgb(71, 40, 40);
    }

    .header-logo p {
        font-size: 30px;
        font-family: Verdana;
        font-weight: bold;
        padding-left: 10px;
        text-align: left;
        color: #460c0c;
    }

    .main-header .header-logo {
        float: left;
    }

    .main-header .header-nav {
        float: right;
        padding-top: 50px;
        padding-right: 20px;
        padding-bottom: 3px;
        overflow: hidden;
    }

    .main-header .header-nav a {
        font-size: 13px;
        font-family: 'Tahoma';
        font-weight: bold;
        text-align: center;
        padding-bottom: 20px;
        color: rgb(238, 128, 18);
        text-decoration: none;
    }

    .main-pic img {
        width: 100%;
        height: 10%;
        padding-top: 5px;
        padding-bottom: 5px;
        border-top: 3px solid black;
        border-bottom: 3px solid black;
    }

    .prod-title {
        text-align: center;
        font-size: 25px;
        font-family: 'Trebuchet MS';
        font-weight: bold;
        margin-bottom: 30px;
        border-bottom: 5px solid rgb(163, 66, 66);
    }

    .search {
        float: right;
        width: 400px;
        top: 85%;
        left: 100%;
        transform: translate(-70%, -670%);
        position: absolute;
        color: rgb(219, 132, 19);
    }

    .search a:hover {
        background-color: black;

    }

    .homes h1 {
        text-align: center;
        font-size: 50px;
        font-family: 'Trebuchet MS';
        font-weight: bold;
        margin-bottom: 30px;
        border-bottom: 5px solid rgb(163, 66, 66);
    }

    .homes p {
        text-align: center;
        font-size: 30px;
        font-family: 'Trebuchet MS';
        font-weight: bold;
        margin-bottom: 30px;
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

    <div class="main">

        <div class="main-header">
            <div class="header-logo">
                <p>BSIT STUDENT</p>
            </div>

            



        <!--Div for big picture-->
        <div class="main-pic">
            <img src="img/h.jpg">
        </div>

        <div class="homes">
            <h1> H O M E </h1>

            <p></br> Being a Bachelor of Science in Information Technology (BSIT) student is a challenging yet 
            rewarding venture. It is a journey filled with a myriad of experiences that not only revolve around 
            the academic curriculum but also involve personal growth and development.
 
             The academic life of a BSIT student is characterized by a rigorous course structure that encompasses
              various aspects of information technology. This includes computer programming, web development,
               database management, network security, and software engineering, among others. The curriculum is
                designed to equip students with the necessary skills and knowledge to excel in the IT industry.
  
 
            </p>

            <p></br> Beyond the academics, being a BSIT student also entails developing problem-solving skills, 
            analytical thinking, and an innovative mindset. It requires a constant thirst for learning, as technology
             is a rapidly evolving field. It also demands resilience, as the course can be demanding and the 
             pressure to keep up with the latest trends and technologies can be overwhelming.
 
            Moreover, BSIT students often engage in various projects and research work, which provide them
             with practical exposure and hands-on experience. These projects are not just confined to the
              classroom but also extend to real-world scenarios, further enhancing their skills and preparing
               them for the professional world.
  
                In conclusion, being a BSIT student is not just about acquiring technical skills, but it's also
                 about developinga holistic approach towards problem-solving and innovation. It's a journey that 
                 shapes individuals into competent IT professionals capable of contributing significantly to the 
                 digital world.
            </p>
        </div>
</body>

</html>