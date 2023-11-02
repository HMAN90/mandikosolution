<?php
ob_start();
session_start();
require_once('config/Mobile_Detect.php');
$detect = new Mobile_Detect;
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Askbootstrap">
<meta name="author" content="Askbootstrap">
<title>LOGIN</title>

<!-- ressources-css -->
<?php require('includes/ressources-css.php'); ?>
<!-- /ressources-css -->
<style type="text/css">
	/* Style the video: 100% width and height to cover the entire window */
video {
  object-fit: cover;
  width: 100vw;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
}

/* Add some content at the bottom of the video/page */
.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 0px;
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

 .form-control::-webkit-input-placeholder {
  color: #ffffff;
  opacity: 0.7; }
.form-control::-moz-placeholder {
  color: #ffffff;
  opacity: 0.7; }
.form-control:-ms-input-placeholder {
  color: #ffffff;
  opacity: 0.7; }
.form-control::-ms-input-placeholder {
  color: #ffffff;
  opacity: 0.7; }
.form-control::placeholder {
  color: #ffffff;
  opacity: 0.7; }

.btn-me{
background-color: #404253;
color: #fff;
border-radius: 0px;
font-weight: 600;
font-family:;
}

.btn-me:hover{
background-color: #ea0c1b;
color: #fff;
border-radius: 0px;
font-weight: 600;
font-family:;
}
</style>
</head>
<body class="login-main-body content">
<video autoplay muted loop id="myVideo">
  <source src="videos/video02.mp4" type="video/mp4">
</video>
<section class="login-main-wrapper">
<div class="container-fluid pl-0 pr-0">
<div class="row no-gutters">
<div class="col-md-5 p-5 full-height" style="background-color: rgba(0,0,0,0.9);background-position:fixed;">
<div class="login-main-left">
<div class="text-center mb-5 login-main-left-header pt-4">
<img src="img/logo-likyantv.png" class="img-fluid" style="width: 155px">
<h5 class="mt-3 mb-3">Welcome to Likyan TV</h5>
<p>It is a long established fact that a reader <br> will be distracted by the readable.</p>
</div>
<form>
<div class="form-group">
<label>Mobile</label>
<input type="text" class="form-control" placeholder="Enter mobile" style="border-radius: 0px;color: #fff">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" placeholder="Password" style="border-radius: 0px;color: #fff">
</div>
<div class="mt-4">
<div class="row">
<div class="col-12">
<button type="submit" class="btn btn btn-block btn-lg btn-me">SIGN IN</button>
</div>
</div>
</div>
</form>
<div class="text-center mt-5">
<p class="light-gray">Don’t have an account? <a href="register.php">Sign Up</a></p>
</div>
</div>
</div>
<?php if($detect->isMobile()){?>
<?php }else{?>
<div class="col-md-7" style="background-color: rgba(0,0,0,0.5);">
<div class="login-main-right p-5 mt-5 mb-5">
<div class="mt-5" style="bottom: 30px;position: absolute;">
  <h1 class="mt-5">Welcome</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <!-- Use a button to pause/play the video with JavaScript -->
  <!-- <button id="myBtn" onclick="myFunction()">Pause</button> -->
</div>
</div>
</div>
<?php } ?>

</div>
</div>
</section>

<!-- ressources-css -->
<?php require('includes/ressources-js.php'); ?>
<!-- /ressources-css -->

<script type="text/javascript">

// Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}

</script>
</body>
</html>