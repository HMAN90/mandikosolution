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
  color: #f1f1f1;
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
<div class="col-md-5 p-5 full-height mb-0" style="background:rgba(0,0,0,0.9)!important; background-size:cover;width:100%;height:100%!important;bottom:0">
<div class="login-main-left">
<div class="text-center mb-5 login-main-left-header pt-4">
<img src="img/logo-likyantv.png" class="img-fluid" style="width: 155px">
<h5 class="mt-3 mb-3">Sign Up</h5>
<p>It is a long established fact that a reader.</p>
</div>
<form>
<div class="form-group">
<label>Mobile</label>
<input type="text" class="form-control" placeholder="Enter mobile" style="border-radius: 0px;color: #fff">
</div>
<div class="form-group">
<label>Adresse e-mail</label>
<input type="text" class="form-control" placeholder="Enter email" style="border-radius: 0px;color: #fff">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" id="myInput" placeholder="Password" style="border-radius: 0px;color: #fff">
</div>

<div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" id="switch1" onclick="ShowMe()">
    <label class="custom-control-label" for="switch1">afficher password</label>
  </div>
<div class="mt-1 mb-0">
<div class="row">
<div class="col-12">
<button type="submit" class="btn btn btn-block btn-lg btn-me" style="border-radius: 0px">SIGN UP</button>
</div>
</div>
</div>
</form>
<div class="text-center mt-3">
<p class="light-gray">I have an account? <a href="login.php">Sign In</a></p>
</div>
</div>
</div>
<?php if($detect->isMobile()){?>
<?php }else{?>
<div class="col-md-7" style="background-color: rgba(0,0,0,0.5);">
<div class="login-main-right p-5 mt-5 mb-5">
<div class="mt-5" style="bottom: 30px;position: absolute;">
  <h1 class="mt-5">Sign Up</h1>
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


function ShowMe() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>