<?php
    include "conn.php";
    session_start();

    if(isset($_POST['reg_button'])){

        $name=$_POST['nm'];
        $email=$_POST['email'];
        $password=$_POST['pass'];
        $phone_number=$_POST['pn'];


        $insertusers = mysqli_query($conn, "INSERT INTO users
        VALUES('0','$name','$email','$password','$phone_number')");

        if($insertusers == true){
        ?>
<script>
alert("Your registration was successful!");
window.location.href = "index.php";
</script>
<?php
        
        } else {
            ?>
<script>
alert("Error registration! Try again!");
window.location.href = "reg.php";
</script>
<?php

        }
                    
        }


    if(isset($_POST['login'])){
        
        $email=$_POST['login_email'];
        
        $pass=$_POST['login_pass'];

        
        $check=mysqli_query($conn, "SELECT * FROM users WHERE email= '$email' AND password= '$password'");

        $num=mysqli_num_rows($check);


        if($num >=0){

            $_SESSION['email'] = $email;
            ?>

<script>
alert("Account Accepted! Welcome Users!");
window.location.href = "userhome.php";
</script>
<?php

        }else{
            ?>
<script>
alert("Email or Password not Found!");
window.location.href = "index.php";
</script>
<?php



        }
    }

    if(isset($_POST['update_account'])){

        $id = $_GET['id'];

        $upname = $_POST['up_name'];
        $upemail = $_POST['up_email'];
        $uppass = $_POST['up_pass'];
        $uppn = $_POST['up_pn'];

        $updateaccount=mysqli_query($conn, "UPDATE users SET name= '$upname',
        email= '$upemail', password= '$uppass', phone_number= '$uppn' WHERE id= '$id'");

        if($updateaccount==true){
            ?>
<script>
alert("Data was changed!")
window.location.href = "userhome.php";
</script>
<?php
        }else{
            ?>
<script>
alert("Data was not changed!")
window.location.href = "update_profile.php";
</script>
<?php
        }

    }

    if(isset($_POST['create_post'])){

        $title =  $_POST['title'];
        $date = $_POST['mydate'];
        $desc = $_POST['desc']; 
        $posted_by = $_POST['posted_by'];

        $insertpost =  mysqli_query($conn, "INSERT INTO post VALUES('0','$title','$date','$desc','$posted_by')");

        if($insertpost==true){
            
            ?>
<script>
alert("Post was inserted in the database!");
window.location.href = "userhome.php";
</script>
<?php

        }else{
            
            ?>
<script>
alert("Error in Posting!");
window.location.href = "createpost.php";
</script>
<?php

        }
    
    }



?>