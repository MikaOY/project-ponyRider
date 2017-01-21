<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Youtube Channel Verification -->
<meta name="google-site-verification" content="am2OTNh4zhr-zJjL5ve1H4im4z04LMnNMduuAcbgBNU" />
<title>RAMEN</title>
<link rel="icon" href="resources/plain-black.png">

	<!--[if lt IE 9]>
    	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Actual Firebase Server -->
	<script src="https://www.gstatic.com/firebasejs/3.6.4/firebase.js"></script>
	<script>
		// Initialize Firebase
		var config = {
			apiKey: "AIzaSyBdpPno5QKrz2P58EG0KYG3EJIgabiXwik",
			authDomain: "ramen-website-ac51f.firebaseapp.com",
			databaseURL: "https://ramen-website-ac51f.firebaseio.com",
			storageBucket: "ramen-website-ac51f.appspot.com",
			messagingSenderId: "1092712543340"
		};
		firebase.initializeApp(config);
	</script>

	<!-- Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	
	<!-- Custom theme -->
	<link rel="stylesheet" href="css/theme.min.css">
	
	<link rel="stylesheet" href="css/index.css">
	
	<!-- Footer load -->
	<script> 
		$(function(){
			$("#custom-footer").load("footer.html"); 
		});
	</script> 
	<!-- Socials load -->
    <script>
        $(function(){
	        $("#all-socials").load("all-socials.html"); 
	    });
    </script>
</head>

<body>
	<?php include("includes/nav-bar.html"); ?>

	<!-- Carousel -->
	<div id="my-carousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#my-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#my-carousel" data-slide-to="1"></li>
			<li data-target="#my-carousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides 
			Image dimensions: 1920 x 800 -->
		<div class="carousel-inner" role="listbox">			
			<div class="item active">
				<img class="carousel-logo" src="resources/ramen-white.png"> 
				<img src="resources/web-blu-close.jpg" alt="Two 3D printed cats">	
				<div class="info-1">
					<h1 class="cap-1">Learning. <br>Reinvented.</h1>
					<p class="p-1"><b>RAMEN</b> is redefining learning. <br>
					And fun. <br>
					<a href="#projects"> <b>See for yourself.</b></a> 
					</p>
				</div>
			</div>
			<div class="item">
				<img src="resources/web-laughing.jpg" alt="Us laughing">
				<div class="info-2">
					<h1 class="cap-2">United <br>by passion <br>for discovery.</h1>
					<p class="p-2"><a href="#about"><b>Learn</b></a> what makes us <b>RAMEN</b>.
					</p>
				</div>
			</div>
			<div class="item">
				<img src="resources/web-blu.jpg" alt="Simon and Mika at work">
				<div class="info-3">
					<h1 class="cap-3">Resilient. <br> Tenacious. <br> Unstoppable. <br></h1> 
					<p class="p-3"><a href="#support"><b>Support us</b></a> to fuel <b>madness</b>.
					</p>
				</div>
			</div> 
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div id="mobile-carousel">
		<div id="mobile-div-1">
			<img class="mobile carousel-logo" src="resources/ramen-white.png"> 
			<img class="mobile-img" src="resources/web-blu-close.jpg" alt="Two 3D printed cats">	
			<div class="mobile info-1">
				<h1 class="mobile cap-1">Learning. <br>Reinvented.</h1>
				<p class="mobile p-1"><b>RAMEN</b> is redefining learning. <br>
				And fun. <br>
				<a href="#projects"> <b>See for yourself.</b></a> 
				</p>
			</div>
		</div>
		<div id="mobile-div-2">
			<img class="mobile-img" src="resources/web-laughing.jpg" alt="Us laughing">
				<div class="mobile info-2">
				<h1 class="mobile cap-2">United <br>by passion <br>for discovery.</h1>
				<p class="mobile p-2"><a href="#about"><b>Learn</b></a> what makes us <b>RAMEN</b>.
				</p>
			</div>
		</div>
		<div id="mobile-div-3">
			<img class="mobile-img" src="resources/web-blu.jpg" alt="Simon and Mika at work">
			<div class="mobile info-3 easy-read">
				<h1 class="mobile cap-3">Resilient. <br> Tenacious. <br> Unstoppable. <br></h1> 
				<p class="mobile p-3"><a href="#support"><b>Support us</b></a> to fuel <b>madness</b>.
				</p>
			</div>
		</div>
	</div>

	<!-- Site development alert -->
	<div class="alert alert-info alert-dismissible fade in" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		This site, like its creator, is learning to be better.
	</div>

	<!-- Projects -->
	<div id="projects" class="row">
		<div class="col-sm-8">
			<div id="make-div">
				<h2>Make to live,<br> live to make.</h2>
				<p>Here at <b>RAMEN</b>, we make things to understand them.<br>
				This gives us an unparalleled working knowledge of many <b>interdependent skills</b>.<br>
				<br>
				Our work speaks for itself.
				</p>
				<br>
				<h4><a href="#">Discover our projects <br> (coming soon)</a></h4>
			</div>
		</div>
		<div class="col-sm-4">
			<h4 id="skill-list-h">What We Do</h4>
			<ul class="ul-centered">
				<li>mechatronics</li>
				<li><code>programming</code></li>
			</ul>
			<ul class="ul-centered">
				<li>engineering</li>								
				<li>media production</li>				
			</ul>
			<ul class="ul-centered">
				<li>graphic design</li>				
				<li>app development</li>
			</ul>
			<ul class="ul-centered">
				<li>web development</li>		
				<li>asset management</li>						
			</ul>
		</div>
	</div>
	
	<!-- Our Story -->
	<div id="about">
		<h1 id="about-h">Who We Are</h1>
		<a href="our-story.html"><h4 id="story-h">Read our story too!</h4></a>
		<div class="row is-flex">
			<!-- Mika -->
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 about-col col-lg-push-4">
				<!-- Pic, name, bio -->
				<div class="row">
					<!-- Pic + name -->
					<div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-xs-12">
						<a href="mika.html"><img class="rounded-img" src="resources/web-mika.jpg" align="middle"></a>
						<h3 class="personal-h"><a href="html/mika.html">Mika Yeap</a></h3>
					</div>
					<!-- Bio -->
					<div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-xs-12">
						<p class="personal-p"><span class="oomph nice">Spirited programmer. <br> Eclectic designer. <br> Aspiration expert. </span><br>
							<br>
							Mika spends his spare time either learning new skills or talking to his best friend.<br>
							<br>
							Click picture or name to learn more. 
						</p>
					</div>
				</div>
				<!-- Socials -->
				<div class="personal-socials">
					<ul class="side-list">
						<a href="https://www.facebook.com/MikaOYeap" target="_blank" class="no-line">
							<span class="fa fa-2x fa-facebook" aria-hidden="true"></span>
						</a>
						<a href="https://twitter.com/mikayeap" target="_blank" class="no-line">
							<span class="fa fa-2x fa-twitter" aria-hidden="true"></span>
						</a>
						<a href="https://www.linkedin.com/in/mika-yeap-22b1b1135?trk=nav_responsive_tab_profile_pic" 
						target="_blank" class="no-line">
							<span class="fa fa-2x fa-linkedin" aria-hidden="true"></span>
						</a>
						<a href="mailto:mikay@makersoframen.com" target="_blank" class="no-line">
							<span class="fa fa-2x fa-envelope" aria-hidden="true"></span>
						</a>
					</ul>
				</div>
			</div>
			<!-- Simon -->
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 about-col col-lg-pull-4">
				<!-- Pic, name, bio -->
				<div class="row">
					<!-- Pic + name -->
					<div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-xs-12">
						<img class="rounded-img" src="resources/web-simon.jpg" align="middle">
						<h3 class="personal-h">Simon Jeong</h3>
					</div>
					<!-- Bio -->
					<div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-xs-12">
						<p class="personal-p"><span class="oomph nice">Deep thinker. <br> Steadfast learner. <br> Hardcore philosopher. </span><br>
							<br>
							Simon spends his spare time learning the guitar and dreaming about his first Macbook.
						</p>
					</div>
				</div>
				<!-- Socials -->
				<div class="personal-socials">
					<ul class="side-list">
						<a href="https://www.facebook.com/simon20000808?fref=ts" target="_blank" class="no-line">
							<span class="fa fa-2x fa-facebook" aria-hidden="true"></span>
						</a>
						<a href="mailto:simonj@makersoframen.com" target="_blank" class="no-line">
							<span class="fa fa-2x fa-envelope" aria-hidden="true"></span>
						</a>
					</ul>
				</div>
			</div>
			<!-- Albert -->
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 about-col">
				<!-- Pic, name, bio -->
				<div class="row">
					<!-- Pic + name -->
					<div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-xs-12">
						<img class="rounded-img" src="resources/web-albert.jpg" align="middle">
						<h3 class="personal-h">Albert Jeong</h3>
					</div>
					<!-- Bio -->
					<div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-xs-12">
						<p class="personal-p"><span class="oomph nice">Daily dreamer. <br> Budding musician. <br> Casual genius. </span><br>
							<br>
							Albert spends his spare time playing music and expanding his social tree.
						</p>
					</div>
				</div>
				<!-- Socials -->
				<div class="personal-socials">
					<ul class="side-list">
						<a href="https://www.facebook.com/albert.jeong.75?fref=ts" target="_blank" class="no-line">
							<span class="fa fa-2x fa-facebook" aria-hidden="true"></span>
						</a>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Support Us -->
	<div id="support">
		<div id="support-div" class="jumbotron">
			<h1 id="support-h">Support Us</h1>
			<p id="support-p">We push the limits of our resources to do crazy things. <br> 
			Our time, energy, family, and friends are constantly stretched thin. <br>
			</p>
			<a href="#support" target="_blank"><h3>Help fund our efforts!
			<br> (coming soon)</h3></a>
		</div>
	</div>

	<footer id="custom-footer"></footer>
</body>
</html>
