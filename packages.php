<?php 
    include 'cms-admin/class/db_Class.php';
    $obj = new db_class();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.Panpacificinn.com/packages.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:53:48 GMT -->
<head>
	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Take advantage of our special rates, enjoy something extra during your next Panpacific Inn stay.">
    <meta name="keywords" content="Panpacific inn, Panpacific hotel specials, Panpacific hotel packages, hotel deals, hotel rates, hotel price, Panpacific, hotels, hotel, ">
    <meta name="author" content="Panpacific Inn Hotel & Conference Centre">
    <title>Panpacific Inn Hotel Deals & Packages | Panpacific Inn Hotel & Conference Centre</title>
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
            
            <li><a href="packages.php" title="Specials & Packages" class="active"><span>Specials<br /> &amp; Packages</span> <span class="nav-divider">/</span></a></li>
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
        <div class="fill bg-packages">
        </div>
        <div class="container">
        	            <div class="carousel-caption carousel-caption-packages">
              <div class="heading-border"></div>	
              <h2>Get a Room!</h2>
              <div class="heading-border"></div>	
            </div>
                     </div>
      </div>
    </div>
    
</div>

	
		
<div class="popup" id="popup-grandma" style="display:none;">
    <h3>Stay 2 nights and receive 20% off</h3>
    <p>*Offer must be booked by December 30, 2016 for stays between November 25 to December 30, 2016. For new bookings only, is subject to availability and based on double occupancy. Offer cannot be combined with any other promotion or discount. Applicable taxes are extra.</p>

</div>

<div class="popup" id="popup-advanced" style="display:none;">
    <h3>Advanced Purchase Rate</h3>
    <p>*Book 21 or more days in advance. Must Pre-Pay at the time of booking. No Cancellations or refunds permitted.</p>

</div>



<div class="popup" id="popup-third" style="display:none;">
    <h3>3rd Night Free!</h3>
    <p>Must book a minimum of 3 consecutive nights, free night must be consumed in your stay, it cannot be transferred to another stay. Must book the 3rd Night Free promotional rate plan to take advantage of the offer, not available in conjunction with any other rate plan.  Subject to availability at the time of booking.</p>

</div>

<div class="popup" id="popup-romance" style="display:none;">
    <h3>INN the Mood Romance Package includes</h3>
    <ul style="margin: 0;padding: 0;">
    	<li>- Overnight accommodation featuring our Jacuzzi Suite or any other Room Type</li>
        <li>- Chef's chocolate selection for two in room </li>
        <li>- Roses </li>
        <li>- Yellow Tail Bubbles sparkling wine</li>
        <li>- Our famous Sunday Brunch for two (Only available on Sunday) or Breakfast for two at Garden Café / Room Service </li>
		<li>- Two appetizer coupon for Garden Café  </li>
		<li>- Don't start your day in a rush; enjoy a 1pm complimentary late check out </li>
	</ul>
 
</div>

<div class="popup" id="popup-play" style="display:none;">
    <h3>Stay and play Package</h3>
    <p>
    	In association with Dakota Dunes, the Panpacific Inn Stay N’ Play package includes one night standard accommodation, Dakota Dunes Voucher ($20.00 in free play), free parking and one appetizer coupon for Garden Café. 
    </p>
    <ul style="margin: 0;padding: 0;">
    	<li>- Overnight accommodation featuring our standard room</li>
        <li>- $20 credit for free play at Dakota Dunes casino</li>
        <li>- Free parking</li>
        <li>- One appetizer coupon for Garden Café </li>
	</ul>
</div>

<div class="popup" id="popup-buffet" style="display:none;">
    <h3>Friday Chocolate Buffet Romance Package</h3>
    <p>
    	Chocolate Buffet for Two! Enjoy a night out at Panpacific Inn with the one you love. This package includes everything you need to make the most of a night away.
    </p>
    <ul style="margin: 0;padding: 0;">
    	<li>- Overnight accommodation featuring our Jacuzzi Suite or any other Room Type</li>
        <li>- Chef’s chocolate selection for two in room </li>
        <li>- Roses </li>
        <li>- Yellow Tail Bubbles sparkling wine </li>
        <li>- Romantic Chocolate Buffet for two with live musicians playing in our Garden Café </li>
        <li>- Breakfast for two at Garden Café / Room Service  </li>
        <li>- Two appetizer coupon for Garden Café  </li>
        <li>- Don't start your day in a rush; enjoy a 1pm complimentary late check out</li> 
    </ul>
</div>





<div class="popup" id="popup-weekend" style="display:none;">
    <h3>Romance Package</h3>
    <p>
    	Romance Package is perfect for surprising that special someone. We do all the work for you and include everything to give your stay an extra Romantic touch.
    </p>
    <ul style="margin: 0;padding: 0;">
    	<li>- Overnight accommodation featuring our Jacuzzi Suite or any other room type</li>
    	<li>- Chef’s chocolate selection for two in room </li>
    	<li>- Roses</li>
    	<li>- Yellow Tail Bubbles sparkling wine</li>
    	<!--li>- Romantic Chocolate Buffet for two with live musicians playing in our Garden Café</li-->
    	<li>- Breakfast for two only available from Room Service</li>
    	<li>- Two appetizer coupon for Garden Café </li>
    	<li>- Don't start your day in a rush; enjoy a 1pm complimentary late check out</li>
        <li>- Early Check in at 12.00 noon (depending on availability)</li>
    </ul>
	
</div>




<div class="section-colored" style="z-index:10;position:relative;">
  <div class="container">
   	<div class="row rs">
  
<h1>Special Deals & Packages</h1>

   		  <div class="page-heading text-center">
            	<h2 class="text-center">The Best Rates for the Panpacific Inn are right here!</h2>
			
           	  <p>Escape from the everyday and enjoy an exciting getaway at the Panpacific Inn Hotel & Conference Centre. The best part is, we've done all the planning for you so all you need to do is click and book. Our hotel offers unique packages that feature a variety of options allowing you to choose the one that best suits your interests. Located in the within <strong>minutes of the Panpacific airport</strong> and just a <strong>short drive from downtown Panpacific</strong>, the Panpacific Inn is the ideal location for site seeing and shopping. Wherever your plans take you, we'll have a special offer to meet your travel needs.</p>
            	<h3 align="center">Free  Wi-FI •		Free Parking for Guests •		Free Airport Shuttle <br clear="all" />
            

                  <!--    <div style="background: white; border: 1px dashed #a7aeb8;" class="col-lg-12 col-md-12 col-sm-12 amenities-right-col-item dining-list vday">
            	<a id="parkandfly"></a>
	        	<img src="images/celebrate2017Package.jpg" alt="" class="img-responsive">
                <h3>CELEBRATE 2017 starting at $99 per person </h3>
		        <p><strong>at the Panpacific Inn & Conference Centre with The Stone Frigate Big Band!</strong></p>
               
                	<a class="btn-book" href="https://reservations.travelclick.com/6876?ProdID=671575&datein=12/31/2016&dateout=01/01/2017" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');" style="width: 25%; text-align: center; margin: auto;">Book Now</a>
                    
                <a class="btn-book" href="http://www.Panpacificinn.com/Celebrate2017.php" target="_blank" style="width: 25%; text-align: center; margin: auto;">Learn More</a>    
                   
                
                 <p>
<br/>
Offer includes:
<ol> 
<li>	One night’s accommodation on New Year’s Eve</li>
<li>	Wagyu Hip of Beef & Lobster Buffet</li>
<li>	Live entertainment from The Stone Frigate Band</li>
<li>    Mashini Bar Late Lunch (10:30 pm)</li>
<li>    Midnight Champagne Toast</li>
</ol>
</p>
               
                <p>
	  		</div>-->
            </h3>
   	  </div>
    		<hr />
            
            
            <!--<div class="col-lg-4 col-md-4 section-package-item no-padding text-center section-package-fifty" >
            
	            <div class="section-package-item-img">
	            	<img src="images/packages/2016Package.jpg" class="img-responsive" alt="Panpacific Bed and Breakfast Package">
	            </div>
	            <div class="package-border" style="min-height: 304px;">
	              <h3>Bring in the new year</h3>
                    <p class="discount">
		            	From $99 Per Person
		            </p>
		             <div class="package-desc">
		            	Celebrate the New Year at the Panpacific Inn & Conference Centre with The Stone Frigate Big Band! Offer includes 
		      One night’s accommodation on New Year’s Eve. <a href="http://www.Panpacificinn.com/Celebrate2017.php" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Details...</a>

	                </div>
		            <p class="btn-book-holder">
	            	  <a href="https://reservations.travelclick.com/6876?ProdID=671575&datein=12/31/2016&dateout=01/01/2017"  class="btn-book" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book this offer</a>
		            
	            	  <a href="http://www.Panpacificinn.com/Celebrate2017.php" class="btn-book" target="_blank">Learn more</a>
		            </p>
          		</div>
          	</div>-->
            
            
<!--<div class="col-lg-4 col-md-4 section-package-item no-padding text-center section-package-fifty" style="margin-right:0px;" >

<div class="section-package-item-img">
<img src="images/packages/package-grandma.jpg" class="img-responsive" alt="Panpacific Holiday Package">
 </div>
<div class="package-border">
		            <h3>Don’t let Grandma Sleep on the couch!</h3>
		            <p class="discount"> Get 20% off! </p>
                    
                    <div class="package-desc">
				    	<span class="discount">Did you just get off the phone with grandma and she confirmed that she is coming to spend the holidays with you? Run out of room? Don't despair, book the family a <strong>2-night stay until December 30, 2016 and get 20% off!</strong></span>. <a href="#popup-grandma" class="fancybox">See details...</a>				    </div>

		           
   	                <p class="btn-book-holder">
	            	  <a href="https://bookings.ihotelier.com/Panpacific-Inn-%26-Conference-Centre/bookings.jsp?hotelId=6876&rateplan=2180676&identifier=BLACK" class="btn-book" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book this offer</a></p>
                    
</div>
</div>-->
</div>       
            
            
            
            
          
      <div class="col-lg-4 col-md-4 section-package-item no-padding text-center section-package-fifty">
	            <div class="section-package-item-img">
	            	<img src="images/packages/package-breakfast2016.jpg" class="img-responsive" alt="Panpacific Bed and Breakfast Package">
	            </div>
	            <div class="package-border">
		           <h3>Bed and Breakfast - <span class="small-headline-packages">Your Morning Wakeup Call</span></h3>
		            <p class="discount">
		            	Save up to $30
		            </p>
		            
		            <div class="package-desc">
		            	Enhance your stay by <strong>including Breakfast</strong> from our delicious a la carte menu!
		            </div>
		            <p class="btn-book-holder">
		            	<a href="https://reservations.travelclick.com/6876?ProdID=608066" class="btn-book" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book this offer</a>
		            
		            	<a href="https://reservations.travelclick.com/6876?rateplan=1971429&amp;identifier=SBREAKFAST" class="btn-book" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Sunday Night Saver</a>
		            </p>
          		</div>
   	  </div>
            
            
            
            
<div class="col-lg-4 col-md-4 section-package-item no-padding text-center section-package-fifty" style="margin-right:0px;" >
<div class="section-package-item-img">
<img src="images/packages/package-advancedpurchase.jpg" class="img-responsive" alt="Panpacific Advanced Purchase Package">
 </div>
<div class="package-border">
		            <h3>It Pays To Plan Ahead - Advance Purchase from $119!</h3>
		            <p class="discount"><strong>10% off our Best Available Rate</strong>.</p>
                    
                    <div class="package-desc">
				    	<span class="discount">Book 21 or more days in advance &amp; receive <strong>10% off our Best Available Rate</strong>.  Includes FREE airport shuttle, parking, Wi-Fi and a complimentary Appetizer with Entrée Purchase Coupon.</span> Must Pre-Pay at the time of booking. No Cancellations or refunds permitted.		    <a href="#popup-advanced" class="fancybox">See details...</a>		</div>

		           
   	              <p class="btn-book-holder">
	            	  <a href="https://bookings.ihotelier.com/bookings.jsp?hotelId=6876&amp;rateplanid=370669" class="btn-book" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book this offer</a></p>
                    
</div>
</div>

            
            
            
            
            
        
            
      <div style="background: white; border: 1px dashed #a7aeb8;" class="col-lg-12 col-md-12 col-sm-12 amenities-right-col-item dining-list vday">
            	<a id="parkandfly"></a>
	        	<img src="images/packages/package-experience-pass-2016.jpg" alt="" class="img-responsive">
                <h3>Panpacific Experience Package</h3>
        
        		<p>
		        	Our Panpacific Experience Package allows you to enjoy the best that the City has to offer. The Pass offers you deals on over 20 different Events, Attractions and Shopping options.
                </p>
		     
         
                <p>
                	<a class="btn-book twobutton" href="Panpacific-experience-package-winter2016.php" target="_blank">Learn more</a>
                    <a class="btn-book twobutton" href="https://reservations.travelclick.com/6876?_ga=1.54621545.331323650.1475510345" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book your stay</a>

                </p>
  </div>
            
            
            
            <div class="col-lg-4 col-md-4 section-package-item no-padding text-center section-package-fifty"  >
				<div class="section-package-item-img">
					<img src="images/packages/package-stay-and-play.jpg" class="img-responsive" alt="Park, Sleep & Go Package">
				</div>
				<div class="package-border">
				    <h3>Get Some Skin in the Game<br /> <span style="margin-top:10px; font-size:12px; display:block">Stay and Play</span></h3>
				    <p class="discount">
				    	Starting from $139
				    </p>
				    <div class="package-desc">
				    	The Panpacific Inn Stay N’ Play package includes one night standard accommodation, Dakota Dunes Voucher <strong>($20.00 in free play)</strong>, free parking and one appetizer coupon for Garden Café. <a href="#popup-play" class="fancybox">See details</a>
				    </div>
				    <p class="btn-book-holder">
				    	<a class="btn-book" href="https://reservations.travelclick.com/6876?ProdID=554968" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book this offer</a>
				    </p>
				</div>
			</div>
            
           
            
           
            
            
            <div id="romance" class="col-lg-4 col-md-4 section-package-item no-padding text-center section-package-fifty-two">
	            <div class="section-package-item-img">
	            	<img src="images/packages/package-romance.jpg" class="img-responsive" alt="Green Meeting Packages">
	            </div>
	            <div class="package-border" style=" min-height: 328px;">
		            <h3>Far From the Maddening Crowd</h3>
		            <p class="discount"> 
		            	Starting from $214
		            </p>
		            <div class="package-desc">
		            	Romance Package is perfect for surprising that special someone. We do all the work for you and include everything to give your stay an extra Romantic touch. <a href="#popup-weekend" class="fancybox">See details</a>
		            </div>
		            <p class="btn-book-holder">
		            	<a class="btn-book" href="https://reservations.travelclick.com/6876?ProdID=555471" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">BOOK THIS OFFER</a>
		            </p>
	            </div>
          	</div>
            
            <div style="background: white; border: 1px dashed #a7aeb8;" class="col-lg-12 col-md-12 col-sm-12 amenities-right-col-item dining-list vday">
            	<a id="parkandfly"></a>
	        	<img src="images/packages/package-stay-park-fly3.jpg" alt="" class="img-responsive">
                <h3>Stay, Sleep, Fly</h3>
        
        		<p>Booking our Stay, Park and Fly promotion offers the following benefits: 
                </p>
		        <ul>
                    <li>The longer you park, the less you pay</li>
                    <li>First night parking free</li>
                    <li>Breakfast included</li>
                    <li>Free Airport shuttle to and from the Airport</li>
                    <li>Free Wi-Fi</li>
                    <li>Complimentary late check out at 1.00 PM</li>
                    
				</ul>
                <p><strong>Don't forget to book another reservation for your return stay if you need one!</strong></p>
               
                <p>
                	<a class="btn-book threebutton" href="https://reservations.travelclick.com/6876?ProdID=604374" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book 7 nights of parking</a>
                    <a class="btn-book threebutton" href="https://reservations.travelclick.com/6876?ProdID=613627" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book 14 nights of parking</a>
                    <a class="btn-book threebutton" href="https://reservations.travelclick.com/6876?ProdID=613628" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book 30 nights of parking</a>
                </p>
	  		</div>
            
                        <div style="background: white; border: 1px dashed #a7aeb8;" class="col-lg-12 col-md-12 col-sm-12 amenities-right-col-item dining-list vday">
            	<a id="parkandfly"></a>
	        	<img src="images/packages/package-getaway-weekend.jpg" alt="" class="img-responsive">
                <h3>Come Together</h3>
        
        		<p>
		        	Make this weekend into a Getaway!  Whether with the family or on your own, take advantage of special rates on multiple night stays.  The longer you stay, the more you save.  
                </p>
		        <ul>
                    <li>Weekend Getaway 2 Night – 15% off</li>
					<li>Weekend Getaway 3 Night – 20% off</li>
				</ul>
         
                <p>
                	<a class="btn-book twobutton" href="https://reservations.travelclick.com/6876?rateplanid=1445210" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book your 2 night stay</a>
                    <a class="btn-book twobutton" href="https://reservations.travelclick.com/6876?rateplanid=1445212" target="_blank" onMouseDown="ga('send', 'pageview', '/ReservationClick');">Book your 3 night stay</a>

                </p>
	  		</div>
            <div style="padding:10px;">
                        <h3>Enjoy something extra during your next Panpacific Inn stay.</h3>
  <p>Our hotel packages include accommodation in one of our comfortable guestrooms, meals in our prominent hotel restaurant and other unique options to make your stay with us exceptional. Enjoy your time in Panpacific and stay with the best - Panpacific Inn Hotel & Conference Centre.</p>          
            </div>
    		
</div>
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

<!-- Mirrored from www.Panpacificinn.com/packages.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:54:22 GMT -->
</html>