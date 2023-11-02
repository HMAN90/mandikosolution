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
<title>Video</title>

<!-- ressources-css -->
<?php require('includes/ressources-css.php'); ?>
<!-- /ressources-css -->
<style type="text/css">

.rate {
    float: left;
    height: 40px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:20px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}


.nav-pills > li > a.active {
    border-bottom: solid 3px #ffffff!important;
    background-color: rgba(0,0,0,0)!important;
}


.comments {
    text-decoration: underline;
    text-underline-position: under;
    cursor: pointer
}

.dot {
    height: 7px;
    width: 7px;
    margin-top: 3px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block
}

.hit-voting:hover {
    color: blue
}

.hit-voting {
    cursor: pointer
}
.voting-icons{
	float: right;
}

.comment-champ:focus {   
  border-color: rgba(232, 32, 0, 0.8);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(232, 32, 0, 0.8);
  outline: 0 none;
  color: #ffffff;
}
</style>
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
<div class="video-block section-padding">
<div class="row">
<div class="col-md-8">
<div class="single-video-left">
<div class="single-video">
<div id="myElement"></div>

<script type="text/JavaScript">
	var videojs=jwplayer("myElement").setup({ 
		file: "https://dbmtv.vedge.infomaniak.com/livecast/smil:dbmtv.smil/manifest.m3u8",
		autoplay:false,
		repeat: true,
		mute:false,
		image: "https://test.likyantv.net/assets/upload/tele5fd101311fc51_DBM-TV.png",
		ga:{label:"DBM TV"}
	});
	jwplayer().onError(function(){
		jwplayer("myElement").load({file:"https://dbmtv.vedge.infomaniak.com/livecast/smil:dbmtv.smil/manifest.m3u8", image:"https://test.likyantv.net/assets/upload/tele5fd101311fc51_DBM-TV.png"});
		jwplayer("myElement").stop();// i dont think you need to play video if it throws error
	});
</script>
</div>

<div class="single-video-author box mb-3 mt-2">

	
	
<div class="float-right" style="text-align: center;">
	<div class="rate" >
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  	</div>

    <button class="btn btn ml-4" type="button">
    <span class="text-white" style="font-weight: 600">
        112
    </span>
        <i class="fas fa-heart text-danger"></i>
    </button>
</div>

<img class="img-fluid" src="channels/dbm.png" alt="">
    <p>
        <a href="#"><strong>DBM TV</strong></a>
        <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified">
            <i class="fas fa-check-circle text-white"></i>
        </span>
    </p>
    <small><?php  $date = date('m/d/Y h:i:s a', time()); echo $date; ?></small>
</div>
<div class="single-video-info-content box mb-3">
<!-- Nav pills -->
<ul class="nav nav-pills nav-fill tabi">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#home" style="border-radius: 0px">
    DESCRIPTION
	</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#menu1" style="border-radius: 0px">
    CHATS <span class="badge badge text-white px-2" style="background-color: #ea0c1b;font-size: 1em">4</span>
	</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#menu2" style="border-radius: 0px">
   ABOUT
	</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane container active" id="home">
  <h6 class="mt-3">Cast:</h6>
<p>Nathan Drake , Victor Sullivan , Sam Drake , Elena Fisher</p>
<h6>Category :</h6>
<p>Gaming , PS4 Exclusive , Gameplay , 1080p</p>
<h6>About :</h6>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved overVarious versions have evolved over the years, sometimes </p>
<h6>Tags :</h6>
<p class="tags mb-0">
<span><a href="#">Uncharted 4</a></span>
<span><a href="#">Playstation 4</a></span>
<span><a href="#">Gameplay</a></span>
<span><a href="#">1080P</a></span>
<span><a href="#">ps4Share</a></span>
</p>
  </div>



  <div class="tab-pane container fade" id="menu1" style="width: 100%">
  	<!-- comment -->
  	<div class="mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">

            <div class="coment-bottom">
                <div class="d-flex flex-row add-comment-section mb-4">
                	<img class="img-fluid img-responsive rounded-circle mr-2" src="img/avatar-1.jpg" width="38">
                	<textarea class="form-control mr-3 comment-champ" id="comment-champ" name="comment-champ" placeholder="Add comment" rows="1"></textarea>
                </div>
                <div class="row">
                
                <div class="col-12">
                	<button class="btn btn-primary btn-sm mr-3" type="submit" style="border-radius: 0px;float: right;">Comment
                	</button>
                </div>
                	
                </div>
                
                

                <div class="commented-section mt-2">
                    <div class="d-flex flex-row align-items-center commented-user">
                    	<img class="img-fluid img-responsive rounded-circle mr-2" src="img/avatar-1.jpg" width="35">
                        <h6 class="mr-2">Gauthier N.</h6>
                        <span class="dot mb-1"></span>
                        <span class="mb-1 ml-2">4 min.</span>
                    </div>
                    <div class="comment-text-sm"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                    </div>
                    <div class="reply-section">
                        <div class="align-items-center voting-icons mr-3">
                        	<i class="fas fa-trash text-danger"></i>
                        	<span class="dot ml-2"></span>
                            <span class="ml-2 mt-2">Reply</span>
                        </div>
                    </div>
                </div>




                <div class="commented-section mt-4">
                    <div class="d-flex flex-row align-items-center commented-user">
                    	<img class="img-fluid img-responsive rounded-circle mr-2" src="img/avatar-5.jpg" width="35">
                        <h6 class="mr-2">Kurtis M.</h6>
                        <span class="dot mb-1"></span>
                        <span class="mb-1 ml-2">4 min.</span>
                    </div>
                    <div class="comment-text-sm"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                    </div>
                    <div class="reply-section">
                        <div class="align-items-center voting-icons mr-3">
                            <span class="ml-2 mt-2">Reply</span>
                        </div>
                    </div>
                </div>



                <div class="commented-section mt-4">
                    <div class="d-flex flex-row align-items-center commented-user">
                    	<img class="img-fluid img-responsive rounded-circle mr-2" src="img/avatar-6.jpg" width="35">
                        <h6 class="mr-2">Théo K.</h6>
                        <span class="dot mb-1"></span>
                        <span class="mb-1 ml-2">4 min.</span>
                    </div>
                    <div class="comment-text-sm"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                    </div>
                    <div class="reply-section">
                        <div class="align-items-center voting-icons mr-3">
                            <span class="ml-2 mt-2">Reply</span>
                        </div>
                    </div>
                </div>



                <div class="commented-section mt-4">
                    <div class="d-flex flex-row align-items-center commented-user">
                    	<img class="img-fluid img-responsive rounded-circle mr-2" src="img/avatar-7.jpg" width="35">
                        <h6 class="mr-2">Espérant K.</h6>
                        <span class="dot mb-1"></span>
                        <span class="mb-1 ml-2">4 min.</span>
                    </div>
                    <div class="comment-text-sm"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                    </div>
                    <div class="reply-section">
                        <div class="align-items-center voting-icons mr-3">
                            <span class="ml-2 mt-2">Reply</span>
                        </div>
                    </div>
                </div>


          
            </div>
        </div>
    </div>
</div>
  	<!-- /comment -->
  </div>



  <div class="tab-pane container fade" id="menu2">
  	<h6 class="mt-3">About</h6>
	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved overVarious versions have evolved over the years, sometimes </p>
  </div>
</div>






</div>
</div>
</div>
<div class="col-md-4">
<div class="single-video-right">
<div class="row">
<div class="col-md-12">
<div class="adblock">
<div class="img">
Google AdSense<br>
336 x 280
</div>
</div>
<div class="main-title">
<h6>
    <!-- <i class="fas fa-signal"></i> -->ARTICLES RELATIFS
    <div style="border-bottom: solid 4px #ff0000;width: 40px"></div>
</h6>
</div>
</div>
<div class="col-md-12">
<div class="video-card video-card-list">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v1.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="video-title">
<a href="#">Here are many variati of passages of Lorem</a>
</div>
<div class="video-page text-success">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
<div class="video-card video-card-list">
 <div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="video-title">
<a href="#">Duis aute irure dolor in reprehenderit in.</a>
</div>
<div class="video-page text-success">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
<div class="video-card video-card-list">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v3.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="video-title">
<a href="#">Culpa qui officia deserunt mollit anim</a>
</div>
<div class="video-page text-success">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
<div class="video-card video-card-list">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v4.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="video-title">
<a href="#">Deserunt mollit anim id est laborum.</a>
</div>
<div class="video-page text-success">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
<div class="video-card video-card-list">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v5.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="video-title">
<a href="#">Exercitation ullamco laboris nisi ut.</a>
</div>
<div class="video-page text-success">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
<div class="video-card video-card-list">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v6.png" alt=""></a>
<div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="video-title">
<a href="#">There are many variations of passages of Lorem</a>
</div>
<div class="video-page text-success">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
<div class="adblock mt-0">
<div class="img">
Google AdSense<br>
336 x 280
</div>
</div>
<div class="video-card video-card-list">
<div class="video-card-image">
<a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
<a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
 <div class="time">3:50</div>
</div>
<div class="video-card-body">
<div class="video-title">
<a href="#">Duis aute irure dolor in reprehenderit in.</a>
</div>
<div class="video-page text-success">
Education <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
</div>
</div>
</div>
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


<!-- ressources-js -->
<?php include('includes/ressources-js.php'); ?>
<!-- /ressources-js -->
<script type="text/javascript">
</script>
</html>