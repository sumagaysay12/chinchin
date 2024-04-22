<?php
    include "conn.php";
    session_start();

    $email =$_SESSION['email'];

    $getname=mysqli_query($conn, "SELECT * FROM users WHERE email= '$email'");
    while($row=mysqli_fetch_object($getname)){

        $id = $row -> id;
        $name = $row -> name;
        $email = $row -> email;
        $pass = $row -> password;
        $pn = $row -> phone_number;


    }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE PROFILE | <?php echo $name;?></title>
    <style>
    body {
        background-image: url('img/f.jpg');
        background-size: auto;
        background-size: cover;

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
        color: violet;
        background: brown;
    }
    

    .tric {
        padding: 5px;
        padding-bottom: 10px;
        text-align: center;
        background-color: gray;
        opacity: 0.8;
        border-radius: 20px;
        width: 30%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
        color: black;
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

    <div class="tric">
        <h1>UPDATE PROFILE</h1>

        <form action="process.php?id=<?php echo $id;?>" method="POST">

            <label> Name </label> </br>
            <input type="text" name="up_name" value="<?php echo $name;?>" required> </p>

            <label> Email </label> </br>
            <input type="email" name="up_email" value="<?php echo $email;?>" required> </p>

            <label> Password </label> </br>
            <input type="password" name="up_pass" value="<?php echo $pass;?>" required> </p>

            <label> Phone Number </label> </br>
            <input type="text" name="up_pn" value="<?php echo $pn;?>" required> </p>

            <input type="submit" value="UPDATE" name="update_account">

        </form>
    </div>





</body>

</html>
</body>

</html>