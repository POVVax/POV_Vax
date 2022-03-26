<!DOCTYPE html>
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
</head>
<body>
    <div class="row">
        <div class="col-sm-12">
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="main-content">
                    <div class="header">
                        <h3 style="text-align: center;"><strong>Forgot Password</strong></h3><hr>
                    </div>
                    <div class="l_pass">
                        <form action="" method="post">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="email" class="form-control" type="email" name="email" placeholder="Enter your Email" required>
                            </div><br><hr>
                            <pre class="text">What city were you born in?</pre>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <input type="text" class="form-control" placeholder="Somewhere" name="recover_account" id="msg" required>
                            </div><br>
                            <a href="signin.php" data-toggle="tooltip" title="Signin">Back to Log In?</a><br><br>
                            <center><button id="signup" class="btn btn-info btn-lg" name="submit">Submit</button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
session_start();

include("includes/connection.php");

	if (isset($_POST['submit'])) {

		$email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
		$recovery_account = htmlentities(mysqli_real_escape_string($con, $_POST['recover_account']));

		$select_user = "SELECT * FROM users WHERE user_email='$email' AND recovery_account='$recovery_account'";
		
        $query= mysqli_query($con, $select_user);

		$check_user = mysqli_num_rows($query);

		if($check_user == 1){
			$_SESSION['user_email'] = $email;

			echo "<script>window.open('change_password.php', '_self')</script>";
		}else{
			echo"<script>alert('Your email or security answer is incorrect.')</script>";
		}
	}
?>