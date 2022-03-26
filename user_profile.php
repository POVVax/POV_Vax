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
        <div class="row">
            <?php
                if(isset($_GET['u_id'])){
                    $u_id = $_GET['u_id'];
                }
                if($u_id < 0 | $u_id == ""){
                    echo"<script>window.open('members.php', '_self')</script>";
                }else{
            ?>
            <div class="col-sm-12">
                <?php
                    if(isset($_GET['u_id'])){
                        global $con;
                        
                        $user_id = $_GET['u_id'];

                        $select = "SELECT * FROM users WHERE user_id='$user_id'";
                        $run = mysqli_query($con, $select);
                        $row = mysqli_fetch_array($run);

                        $name = $row['user_name'];

                    }
                ?>

                <?php
                    if(isset($_GET['u_id'])){
                        global $con;
                        
                        $user_id = $_GET['u_id'];
                        
                        $select = "SELECT * FROM users WHERE user_id='$user_id'";
                        $run = mysqli_query($con, $select);
                        $row = mysqli_fetch_array($run);

                        $id = $row['user_id'];
                        $image = $row['user_image'];
                        $name = $row['user_name'];
                        $f_name = $row['f_name'];
                        $l_name = $row['l_name'];
                        $describe_user = $row['describe_user'];
                        $vaccine = $row['user_vaccine'];
                        $gender = $row['user_gender'];
                        $register_date = $row['user_reg_date'];

                        echo"
                            <div class='row'>
                                <div class='col-sm-1'>
                                </div>
                                <center>
                                <div class='col-sm-3' style='background-color: #3B4F69; border-radius:15px;'>
                                <h2 style='color: #fff;'>Information about</h2>
                                <img class='img-circle' src='users/$image' width='150px' height='150px' ><br><br>
                                <ul class='list-group'>
                                    <li class='list-group-item' title='Username'><strong>$f_name $l_name</strong></li>
                                    <li class='list-group-item' title='User Status'><style='color:grey;'>$describe_user</li>
                                    <li class='list-group-item' title='Vaccine'><strong>$vaccine</strong></li>
                                    <li class='list-group-item' title='Gender'><strong>$gender</strong></li>
                                    <li class='list-group-item' title='Registration Date'>$register_date<strong></strong></li>
                                </ul>
                                
                        ";

                        $user = $_SESSION['user_email'];
                        $get_user = "SELECT * FROM users WHERE user_email='$user'";
                        $run_user = mysqli_query($con, $get_user);
                        $row = mysqli_fetch_array($run_user);

                        $userown_id = $row['user_id'];

                        if($user_id == $userown_id){
                            echo"<a href='edit_profile.php?u_id=$user_id' class='btn btn-success' id='edit-prof'  style='background-color:#B53F49; border-color:#B53F49;'/>Edit Profile</a><br><br><br>";
                        }

                        echo"
                            </div>
                            </center>
                        ";
                    }
                ?>
                <div class="col-sm-8">
                    <center><h1><strong><?php echo"$f_name $l_name";?></strong>'s Posts</h1></center>
                    <?php 
                        global $con;

                        if(isset($_GET['u_id'])){
                            $u_id = $_GET['u_id'];
                        }   

                        $get_posts = "SELECT * FROM posts WHERE user_id='$u_id' ORDER by 1 DESC LIMIT 5";

                        $run_posts = mysqli_query($con, $get_posts);

                        while($row_posts = mysqli_fetch_array($run_posts)){

                            $post_id = $row_posts['post_id'];
                            $user_id = $row_posts['user_id'];
                            $content = $row_posts['post_content'];
                            $upload_image = $row_posts['upload_image'];
                            $post_date = $row_posts['post_date'];

                            $user = "SELECT * FROM users WHERE user_id='$user_id' AND posts='yes'";

                            $run_user = mysqli_query($con, $user);
                            $row_user = mysqli_fetch_array($run_user);

                            $user_name = $row_user['user_name'];
                            $f_name = $row_user['f_name'];
                            $l_name = $row_user['l_name'];
                            $user_image = $row_user['user_image'];

                            if($content=="No" && strlen($upload_image) >= 1){
                                echo"
                                    <div class='own_posts1'>
                                        <div class='row'>
                                            <div class='col-sm-2'>
                                                <p><img src='users/$user_image' class='img-circle' width:100px; height:100px;></p>
                                            </div>
                                            <div class='col-sm-6'>
                                                <h3><a style='text-decoration:none; cursor:pointer; color:#3897f0;' href='user_profile.php?u_id='$user_id'>$user_name</a></h3>
                                                <h4><small style='color: black;'>Updated a post on <strong>$post_date</strong></small></h4>
                                            </div>
                                            <div class='col-sm-4'>
                                            </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-sm-12'>
                                                    <img src='imagepost/$upload_image' style='height:350px;' id='posts-img'>
                                                </div>
                                            </div><br>
                                                <a href='single.php?post_id=$post_id' style='float:right;'><button class='btn btn-success'>View</button></a>
									            <a href='functions/delete_post.php?post_id=$post_id' style='float:right;'><button class='btn btn-danger'>Delete</button></a> 
                                    </div><br><br>
                                ";
                            }
                            else if(strlen($content) >= 1 && strlen($upload_image) >= 1) {
                                echo" 
                                    <div id='own_posts1'>
                                        <div class='row'>
                                            <div class='col-sm-2'>
                                                <p><img src='users/$user_image' class='img-circle' width='100px' height='100px'></p>
                                            </div>
                                            <div class='col-sm-6'>
                                                <h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>@$user_name</a></h3>
                                                <h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
                                            </div>
                                            <div class='col-sm-4'>
                                            </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-sm-12'>
                                                    <p>$content</p>
                                                    <img id='posts-img' src='imagepost/$upload_image' style='height:350px;'>
                                                </div>
                                            </div><br>
                                                <a href='single.php?post_id=$post_id' style='float:right;'><button class='btn btn-success' style='background-color:#B53F49; border-color:#B53F49;'>Comment</button></a>
                                        </div><br><br>
            
                                    ";
                            }
                            else{
                                echo" 
                                    <div id='own_posts1'>
                                        <div class='row'>
                                            <div class='col-sm-2'>
                                                <p><img src='users/$user_image' class='img-circle' width='100px' height='100px'></p>
                                            </div>
                                            <div class='col-sm-6'>
                                                <h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>@$user_name</a></h3>
                                                <h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
                                            </div>
                                            <div class='col-sm-4'>
                                            </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-sm-12'>
                                                    <h3><p>$content</p></h3>
                                                </div>
                                                </div><br>
                                                <a href='single.php?post_id=$post_id' style='float:right;'><button class='btn btn-success' style='background-color:#B53F49; border-color:#B53F49;'>Comment</button></a>
                                                
                                        </div><br><br>
                                    
            
                                ";

                        }
                    }

                    ?>
                </div>
            </div>
        </div>
        <?php }?>
</body>
</html>