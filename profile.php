<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php"); 
}
?>
<html>
<head>
	<?php
		$user = $_SESSION['user_email'];
		$get_user = "SELECT * FROM users WHERE user_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_name = $row['user_name'];
	?>
	<title>PROFILE - POV | Vax</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<style>
	*{
    	font-family: Verdana, Arial, Helvetica, sans-serif;
	}
	#cover-img{
		height: 600px;
		width: 100%;
		border: 1px solid grey;
		border-radius: 15px;
	}
	#profile-img{
		position: absolute;
		top: 300px;
		left: 40px;
	}
	#prof-img{
		border: 2px solid grey;
	}
	#update_profile{
		position: relative;
		top: -33px;
		cursor: pointer;
		left: 123px;
		border-radius: 4px;
		background-color: rgba(0,0,0,0.1);
		transform: translate(-50%, -50%);
	}
	#button_profile{
		position: absolute;
		top: 82%;
		left: 50%;
		cursor: pointer;
		transform: translate(-50%, -50%);
	}
	#own_posts{
		border: 5px solid #f0f0f0;
		padding: 40px 50px;
		background-color: #f0f0f0;
		border-radius: 10px;
		
	}
	#posts_img{
		height: 300px;
		width: 100%;
	} 

	.img-circle{
		margin-left: -10px;
	}
	#update_profile{
		margin-left: -13px;
	}
	

</style>
<body>
<div class="row">
	<div class="col-sm-2">	
	</div>
	<div class="col-sm-8">
		<?php
			echo"
			<div>
				<div><img id='cover-img' class='img-rounded' src='cover/$user_cover' alt='cover'></div>
				<form action='profile.php?u_id=$user_id' method='post' enctype='multipart/form-data'>

				<ul class='nav pull-left' style='position:absolute;top:10px;left:40px;'>
					<li class='dropdown'>
						<button class='dropdown-toggle btn btn-default' data-toggle='dropdown' style='background-color:#B53F49; border-color:#B53F49; color:#fff; margin-left:1030px;'>Change Cover</button>
						<div class='dropdown-menu' style='background-color:#f0f0f0; border-color:#f0f0f0; margin-left:1015px;'>
							<center>
							<p>Click <strong>Select Cover</strong> and then click the <br> <strong>Update Cover</strong></p>
							<label class='btn btn-info' style='background-color:#B53F49; border-color:#B53F49;'> Select Cover
							<input type='file' name='u_cover' size='60' />
							</label><br><br>
							<button name='submit' class='btn btn-info' style='background-color:#B53F49; border-color:#B53F49;'>Update Cover</button>
							</center>
						</div>
					</li>
				</ul>

				</form>
			</div>
			<div id='profile-img'>
				<img src='users/$user_image' alt='Profile' class='img-circle' width='230px' height='235px' id='prof-img'>
				<form action='profile.php?u_id='$user_id' method='post' enctype='multipart/form-data'>

				<label id='update_profile'> Select Profile
				<input type='file' name='u_image' size='60' />
				</label><br><br>
				<button id='button_profile' name='update' class='btn btn-info' style='background-color:#B53F49; border-color:#B53F49;'>Update Profile</button>
				</form>
			</div><br>
			";
		?>
		<?php

			if(isset($_POST['submit'])){

				$u_cover = $_FILES['u_cover']['name'];
				$image_tmp = $_FILES['u_cover']['tmp_name'];
				$random_number = rand(1,100);

				if($u_cover==''){
					echo "<script>alert('Please Select Cover Image')</script>";
					echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
					exit();
				}else{
					move_uploaded_file($image_tmp, "cover/$u_cover.$random_number");
					$update = "update users set user_cover='$u_cover.$random_number' where user_id='$user_id'";

					$run = mysqli_query($con, $update);

					if($run){
					echo "<script>alert('Your Cover Updated')</script>";
					echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
					}
				}

			}

		?>
	</div>


	<?php
		if(isset($_POST['update'])){

				$u_image = $_FILES['u_image']['name'];
				$image_tmp = $_FILES['u_image']['tmp_name'];
				$random_number = rand(1,100);

				if($u_image==''){
					echo "<script>alert('Please Select Profile Image on clicking on your profile image')</script>";
					echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
					exit();
				}else{
					move_uploaded_file($image_tmp, "users/$u_image.$random_number");
					$update = "update users set user_image='$u_image.$random_number' where user_id='$user_id'";

					$run = mysqli_query($con, $update);

					if($run){
					echo "<script>alert('Your Profile Updated')</script>";
					echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
					}
				}

			}
	?>
	<div class="col-sm-2">
	</div>
</div>
<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-2" style="background-color:#3B4F69; text-align: center;left: 0.8%;border-radius: 15px; ">
		<?php
		echo"
			<center><h2 style='color:white;'><strong>About</strong></h2></center>
			<center><h4 style='color:white;'><strong>$first_name $last_name</strong></h4></center>
			<p><i style='color:white;'>$describe_user</i></p><br>
			<p style='text-align: left; color:white;'><strong>Vaccine: </strong> $user_country</p><br>
			<p style='text-align: left; color:white;'><strong>Gender: </strong> $user_gender</p><br>
			<p style='text-align: left; color:white;'><strong>Date of Birth: </strong> $user_birthday</p><br>
			<p style='text-align: left; color:white;'><strong>Created: </strong> $register_date</p><br>
		";
		?>
	</div>

	<div class="col-sm-6">
		<?php 
			global $con;
			
			if (isset($_GET['user_id'])){
				$user_id = $_GET['user_id'];

			}
							
			$get_posts = "SELECT * FROM posts WHERE user_id='$user_id' ORDER by 1 DESC LIMIT 5";
			$run_posts = mysqli_query($con, $get_posts);
			

			while ($row_posts = mysqli_fetch_array($run_posts)){
				$post_id = $row_posts['post_id'];
				$user_id = $row_posts['user_id'];
				$content = $row_posts['post_content'];
				$upload_image = $row_posts['upload_image'];
				$post_date = $row_posts['post_date'];

				$user = "SELECT * FROM users WHERE user_id='$user_id' AND posts='yes'";
				$run_user = mysqli_query($con, $user);
				$row_user = mysqli_fetch_array($run_user);

				$user_name = $row_user['user_name'];
				$user_image = $row_user['user_image'];

				if($content == "No" && strlen($upload_image) >= 1) {
					echo" 
						<div id='own_posts'>
							<div class='row'>
								<div class='col-sm-2'>
									<p><img src='users/$user_image' class='img-circle' width='100px' height='100px'></p>
								</div>
								<div class='col-sm-6' style='width:320px'>
									<h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>@$user_name</a></h3>
									<h4><small style='color:black;' >Posted on <strong>$post_date</strong></small></h4>
								</div>
								
							</div>
								<div class='row'>
									<div class='col-sm-12'>
										<img id='posts-img' src='imagepost/$upload_image' style='height:350px;'>
									</div>
								</div><br>
									<a href='single.php?post_id=$post_id' style='float:right;'><button class='btn btn-success' style='background-color:#3B4F69; border-color:#3B4F69; margin-left:5px;'>View</button></a>
									<a href='functions/delete_post.php?post_id=$post_id' style='float:right;'><button class='btn btn-danger' style='background-color:#B53F49;'>Delete</button></a>
						</div><br><br>
						

					";
				}


				else if(strlen($content) >= 1 && strlen($upload_image) >= 1) {
					echo" 
						<div id='own_posts'>
							<div class='row'>
								<div class='col-sm-2'>
									<p><img src='users/$user_image' class='img-circle' width='100px' height='100px'></p>
								</div>
								<div class='col-sm-6' style='width:320px'>
									<h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>@$user_name</a></h3>
									<h4><small style='color:black;'>Posted on <strong>$post_date</strong></small></h4>
								</div>
								
								</div>
								<div class='row'>
									<div class='col-sm-12'>
										<p>$content</p>
										<img id='posts-img' src='imagepost/$upload_image' style='height:350px;'>
									</div>
								</div><br>
									<a href='single.php?post_id=$post_id' style='float:right;'><button class='btn btn-success' style='background-color:#3B4F69; border-color:#3B4F69; margin-left:5px;'>View</button></a>
									<a href='functions/delete_post.php?post_id=$post_id' style='float:right;'><button class='btn btn-danger' style='background-color:#B53F49;'>Delete</button></a>
							</div><br><br>

						";
				}


				else{
					echo" 
						<div id='own_posts'>
							<div class='row'>
								<div class='col-sm-2'>
									<p><img src='users/$user_image' class='img-circle' width='100px' height='100px'></p>
								</div>
								<div class='col-sm-6' style='width:320px'>
									<h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>@$user_name</a></h3>
									<h4><small style='color:black;'>Posted on <strong>$post_date</strong></small></h4>
								</div>
								<div class='col-sm-4'>
								</div>
								</div>
								<div class='row'>
									
									<div class='col-sm-6'>
										<h3><p>$content</p></h3>
									</div>
									<div class='col-sm-4'>
									</div>
							</div>
						

					";

					global $con;

					if(isset($_GET['user_id'])){
						$user_id = $_GET['user_id'];
					}

					$get_posts = "SELECT user_email FROM users WHERE user_id='$user_id'";
					$run_user = mysqli_query($con, $get_posts);
					$row = mysqli_fetch_array($run_user);

					$user_email = $row['user_email'];

					$user = $_SESSION['user_email'];
					$get_user = "SELECT * FROM users where user_email='$user'";
					$run_user = mysqli_query($con, $get_user);
					$row = mysqli_fetch_array($run_user);

					$user_id = $row['user_id'];
					$u_email = $row['user_email'];

					if($u_email != $user_email){
						echo "<script>window.open('profile.php?user_id=$user_id', '_self')</script>";

					}else{
						echo"
						<a href='single.php?post_id=$post_id' style='float:right;'><button class='btn btn-success' style='background-color:#3B4F69; border-color:#3B4F69; margin-left:5px;'>View</button></a> 
						<a href='edit_post.php?post_id=$post_id' style='float:right;'><button class='btn btn-info' style='background-color:#3B4F69; border-color:#3B4F69; margin-left:5px;'>Edit</button></a>
						<a href='functions/delete_post.php?post_id=$post_id' style='float:right;'><button class='btn btn-danger' style='background-color:#B53F49;'>Delete</button></a>
						</div><br><br><br>
						";
					}
				}

				include("functions/delete_post.php");			
			}
		?>
	</div>
	<div class='col-sm-2'>
			
	</div>
</div>
</body>
</html>