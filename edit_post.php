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
    <title>EDIT POST - POV | Vax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/home_style2.css">
</head>
<body>
    <div class='row'>
        <div class="col-sm-3">
        </div>
            <div class="col-sm-6">
                <?php
                    if(isset($_GET['post_id'])){
                        $get_id = $_GET['post_id'];

                        $get_post = "SELECT * FROM posts WHERE post_id='$get_id'";
                        $run_post = mysqli_query($con, $get_post);
                        $row =mysqli_fetch_array($run_post);

                        $post_con = $row['post_content'];

                    }

                ?>
            <div class="main-content" style="margin-top:200px;">
                <form action="" method="post" id="f">
                <div class="header">
                    <center><h2>Edit Your Post</h2></center><br>
                </div>
                    <textarea class="form-control" name="content" cols="83" rows="4"><?php echo $post_con; ?></textarea><br>
                    <input type="submit" name="update" value="Update Post" class="btn btn-info" id="ed-btn"/>
                </form>
            </div>
                <?php
                    if(isset($_POST['update'])){
                        $content = $_POST['content'];

                        $update_post = "UPDATE posts SET post_content='$content' WHERE post_id='$get_id'";
                        $run_update = mysqli_query($con, $update_post);

                        if($run_update){
                            echo "<script>window.open('profile.php', '_self')</script>";
                        }
                    }
                ?>
        </div>
        <div class="col-sm-3">
        </div>              
    </div>
</body>
</html>