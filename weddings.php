<?php 
    include 'cms-admin/class/db_Class.php';
    $obj = new db_class();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.Panpacificinn.com/weddings.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:53:47 GMT -->
<head>
	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Panpacific Inn & Conference Centre will ensure that your wedding reflects your personal style. Choose one of the leaders in personalized wedding services.">
    <meta name="keywords" content="Panpacific weddings, Panpacific wedding venue, event venue, banquet, reception, wedding consultants">
    <meta name="author" content="Panpacific Inn Hotel & Conference Centre">
    <title>Wedding Services | Panpacific Inn Hotel & Conference Centre</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
    
    



    <script src="js/html5shiv.js"></script>
    <script src="js/respond.js"></script>

<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = 'https://connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '589174824503344']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=589174824503344&amp;ev=PixelInitialized" /></noscript>

<!--[if lte IE 9]>
	<style>
    	.meeting-item { width: 24%; margin-right: 13px; }
    	.meeting-item-large .tint { display: block; }
    </style>	
<![endif]-->

</head>

<body onLoad="initialize();">
	
    <header style="">
    	        	         <div class="container">

            <div class="header-social-icons">
            	<ul>
                	<li>
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "../connect.facebook.net/en_US/all.js#xfbml=1&appId=478051532279981";
                        fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-like" data-href="https://www.facebook.com/PanpacificInn" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                    </li>
                    <li>
                    	<a href="https://www.facebook.com/PanpacificInn" target="_blank"><img src="images/icon-facebook.png" /></a>
                    </li>
                </ul>
            </div>
            <div class="phone">
            	+13065008169
			</div>
            <div class="phone phone-mobile">
            	<a href="tel:++13065008169" onMouseDown="ga('send', 'pageview', '/ClickToCall');">
                	+13065008169
                </a>
            </div>
            <nav class="small-nav">
                <ul>
                    <li><a href="index-2.php" >Home</a></li>
                    <li class="government"><a href="government.php" >Government Rates</a></li>
                    <li class="tripadvisor"><a href="reviews.php" >Tripadvisor Reviews</a></li>
                    <li class="small-nav-newsletter"><a href="eclub.php" id="toggle">eClub</a></li>
                    <li><a href="photo-gallery.php" >Photo Gallery</a></li>
                    <li><a href="contact.php" >Contact<span class="mobile-nav-hide"> Us</span></a></li>
                </ul>
            </nav>
        </div>
    </header>
	
	    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
          	</button>
        </div>
		<a class="navbar-brand" href="index-2.php">
        	<img src="images/logo.png" alt="" />
        </a>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
		  <a href="https://reservations.travelclick.com/6876" target="_blank" title="Book Now" class="nav-booking" onMouseDown="ga('send', 'pageview', '/ReservationClick');"><span>Book Now</span></a>
          <ul class="nav navbar-nav navbar-right">
          	<li class="dropdown">
            	<a href="rooms-and-suites.php" title="Rooms & Suites" ><span>Rooms<br /> &amp; Suites</span> <span class="nav-divider">/</span></a>
                <!--
            	<ul class="dropdown-menu">
                	<span class="dropdown-arrow-renovations"><img src="images/dropdown.png" /></span>
                    <li><a href="renovations.php">Renovation Notice</a></li>
                </ul>
                -->
            </li>
            <li><a href="amenities-and-features.php" title="Amenities & Services" ><span>Amenities<br /> &amp; Services</span> <span class="nav-divider">/</span></a></li>
            <li class="dropdown">
            	<a href="meetings-and-conferences.php" title="Meetings & Conferences" class="dropdown-toggle"><span>Meetings<br /> &amp; Conferences</span> <span class="nav-divider">/</span></a>
            	<ul class="dropdown-menu">
                	<span class="dropdown-arrow-meetings"><img src="images/dropdown.png" /></span>
                    <li><a href="meetings-rfp.php">Request For Proposal</a></li>
                </ul>    
            </li>
            
            <li><a href="weddings.php" title="Weddings" class="active"><span>Weddings</span> <span class="nav-divider">/</span></a></li>
            
            <li><a href="packages.php" title="Specials & Packages" ><span>Specials<br /> &amp; Packages</span> <span class="nav-divider">/</span></a></li>
             <!--
            <li class="dropdown">
            	<a href="dining.php" title="Dining" ><span>Dining</span> <span class="nav-divider">/</span></a>
                <ul class="dropdown-menu">
                	<span class="dropdown-arrow-renovations"><img src="images/dropdown.png" /></span>
                    <li><a href="dining-upcoming-events.php">Upcoming Events</a></li>
                </ul>
            </li>
           -->
            <li>
            	<a href="dining.php" title="Dining" ><span>Dining</span> <span class="nav-divider">/</span></a>
            </li>
            
            
            
            
            <!--
            <li><a href="sportsteams.php" title="Sports Teams" ><span>Sports<br /> Teams</span> <span class="nav-divider">/</span></a></li>
            -->
            <li><a href="Panpacific.php" title="Panpacific"><span>Panpacific </span> <span class="nav-divider">/</span></a></li>
          <li class="dropdown">
                        <a href="careers.php" title="Rooms & Suites"><span>Career <br />  Centre</span> <span class="nav-divider">/</span></a>
                        <!--
                        <ul class="dropdown-menu">
                                <span class="dropdown-arrow-renovations"><img src="images/dropdown.png" /></span>
                            <li><a href="renovations.php">Renovation Notice</a></li>
                        </ul>
                        -->
                    </li></ul>
                    
          
        </div><!-- /.navbar-collapse -->
        

           
                  
      </div><!-- /.container -->
    </nav>
        <div class="item weddingSlideMenu weddings-slider-mobile" style="height:210px">
           
</div>
<div id="myCarousel" class="carousel carouselWedding  slide weddingSlide" data-ride="carousel">
       <!--Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
		
    
        <!-- Wrapper for slides -->
        <div class="carousel-caption carousel-caption-weddings">
              <div class="heading-border"> 
              </div>
      		  <h2>We Make it Fun</h2>
              <div class="heading-border"> 
              </div>	
        
        </div>
        <div class="carousel-inner">
        
        	
          <div class="item active">
            <div class="fill weddings-slider-1">
            </div>
		  </div>
          <div class="item">
            <div class="fill weddings-slider-2">
            </div>
          </div>
       	  <div class="item">
            <div class="fill weddings-slider-3">
            </div>
          </div>
         
</div>
		</div>	
		
<div class="section-colored" style="z-index:10;position:relative;">
	<div class="container">
    	<div class="row rs">
        	<h1>Weddings & Celebrations</h1>
        	<div class="col-lg-6 col-md-6 col-sm-6 page-heading no-padding-left">
            	<div class="page-heading">
                    <h2 style="padding-top:0px">
                        From an intimate affair to a large celebration, let us help create the experience of a lifetime by making your wedding dreams come true.
                    </h2>
                    <br clear="all" /><br />
                    <!--<a href="pdf/2016SICCWeddingPackage.pdf" class="btn-book-large" target="_blank">View our Wedding Package</a>-->
                </div>
      		</div>
            <div class="col-lg-6 col-md-6 col-sm-6 sub-page-heading" style="padding-left:0;padding-right:0;line-height: 24px; font-size: 15px;">
                <div class="blog-item">
                    <p>
                    	Organizing the wedding of your dreams may seem like a daunting task. Panpacific Inn & Conference Centre will ensure that your wedding reflects your personal style. We’ll make your special day a beautiful event that you will always cherish. In just one visit, our knowledgeable and friendly Wedding Consultants will put your mind at ease. 
                    </p>
                    <div class="fulltext">
                        <p>
                        	We'll provide you with lists and tips on wedding do’s and don’ts, how to hire your entertainment, ideas on special gifts for special friends and much more.  Everyone says "I do" to the Panpacific Inn.
                        </p>
                    </div>
                    <a class="readmore" href="#">Read more</a>
            	</div>
            </div>
        </div><!-- /.row -->
        <div class="row">
        	<div style="background: white; border: 1px dashed #a7aeb8;" class="col-lg-12 col-md-12 col-sm-12 amenities-right-col-item dining-list vday">
            	<a id="parkandfly"></a>
	        	<img src="images/packages/package-wedding.jpg" alt="" class="img-responsive">
                <h3>Wedding package</h3>
        
        		<p>
		        	Packages start at just <strong>$38.00 per person</strong>* and may include:</p>

<ul style="color:#cf6534">
<li>The use of a fully renovated ballroom (based on a minimum amount of dinner guests).</li>
<li>Chef inspired plated or buffet style dinners.</li>
<li>Complete setup of your ballroom with linens, gift tables, guest book table, cake table and a podium with a microphone.</li>
<li>Non-alcoholic punch during for your cocktail hour/reception</li>
<li>And more! </li>
</ul>
<p>The team at the Panpacific Inn & Conference Centre is here to help you customize your wedding package to your needs and budget.</p>

                </p>
		     <p><small>*$38.00 per person is our starting price point. Additional fees, taxes and/or restrictions may apply.</small></p>
         
                <!--<p>
                	<a class="btn-book twobutton" href="Panpacific-experience-package-winter2016.php" target="_blank">Learn more</a>
                    <a class="btn-book twobutton" href="https://reservations.travelclick.com/6876?_ga=1.54621545.331323650.1475510345" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book your stay</a>

                </p>-->
  </div>
        </div>
        <div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 heading-call">
            	Email <a href="mailto:celebrate@Panpacificinn.com">celebrate@Panpacificinn.com</a>, call 306.668.9635 or toll free at 1.877.282.2420 to inquire about your special day!
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.section-colored -->


<div class="container container-footer">
	<footer>
		<div class="container">

		</div>
		<br clear="all" /> 
        <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
            	<div class="container">
	            	<ul>
	                    <li><a href="about-us.php">About The Hotel</a></li>
	                    <li><a href="rooms-and-suites.php">Rooms & Suites</a></li>
	                    <li><a href="packages.php">Packages &amp; Specials</a></li>
	                    <li><a href="meetings-and-conferences.php">Meetings & Conferences</a></li>
	                    <li><a href="weddings.php">Weddings & Receptions</a></li>
	                    <li><a href="catering.php">Catering</a></li>
	                    <li><a href="amenities-and-features.php">Hotel Amenities</a></li>
	                    <li><a href="Panpacific.php">Explore Panpacific</a></li>
	                    <li><a href="media.php">Media</a></li>
	            	</ul>
            	</div>
            </div>
        </div>
        <div class="copyright">
        	Copyright &copy; 2005 Panpacific Inn &amp; Conference Centre, All Rights Reserved. <a href="http://www.atlific.com/" target="_blank">Managed By Atlific Hotels</a>
        </div>
  </footer>
</div><!-- /.container -->


<script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/validate.js"></script>
    <script type="text/javascript" src="js/code2.js"></script>
    <script src="../code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript" src="js/datepicker.js"></script>
<script type="text/javascript">
	$("#toggle, #toggle-1").click(function() {
	    if ($('#panel').css('display') == 'block') {
	        var height = '-=' + $('#panel').height();
	    } else {
	        var height = '+=' + $('#panel').height();
	    }
	    $("#panel").slideToggle("slow");
		
	    $("#upper").animate({
	        bottom: height
	    }, "slow")
	});
	
	function EasyPeasyParallax() {
		if ( $(window).width() > 992) { //disable parallax on resolution smaller than 992px
			scrollPos = $(this).scrollTop();
			$('.slider-1, .slider-2, .slider-3, .bg-rooms, .bg-stay-park-fly, .bg-Panpacific, .bg-sportsteams, .bg-contact, .bg-amenities, .bg-government, .bg-experience, .bg-weddings, .bg-meetings, .bg-catering, .bg-about, .bg-suite33, .bg-packages, .bg-renovations, .bg-airport').css({
				'background-position' : '50% ' + (scrollPos/8)+"px"
			});
			$('.carousel-caption').css({
				//'margin-top': (scrollPos/8)+"px",
				//'opacity': 1-(scrollPos/250)
			});
			$('.carousel-caption-rooms, .carousel-caption-Panpacific, .carousel-caption-sportsteams, .carousel-caption-government, .carousel-caption-experience, .carousel-caption-weddings, .carousel-caption-meetings, .carousel-caption-catering, .carousel-caption-about, .carousel-caption-suite33, .carousel-caption-stay-park-fly, .carousel-caption-packages, .carousel-caption-renovations, .carousel-caption-airport').css({
				'margin-top': (-scrollPos/8)+"px",
				//'opacity': 1-(scrollPos/250)
			});
		}
	}
	$(document).ready(function(){
		$(window).scroll(function() {
			EasyPeasyParallax();
		});
		
	});
	
	/*
	
	$(window).scroll(function () {
		 var sc = $(window).scrollTop()
		if (sc > 100) {
			$(".navbar-collapse").addClass("small");
			$(".navbar-brand").addClass("navbar-brand-small");
		} else {
			$(".navbar-collapse").removeClass("small");
			$(".navbar-brand").removeClass("navbar-brand-small");
		}
	});
	*/
	$('a#toggle').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 1200);
    return false;
	});
	
	$(document).ready(function () {
		$('.fulltext').hide();
	
		$('.blog-item .readmore').click(function (event) {
			event.preventDefault();
			$this = $(this);
			$this.closest('.blog-item').find('.fulltext').slideToggle('slow');
			$this.text($this.text() == 'Read less' ? 'Read more' : 'Read less');
		});
	});
    
	

    </script>
</body>

<!-- Mirrored from www.Panpacificinn.com/weddings.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:53:48 GMT -->
</html>