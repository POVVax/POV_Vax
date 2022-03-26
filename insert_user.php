<?php 
    include("includes/connection.php");

    if(isset($_POST['sign_up'])){

        $first_name = htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
        $last_name = htmlentities(mysqli_real_escape_string($con,$_POST['last_name']));
        $pass = htmlentities(mysqli_real_escape_string($con,$_POST['u_password']));
        $email = htmlentities(mysqli_real_escape_string($con,$_POST['u_email']));
        $gender = htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
        $vaccine = htmlentities(mysqli_real_escape_string($con,$_POST['u_vaccine']));
        $birthday = htmlentities(mysqli_real_escape_string($con,$_POST['u_birthday']));
        $status = "verified";
        $posts ="no";
        $newgid = sprintf('%05d', rand(0, 999999));

        $username = strtolower($first_name . "_" . $last_name . "_" . $newgid);
        $check_username_query = "SELECT user_name FROM users WHERE user_email='$email'";
        $run_username = mysqli_query($con,$check_username_query);

        if(strlen($pass) <6){
            echo "<script>alert('Password should have minimum of 6 characters)</script>";
            exit();
        }

        $check_email = "SELECT * FROM users WHERE user_email='$email'";
        $run_email = mysqli_query($con,$check_email);

        $check = mysqli_num_rows($run_email);

        if($check == 1) {
            echo "<script>alert('Email already exist. Please try using another email address.')</script>";
            echo "<script>window.open('signup.php', '_self')</script>";
            exit();
        }

        $rand = rand(1, 3); 

			if($rand == 1)
				$profile_pic = "vaccine.png";
			else if($rand == 2)
				$profile_pic = "hands.png";
			else if($rand == 3)
				$profile_pic = "mask.png";

		$insert = "INSERT INTO users (f_name,l_name,user_name,describe_user,Relationship,user_pass,user_email,user_vaccine,user_gender,user_birthday,user_image,user_cover,user_reg_date,status,posts,recovery_account)
		VALUES('$first_name','$last_name','$username','Hello POV | Vax. This is my default status!','...','$pass','$email','$vaccine','$gender','$birthday','$profile_pic','coverdef.jpg',NOW(),'$status','$posts','Iwanttoputading intheuniverse.')";
		
		$query = mysqli_query($con, $insert);

		if($query){
			echo "<script>alert('Well Done $first_name, you are good to go.')</script>";
			echo "<script>window.open('signin.php', '_self')</script>";
		}
		else{
			echo "<script>alert('Registration failed, please try again!')</script>";
			echo "<script>window.open('signup.php', '_self')</script>";
		}
    }

?>