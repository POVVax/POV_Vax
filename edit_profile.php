<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");
include 'includes/conn.php';

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
    <title>SETTINGS - POV | Vax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/home_style2.css">
    <script src="js/showPassword.js"></script>
</head>
    <?php
    //   include 'includes/conn.php';
    //     if(!isset($_SESSION['u_id'])){
    //         $user_id = $_GET['u_id'];
    //     }
    //         $query=mysqli_query($db,"SELECT * FROM users where user_id='$user_id'")or die(mysqli_error($db));
    //         $row=mysqli_fetch_array($query);
    ?>
<body>
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
            <form action="" method="post" enctype="multipart/form-data">
                <table class="table table-bordered table-hover">
                    <tr align="center">
                        <td colspan="6" class="active" style="background-color:#3B4F69; color:#f0f0f0;">
                            <h2 style="text-transform:uppercase; font-family:Verdana, Arial, Helvetica, sans-serif; font-weight:bold;">Edit Your Account</h2>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; background-color:#BBCCD7;">
                            Change First Name
                        </td>
                        <td  style="background-color:#BBCCD7;">
                            <input class="form-control" type="text" name="f_name" required value="<?php echo $first_name?>">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; background-color:#BBCCD7;">
                            Change Last Name
                        </td>
                        <td style="background-color:#BBCCD7;">
                            <input class="form-control" type="text" name="l_name" required value="<?php echo $last_name?>">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; background-color:#BBCCD7;">
                            Change Username
                        </td>
                        <td style="background-color:#BBCCD7;">
                            <input class="form-control" type="text" name="u_name" required value="<?php echo $user_name?>">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; background-color:#BBCCD7;">
                            Edit Bio
                        </td>
                        <td style="background-color:#BBCCD7;">
                            <input class="form-control" type="text" name="describe_user" required value="<?php echo $describe_user?>">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; background-color:#BBCCD7;">
                            Relationship Status
                        </td>
                        <td style="background-color:#BBCCD7;">
                            <select name="Relationship" class="form-control">
                                <option><?php echo $Relationship_status?></option>
                                <option>Single</option>
                                <option>In a Relationship</option>
                                <option>Married</option>
                                <option>Complicated</option>
                                <option>Separated</option>
                                <option>Widowed</option>    
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; background-color:#BBCCD7;">
                            Change Email
                        </td>
                        <td style="background-color:#BBCCD7;">
                            <input class="form-control" type="email" name="u_email" required value="<?php echo $user_email?>">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; background-color:#BBCCD7;">
                            Change Password
                        </td>
                        <td style="background-color:#BBCCD7;">
                            <input class="form-control" type="password" name="u_pass" id="mypass" required value="<?php echo $user_pass?>">
                            <input type="checkbox" onclick="show_password()"><strong>Show Password</strong>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; background-color:#BBCCD7;">
                            Vaccine
                        </td>
                        <td style="background-color:#BBCCD7;">
                            <select name="u_vaccine" class="form-control">
                                <option><?php echo $user_country?></option>
                                <option>Not Vaccinated</option>
                                <option>Pfizer-BioNTech</option>
                                <option>Sinovac</option>
                                <option>Moderna</option>
                                <option>Oxford-AstraZeneca</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; background-color:#BBCCD7;">
                            Gender
                        </td>
                        <td style="background-color:#BBCCD7;">
                            <select name="u_gender" class="form-control">
                                <option><?php echo $user_gender?></option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Prefer not to say</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; background-color:#BBCCD7;">
                            Birthday
                        </td>
                        <td style="background-color:#BBCCD7;">
                            <input class="form-control input-md" type="date" name="u_birthday" required value="<?php echo $user_birthday?>">
                        </td>
                    </tr>

                    <tr>
                        <td style="font-weight: bold; background-color:#BBCCD7;">
                            Account Recovery
                        </td>
                        <td style="background-color:#BBCCD7;">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                                Turn On
                            </button>
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Security Question</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="recovery.php?id-<?php echo $user_id; ?>" method="post" id="f">
                                                <strong>What city were you born in?</strong>
                                                <textarea name="content" class="form-control" id="" cols="83" rows="4" placeholder="Somewhere"></textarea><br>
                                                <input type="submit" name="sub" value="Submit" style="width: 100px;"><br><br>
                                                <pre>Answer the question above, we will ask this question if you forgot your <br>password.</pre>
                                            </form>
                                            <?php
                                                if(isset($_POST['sub'])){
                                                    $bfn = htmlentities($_POST['content']);

                                                    if($bfn == ''){
                                                        echo"<script>alert('Please enter Somewhere')</script>";
                                                        echo"<script>window.open('edit_profile.php?u_id$user_id','_self')</script>";

                                                        exit();
                                                    }else{
                                                        $update = "UPDATE users SET recovery_account='$bfn' WHERE user_id='$user_id'";

                                                        $run = mysqli_query($con, $update);

                                                        if($run){
                                                            echo"<script>alert('Turned on Account Recovery successfully.')</script>";
                                                            echo"<script>window.open('edit_profile.php?u_id$user_id','_self')</script>";
                                                        }else{
                                                            echo"<script>alert('Error while Updating Information')</script>";
                                                            echo"<script>window.open('edit_profile.php?u_id$user_id','_self')</script>";
                                                        }
                                                    }
                                                }
                                            ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr align="center">
                        <td colspan="6" style="background-color:#3B4F69;">
                            <input type="submit" class="btn btn-info" name="updata" style="width: 250px;" id="updatebtn" value="Update">
                        </td>
                    </tr>
                </table>
            </form>
    </div>
        <div class="col-sm-2">
        </div>

</div>
</body>
</html>

<?php
      if(isset($_POST['updata'])){
        $firstname = $_POST['f_name'];
        $lastname = $_POST['l_name'];
        $username = $_POST['u_name'];
        $des_user = $_POST['describe_user'];
        $RelStat = $_POST['Relationship'];
        $password = $_POST['u_pass'];
        $email = $_POST['u_email'];
        $vaccine = $_POST['u_vaccine'];
        $gender = $_POST['u_gender'];
        $birthday = $_POST['u_birthday'];
        $query = "UPDATE users SET f_name = '$firstname',l_name = '$lastname',user_name = '$username',describe_user = '$des_user',Relationship = '$RelStat',user_pass = '$password',user_email = '$email',user_vaccine = '$vaccine',user_gender = '$gender',user_birthday = '$birthday' WHERE user_id = '$user_id'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successful.");
            window.location = "edit_profile.php";
        </script>
        <?php
      }
      ?>

 <?php

?> 