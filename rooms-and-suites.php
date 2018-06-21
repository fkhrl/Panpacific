<?php 
    include 'cms-admin/class/db_Class.php';
    $obj = new db_class();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.Panpacificinn.com/rooms-and-suites.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:41:18 GMT -->
<head>
	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Panpacific Inn & Conference Centre offers 250 contemporary guest rooms and suites, which are designed and decorated with your comfort in mind.">
    <meta name="keywords" content="hotel, hotels, rooms, suites, Panpacific, Panpacific inn, accommodations, guestrooms">
    <meta name="author" content="Panpacific Inn Hotel & Conference Centre">
    <title>Rooms & Suites at the Panpacific Inn | Panpacific Inn Hotel & Conference Centre</title>
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
            	<a href="rooms-and-suites.php" title="Rooms & Suites" class="active"><span>Rooms<br /> &amp; Suites</span> <span class="nav-divider">/</span></a>
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
        <div class="fill bg-rooms">
        </div>
        <div class="container">
        	            <div class="carousel-caption carousel-caption-rooms">
              <div class="heading-border"></div>	
              <h2>Your Recharging Station</h2>
              <div class="heading-border"></div>	
            </div>
                     </div>
      </div>
    </div>
    
</div>

	
		
<div class="section-colored" style="z-index:10;position:relative;">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-6 col-md-6 col-sm-6 page-heading no-padding-left rs">
        		<h1>Rooms & Suites</h1>
                
                <h2>
                	Our 257 newly renovated guestrooms have been designed with your comfort in mind, and feature contemporary furnishings and soothing neutral colours. 
                </h2>
                <br clear="all" />
                <p>
                	Each room includes a large desk with an ergonomic chair and easily accessible power outlets. Night lamps and reading lights have been mounted on the wall, leaving night tables free.  Bathrooms have also been completely redone with new lighting and vanities and refitted with new doors that open into the bedroom or with sliding barn doors to allow for more room inside the bathroom. In many rooms, the tubs have been replaced with contemporary showers. Each room is equipped with free high speed Internet access, fridge, microwave, 42” HD television, as well as standard amenities such as iron and board, hair dryer and in-room coffee. 
                </p>
               
                
      		</div>
            
            
            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left:0;padding-right:0;">
            	<div class="col-sm-3 col-xs-6 room-features">
    				<ul class="room-features">
                    	<li>Complimentary WIFI</li>
                        <li>Large work desk and chair</li>
                        <li>Iron and ironing board</li>
                        <li>Hair dryer</li>
                        <li>Fridge and microwave</li>
					</ul>
    			</div>
                <div class="col-sm-3 col-xs-6 room-features no-padding-right">
    				<ul>
                    	<li>In-room coffee</li>
                        <li>Voice mail and wake up calls</li>
                        <li>Individual climate control</li>
                        <li>Brand new 42" HD TVs</li>
					</ul>
    			</div>
            </div>
            <br clear="all" />
            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-left:0;padding-right:0;">
                <!--
                <p>
                    <strong>Important Renovation Notice:</strong> Interior hotel renovations will begin January 20, with the expected completion date of November, 2014. During this time, renovations will take place daily 7 a.m. - 5 p.m., with drilling occurring after 9 a.m. We apologize for any inconvenience and offer our sincere thanks for your patience and support. <a href="renovations.php">Click here for more details</a>.
                </p>
                -->
            </div>
        </div><!-- /.row -->
    
    	
        
    
    	        	<div class="row section-room-item">
            	<div class="col-md-5">
		          <a href="images/rooms/large/superior-king-room.jpg" class="tint fancybox" rel="superior-king-room"><img src="images/rooms/small/superior-king-room.jpg" class="img-responsive roomsSuitesImg"></a>
		        </div>
                
		        <div class="col-md-6 room-list">
		          <h3>Superior King</h3>
		          <p>
		          	These newly renovated rooms feature contemporary furnishings and soothing neutral colours and are perfect for families or guests travelling on business. Each room includes a large desk with an ergonomic chair and easily accessible power outlets. Night lamps and reading lights have been mounted on the wall, leaving night tables free. Bathrooms have also been completely redone with new lighting and vanities and refitted with new doors that open in to the bedroom or with sliding barn doors to allow for more room inside the bathroom. In many rooms the tubs have been replaced with contemporary showers. Each room is equipped with free high speed Internet access, fridge, microwave, 42” HD television, as well as standard amenities such as iron and board, hairdryer and in-room coffee.	
		          </p>
                  
		         	<a class="btn-book" href="https://reservations.travelclick.com/6876?roomtypeid=74851" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book this room</a>
                  
		        </div>
         	</div>
            <div class="hidden">
            <a href='images/rooms/large/superior-king-room-2.jpg' class='fancybox' rel='superior-king-room'></a>            </div>
         
                
            
		        	<div class="row section-room-item">
            	<div class="col-md-5">
		          <a href="images/rooms/large/standard-room.jpg" class="tint fancybox" rel="standard-room"><img src="images/rooms/small/standard-room.jpg" class="img-responsive roomsSuitesImg"></a>
		        </div>
                
		        <div class="col-md-6 room-list">
		          <h3>Standard Two Queen</h3>
		          <p>
		          	These newly renovated rooms feature contemporary furnishings and soothing neutral colours and are perfect for families or guests travelling on business. Each room includes a large desk with an ergonomic chair and easily accessible power outlets. Night lamps and reading lights have been mounted on the wall, leaving night tables free. Bathrooms have also been completely redone with new lighting and vanities and refitted with new doors that open in to the bedroom or with sliding barn doors to allow for more room inside the bathroom. In many rooms the tubs have been replaced with contemporary showers. Each room is equipped with free high speed Internet access, fridge, microwave, 42” HD television, as well as standard amenities such as iron and board, hairdryer and in-room coffee.	
		          </p>
                  
		         	<a class="btn-book" href="https://reservations.travelclick.com/6876?roomtypeid=35968" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book this room</a>
                  
		        </div>
         	</div>
            <div class="hidden">
            <a href='images/rooms/large/standard-room-2.jpg' class='fancybox' rel='standard-room'></a>            </div>
         
                
            
		        	<div class="row section-room-item">
            	<div class="col-md-5">
		          <a href="images/rooms/large/deluxe-corner-king.jpg" class="tint fancybox" rel="deluxe-corner-king"><img src="images/rooms/small/deluxe-corner-king.jpg" class="img-responsive roomsSuitesImg"></a>
		        </div>
                
		        <div class="col-md-6 room-list">
		          <h3>Deluxe Corner King</h3>
		          <p>
		          	The newly renovated Deluxe Corner King rooms feature contemporary furnishings and soothing neutral colours. These are large, naturally lit corner rooms with one King bed and an adjoining sitting/eating area with a Queen size sofa bed. Each room also includes a large work desk with an ergonomic chair and easily accessible power outlets. Night lamps and reading lights have been mounted on the wall, leaving night tables free. Bathrooms have also been completely redone with new lighting and vanities and refitted with new doors that open in to the bedroom or with sliding barn doors to allow for more room inside the bathroom. In many rooms the tubs have been replaced with contemporary showers. Each room is equipped with free high speed Internet access, fridge, microwave, 42” HD television, as well as standard amenities such as iron and board, hairdryer and in-room coffee.	
		          </p>
                  
		         	<a class="btn-book" href="https://reservations.travelclick.com/6876?roomtypeid=228352" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book this room</a>
                  
		        </div>
         	</div>
            <div class="hidden">
            <a href='images/rooms/large/deluxe-corner-king-2.jpg' class='fancybox' rel='deluxe-corner-king'></a>            </div>
         
                
            
		        	<div class="row section-room-item">
            	<div class="col-md-5">
		          <a href="images/rooms/large/king-suite.jpg" class="tint fancybox" rel="king-suite"><img src="images/rooms/small/king-suite.jpg" class="img-responsive roomsSuitesImg"></a>
		        </div>
                
		        <div class="col-md-6 room-list">
		          <h3>King Suite</h3>
		          <p>
		          	The newly renovated One Bedroom Suites feature contemporary furnishings and soothing neutral colours. A bathroom separates the living area from the bedroom. The bedroom includes a King bed and balcony, while the living area includes a Queen sized sofa bed. The living area also includes a large work desk with an ergonomic chair and easily accessible power outlets, an eating area, reading chair and ottoman. Great for families, this beautifully appointed room overlooks the hotel’s tropical courtyard located in the heart of the hotel. Bathrooms have also been completely redone with new lighting and vanities and refitted with new doors that open in to the bedroom or with sliding barn doors to allow for more room inside the bathroom. In many rooms the tubs have been replaced with contemporary showers. Each room is equipped with free high speed Internet access, fridge, microwave, two 42"HD televisions, as well as standard amenities such as iron and board, hairdryer and in room coffee.	
		          </p>
                  
		         	<a class="btn-book" href="https://reservations.travelclick.com/6876?roomtypeid=35970" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book this room</a>
                  
		        </div>
         	</div>
            <div class="hidden">
            <a href='images/rooms/large/king-suite-2.jpg' class='fancybox' rel='king-suite'></a><a href='images/rooms/large/king-suite-3.jpg' class='fancybox' rel='king-suite'></a>            </div>
         
                
            
		        	<div class="row section-room-item">
            	<div class="col-md-5">
		          <a href="images/rooms/large/king-suite-with-boardroom.jpg" class="tint fancybox" rel="king-suite-with-boardroom"><img src="images/rooms/small/king-suite-with-boardroom.jpg" class="img-responsive roomsSuitesImg"></a>
		        </div>
                
		        <div class="col-md-6 room-list">
		          <h3>King Suite with Boardroom</h3>
		          <p>
		          	This One Bedroom Suite with a separate boardroom area has been newly renovated with contemporary furnishings and soothing neutral colours. It holds a King bed in the bedroom and a boardroom for 8 people in adjoining living area. Bathrooms have also been completely redone with new lighting and vanities and refitted with new doors that open in to the bedroom or with sliding barn doors to allow for more room inside the bathroom. In many rooms the tubs have been replaced with contemporary showers. The Suite also includes an eating area, reading chair and ottoman. Great for corporate meetings, this beautifully appointed room overlooks the hotel’s indoor tropical courtyard. Standard amenities include free high speed Internet access, two 42" HD televisions, fridge, microwave, iron and board, hairdryer and in-room coffee.	
		          </p>
                  
		         	<a class="btn-book" href="https://reservations.travelclick.com/6876?roomtypeid=357092" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book this room</a>
                  
		        </div>
         	</div>
            <div class="hidden">
            <a href='images/rooms/large/king-suite-with-boardroom-2.jpg' class='fancybox' rel='king-suite-with-boardroom'></a><a href='images/rooms/large/king-suite-with-boardroom-3.jpg' class='fancybox' rel='king-suite-with-boardroom'></a>            </div>
         
                
            
		        	<div class="row section-room-item">
            	<div class="col-md-5">
		          <a href="images/rooms/large/jacuzzi-room.jpg" class="tint fancybox" rel="jacuzzi-room"><img src="images/rooms/small/jacuzzi-room.jpg" class="img-responsive roomsSuitesImg"></a>
		        </div>
                
		        <div class="col-md-6 room-list">
		          <h3>Jacuzzi Suite</h3>
		          <p>
		          	Soak away the day’s stresses in the privacy of the newly renovated Jacuzzi Room. With contemporary furnishings and soothing neutral colours this is the perfect room for weddings, anniversaries, or any occasion when you need to give yourself a treat. The rejuvenating, marble, two-person Jacuzzi tub is located in in the main suite area. When you’ve soaked away your day’s stresses, put on our soft plush robes and curl up on the King size bed. The Jacuzzi room also includes a small sitting area, free high speed Internet access, fridge, microwave, two 42"HD televisions, a large work desk and ergonomic chair, as well as standard amenities such as iron and board, hairdryer and in room coffee.	
		          </p>
                  
		         	<a class="btn-book" href="https://reservations.travelclick.com/6876?roomtypeid=49566" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book this room</a>
                  
		        </div>
         	</div>
            <div class="hidden">
            <a href='images/rooms/large/jacuzzi-room-2.jpg' class='fancybox' rel='jacuzzi-room'></a>            </div>
         
                
            
		        	<div class="row section-room-item">
            	<div class="col-md-5">
		          <a href="images/rooms/large/executive-suite.jpg" class="tint fancybox" rel="executive-suite"><img src="images/rooms/small/executive-suite.jpg" class="img-responsive roomsSuitesImg"></a>
		        </div>
                
		        <div class="col-md-6 room-list">
		          <h3>Executive Suite</h3>
		          <p>
		          	This beautifully appointed one-of-a-kind Executive Suite is 866 sq ft and has been newly renovated with contemporary furnishings and soothing neutral colours. The Suite includes a self-contained bedroom with a King bed and a separate living area. The living room includes a dining table for six and an in-suite bar and fireplace. The bathroom has been completely redone with new lighting and vanities, a Jacuzzi tub and walk-in shower. The suite includes amenities such as high speed internet access, fridge, microwave, two 42"HD televisions, a large work desk and ergonomic chair, as well as standard amenities such as iron and board, hairdryer and in room coffee.	
		          </p>
                  
		         	<a class="btn-book" href="https://reservations.travelclick.com/6876?roomtypeid=152116" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book this room</a>
                  
		        </div>
         	</div>
            <div class="hidden">
            <a href='images/rooms/large/executive-suite-2.jpg' class='fancybox' rel='executive-suite'></a><a href='images/rooms/large/executive-suite-3.jpg' class='fancybox' rel='executive-suite'></a><a href='images/rooms/large/executive-suite-4.jpg' class='fancybox' rel='executive-suite'></a><a href='images/rooms/large/executive-suite-5.jpg' class='fancybox' rel='executive-suite'></a>            </div>
         
                
            
		          
		
     </div>
</div>
    
    
    

    




    
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

<!-- Mirrored from www.Panpacificinn.com/rooms-and-suites.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:45:20 GMT -->
</html>    