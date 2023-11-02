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
<meta name="description" content="Mandiko tv">
<meta name="author" content="Mandiko tv">
<title>Home - Mandiko TV</title>

<!-- ressources-css -->
<?php require('includes/ressources-css.php'); ?>
<!-- /ressources-css -->



</head>
<body id="page-top" <?php if($detect->isMobile()){?> class="sidebar-toggled" <?php } ?>>

<!-- header -->
<?php include('includes/header.php'); ?>
<!-- /header -->

<div id="wrapper">

<!-- sideBar -->
<?php include('includes/sidebar.php') ?>
<!-- /sideBar -->

<div id="content-wrapper">
<div class="container-fluid pb-0">

<div class="row">
<div class="col-md-8 mt-2">
	<div class="main-title">
	<h6 style="font-family:hb">
	<i class="fas fa-circle animate__animated animate__pulse animate__infinite" style="color: #d3173e"></i>DIRECT
	<div style="border-bottom: solid 4px #d3173e;width: 40px"></div>
	</h6>
	</div>
<div class="single-channel-image" style="height:100%!important;">
<div class="lecteur" style="border-radius: 6px!important;z-index: 999999999!important;">
	<iframe src="https://player.castr.com/live_b072ea703a7111edbfe74bb80437147b" width="100%" style="aspect-ratio: 16/9; min-height: 340px;" frameborder="0" scrolling="no" allow="autoplay" allowfullscreen  webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
</div>

<div class="single-video-title box mb-3 mt-1" style="border-radius: 0px;">
	<h2 style="font-family:Mont!important;font-weight: 600">
	Suivez nous sur TNT et bleusat
	</h2>
	<p class="mb-0" style="color: #e40424">
		<i class="fas fa-eye"></i> 89,347 visiteurs
	</p>
</div>
</div>

</div>

<div class="col-md-4 mt-2">

	<div class="main-title">
	<h6 style="font-family:hb!important">
	<!-- <i class="fas fa-signal"></i> -->VOD
	<div style="border-bottom: solid 4px #4bb9da;width: 40px"></div>
	</h6>
	</div>


<div class="row">
	<div class="col-6">
	<div class="video-card video-card-list-o mb-3" style="background-color: rgba(0,0,0,.0)!important;">
<div class="video-card-image" style="height: 100%">
<a class="play-icon" href="view-video.php">
	<i class="fas fa-play-circle"></i>
</a>
<a href="view-video.php">
<span class="time" style="margin-top: -120px;position: absolute;">3:50</span>
	<img class="img-fluid" src="../emissions/011.png" alt="">
</a>
</div>
<div class="video-card-body">
<div class="video-page text-danger ml-0" style="font-family: hl!important;">
Education 
</div>
<div class="video-title ml-0">
<a href="#" class="mt-3" style="font-family: hb!important;">5 min. avec moi</a>
</div>
</div>
</div>	
</div>

<div class="col-6">
<div class="video-card video-card-list-o mb-2" style="background-color: rgba(0,0,0,.0)!important;">
<div class="video-card-image" style="height: 100%">
<a class="play-icon" href="#">
	<i class="fas fa-play-circle"></i>
</a>
<a href="#">
<span class="time">3:50</span>
	<img class="img-fluid" src="../emissions/08.png" alt="">
</a>
</div>
<div class="video-card-body" style="background-color: rgba(0,0,0,.0)!important;">
<div class="video-page text-danger" style="font-family: hl!important;">
Animation 
</div>
<div class="video-title">
<a href="#" class="mt-3" style="font-family: hb!important;">Digi Tech</a>
</div>
</div>
</div>	
</div>


<div class="col-6">
<div class="video-card video-card-list-o mb-3" style="background-color: rgba(0,0,0,.0)!important;">
<div class="video-card-image" style="height: 100%">
<a class="play-icon" href="#">
	<i class="fas fa-play-circle"></i>
</a>
<a href="#">
<span class="time">3:50</span>
	<img class="img-fluid" src="../emissions/06.png" alt="">
</a>
</div>
<div class="video-card-body" style="background-color: rgba(0,0,0,.0)!important;">
<div class="video-page text-danger" style="font-family: hl!important;">
Comédie 
</div>
<div class="video-title">
<a href="#" class="mt-3" style="font-family: hb!important;">Mandiko Day</a>
</div>
</div>
</div>	
</div>


<div class="col-6">
<div class="video-card video-card-list-o mb-3" style="background-color: rgba(0,0,0,.0)!important;">
<div class="video-card-image" style="height: 100%">
<a class="play-icon" href="#">
	<i class="fas fa-play-circle"></i>
</a>
<a href="#">
<span class="time">3:50</span>
	<img class="img-fluid" src="../emissions/09.png" alt="">
</a>
</div>
<div class="video-card-body" style="background-color: rgba(0,0,0,.0)!important;">
<div class="video-page text-danger" style="font-family: hl!important;">
Musique 
</div>
<div class="video-title">
<a href="#" class="mt-3" style="font-family: hb!important;">Cover</a>
</div>
</div>
</div>	
</div>



</div>





</div>
</div>



<div class="top-category section-padding mb-4 mt-4">
<div class="row">
<div class="col-md-12">
<div class="main-title">
<h6 style="font-family: hb!important;">
	<!-- <i class="fas fa-signal"></i> -->NOS EMISSIONS
	<div style="border-bottom: solid 4px #d3173e;width: 40px"></div>
</h6>
</div>
</div>
<div class="col-md-12">
<div class="owl-carousel owl-carousel-category">

<div class="item">
<div class="category-item">
<a href="#">
<img class="img-fluid" src="img/1.png" style="background-image: url(../emissions/1.png);height: 80px;width: 80px;background-size: cover;">
<h6>Cover</h6>
<p>accéder</p>
</a>
</div>
</div>

<div class="item">
<div class="category-item">
<a href="#">
<img class="img-fluid" src="img/1.png" style="background-image: url(../emissions/2.png);height: 80px;width: 80px;background-size: cover;">
<h6>5min avec moi</h6>
<p>accéder</p>
</a>
</div>
</div>


<div class="item">
<div class="category-item">
<a href="#">
<img class="img-fluid" src="img/1.png" style="background-image: url(../emissions/3.png);height: 80px;width: 80px;background-size: cover;">
<h6>Digi Tech</h6>
<p>accéder</p>
</a>
</div>
</div>


<div class="item">
<div class="category-item">
<a href="#">
<img class="img-fluid" src="img/1.png" style="background-image: url(../emissions/4.png);height: 80px;width: 80px;background-size: cover;">
<h6>Face à la Rédaction</h6>
<p>accéder</p>
</a>
</div>
</div>


<div class="item">
<div class="category-item">
<a href="#">
<img class="img-fluid" src="img/1.png" style="background-image: url(../emissions/6.png);height: 80px;width: 80px;background-size: cover;">
<h6>Mandiko Day</h6>
<p>accéder</p>
</a>
</div>
</div>


<div class="item">
<div class="category-item">
<a href="#">
<img class="img-fluid" src="img/1.png" style="background-image: url(../emissions/7.png);height: 80px;width: 80px;background-size: cover;">
<h6>Paramètres & Perspectives</h6>
<p>accéder</p>
</a>
</div>
</div>


<div class="item">
<div class="category-item">
<a href="#">
<img class="img-fluid" src="img/1.png" style="background-image: url(../emissions/8.png);height: 80px;width: 80px;background-size: cover;">
<h6>Santé & Bien-être</h6>
<p>accéder</p>
</a>
</div>
</div>


<div class="item">
<div class="category-item">
<a href="#">
<img class="img-fluid" src="img/1.png" style="background-image: url(../emissions/9.png);height: 80px;width: 80px;background-size: cover;">
<h6>Opinions des dames</h6>
<p>accéder</p>
</a>
</div>
</div>


</div>
</div>
</div>
</div>
<hr>

<div class="video-block section-padding">
<div class="row">
<div class="col-md-12">
<div class="main-title">
<h6 style="font-family: hb!important;">
	<!-- <i class="fas fa-signal"></i> -->FILMS & SERIES
	<div style="border-bottom: solid 4px #fff;width: 40px"></div>
</h6>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-6">

<div class="video-card video-card-list-o mb-3" style="background-color: rgba(0,0,0,.0)!important;">
<div class="video-card-image" style="height: 100%">
<a class="play-icon" href="#">
	<i class="fas fa-play-circle"></i>
</a>
<a href="#">
<span class="time">3:50</span>
	<img class="img-fluid" src="../emissions/03.png" alt="">
</a>
</div>
<div class="video-card-body" style="background-color: rgba(0,0,0,.0)!important;">
<div class="video-page text-danger">
Action 
</div>
<div class="video-title">
<a href="#" class="mt-3" style="font-family: hb!important">Gemeni Man</a>
</div>
</div>
</div>

</div>

<div class="col-xl-3 col-sm-6 col-6">

<div class="video-card video-card-list-o mb-3" style="background-color: rgba(0,0,0,.0)!important;">
<div class="video-card-image" style="height: 100%">
<a class="play-icon" href="#">
	<i class="fas fa-play-circle"></i>
</a>
<a href="#">
<span class="time">3:50</span>
	<img class="img-fluid" src="../emissions/01.png" alt="">
</a>
</div>
<div class="video-card-body" style="background-color: rgba(0,0,0,.0)!important;">
<div class="video-page text-danger">
Science 
</div>
<div class="video-title">
<a href="#" class="mt-3" style="font-family: hb!important">Monospaced</a>
</div>
</div>
</div>

</div>


<div class="col-xl-3 col-sm-6 col-6">

<div class="video-card video-card-list-o mb-3" style="background-color: rgba(0,0,0,.0)!important;">
<div class="video-card-image" style="height: 100%">
<a class="play-icon" href="#">
	<i class="fas fa-play-circle"></i>
</a>
<a href="#">
<span class="time">3:50</span>
	<img class="img-fluid" src="../emissions/02.png" alt="">
</a>
</div>
<div class="video-card-body" style="background-color: rgba(0,0,0,.0)!important;">
<div class="video-page text-danger">
Action 
</div>
<div class="video-title">
<a href="#" class="mt-3" style="font-family: hb!important">Just Me and You</a>
</div>
</div>
</div>

</div>


<div class="col-xl-3 col-sm-6 col-6">

<div class="video-card video-card-list-o mb-3" style="background-color: rgba(0,0,0,.0)!important;">
<div class="video-card-image" style="height: 100%">
<a class="play-icon" href="#">
	<i class="fas fa-play-circle"></i>
</a>
<a href="#">
<span class="time">3:50</span>
	<img class="img-fluid" src="../emissions/04.png" alt="">
</a>
</div>
<div class="video-card-body" style="background-color: rgba(0,0,0,.0)!important;">
<div class="video-page text-danger">
Action 
</div>
<div class="video-title">
<a href="#" class="mt-3" style="font-family: hb!important">5 min. avec moi</a>
</div>
</div>
</div>

</div>






</div>
</div>





</div>


<!-- footer -->
<?php include('includes/footer.php'); ?>
<!-- /footer -->

</div>

</div>


<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- ressources-js -->
<?php require('includes/ressources-js.php') ?>
<!-- /ressources-js -->
</body>
</html>