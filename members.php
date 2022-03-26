<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/L3.png">
    <title>FIND PEOPLE - POV | Vax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/home_style2.css">
</head>
<body>
    <div class="row" style="font-family:Verdana, Arial, Helvetica, sans-serif;">
        <div class="col-sm-12">
            <center><h2 style="color:#3B4F69; text-transform:uppercase; font-weight:bold;">Find New People</h2></center><br><br>
            <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <form class="search_form" action="">
                        <input type="text" name="search_user" placeholder="Search People">
                        <button class="btn btn-info" type="submit" name="search_user_btn" id="search-people" style="width:18%; margin-left:2px;">Search</button>
                    </form>
                </div>
                <div class="col-sm-4">
                </div>
            </div><br><br>
            <?php search_user(); ?>
        </div>
    </div>
</body>
</html>