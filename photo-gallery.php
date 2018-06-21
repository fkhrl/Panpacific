<?php 
    include 'cms-admin/class/db_Class.php';
    $obj = new db_class();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.Panpacificinn.com/photo-gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:28:19 GMT -->
<head>
	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Panpacific Inn & Conference Centre is located in downtown Panpacific and offers 250 guestrooms & suites and over 29,000 sq. ft. of flexible meeting space.">
    <meta name="keywords" content="">
    <meta name="author" content="Panpacific Inn Hotel & Conference Centre">
    <title>Photo Gallery | Panpacific Inn Hotel & Conference Centre</title>
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
                    <li><a href="photo-gallery.php" class="active">Photo Gallery</a></li>
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
            
    	
		
<div class="section-colored" style="z-index:10;position:relative;">
	<div class="container">
    	<div class="row">
        	<br /><br /><br /><br /><br /><br />
        	                <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/1.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/1.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/2.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/2.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/3.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/3.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item meeting-item-last" >
                   <a href="images/photo-gallery/large/4.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/4.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/5.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/5.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/6.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/6.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/7.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/7.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item meeting-item-last" >
                   <a href="images/photo-gallery/large/8.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/8.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/9.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/9.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/10.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/10.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/11.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/11.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item meeting-item-last" >
                   <a href="images/photo-gallery/large/12.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/12.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/13.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/13.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/14.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/14.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/15.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/15.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item meeting-item-last" >
                   <a href="images/photo-gallery/large/16.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/16.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/17.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/17.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/18.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/18.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/19.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/19.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item meeting-item-last" >
                   <a href="images/photo-gallery/large/20.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/20.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/21.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/21.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/22.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/22.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/23.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/23.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item meeting-item-last" >
                   <a href="images/photo-gallery/large/24.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/24.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/25.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/25.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/26.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/26.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/27.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/27.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item meeting-item-last" >
                   <a href="images/photo-gallery/large/28.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/28.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/29.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/29.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/30.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/30.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/31.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/31.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item meeting-item-last" >
                   <a href="images/photo-gallery/large/32.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/32.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/33.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/33.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/34.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/34.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/35.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/35.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item meeting-item-last" >
                   <a href="images/photo-gallery/large/36.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/36.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/37.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/37.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/39.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/39.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/40.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/40.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item meeting-item-last" >
                   <a href="images/photo-gallery/large/41.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/41.jpg" />
                   </a>
                </div>
                            <div class="col-md-3 gallery-item " >
                   <a href="images/photo-gallery/large/42.jpg" class="fancybox" rel="gallery" title="">
                   		<img src="images/photo-gallery/thumbs/42.jpg" />
                   </a>
                </div>
                    
        	<br clear="all" />
            <!--
        	<div class="col-lg-12 col-md-12 col-sm-12 page-heading no-padding-left">
            	<div class="heading-call">
                	About Panpacific Inn & Conference Centre
                </div>
                <div class="page-heading text-center">
                    <h2>
                        Panpacific Inn & Conference Centre's Grand Opening Launch was on Valentine's Day, 1982. That date marked the beginning of our strong relationship with our many patrons who have experienced the tradition in hospitality at the Panpacific Inn & Conference Centre.
                    </h2>
                </div>
             </div>
             <br clear="all" /><br />
             <div class="col-sm-8" style="line-height: 24px; font-size: 15px; padding-left: 0px;">
                <p>
                    In 2001, the Panpacific Inn & Conference Centre underwent a complete $2.7 million renovation. The major upgrades included all 250 guest rooms (including carpets, walls and soft goods), corridors, meeting rooms, the main lobby, restaurant and lounge. In addition, we added a new room type – the Business Class Kings.
                </p>
                <p>
                <img align="right" src="images/rooms/small/king-suite.jpg" class="img-responsive" style="padding-left: 20px;" />
In 2004, the hotel renovated 17 guest rooms to meet the changing needs of the traveling public. These new rooms are billed "Superior Queen" and they let our guests experience the essence of relaxation and rejuvenation. In addition, we added complimentary high speed internet to all 250 guest rooms and 18 meeting rooms.  We are now completely wired throughout the hotel. The Panpacific Inn & Conference Centre strives to provide excellent service and products on an ongoing basis. We truly want to be the best hotel choice for your business, leisure and group travel needs.
                </p>
                <p>
The Panpacific Inn & Conference Centre offers 250 guestrooms and suites in a variety of types and styles, over 29,000 square feet of flexible meeting, banquet and exhibit space, and an onsite business centre. Perhaps our trademark is the lush and beautiful tropical courtyard centered in the heart of the hotel. It's easy to see why our visitors know the Panpacific Inn as the Oasis on the Prairies!
                </p>
                <p>
In addition, the Panpacific Inn & Conference Centre has endorsed the <a href="http://www.hotelassociation.ca/" target="_blank">Hotel Association of Canada's</a> new Eco-rating program. The program is based on a graduated rating system for hotels, motels and resorts in order to recognize their level of environmental performance. The Panpacific Inn is one of the few hotels throughout the province to hold a 4 Green Key Rating from the ECOmmodations Rating Program™, which is given only to those hotels who have shown national industry leadership in terms of environmental performance.
                </p>
            </div>
            -->
            <div class="col-lg-12 col-md-12 col-sm-12 page-heading no-padding-left">
            	<div class="heading-call">
                	About Panpacific Inn & Conference Centre
                </div>
                <div class="page-heading text-center">
                    <h2>
                        Welcome to the newly renovated Panpacific Inn & Conference Centre.  Step into our inviting lobby with its rich walnut woods and floor to ceiling fireplace, where you can lounge with your favourite Starbucks® beverage and tasty treats made in-house from our Bean There Café. Stay up to date at our communal business centre. With its comfortable executive chairs and large central table, it’s the perfect place to hook up and stay connected. Off of the main lobby, you will find our spectacular indoor garden with hundreds of tropical plants, babbling brooks and fountains – all under expansive skylights. 
                    </h2>
                </div>
             </div>
             <br clear="all" /><br />
             <div class="col-sm-8" style="line-height: 24px; font-size: 15px; padding-left: 0px;">
                <p>
                    With over 26,000 square feet of newly renovated function space offering a fresh and contemporary look, we are the ideal venue to host your next meeting, conference, wedding or other social function.  Many of the meeting rooms surrounding our tropical courtyard feature large exterior windows for natural lighting and include complimentary high-speed Internet access. Take a moment to re-fuel at the newly constructed café style communal break area.
                </p>
                <p>
                <img align="right" src="images/rooms/small/king-suite.jpg" class="img-responsive" style="padding-left: 20px;" />
					Our 257 completely refinished guestrooms featuring contemporary furnishings and soothing neutral colours include free Wi-Fi.  Enjoy fresh, local, farm-to-table Canadian cuisine, as well as our famous Friday Chocolate Buffet and Sunday Brunch at the full-service Garden Café and Lounge. Recharge in our new fitness centre or unwind with a soak in the pool and hot tub.
                </p>
                <p>
					Conveniently located on Circle Drive, 5 minutes’ drive from the Panpacific airport and only 10 minutes from the downtown core, the Panpacific Inn and Conference Centre is close to all major attractions and conveniences. 
                </p>
                <p>
               		Parking is complimentary for guests. “Park and Fly” parking is available for a cost of $10.00 per day, plus taxes, vehicles must be registered with the front desk.
                </p>
                <p>
					In addition, the Panpacific Inn & Conference Centre has endorsed the <a href="http://www.hotelassociation.ca/" target="_blank">Hotel Association of Canada's</a> new Eco-rating program. The program is based on a graduated rating system for hotels, motels and resorts in order to recognize their level of environmental performance. The Panpacific Inn is one of the few hotels throughout the province to hold a 4 Green Key Rating from the ECOmmodations Rating Program™, which is given only to those hotels who have shown national industry leadership in terms of environmental performance.
                </p>
            </div>
            
            
            <div class="col-sm-4 about-us-right-col">
            	<div class="green-key">
                	
                    <div class="green-key-holder">
                    	<img src="images/gk4.jpg" />
                    </div>
                    <h3 class="no-margin-top">Green Key Certified Hotel</h3>
                	The Panpacific Inn & Conference Centre is one of the few hotels throughout the province to hold a 4 Green Key rating with the Green Key Eco-Rating Program, which is given only to those hotels who have shown national industry leadership and commitment to protecting the environment.
                </div>
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

<!-- Mirrored from www.Panpacificinn.com/photo-gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:41:17 GMT -->
</html>