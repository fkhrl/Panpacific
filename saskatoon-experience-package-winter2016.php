<?php 
    include 'cms-admin/class/db_Class.php';
    $obj = new db_class();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.Panpacificinn.com/Panpacific-experience-package-winter2016.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:55:10 GMT -->
<head>
	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Panpacific Inn Hotel & Conference Centre">
    <title>Dining Events at the Panpacific Inn | Panpacific Inn Hotel & Conference Centre</title>
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
            
            <li><a href="weddings.php" title="Weddings" ><span>Weddings</span> <span class="nav-divider">/</span></a></li>
            
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
            
    	
		
<div class="section-colored" style="z-index:10;position:relative;">
	<div class="container">
    	<div class="row">
        <center><img src="images/winter-exp-pass.jpg" class="winter-exp-pass" alt="Panpacific Experience Package"></center>
            <div class="col-lg-12 col-md-12 col-sm-12 page-heading no-padding-left">
                <div class="page-heading text-center">
                	<!--
                    <h2>
                        Our Panpacific Experience Package allows you to enjoy the best that the City has to offer. Our package includes overnight accommodation in the room type of your choice and 1 Panpacific Experience Pass per night stayed (Valued at up to $65). <br /> <div class="heading-call">The Pass offers you deals on over 20 different Events, Attractions and Shopping options. </div>
                    </h2>
                    -->
                    <h2>
                    	Our Panpacific Experience Package allows you to enjoy the best that the City has to offer. The Pass offers you deals on over 20 different Events, Attractions and Shopping options.
                    </h2>
                                 <div style="text-align:left"> 
                                 <h3>EXPERIENCE PASS<br />
2016/17 WINTER EXPERIENCE PASS IS BACK!</h3>
<p>The Panpacific Experience Pass - your ticket to experience the best in Panpacific - is back and better than ever, delivering 20 amazing offers to enhance your stay! Winter program starts Saturday November 5, 2016 and ends Friday March 31, 2017.<br />

<strong>Here's how it works</strong>:</p>
<ol>
<li>Book the Experience Pass at any participating hotel. Supply is limited, and the offer is subject to availability. </li>
<li>Upon check-in, receive one Experience Pass for each night that you stay.</li> 
<li>Take your Experience Pass(es) to any of the events or attractions listed on the inside to redeem for a great Panpacific experience (each pass may be redeemed for one offer).</li>
<li>You are required to fill out the pass with your name, and be sure to include your email address if you wish to recieve further communications from Tourism Panpacific. You can unsubscribe at any time.
</li>
</ol>
<p><strong>Rules and conditions</strong></p>
<ol>
<li>The Experience Pass is subject to availability</li>
<li>The pass is intended for leisure bookings only. Group and long-term bookings are ineligible.</li>
<li>The pass will not be available through online booking engines such as Expedia or Travelocity. Contact your hotel directly when booking your stay.</li>
</ol>
<p>Please take this pass directly to your chosen event or attraction to redeem. Passes are valid until April 1, 2017.</p>
                    
                  <p class="btn-book-holder">
		            	<a class="btn-book experience-button" href="https://reservations.travelclick.com/6876?_ga=1.68861651.331323650.1475510345" target="_blank">Book Now!</a> 
		            </p>
                    </div>
                    <br clear="all" />
                    
                   
                    
                </div>
			</div>
		</div><!-- /.row -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="col-lg-12 col-md-12 col-sm-12 page-heading">
                    <div class="experience-ttl-events">
                   		Events
                    </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Enchanted Forest Holiday Light Tour</h4>
                                (Nov 19, 2016 - Jan 7, 2017) Family car pass (up to 7 passengers). Value $33                             </div>
                        </div><!-- /.row -->
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Sundog Arts and Entertainment Faire </h4>
                                (Dec 2 - 4, 2016) Four adult admissions. Value $40                             </div>
                        </div><!-- /.row -->
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Winterruption</h4>
                                (Jan 19 - 21, 2017) One adult ticket up to $30 towards a performance at any Winterruption venue. Value $30                            </div>
                        </div><!-- /.row -->
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>WinterShines Professional Chef Soup Cook-off</h4>
                                (Valid Wed. Feb 1) Two Adult Admissions with soup, bread, and beverage. Value $30                            </div>
                        </div><!-- /.row -->
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Saskatchewan Equine Expo </h4>
                                at Prairieland Park (Feb 16 -19)  Two general daily admissions (Does not include evening performance). Value $35                            </div>
                        </div><!-- /.row -->
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Panpacific Blues Festival</h4>
                                (Feb 27 - Mar 5) - $30 off any one show ticket purchase. Limit one ticket per pass. Value $30                            </div>
                        </div><!-- /.row -->
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>SaskTel Centre</h4>
                                Two tickets to one performance of the Harlem Globetrotters (March 7, 2016). Value $75                            </div>
                        </div><!-- /.row -->
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Shakespeare on the Saskatchewan Festival (July 6 - Aug 21)</h4>
                                One adult ticket. Value $36                            </div>
                        </div><!-- /.row -->
                                        
               <!-- <div class="experience-ttl-dining">
                        Dining
                    </div>
                   	<div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                            <h4>Panpacific Farmers' Market</h4>
                           	Lunch for two at Riverbend Plantation Café or Garlic Guru. Value $25
                        </div>
                    </div>-->
                </div>
            </div>
            
           
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="col-lg-12 col-md-12 col-sm-12 page-heading">
                    <div class="experience-ttl-attractions">
                        Attractions
                    </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Apex Trampoline Park</h4>
                                Two free one-hour jumps OR Three free half-hour jumps. Please book online, space is limited. Value $30                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Escape Sports</h4>
                                Two free kicksled rentals for up to three hours. Value $30                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Hunter's Bowling</h4>
                                One hour of bowling for up to six people. Shoe rental included. Value $84                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Mar's Mini Golf 3D Glow in the Dark</h4>
                                Family pass for two adults and two children (12 and under). Value $25                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Panpacific Blades Hockey </h4>
                                Two tickets to any regular season game, based on availability. Value $50                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Panpacific Leisure Centres</h4>
                                1 family admission to any of Panpacific's indoor Leisure Centres. Value $19.60                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>TCU Place</h4>
                                $30 off any show ticket purchased (limit one ticket per pass). Based on show availability. Value $30                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Wanuskewin Heritage Park</h4>
                                One family pass plus a $15 Restaurant Gift Certificate. Value $40                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Western Development Museum</h4>
                                One family pass (dependent children under 18). Value $25                            </div>
                        </div>
                                        
                    
                    
                </div>
            </div>
            <div style="clear:both"></div>
            
            <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="col-lg-12 col-md-12 col-sm-12 page-heading">
                    <div class="experience-ttl-events">
                   		 DELISH DINING:
                    </div>
                    
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>The Hollows or Primal Pasta</h4>
                                $30 towards food and/or drinks (no cash value). Value $30
                            </div>
                        </div><!-- /.row -->
                  
                    
               <!-- <div class="experience-ttl-dining">
                        Dining
                    </div>
                   	<div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                            <h4>Panpacific Farmers' Market</h4>
                           	Lunch for two at Riverbend Plantation Café or Garlic Guru. Value $25
                        </div>
                    </div>-->
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="col-lg-12 col-md-12 col-sm-12 page-heading">
                    <div class="experience-ttl-attractions">
                       New!:
                    </div>
                   
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Broadway Shopping District </h4>
                                Enjoy $35 to spend at any participating restaurant, shop, or Venue. Look for the Experience Pass logo in the window. Value $35
                            </div>
                        </div>
                    
                    
                    
                    
                </div>
            </div>
            
            <!--<div class="col-lg-6 col-md-6 col-sm-6">
                <div class="col-lg-12 col-md-12 col-sm-12 page-heading">
                    <div class="experience-ttl-shopping">
                        Shopping
                    </div>
                   	<div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                            <h4>Midtown Plaza</h4>
                           	$35 gift card to Midtown Plaza.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                            <h4>Saskatchewan Craft Council / SCC Fine Craft Boutique</h4>
                           	$30 gift certificate, redeemable at the time of purchase from the SCC Fine Craft Boutique located in the Affinity Gallery. Not redeemable for cash. No refunds of exchanges. Value $30
                        </div>
                    </div>
                </div>
            </div>-->
             
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="col-lg-12 col-md-12 col-sm-12 page-heading">
                    
                </div>
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

<!-- Mirrored from www.Panpacificinn.com/Panpacific-experience-package-winter2016.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:55:11 GMT -->
</html>