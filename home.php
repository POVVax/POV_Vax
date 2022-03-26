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
    <link rel="icon" href="images/uplogo.png">
    <title>HOME - POV | Vax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/home_style2.css">
</head>
<body>
    <div class="row" style="background-color: #B22222;">
        <div id="insert_post" class="col-sm-12">
            <center>
            <form action="home.php?id=<?php echo $user_id; ?>" method="post" id="f" enctype="multipart/form-data">
            <textarea class="form-control" id="content" rows="4" name="content" placeholder="What's on your mind?"></textarea><br>
            <label class="btn1 btn-warning" id="upload_image_button" style="background-color:#B53F49; border-color:#B53F49;"><i class="glyphicon glyphicon-camera"></i>
            <input type="file" name="upload_image" size="30">
            </label>
            <button id="btn-post" class="btn btn-success" name="sub">INJECT</button>
            </form>
            <?php insertPost(); ?>
            </center>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <center><h2 id="pov"><strong>POV</strong></h2><br></center>
            <?php echo get_posts(); ?>
        </div>
    </div>

</div>
</body>
</html>