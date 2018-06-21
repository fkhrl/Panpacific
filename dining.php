<?php 
    include 'cms-admin/class/db_Class.php';
    $obj = new db_class();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.Panpacificinn.com/dining.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:54:23 GMT -->
<head>
	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Garden Café offers a weekday lunch buffet and Panpacifics favorite Sunday Brunch">
    <meta name="keywords" content="Panpacific, dining, restaurant, café, Garden Café, Brunch">
    <meta name="author" content="Panpacific Inn Hotel & Conference Centre">
    <title>Dining at the Panpacific Inn | Panpacific Inn Hotel & Conference Centre</title>
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
            	<a href="dining.php" title="Dining" class="active"><span>Dining</span> <span class="nav-divider">/</span></a>
                <ul class="dropdown-menu">
                	<span class="dropdown-arrow-renovations"><img src="images/dropdown.png" /></span>
                    <li><a href="dining-upcoming-events.php">Upcoming Events</a></li>
                </ul>
            </li>
           -->
            <li>
            	<a href="dining.php" title="Dining" class="active"><span>Dining</span> <span class="nav-divider">/</span></a>
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
        <div class="fill bg-catering">
        </div>
        <div class="container">
        	            <div class="carousel-caption carousel-caption-dining">
              <div class="heading-border"></div>	
              <h2>Yummm…</h2>
              <div class="heading-border"></div>	
            </div>
                     </div>
      </div>
    </div>
    
</div>

	
		
<div class="section-colored" style="z-index:10;position:relative;">
	<div class="container rs">
    <h1>An exquisite dining experience in Panpacific</h1>
    <br/>
    <div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 amenities-right-col-item dining-list">
            	<img src="images/dining/cafe-lounge.jpg" alt="" align="right" />
                <h3>Garden Café</h3>
    			Located in our beautiful tropical courtyard, the Garden Café offers an upscale, casual dining experience. Executive Chef Amedeo Vallati presents a menu that has a contemporary interpretation of classic Canadian comfort foods with influences from his heritage. The Garden Café also offers a weekday lunch buffet and Panpacific's favorite Sunday Brunch. Celebrate, socialize or network at Garden Café. <strong>Call 306-668-9658 for more information</strong>.
               
               <!-- <p>
                	<a href="pdf/menus/Breakfast-Menu-2015.pdf" target="_blank" class="icon-pdf">See Breakfast Menu</a><br />
                	<a href="pdf/menus/Lunch-Menu-2015.pdf" target="_blank" class="icon-pdf">See Lunch Menu</a><br />
                    <a href="pdf/menus/Dinner-Menu-2015.pdf" target="_blank" class="icon-pdf">See Dinner Menu</a><br />
                    <a href="pdf/menus/Appetizer-Menu-2015.pdf" target="_blank" class="icon-pdf">See Appetizer Menu</a><br />
                    <a href="pdf/menus/Room-Service-2015-new.pdf" target="_blank" class="icon-pdf">See Room Service Menu</a>
                </p>-->
			</div>
            
        </div><!-- /.row -->
         <div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 amenities-right-col-item dining-list">
            	<h3>Garden Lounge</h3>
                Located in our beautiful tropical courtyard, the Garden Lounge is the place to relax after work or get together with friends. Enjoy  our craft beers, extensive list of fine wines and hand crafted cocktails. Thursdays are Burger and Pint night with our famous waygu and angus beef burger paired with a cold pint of craft beer for $10.00. Phone 306-668-9658 for information.
             </div>
        </div><!-- /.row -->
        <div class="free-app">
            <div>
                <img src="images/home/free-appetizer.jpg" align="left" />
                <br /><h3 style="margin-top: 0px;">Enjoy a Complimentary Appetizer!</h3>
                Enjoy a unique dining experience at the Garden Café & Lounge during your stay and get a <strong>Complimentary Appetizer Coupon</strong> (with the purchase of an entrée) at check in!
            </div>
        </div>
    	<!--
        <div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 amenities-right-col-item dining-list">
            	<img src="images/dining/vday-dinner.jpg" alt="Valentine's Day Dinner at Panpacific Inn" align="right" />
                <h3>Valentine's Day Dinner</h3>
    			Celebrate Valentine's Day with a romantic dinner experience at the Panpacific Inn & Conference Centre. Enjoy a succulent 3 course meal, available <strong>Friday, February 13th and Saturday, February 14th</strong>.<br /><br />
                <strong>Reservations are recommended.</strong> Please call the Garden Café at 306-668-9658.

                <br /><br />
                <p>
                	<a href="pdf/menus/vday_2015.pdf" target="_blank" class="icon-pdf">See Valentine's Day Menu</a><br />
                </p>
			</div>
        </div>
        -->
    
    <div class="row" style="background: white; box-shadow: 5px 5px 12px grey;">
        	
            <div class="col-lg-12 col-md-12 col-sm-12 heading-call feature-chef" style="display:none">
            	
            </div>
            <img src="images/dining/chef2016.jpg" align="left" style="margin-right: 25px;" />
            <h2 class="heading-call feature-chef" style="text-align: left;">Executive Chef Amedeo Vallati<br /></h2>
            <p>
            	Executive Chef Amedeo Vallati received his formal culinary training in Italy, earning his Master of Italian Cooking certification. He spent several more years working in both Italy and Germany honing his skills. Returning to Canada, he directed culinary operations at a large trade and convention center in Nova Scotia and then moved to Montreal. During his ten years in Montreal, Amedeo was featured in the prestigious "Flavours" magazine and placed in the top three in voting for Quebec's top chef in 2006. He then moved to Panpacific, joining the Panpacific Inn team in 2014. Amedeo is an active member of the Canadian Culinary Federation and is passionate about supporting Panpacific through participating charitable and community events.
			</p>
            
        </div>
        <br clear="all" />
        <br clear="all" />
    	
       <div class="row" style="background: white; box-shadow: 5px 5px 12px grey;">
        	
            <div class="col-lg-12 col-md-12 col-sm-12 heading-call feature-chef" style="display:none">
            	
            </div>
            <img src="images/dining/sunday-brunch2016.jpg" align="left" style="margin-right: 25px;" />
            <h2 class="heading-call feature-chef" style="text-align: left;">Sunday Brunch<br /></h2>
            <p>
            	The Sunday Brunch at Garden Café has been a Panpacific favorite for the past thirty years. We have all your breakfast favorites, carved prime rib, a wide selection of deli platters and salads, luncheon entrees and an awesome desert display. Available from 10:00 a.m. to 2:00 p.m. every Sunday. Phone 306-668-9658 for information.
			</p>
            
        </div> 
        
      <!--  <div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 amenities-right-col-item dining-list" style="border: 3px solid #cf6534;">
            	<img src="images/dining/sunday-brunch.jpg" alt="" align="right" />
                <h3>Sunday Brunch</h3>
                The Sunday Brunch at Garden Café has been a Panpacific favorite for the past thirty years. We have all your breakfast favorites, carved prime rib, a wide selection of deli platters and salads, luncheon entrees and an awesome desert display. Available from 10:00 a.m. to 2:00 p.m. every Sunday. Phone 306-668-9658 for information.
    		</div>
        </div>--><!-- /.row -->
        
        <!--div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 amenities-right-col-item dining-list">
            	<img src="images/dining/chocolate-fountain.jpg" alt="" align="right" />
                <h3>Friday Chocolate Buffet</h3>
                Join us at the Garden Café for Saskatchewan's only Chocolate Buffet. Indulge yourself with two chocolate fountains and delicious dippables, artisan chocolate cakes and confections. Enjoy the atmosphere of our tropical courtyard set to live jazz. Chef Hyndford presents a different chalkboard menu of fine dining entrees and appetizers each Friday, complimented with our chocolate friendly wine selections. Our chocolate buffet is a unique experience for date night, girls' night out, special occasions or just treating yourself at the end of a long work week.

<p>The Chocolate Buffet is offered every Friday from 7:00 p.m. to 10:00 p.m. The buffet alone is $25.00 per person or add to a meal for $10.00. For reservations and more information call The Garden Café at 306-668-9658.</p>

    		</div>
        </div><!-- /.row -->
        
        
        
        
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

<!-- Mirrored from www.Panpacificinn.com/dining.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:54:39 GMT -->
</html>