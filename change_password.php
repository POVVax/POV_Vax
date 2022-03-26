<!DOCTYPE html>
<?php
session_start();
include("includes/connection.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/uplogo.png">
    <title>FORGOT PASSWORD - POV | Vax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/forgot.css">
    <script src="js/showPassword.js"></script>
</head>
<body>
    <div class="row">
        <div class="col-sm-12">
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="main-content">
                    <div class="header">
                        <h3 style="text-align: center;"><strong>Change Your Password</strong></h3><hr>
                    </div>
                    <div class="l_pass">
                        <form action="" method="post">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" class="form-control" type="password" name="pass" placeholder="New Password" required>
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Confirm New Password" name="pass1" id="password1" required>
                            </div>
                            <strong id="stpass">Show Password</strong><input type="checkbox" onclick="show_change_password()" id="showpass"><br><br>
                            <center><button id="signup" class="btn btn-info btn-lg" name="change">Change Password</button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 

if (isset($_POST['change'])) {

    $user = $_SESSION['user_email'];
    $get_user = "SELECT * FROM users WHERE user_email='$user'";
    $run_user = mysqli_query($con, $get_user);
    $row = mysqli_fetch_array($run_user);

    $user_id = $row['user_id'];

    $pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));
    $pass1 = htmlentities(mysqli_real_escape_string($con, $_POST['pass1']));

    if($pass == $pass1){
        if(strlen($pass) >= 6 && strlen($pass) <=60){
            $update = "UPDATE users SET user_pass='$pass' WHERE user_id='$user_id'";

            $run = mysqli_query($con, $update);
            echo "<script>alert('Your password is changed a moment ago')</script>";
            echo "<script>window.open('home.php', '_self')</script>";
        }
        else{
            echo "<script>alert('Your password should be greater than 6 characters')</script>";
        }
    }
    else{
        echo "<script>alert('Your password did not match')</script>";
        echo "<script>window.open('change_password.php', '_self')</script>";
    }
}
?>