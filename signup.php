<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/uplogo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <title>SIGN UP ON POV | Vax</title>
    <link rel="stylesheet" href="style/signup.css">
    <script src="js/showPassword.js"></script>
</head>
<body>

    <div class="row">
        <div class="col-sm-12">
            <div class="main-content" style="margin-top:100px;">
                <div class="header">
                    <h3><strong>Create Your Account</strong></h3><hr>
                </div>
                <div class="l-part">
                    <form action="" method="post">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="First Name" name="first_name" required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" class="form-control" placeholder="Email" name="u_email" required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" placeholder="Password" name="u_password" required="required"><br>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input type="date" class="form-control input-md" name="u_birthday" required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
                            <select class="form-control input-md" name="u_gender">
                                <option>Select Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Prefer not to say</option>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
                            <select class="form-control" name="u_vaccine">
                                <option>Select Vaccine</option>
                                <option>Not Vaccinated</option>
                                <option>Pfizer-BioNTech</option>
                                <option>Sinovac</option>
                                <option>Moderna</option>
                                <option>Oxford-AstraZeneca</option>
                            </select>
                        </div><br>
                        <a data-toggle="tooltip" title="Signin" href="signin.php">Already have an account?</a><br><br>
                        <center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Sign Up</button></center>
                         <?php include("insert_user.php"); ?> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>