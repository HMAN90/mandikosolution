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
<meta name="description" content="Likyan TV">
<meta name="author" content="Likyan TV">
<title>Accueil</title>

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


<hr class="mt-0">
<div class="video-block section-padding">
<div class="row">
<div class="col-md-12">
<div class="main-title">
<h6>
	<!-- <i class="fas fa-signal"></i> -->CATEGORIES
	<div style="border-bottom: solid 4px #5c5e70;width: 40px"></div>
</h6>
</div>
</div>


<div class="col-xl-3 col-sm-6 mb-3 col-6">
<div class="channels-card">
<div class="channels-card-image">
<a href="#">
	<img class="img-fluid" src="img/1.png" style="background-image: url(img/movies11.jpg);">
</a>
<div class="channels-card-image-btn">
	<button type="button" class="btn btn-outline-danger btn-sm">EXPLORER<strong><i class="fas fa-plus-circle"></i></strong>
	</button>
</div>
</div>
<div class="channels-card-body">
<div class="channels-title">
<a href="#">FILMS</a>
</div>
<div class="channels-view">
382,323 subscribers
</div>
</div>
</div>
</div>



<div class="col-xl-3 col-sm-6 mb-3 col-6">
<div class="channels-card">
<div class="channels-card-image">
<a href="#">
	<img class="img-fluid" src="img/1.png" style="background-image: url(img/movies07.jpg);">
</a>
<div class="channels-card-image-btn">
	<button type="button" class="btn btn-outline-danger btn-sm">EXPLORER<strong><i class="fas fa-plus-circle"></i></strong>
	</button>
</div>
</div>
<div class="channels-card-body">
<div class="channels-title">
<a href="#">SERIES</a>
</div>
<div class="channels-view">
382,323 subscribers
</div>
</div>
</div>
</div>


<div class="col-xl-3 col-sm-6 mb-3 col-6">
<div class="channels-card">
<div class="channels-card-image">
<a href="#">
	<img class="img-fluid" src="img/1.png" style="background-image: url(img/img2.jpg);">
</a>
<div class="channels-card-image-btn">
	<button type="button" class="btn btn-outline-danger btn-sm">EXPLORER<strong><i class="fas fa-plus-circle"></i></strong>
	</button>
</div>
</div>
<div class="channels-card-body">
<div class="channels-title">
<a href="#">SPORT</a>
</div>
<div class="channels-view">
382,323 subscribers
</div>
</div>
</div>
</div>


<div class="col-xl-3 col-sm-6 mb-3 col-6">
<div class="channels-card">
<div class="channels-card-image">
<a href="#">
	<img class="img-fluid" src="img/1.png" style="background-image: url(img/img1.jpg);background-position: center;">
</a>
<div class="channels-card-image-btn">
	<button type="button" class="btn btn-outline-danger btn-sm">EXPLORER<strong><i class="fas fa-plus-circle"></i></strong>
	</button>
</div>
</div>
<div class="channels-card-body">
<div class="channels-title">
<a href="#">DOCUMENTAIRE</a>
</div>
<div class="channels-view">
382,323 subscribers
</div>
</div>
</div>
</div>




<div class="col-xl-3 col-sm-6 mb-3 col-6">
<div class="channels-card">
<div class="channels-card-image">
<a href="#">
	<img class="img-fluid" src="img/1.png" style="background-image: url(img/s6.png);">
</a>
<div class="channels-card-image-btn">
	<button type="button" class="btn btn-outline-danger btn-sm">EXPLORER<strong><i class="fas fa-plus-circle"></i></strong>
	</button>
</div>
</div>
<div class="channels-card-body">
<div class="channels-title">
<a href="#">MAGAZINE</a>
</div>
<div class="channels-view">
382,323 subscribers
</div>
</div>
</div>
</div>



<div class="col-xl-3 col-sm-6 mb-3 col-6">
<div class="channels-card">
<div class="channels-card-image">
<a href="#">
	<img class="img-fluid" src="img/1.png" style="background-image: url(img/v1.png);">
</a>
<div class="channels-card-image-btn">
	<button type="button" class="btn btn-outline-danger btn-sm">EXPLORER<strong><i class="fas fa-plus-circle"></i></strong>
	</button>
</div>
</div>
<div class="channels-card-body">
<div class="channels-title">
<a href="#">HUMOUR</a>
</div>
<div class="channels-view">
382,323 subscribers
</div>
</div>
</div>
</div>


<div class="col-xl-3 col-sm-6 mb-3 col-6">
<div class="channels-card">
<div class="channels-card-image">
<a href="#">
	<img class="img-fluid" src="img/1.png" style="background-image: url(img/s5.png);">
</a>
<div class="channels-card-image-btn">
	<button type="button" class="btn btn-outline-danger btn-sm">EXPLORER<strong><i class="fas fa-plus-circle"></i></strong>
	</button>
</div>
</div>
<div class="channels-card-body">
<div class="channels-title">
<a href="#">CLIPS</a>
</div>
<div class="channels-view">
382,323 subscribers
</div>
</div>
</div>
</div>


<div class="col-xl-3 col-sm-6 mb-3 col-6">
<div class="channels-card">
<div class="channels-card-image">
<a href="#">
	<img class="img-fluid" src="img/1.png" style="background-image: url(img/avatar-1.jpg);background-position: center;">
</a>
<div class="channels-card-image-btn">
	<button type="button" class="btn btn-outline-danger btn-sm">EXPLORER<strong><i class="fas fa-plus-circle"></i></strong>
	</button>
</div>
</div>
<div class="channels-card-body">
<div class="channels-title">
<a href="#">SHOW TELE</a>
</div>
<div class="channels-view">
382,323 subscribers
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
<h6>
	<!-- <i class="fas fa-signal"></i> -->CHANNELS
	<div style="border-bottom: solid 4px #ea0c1b;width: 40px"></div>
</h6>
</div>
</div>
<div class="col-md-12">
<div class="owl-carousel owl-carousel-category">

<div class="item">
<div class="category-item">
<a href="#">
<img class="img-fluid" src="img/1.png" style="background-image: url(channels/likyan.png);height: 80px;width: 80px;background-size: cover;">
<h6>Likyan TV</h6>
<p>accéder</p>
</a>
</div>
</div>

<div class="item">
<div class="category-item">
<a href="#">
<img class="img-fluid" src="img/1.png" style="background-image: url(channels/tv50.png);height: 80px;width: 80px;background-size: cover;">
<h6>Télé 50</h6>
<p>accéder</p>
</a>
</div>
</div>


<div class="item">
<div class="category-item">
<a href="#">
<img class="img-fluid" src="img/1.png" style="background-image: url(channels/emctv.jpg);height: 80px;width: 80px;background-size: cover;">
<h6>emctv</h6>
<p>accéder</p>
</a>
</div>
</div>


<div class="item">
<div class="category-item">
<a href="#">
<img class="img-fluid" src="img/1.png" style="background-image: url(channels/dbm.png);height: 80px;width: 80px;background-size: cover;">
<h6>DBM TV</h6>
<p>accéder</p>
</a>
</div>
</div>


<div class="item">
<div class="category-item">
<a href="#">
<img class="img-fluid" src="img/1.png" style="background-image: url(channels/rtnc.png);height: 80px;width: 80px;background-size: cover;">
<h6>rtnc</h6>
<p>accéder</p>
</a>
</div>
</div>


<div class="item">
<div class="category-item">
<a href="#">
<img class="img-fluid" src="img/1.png" style="background-image: url(channels/aplus.png);height: 80px;width: 80px;background-size: cover;">
<h6>A+ 243</h6>
<p>accéder</p>
</a>
</div>
</div>


<div class="item">
<div class="category-item">
<a href="#">
<img class="img-fluid" src="img/1.png" style="background-image: url(channels/sos.png);height: 80px;width: 80px;background-size: cover;">
<h6>SOS TV</h6>
<p>accéder</p>
</a>
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