<?php
/**
 * Template Name: front-page
 */
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="SCCA WEB TEAM">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/styles.css">

	<title>SCCA Portshowlio 2017</title>
</head>

<body>
	<video poster="<?php bloginfo('template_url');?>/poster.jpg" id="bgvid" playsinline autoplay muted loop>
		<source src="<?php bloginfo('template_url');?>/background.mp4" type="video/webm">
		<source src="<?php bloginfo('template_url');?>/background.mp4" type="video/mp4">
	</video>

	<div class='shape'>
	<div class="container">


	<div>
		<div class="col-xs-6" style="max-width:200px;">
			<img class="logo" src="<?php bloginfo('template_url');?>/logo.svg">
		</div>
		<div class="col-xs-6">
			<h1>SCCA</h1><p class='twenty'>2017</p>
		</div>
		<div class="col-md-12 col-s-12 col-xs-12" style="height:auto; margin-bottom:5vh;"> <!--height auto replaces style="height: 15vh;"-->
			<p id='description'>The graduating class of Seattle Central Creative Academy is proud to present Portshowlio 2017. From photography to design, this group of talented graduates is anything but one-dimensional. This show captures the many facets of their collaboration and dedication.</p>
		</div>
	</div>

	<hr>

	<div class="">

		<div class="col-md-12 col-s-12 col-xs-12">
			<h2>Professional Night</h2>
			<h3>June 14th</h3>
			<h3 class="time">6-9pm</h3>
		</div>

	<hr>

		<div class="col-md-12 col-s-12 col-xs-12">
			<h2>Friends & Family Night</h2>
			<h3>June 15th</h3>
			<h3 class="time">6-9pm</h3>
		</div>

	</div>

	<hr>

		<div class="footer2">
			<div class="col-md-5 col-xs-5">
				<ul class="social">
					<li class="icons"><a href="https://www.facebook.com/seattlecentralcreativeacademy/" target="_blank" title="Facebook"><i class="fa fa-facebook fa-2x black"></i></a></li>
					<li class="icons"><a href="https://www.instagram.com/creative_academy/" target="_blank" title="Instagram"><i class="fa fa-instagram fa-2x black"></i></a></li>
					<li class="icons"><a href="https://twitter.com/sccaportfolio?lang=en" target="_blank" title="Twitter"><i class="fa fa-twitter fa-2x black"></i></a></li>
				</ul>
			</div>

			<div class="col-md-7 col-xs-7">
				<h4>Seattle Central Creative Academy</h4>
				<h4>1700 Broadway Ave Seattle, WA 98122</h4>
			</div>
		</div>
	</div>
	</div>
	<script>
	$(document).ready(function() {
		var videoRat = $('#bgvid').width()/$('#bgvid').height();
		var windowRat = $(window).width()/$(window).height();
			//console.log($('#bgvid').width()/$('#bgvid').height());
			//console.log($(window).width()/$(window).height());

			if (videoRat > windowRat) {
				console.log('>');
				 $("#bgvid").css("height", '100%');
			} else {
				console.log('<');
				$("#bgvid").css("width", '100%');
			}
	})
	$( window ).resize(function() {
		var videoRat = $('#bgvid').width()/$('#bgvid').height();
  	  	var windowRat = $(window).width()/$(window).height();
		//console.log($('#bgvid').width()/$('#bgvid').height());
		//console.log($(window).width()/$(window).height());

		  if ( videoRat > windowRat ) {
			 console.log('height100');
			 $("#bgvid").css("width", 'auto');
			  $("#bgvid").css("height", '100%');
		 } else {
			 console.log('width100');
			 $("#bgvid").css("height", 'auto');
			 $("#bgvid").css("width", '100%');
		 }

	});
	$(document).mousemove(function(e) {



		  //console.log(e.clientX/$(document).width(), " : ", e.clientY/$(document).height());

		  var max = 5
		  var min = -5
		  //var hper = 1-e.clientY/$(document).height();
		  var wper = e.clientX/$(document).width();
		  var xPer = (max-min)*wper+min;
		  //var yPer = (max-min)*hper+min;: ;
		  $(".container").css("transform", 'rotateY(' + xPer + 'deg ) translateZ( 75px )');
		  //console.log(xPer);

	})
	</script>


</body>
</html>
