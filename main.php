<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/uplogo.png">
    <title>POV | Vax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<section class="main-page">
        <div class="left">
                <img src="images/splash2.png" style="width:100%; height:100%" >
        </div>

        <div class="right">
            <div class="middle-content">
                <img src="images/Logo2.png">
                <h1>See what's the right<p> vaccine for you.</h1>
                <h4>Connect to POV | Vax now</h4>
                <form action="" method="post">
                <button id="signup" class="sign-up" name="signup">Sign Up</button>
                    <?php 
                        if(isset($_POST['signup'])){
                            echo "<script>window.open('signup.php','_self')</script>";
                        }
                    ?>
                <button id="login" class="log-in" name="login">Log In</button>
                    <?php 
                        if(isset($_POST['login'])){
                            echo "<script>window.open('signin.php','_self')</script>";
                        }
                    ?>
                </form>
                <button onclick="popup('covid-popup')" class="sign-up">COVID - 19 Cases Tracker</button>
            </div>
            <div class="container" id="covid-popup">
                <div class="covid_popup">
                    <h2>COVID -19 Cases in the  <span id="country"></span> <img src="" id="flag">
                    <button type="reset" onclick="popup('covid-popup')">X</button></h2>
                    <div class="board">
                    <div class="card a"><i class="fa fa-tachometer"></i><h5>Active Cases</h5><span id="active"></span></div>
                    <div class="card ca"><i class="fa fa-th-list"></i><h5>Total Cases</h5><span id="cases"></span></div>
                    <div class="card cr"><i class="fa fa-times-circle"></i><h5>Critical Cases</h5><span id="critical"></span></div>
                    <div class="card d"><i class="fa fa-times"></i><h5>Total Deaths</h5><span id="death"></span></div>
                    <div class="card r"><i class="fa-solid fa-clipboard-check" style="color: black;"></i><h5>Recovered Cases</h5><span id="recovered"></span></div>
                    <div class="card t"><i class="fa fa-eye"></i><h5>Total Tests Done</h5><span id="tests"></span></div>
                    </div>
                </div>
            </div>
        </div>
</section>


    <script src="js/slider.js"></script>
    <script src="js/cases.js"></script>
</body>
</html>
</body>
</html>