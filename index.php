<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body{
            background-image:url('img/g.jpg');
            background-size: auto;
            background-size: cover;

        }

        .hybe{
            padding: 50px;
            text-align: center;
            background-color:black ;
            opacity: 0.8;
            border-radius: 20px;
            width: 30%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            color: white;
        }

        .h1{
            font-size: 25px;
        }

        form{
            font-size:20px;
        }

        .stan{
            padding: 50px;
            padding-top: 5px;
            text-align: center;
            top: 50%;
            left: 50%
        }

        .stan a{
            font-size: 20px;
            color: lightblue;
        }

    </style>
</head>
<body>
    <div class="hybe">
    <h1> Welcome to My Login Page! </h1>

    <form action="process.php" method="POST">

        <label>Email</label></br>
        <input type="email" name="login_email" required placeholder="Enter your Email Here!...">
        </br><br>

        <label>Password</label></br>
        <input type="password" name="login_pass" required placeholder="Enter your Password Here!...">
        </br></br>

        <input type="submit" name="login" value="LOGIN">


    </form>

    <div class="stan">
    <p><a href="reg.php"> Click Here to Register! </a></p>
    <p><a href="../macalalag/admin/index.php"> Click Here to Login as an Admin! </a></p>
    </div>

    </div>
    
</body>
</html>