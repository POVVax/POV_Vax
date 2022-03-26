<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");
error_reporting(0);

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
    <title>MESSAGE - POV | Vax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/home_style2.css">
    <script src="resub_issue.js"></script>
</head>
<body>
<div class="row">
        <?php
            if(isset($_GET['u_id'])){
                global $con;
            
                $get_id = $_GET['u_id'];
                

                $get_user = "SELECT * FROM users WHERE user_id='$get_id'";

                $run_user = mysqli_query($con, $get_user);
                $row_user = mysqli_fetch_array($run_user);

                $user_to_msg = $row_user['user_id'];
                $user_to_name = $row_user['user_name'];
            }

            $user = $_SESSION['user_email'];
            $get_user = "SELECT * FROM users WHERE user_email='$user'";
            $run_user = mysqli_query($con, $get_user);
            $row_user = mysqli_fetch_array($run_user);

            $user_from_msg = $row_user['user_id'];
            $user_from_name = $row_user['user_name'];
        ?>

        <div class="col-sm-3" id="select_user">
            <header id="active_ppl">
                <center><h3>Active People</h3></center>
            </header><br><br><br>
        <?php 
                $user = "SELECT * FROM users";
                $run_user = mysqli_query($con, $user);
                while($row_user = mysqli_fetch_array($run_user)){

                    $user_id = $row_user['user_id'];
                    $user_name = $row_user['user_name'];
                    $first_name = $row_user['f_name'];
                    $last_name = $row_user['l_name'];
                    $user_image = $row_user['user_image'];

                    echo"
                        <div class='container-fluid'>
                            <a href='user_message.php?u_id=$user_id'>
                            <img src='users/$user_image' width='50px' height='50px' title='$user_name' class='img-circle'>
                            <strong>&nbsp $first_name $last_name</strong><br><br></a>
                        </div>
                        
                    ";
                }
            ?>
        </div>
        <div class="col-sm-6" style="border-right: 1px solid #767171;border-left: 1px solid #767171;">
            <div class="load_msg" id="scroll_messages">
                <?php
                    
                    $sel_msg = "SELECT * FROM user_messages WHERE (user_to='$user_to_msg' AND user_from='$user_from_msg') OR (user_from='$user_to_msg' AND user_to='$user_from_msg') ORDER by 1 ASC";
                    $run_msg = mysqli_query($con, $sel_msg);
                    
                    while($row_msg = mysqli_fetch_array($run_msg)){
                        $user_to = $row_msg['user_to'];
                        $user_from = $row_msg['user_from'];
                        $msg_body = $row_msg['msg_body'];
                        $msg_date = $row_msg['date'];
                        ?>

                        <div id="loaded_msg">
                            <p><?php if($user_to == $user_to_msg AND $user_from == $user_from_msg){
                                echo "
                                    <div class='message' id='blue' data-toggle='tooltip' title='$msg_date'>$msg_body</div><br><br><br>
                                ";
                            }else if($user_from == $user_to_msg AND $user_to == $user_from_msg){
                                echo "
                                    <div class='message' id='green' data-toggle='tooltip' title='$msg_date'>$msg_body</div><br><br><br>
                                ";
                            }?></p>
                        </div>

                        <?php
                    }


                ?>
            </div>
            <?php
                if(isset($_GET['u_id'])){
                    $u_id = $_GET['u_id'];
                    if($u_id == "new"){
                        echo "
                            <form id='starter'>
                            <center><img src='images/startconvo.png' style='height: 350px; width: 350px;'></center>
                                <center><h3>Start Conversation</h3></center>
                            </form><br><br>
                        ";
                    }
                    else{
                        echo "
                        <form action='' method='POST'>
                            <textarea name='msg_box' id='msg_textarea' class='form-control' placeholder='Start a message...'></textarea><br>
                            <input type='submit' name='send_msg' value='Send' class='btn btn-default' id='msg-btn' style='color:white;'>
                        </form><br><br>
                    ";
                    }
                }
            ?>

            <?php
                if(isset($_POST['send_msg'])){
                    $msg = htmlentities($_POST['msg_box']);

                    if($msg == ""){
                        echo"
                            <h4 style='color:red; text-align: center;'>Message was unable to send!</h4>
                        ";
                    }else if(strlen($msg) > 1000){
                        echo"
                            <h4 style='color:red; text-align: center;'>Message is too long! Limit to 1000 characters only</h4>
                        ";
                    }else{
                        $insert = "INSERT INTO user_messages(user_to,user_from,msg_body,date,msg_seen) VALUES ('$user_to_msg','$user_from_msg','$msg', NOW(), 'no')";

                        $run_insert = mysqli_query($con, $insert);
                    }
                }
            ?>
        </div>
        <div class="col-sm-3">
            <?php
                if(isset($_GET['u_id'])){
                    global $con;
                
                    $get_id = $_GET['u_id'];
                    
    
                    $get_user = "SELECT * FROM users WHERE user_id='$get_id'";
                    $run_user = mysqli_query($con, $get_user);
                    $row = mysqli_fetch_array($run_user);
        
                    $user_id = $row['user_id'];
                    $user_name = $row['user_name'];
                    $f_name = $row['f_name'];
                    $l_name = $row['l_name'];
                    $describ_user = $row['describe_user'];
                    $user_vaccine = $row['user_vaccine'];
                    $user_image = $row['user_image'];
                    $register_date = $row['user_reg_date'];
                    $gender = $row['user_gender'];
                   
                }
                    if($get_id == "new"){

                    }else{
                        echo"
                            <div class='row'>
                            <div class='col-sm-2'>
                            </div>
                            <center>
                            <div class='col-sm-9' style='background-color: #3B4F69; border-radius:15px;margin-left:-20px;'>
                            <h2 style='color: #fff;'>Information About</h2>
                            <img class='img-circle' src='users/$user_image' width='150px' height='150px'><br><br>
                            <ul class='list-group'>
                                <li class='list-group-item' title='Username'><strong>$f_name $l_name</strong></li>
                                <li class='list-group-item' title='Vaccine'>$user_vaccine</li>
                                <li class='list-group-item' title='Gender'>$gender</li>
                            </ul>
                            </div>
                            <div class='col-sm-1'>
                            </div>
                        ";
                    }
                
                ?>
        </div>
    </div>
    <script>
        var div = document.getElementById("scroll_messages");
        div.scrollTop = div.scrollHeight;
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
  
    </script>


        
</body>
</html>