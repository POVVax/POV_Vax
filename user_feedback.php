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
    <link rel="stylesheet" href="style/uf.css">
</head>
<body>
    

<div class="row">

<div class="uf-container">
      <div class="post">
        <div class="text">Thank you for rating us!</div>
      </div>
      <div class="star-widget" id="rating">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>

        <form onsubmit="sendEmail(); reset(); return false;">
          <header></header>
          
          <div class="textarea">
            <textarea id="feedback" cols="30" placeholder="Describe your experience.."></textarea>
          </div>
        
          <div class="btn123">
            <button type="submit">Inject</button>
          </div>
        </form>
      </div>
    </div>

</div>

<script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
 
      function sendEmail(){
            Email.send({
                Host : "smtp.gmail.com",
                Username : "povvaxhost@gmail.com",
                Password : "chhwuktweymqwvfw",
                To : 'povvax@gmail.com',
                From : "povvaxhost@gmail.com",
                Subject : "User Feedback",
                Body : 
                     "<br> Feedback: " + document.getElementById("feedback").value
            }).then(
              feedback => alert("Injected Succesfully")
            );
          }
    </script>


</body>
</html>