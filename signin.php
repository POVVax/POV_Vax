<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/uplogo.png">
    <title>LOG IN ON POV | Vax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/signin.css">
</head>
<body>
    <div class="row"> 
        <div class="col-sm-12">
            <div class="main-content">
                <div class="header">
                <h3><strong>Log In Your Account</strong></h3><hr>
                </div>
                <div class="l-part">
                    <form action="" method="post">
                            <input type="email" class="form-control input-md" placeholder="Email" name="email" required="required">
                        <br>
                        <div class="overlap-text">
                            <input type="password" class="form-control input-md" placeholder="Password" name="pass" required="required">
                            <br>
                            <a data-toggle="tooltip" id="forgot-a" title="Reset Password" href="forgot_password.php" >forgot?</a>
                        </div>
                        <a data-toggle="tooltip" title="Create Account!" href="signup.php" >Don't have an account?</a><br><br>
                        <center><button id="signin" class="btn btn-info btn-lg" name="login">Log In</button></center>
                        <?php include("login.php");?>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>
</html>