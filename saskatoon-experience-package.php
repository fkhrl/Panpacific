<?php 
    include 'cms-admin/class/db_Class.php';
    $obj = new db_class();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.Panpacificinn.com/Panpacific-experience-package.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 06:00:44 GMT -->
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
                    </li>
          </ul>
          
        </div><!-- /.navbar-collapse -->
        

           
                  
      </div><!-- /.container -->
    </nav>
        <div id="myCarousel" class="carousel slide carousel-bg-rooms">
    <!-- Wrapper for slides -->
        <!--<div class="header-mobile-book">
        <a class="btn-book" href="https://bookings.ihotelier.com/bookings.jsp?hotelId=6876" target="_blank">Book Now</a>
    </div>-->
    <div class="header-mobile-book">
        <a class="btn-book" href="https://bookings.ihotelier.com/bookings.jsp?hotelId=6876&amp;rateplanid=1592776&amp;identifier=MOBILEUPGRADE" target="_blank">Book Now</a>
    </div>
 
     
    
    
    <div class="carousel-inner">
      <div class="item active">
        <div class="fill bg-experience">
        </div>
        <div class="container">
        	            <div class="carousel-caption carousel-caption-Panpacific-experience-package">
              <div class="heading-border"></div>	
              <h2>Panpacific Experience Package</h2>
              <div class="heading-border"></div>	
            </div>
                     </div>
      </div>
    </div>
    
</div>

	
		
<div class="section-colored" style="z-index:10;position:relative;">
	<div class="container">
    	<div class="row">
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
                                 <h3>EXPERIENCE PASS PLUS<br />
20 GREAT EXPERIENCES + CASH TO SPEND + THE CHANCE TO WIN BIG!</h3>
<p>The Panpacific Experience Pass - your ticket to experience the best in Panpacific - is back and better than ever, delivering 20 amazing offers to enhance your stay! This summer, we're adding even greater value with two bonuses: a $50 pre-paid VISA card to spend as you choose, plus the chance to win a $5000 cash prize!<br />

Here's how it works:</p>
<ol>
<li>Request the pass when booking your stay at any participating hotel. You'll get one for each night that you stay.</li>
<li>Upon check-in, receive your Experience Pass, plus a $50 pre-paid VISA© card to spend as you choose, one card per visit. (A visit is defined as any length of consecutive room bookings).</li> 
<li>Take your Experience Pass to any of the businesses listed on the inside to redeem for a great Panpacific experience (each pass may be redeemed for one offer).</li>
<li>Be sure to fill out the contact form on your passes - each one you redeem will be entered into a draw for a $5000 cash prize</li>
</ol>
<p>The Experience Pass Plus and associated offers will be available to visitors from Friday May 20, 2016 to Saturday, October 1, 2016.</p>
                    
                    <p class="btn-book-holder">
		            	<a class="btn-book experience-button" href="https://bookings.ihotelier.com/Panpacific-Inn-%26-Conference-Centre/bookings.jsp?hotelId=6876&amp;rateplan=96343&amp;identifier=SEPP" target="_blank">Book Now!</a> 
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
                                <h4>A Taste of Saskatchewan (July 12-17)</h4>
                                8 food and refreshment tokens. Value $20                            </div>
                        </div><!-- /.row -->
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>FolkFest (Aug 18-20)</h4>
                                Two FolkFest Passports providing unlimited access for three days to 25 cultural pavilions (includes transportation).  Value $32                            </div>
                        </div><!-- /.row -->
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>John Arcand Fiddle Fest (Aug 11-14)</h4>
                                One Day Pass (Cannot be exchanged or traded towards weekend pass). Value $25                            </div>
                        </div><!-- /.row -->
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>PotashCorp Fringe Theatre and Street Festival</h4>
                                (July 28 - Aug 6)  Theatre show pass for two people. Value $30                            </div>
                        </div><!-- /.row -->
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Panpacific EX (Aug 9-14)</h4>
                                Family pass for up to four people (2 adults & 2 children under 10). Valid any day (Tuesday to Sunday). Value $32                            </div>
                        </div><!-- /.row -->
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Panpacific Ribfest at Diefenbaker Park (July 29 - Aug 1)</h4>
                                (1) half rib dinner and (1) side. Come to information tent to redeem. Value $20                            </div>
                        </div><!-- /.row -->
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>SaskTel Saskatchewan Jazz Festival (June 24 - July 3)</h4>
                                Receive $30 off your ticket purchase for the TD Mainstage, Broadway Theatre, and The Bassment Club. Cannot be combined with any other offer. In-person sales only. Value $30                            </div>
                        </div><!-- /.row -->
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Shakespeare on the Saskatchewan Festival (July 6 - Aug 21)</h4>
                                One adult ticket. Value $36                            </div>
                        </div><!-- /.row -->
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>TCU Place Premier Showcase (Sep 30 - Oct 1)</h4>
                                One ticket to the Premier Showcase Presented by Co-op Wine ∙ Spirits ∙ Beer. Value $45                            </div>
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
                                $2 free one-hour jumps or 3 free half-hour j umps. Please book online, space is limited. Value $34                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Batoche National Historical Site</h4>
                                One family day pass (up to 7 people with maximum of two adults) including shuttle bus tour and $10 Batoche Bucks to be used at the Friends gift shop. Value $39                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Escape Sports</h4>
                                Two hour bike rental with Drift Café Picnic Lunch. Value $35                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Mar's 3D Glow in the Dark Mini Golf</h4>
                                Family pass for 2 adults and 2 children (12 and under). Value $25                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Moon Lake Golf and Country Club</h4>
                                1 green fee. Valid Monday-Friday anytime; Saturday, Sunday, & Stat holidays after 1:30pm. Value $60                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>PotashCorp Playland at Kinsmen Park</h4>
                                One Play Pack (12 Ride Tickets). Value $20                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Prairie River Cruises Ltd</h4>
                                One adult pass for a cruise on the Prairie Lily River Boat. Not valid for dinner or brunch cruises. Value $24                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Panpacific Forestry Farm Park and Zoo</h4>
                                One family admission. Value $23                            </div>
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
                                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 experience-item">
                                <h4>Wyant Group Raceway</h4>
                                $48 credit towards ticket(s) purchased for any event (including Nascar Pinty's Series). Value $48                            </div>
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

<!-- Mirrored from www.Panpacificinn.com/Panpacific-experience-package.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 06:00:44 GMT -->
</html>