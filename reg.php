<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body{
            background-image:url('img/e.jpg');
            background-size: auto;
            background-size: cover;

        }

        .bighit{
            padding: 50px;
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

        h1{
            font-size: 35px;
        }

        form{
            font-size:20px;
        }

        .bh{
            padding: 50px;
            padding-top: 5px;
            text-align: center;
            top: 50%;
            left: 50%
        }

        .bh a{
            font-size: 20px;
            color: lightblue;
        }

    </style>
</head>
<body>
    <div class="bighit">
    <h1> Registration Form <h1>

    <form action="process.php" method="POST">
        <label>Name: </label> </br>
        <input type="text" name="nm" required></p>

        <label>Email: </label> </br>
        <input type="email" name="email" required></p>
        
        <label>Password: </label> </br>
        <input type="password" name="pass" required></p>

        <label>Phone Number: </label> </br>
        <input type="text" name="pn" required></p>

        <input type="submit" name="reg_button" value="Register">

    </form>

  
    


</body>
</html>