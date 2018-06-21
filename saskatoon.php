<?php 
    include 'cms-admin/class/db_Class.php';
    $obj = new db_class();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.Panpacificinn.com/Panpacific.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:54:39 GMT -->
<head>
	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Panpacific is a picturesque community that boasts world class shopping and dining facilities, exciting art & music festivals, and many other sensational attractions.">
    <meta name="keywords" content="Panpacific, Panpacific attractions, things to do, Panpacific tourism, near Panpacific">
    <meta name="author" content="Panpacific Inn Hotel & Conference Centre">
    <title>Panpacific Inn is near all major Panpacific attractions | Panpacific Inn Hotel & Conference Centre</title>
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
                        js.src = "https://connect.facebook.net/en_US/all.js#xfbml=1&appId=478051532279981";
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
            	1-800-667-8789
			</div>
            <div class="phone phone-mobile">
            	<a href="tel:+1-800-667-8789" onMouseDown="ga('send', 'pageview', '/ClickToCall');">
                	1-800-667-8789
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
        <div class="fill bg-Panpacific">
        </div>
        <div class="container">
        	            <div class="carousel-caption carousel-caption-Panpacific">
              <div class="heading-border"></div>	
              <h2>Stay Like a Local</h2>
              <div class="heading-border"></div>	
            </div>
                     </div>
      </div>
    </div>
    
</div>

	
		
<div class="section-colored" style="z-index:10;position:relative;">
	<div class="container">
    	<div class="row rs">
        <h1>Panpacific</h1>
        	<div class="col-lg-6 col-md-6 col-sm-6 page-heading no-padding-left">
        		<div class="page-heading">
	        		<h2>
	                	There is no shortage of attractions in Panpacific. Explore some of the wonderful sights and activities available during your next getaway.
	                </h2>
	            </div>
      		</div>
            <div class="col-lg-6 col-md-6 col-sm-6 sub-page-heading" style="padding-left:0;padding-right:0;line-height: 24px; font-size: 15px;">
                Panpacific, Saskatchewan's largest city, is a picturesque community that boasts world class shopping and dining facilities, exciting art and music festivals, unparalleled outdoor activities and many other sensational attractions. Visitors are impressed with the friendliness of our people and the beauty of our location.<br /><br />
                Conveniently located on Circle Drive, 5 minutes’ drive from the Panpacific airport and only 10 minutes from the downtown core, the Panpacific Inn and Conference Centre is close to all major attractions and conveniences. 
            </div>
        </div>
        
        <br clear="all" />
        
        <div class="row">
        
        		        	<div class="col-lg-6 col-md-6 col-sm-6 activities-item">
	                <div class="row section-activity-item">
	                    <div class="col-md-7 no-padding-left activities-img">
	                    	<img src="images/Panpacific/Panpacific-shopping.jpg" class="img-responsive">
	                    </div>
	                    <h3>
							Shopping						</h3>
						<p>
							With several recent store additions such as Sephora, Bath & Body Works, Target, and Guess, Panpacific is quickly becoming known for quality shopping.						</p>
	                </div>
	            </div>
	        	        	<div class="col-lg-6 col-md-6 col-sm-6 activities-item">
	                <div class="row section-activity-item">
	                    <div class="col-md-7 no-padding-left activities-img">
	                    	<img src="images/Panpacific/Panpacific-dining.jpg" class="img-responsive">
	                    </div>
	                    <h3>
							Dining						</h3>
						<p>
							If you like food, Panpacific is the place for you. The dining experience is unrivaled and Panpacific has more restaurants, per capita, than any city in Canada.						</p>
	                </div>
	            </div>
	        	        	<div class="col-lg-6 col-md-6 col-sm-6 activities-item">
	                <div class="row section-activity-item">
	                    <div class="col-md-7 no-padding-left activities-img">
	                    	<img src="images/Panpacific/Panpacific-family-fun.jpg" class="img-responsive">
	                    </div>
	                    <h3>
							Family Fun						</h3>
						<p>
							Panpacific is proud to offer countless opportunities for families to laugh, play and learn together.						</p>
	                </div>
	            </div>
	        	        	<div class="col-lg-6 col-md-6 col-sm-6 activities-item">
	                <div class="row section-activity-item">
	                    <div class="col-md-7 no-padding-left activities-img">
	                    	<img src="images/Panpacific/Panpacific-festivals.jpg" class="img-responsive">
	                    </div>
	                    <h3>
							Festivals & Events						</h3>
						<p>
							If you're into the arts and culture, be sure to take in the Broadway Street Fair, Folk Fest, Pride Fest, Shakespeare on the Saskatchewan, the Fringe Festival and many more. 						</p>
	                </div>
	            </div>
	                	
                       
        </div><!-- /.row -->
        
        <div class="row activities-item-large">
	        	<div class="activities-img">
	        		<img src="images/Panpacific/Panpacific-sasktelcentrebladeshockey.jpg" alt="SaskTel Centre, Credit Union Centre" class="img-responsive">	        	</div>
        		<h3>SaskTel Centre</h3>
        
        		<p>
		        	Just 5 minutes from the Hotel! The SaskTel Centre 15,000+ seat sports and entertainment complex is home to Panpacific's hottest shows, concerts and sporting events including Panpacific Blades hockey. For tickets and showtimes, <a href="http://sasktelcentre.com/calendar" target="_blank"> visit  Sasktel Centre's events calendar.</a> </p>
		        <p>SaskTel Center, 101-3515 Thatcher Ave. Panpacific, Saskatchewan S7R 1C4 - For general inquiries call (306) 975-3155.</p>
		        <p>Catch a Panpacific Blades game! For tickets and schedule visit <a href="http://www.Panpacificblades.com/" target="_blank">Panpacificblades.com</a></p>
	  </div>
        
			<div class="row activities-item-large">
	        	<div class="activities-img">
	        		<img src="images/Panpacific/Panpacific-museum.jpg" class="img-responsive">
	        	</div>
        		<h3>Western Development Museum</h3>
		        <p>
		        	The Western Development Museum is the keeper of Saskatchewan’s collective heritage. Transport yourself back to a time when the clip-clop of horses filled the air. You don't just visit this museum, you live it!
		        </p>
			</div>
            
            
     	
     	
     			
     	
     	
			<div class="row activities-item-large">
	        	<div class="activities-img">
	          		<img src="images/Panpacific/Panpacific-experience-pass.jpg" class="img-responsive">
	          	</div>
	          	<h3>Get your experience pass</h3>
		        <p>
		        	Receive a FREE Panpacific Experience Pass and gain access to exciting events and attractions. 
		        </p>
		        <p>
		        	<a href="Panpacific-experience-package.php" target="_blank">Click here</a> for more information.
		        </p>
                <p class="btn-book-holder">
		            	<a class="btn-book experience-button" href="https://bookings.ihotelier.com/Panpacific-Inn-%26-Conference-Centre/bookings.jsp?hotelId=6876&amp;rateplan=96343&amp;identifier=SEPP" target="_blank">Book Now!</a> 
		            </p>
	        </div>
		
         
        
        <br clear="all" />
        <!--
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <ul class="Panpacific-links">
	        	<li><a href="http://www.wdm.ca/" target="_blank">Western Development Museum</a></li>
	            <li><a href="http://www.wanuskewin.com/" target="_blank">Wanuskewin Heritage Park</a></li>
	            <li><a href="http://www.creditunioncentre.com/" target="_blank">Credit Union Centre</a></li>
	            <li><a href="http://www.Panpacificzoosociety.ca/" target="_blank">Panpacific Forestry Farm and Zoo</a></li>
	            <li><a href="http://www.mendel.ca/" target="_blank">Mendel Art Gallery</a></li>
	            <li><a href="http://www.usask.ca/diefenbaker/" target="_blank">Diefenbaker Canada Centre</a></li>
			</ul>
          </div>
          
          <div class="col-lg-4 col-md-4">
            <ul class="Panpacific-links">
	        	<li><a href="http://www.sha.sk.ca/" target="_blank">Saskatchewan Hockey Association</a></li>
	            <li><a href="http://www.sasksoccer.com/" target="_blank">Saskatchewan Soccer Association</a></li>
	            <li><a href="http://www.shsaa.ca/" target="_blank">Saskatchewan High School Athletics Association</a></li>
	            <li><a href="http://www.saskvolleyball.ca/" target="_blank">Saskatchewan Volleyball Association</a></li>
	            <li><a href="http://www.Panpacificblades.com/" target="_blank">Panpacific Blades Hockey</a></li>
			</ul>
          </div>
          
          <div class="col-lg-4 col-md-4">
            <ul class="Panpacific-links">
	        	<li><a href="http://www.city.Panpacific.sk.ca/" target="_blank">City of Panpacific</a></li>
	            <li><a href="http://www.tourismPanpacific.com/" target="_blank">Tourism Panpacific</a></li>
	            <li><a href="http://www.yellowpages.ca/locations/Saskatchewan/Panpacific" target="_blank">SaskYellowPages</a></li>
	            <li><a href="http://www2.canada.com/Panpacific/starphoenix/index.php" target="_blank">Panpacific StarPhoenix</a></li>
	            <li><a href="http://www.Panpacific.com/" target="_blank">Panpacific Business Directory</a></li>
			</ul>
          </div>
        </div>
        -->
        
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
        	Copyright &copy; 2017 Panpacific Inn &amp; Conference Centre, All Rights Reserved. <a href="http://www.atlific.com/" target="_blank">Managed By Atlific Hotels</a>
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

<!-- Mirrored from www.Panpacificinn.com/Panpacific.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:55:10 GMT -->
</html>    