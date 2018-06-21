<?php 
    include 'cms-admin/class/db_Class.php';
    $obj = new db_class();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.Panpacificinn.com/meetings-and-conferences.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:45:53 GMT -->
<head>
	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="18 conference rooms with over 29,000 sq. ft. of space, ideal to host meetings, conferences, weddings, or other events.">
    <meta name="keywords" content="conference, meetings, meeting space, convention, conference centre, center, Panpacific inn, Panpacific meeting space">
    <meta name="author" content="Panpacific Inn Hotel & Conference Centre">
    <title>Meeting & Conference Facilities | Panpacific Inn Hotel & Conference Centre</title>
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
            	<a href="meetings-and-conferences.php" title="Meetings & Conferences" class="dropdown-toggle active"><span>Meetings<br /> &amp; Conferences</span> <span class="nav-divider">/</span></a>
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
        <div class="fill bg-meetings">
        </div>
        <div class="container">
        	            <div class="carousel-caption carousel-caption-meetings">
              <div class="heading-border"></div>	
              <h2>Taking Care of Business</h2>
              <div class="heading-border"></div>	
            </div>
                     </div>
      </div>
    </div>
    
</div>

	
		
<div class="section-colored" style="z-index:10;position:relative;">
	<div class="container">
    	<div class="row rs">
         <h1>Meetings & Conferences</h1>
        	<div class="col-lg-6 col-md-6 col-sm-6 page-heading no-padding-left">
            	<div class="page-heading rs">
               
                    <h2>
                        The Panpacific Inn & Conference Centre is the premier location for events in the city. <span class="orange">Our 18 conference rooms with over 26,000 square feet of space</span>, make us ideal for hosting meetings, conferences, banquets or <a href="#catering">catered events</a>. 
                    </h2>
                </div>
      		</div>
            <div class="col-lg-6 col-md-6 col-sm-6 sub-page-heading" style="padding-left:0;padding-right:0;line-height: 24px; font-size: 15px;">
                <div class="blog-item" style="padding-top: 22px;">
                    <p>
                    	We can accommodate groups ranging from 6 - 1200. Many of the meeting rooms surrounding our tropical courtyard feature large exterior windows for natural lighting and include complimentary high-speed Internet access. Take a moment to re-fuel at the newly constructed café style communal break area.
                    </p>
                    <div class="fulltext">
                        <p>
                        	Whether you are planning a meeting, conference, trade show or seminar – the Panpacific Inn & Conference Centre can help make your event a success with its meeting and conference services. We understand that every event is unique. Our catering associates are committed to make sure your needs are not only met but exceeded, truly making it a memorable experience.
                        </p>
                    </div>
                    <a class="readmore" href="#">Read more</a>
                </div>
            </div>
        </div><!-- /.row -->
        
        <div class="row">
			<div class="col-lg-12 no-padding">
            	
            	<div class="heading-call">
                <p style="color: #5c626b; font-s">Our wide variety of appetizers, plated meals, buffet choices, entrées and desserts have been designed to offer you flexibility in creating the perfect menu. Our Executive Chef and culinary team welcome the opportunity to create a special menu just for you. Below you will find our catering information and various menus. You can also download and view our Conference Planning Guide in its entirety as well.</p>
                	<a href="meetings-rfp.php" class="btn-book-large" style="display:inline-block;">Fill out a Request for proposal!</a> <a href="pdf/meeting-packages.pdf" class="btn-book-large" style="display:inline-block;" target="_blank">View our Meeting Packages</a> <a href="pdf/Panpacificcatering2016v2.pdf" class="btn-book-large" style="display:inline-block;" target="_blank">View our Catering Menu</a> 
                	<br clear="all" /><br />
               		Email <a href="mailto:meetings@Panpacificinn.com">meetings@Panpacificinn.com</a>, call 306.668.9635 or toll free at 1.877.282.2420 to book a meeting or conference today!
                </div>
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#groups-small" data-toggle="tab">Groups of 6-16</a></li>
                    <li><a href="#groups-medium" data-toggle="tab">Groups of 10-100</a></li>
                    <li style="margin-right: 0px;"><a href="#groups-large" data-toggle="tab">Groups of 100-1200</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="groups-small">
                        <div class="row">
                                                            <div class="col-md-3 meeting-item meeting-item-large " >
                                    <a href="images/meetings/6-to-20/large/old-bowling-green.jpg" class="tint fancybox" rel="old-bowling-green">
                                    	<img class="img-responsive" src="images/meetings/6-to-20/old-bowling-green.jpg"> 
                                   	</a>
                                    <h3>
                                        Old Bowling Green                                    </h3>
                                    <p>
                                        This is a great multipurpose room located on 'York Street' and is superb for hosting a private dinner ordered from the botanicalRestaurant. The room seats up to 12 people in a boardroom-style setting.                                    </p>
                                                                        <div>
                                    	<a href="images/meetings/6-to-20/old-bowling-green-3d.png" class="btn-plans fancybox" rel="floorplans-small" title="Old Bowling Green">View floor plan</a>
                                    </div>
                                                                    </div>
                                <div class="hidden">
									                                </div>
                                                            <div class="col-md-3 meeting-item meeting-item-large " >
                                    <a href="images/meetings/6-to-20/large/rose-and-crown.jpg" class="tint fancybox" rel="rose-and-crown">
                                    	<img class="img-responsive" src="images/meetings/6-to-20/rose-and-crown.jpg"> 
                                   	</a>
                                    <h3>
                                        Rose and Crown                                    </h3>
                                    <p>
                                        This room provides an intimate and comfortable atmosphere for up to 12 people. It is located on 'York Street' and makes the perfect meeting room or dining room for smaller occasions.                                    </p>
                                                                        <div>
                                    	<a href="images/meetings/6-to-20/rose-and-crown-3d.png" class="btn-plans fancybox" rel="floorplans-small" title="Rose and Crown">View floor plan</a>
                                    </div>
                                                                    </div>
                                <div class="hidden">
									                                </div>
                                                            <div class="col-md-3 meeting-item meeting-item-large " >
                                    <a href="images/meetings/6-to-20/large/pig-and-whistle.jpg" class="tint fancybox" rel="pig-and-whistle">
                                    	<img class="img-responsive" src="images/meetings/6-to-20/pig-and-whistle.jpg"> 
                                   	</a>
                                    <h3>
                                        Pig and Whistle                                    </h3>
                                    <p>
                                        This room allows private dining for 6 in a home-like setting and is the perfect choice for that special family outing. Furnished with impressive high-backed chairs, the Pig and Whistle will make it a comfortable evening for your guests.                                    </p>
                                                                        <div>
                                    	<a href="images/meetings/6-to-20/pig-and-whistle-3d.png" class="btn-plans fancybox" rel="floorplans-small" title="Pig and Whistle">View floor plan</a>
                                    </div>
                                                                    </div>
                                <div class="hidden">
									                                </div>
                                                            <div class="col-md-3 meeting-item meeting-item-large meeting-item-last" >
                                    <a href="images/meetings/6-to-20/large/round-table.jpg" class="tint fancybox" rel="round-table">
                                    	<img class="img-responsive" src="images/meetings/6-to-20/round-table.jpg"> 
                                   	</a>
                                    <h3>
                                        Round Table                                    </h3>
                                    <p>
                                        As the name suggests, this room is furnished with a beautiful round oak table. It seats 8 people comfortably for whatever private function you have in mind.                                    </p>
                                                                        <div>
                                    	<a href="images/meetings/6-to-20/round-table-3d.png" class="btn-plans fancybox" rel="floorplans-small" title="Round Table">View floor plan</a>
                                    </div>
                                                                    </div>
                                <div class="hidden">
									                                </div>
                                                            <div class="col-md-3 meeting-item meeting-item-large " >
                                    <a href="images/meetings/6-to-20/large/devonshire-arms.jpg" class="tint fancybox" rel="devonshire-arms">
                                    	<img class="img-responsive" src="images/meetings/6-to-20/devonshire-arms.jpg"> 
                                   	</a>
                                    <h3>
                                        Devonshire Arms                                    </h3>
                                    <p>
                                        This room boasts 6 large comfortable chairs around a square table. Great for small business meetings or for that special family dinner.                                    </p>
                                                                        <div>
                                    	<a href="images/meetings/6-to-20/devonshire-arms-3d.png" class="btn-plans fancybox" rel="floorplans-small" title="Devonshire Arms">View floor plan</a>
                                    </div>
                                                                    </div>
                                <div class="hidden">
									                                </div>
                                                            <div class="col-md-3 meeting-item meeting-item-large " >
                                    <a href="images/meetings/6-to-20/large/jolly-friar.jpg" class="tint fancybox" rel="jolly-friar">
                                    	<img class="img-responsive" src="images/meetings/6-to-20/jolly-friar.jpg"> 
                                   	</a>
                                    <h3>
                                        Jolly Friar                                    </h3>
                                    <p>
                                        This room is our largest pre-set boardroom. With long wooden tables and comfortable arm chairs, this spacious location can accommodate up to 16 people, with plenty of working room for each person.                                    </p>
                                                                        <div>
                                    	<a href="images/meetings/6-to-20/jolly-friar-3d.png" class="btn-plans fancybox" rel="floorplans-small" title="Jolly Friar">View floor plan</a>
                                    </div>
                                                                    </div>
                                <div class="hidden">
									                                </div>
                                                            <div class="col-md-3 meeting-item meeting-item-large " >
                                    <a href="images/meetings/6-to-20/large/communal-break-area.jpg" class="tint fancybox" rel="communal-break-area">
                                    	<img class="img-responsive" src="images/meetings/6-to-20/communal-break-area.jpg"> 
                                   	</a>
                                    <h3>
                                        Communal Break Area                                     </h3>
                                    <p>
                                        Discover our newly renovated executive boardrooms & experience our new Communal Break Area where you will enjoy our deluxe continental breakfast, as well as creative and heart healthy break items throughout the day.                                    </p>
                                    										
									                                </div>
                                <div class="hidden">
									                                </div>
                                                    </div>
                    </div>
                    <div class="tab-pane fade" id="groups-medium">
                        <div class="row">
                                                            <div class="col-md-3 meeting-item meeting-item-large " >
                                    <a href="images/meetings/20-to-100/large/brass-lantern.jpg" class="tint fancybox" rel="brass-lantern">
                                    	<img class="img-responsive" src="images/meetings/20-to-100/brass-lantern.jpg"> 
                                    </a>
                                    <h3>
                                        Brass Lantern                                    </h3>
                                    <p>
                                        Located on 'York Street', the Brass Lantern Room is suitable for meetings or social settings of between 15 and 40 people. This is the second largest room in the York Street area and has access of up to 7 separate breakout rooms.                                    </p>
                                    <div>
                                    	<a href="images/meetings/20-to-100/brass-lantern-3d.png" class="btn-plans fancybox" rel="floorplans-medium" title="Brass Lantern">View floor plan</a>
                                    </div>
                                </div>
                                <div class="hidden">
									                                </div>
                                                            <div class="col-md-3 meeting-item meeting-item-large " >
                                    <a href="images/meetings/20-to-100/large/alberta.jpg" class="tint fancybox" rel="alberta">
                                    	<img class="img-responsive" src="images/meetings/20-to-100/alberta.jpg"> 
                                    </a>
                                    <h3>
                                        Alberta Room                                    </h3>
                                    <p>
                                        Located in the 'Provinces' area, this room has capacity for between 10 and 30 people. The Alberta Room can be used on a stand-alone basis or as a breakout room for the neighboring Manitoba room. Exterior windows that open to the outside, let in plenty of bright light.                                    </p>
                                    <div>
                                    	<a href="images/meetings/20-to-100/alberta-3d.png" class="btn-plans fancybox" rel="floorplans-medium" title="Alberta Room">View floor plan</a>
                                    </div>
                                </div>
                                <div class="hidden">
									                                </div>
                                                            <div class="col-md-3 meeting-item meeting-item-large " >
                                    <a href="images/meetings/20-to-100/large/british-columbia.jpg" class="tint fancybox" rel="british-columbia">
                                    	<img class="img-responsive" src="images/meetings/20-to-100/british-columbia.jpg"> 
                                    </a>
                                    <h3>
                                        British Columbia Room                                    </h3>
                                    <p>
                                        Ideal for groups of 10 to 20, this naturally-lit room is located in the quiet and peaceful 'Provinces' area of our facility. The British Columbia Room can be used as a breakout room or for small private gatherings.                                    </p>
                                    <div>
                                    	<a href="images/meetings/20-to-100/british-columbia-3d.png" class="btn-plans fancybox" rel="floorplans-medium" title="British Columbia Room">View floor plan</a>
                                    </div>
                                </div>
                                <div class="hidden">
									                                </div>
                                                            <div class="col-md-3 meeting-item meeting-item-large meeting-item-last" >
                                    <a href="images/meetings/20-to-100/large/manitoba.jpg" class="tint fancybox" rel="manitoba">
                                    	<img class="img-responsive" src="images/meetings/20-to-100/manitoba.jpg"> 
                                    </a>
                                    <h3>
                                        Manitoba Room                                    </h3>
                                    <p>
                                        Located in the quiet 'Provinces' area of the facility, this is an attractive medium sized conference room for groups of 30 to 100. There are 2 breakout rooms in close proximity. The Manitoba room has plenty of natural light with exterior-opening windows.                                    </p>
                                    <div>
                                    	<a href="images/meetings/20-to-100/manitoba-3d.png" class="btn-plans fancybox" rel="floorplans-medium" title="Manitoba Room">View floor plan</a>
                                    </div>
                                </div>
                                <div class="hidden">
									                                </div>
                                                            <div class="col-md-3 meeting-item meeting-item-large " >
                                    <a href="images/meetings/20-to-100/large/courtyard.jpg" class="tint fancybox" rel="courtyard">
                                    	<img class="img-responsive" src="images/meetings/20-to-100/courtyard.jpg"> 
                                    </a>
                                    <h3>
                                        Courtyard Room                                    </h3>
                                    <p>
                                        Conveniently located off the main lobby, the Courtyard Room can accommodate 30 to 100 people. It has its own built-in public announcement (PA) system. The room is brightly lit with natural light.                                    </p>
                                    <div>
                                    	<a href="images/meetings/20-to-100/courtyard-3d.png" class="btn-plans fancybox" rel="floorplans-medium" title="Courtyard Room">View floor plan</a>
                                    </div>
                                </div>
                                <div class="hidden">
									                                </div>
                                                    </div>
                    </div>
                    <div class="tab-pane fade" id="groups-large">
                        <div class="row">
                                                            <div class="col-md-3 meeting-item meeting-item-large " >
                                    <a href="images/meetings/100-to-1000/large/canadian.jpg" class="tint fancybox" rel="canadian">
                                    	<img class="img-responsive" src="images/meetings/100-to-1000/canadian.jpg">
                                    </a>
                                    
                                    <h3>
                                        Canadian Room                                    </h3>
                                    <p>
                                        Accessed from the courtyard, this room is ideal for medium to large social gatherings, conferences or training sessions for up to 150 people. It boasts bright natural lighting and high ceilings.                                    </p>
                                                                        
                                    <div>
                                    	<a href="images/meetings/100-to-1000/canadian-3d.png" class="btn-plans fancybox" rel="floorplans-large" title="Canadian Room">View floor plan</a>
                                    </div>
                                    
                                                                        
                                </div>
                                <div class="hidden">
									<a href='images/meetings/100-to-1000/large/canadian-2.jpg' class='fancybox' rel='canadian'></a>                                </div>
                                                            <div class="col-md-3 meeting-item meeting-item-large " >
                                    <a href="images/meetings/100-to-1000/large/saskatchewan-a.jpg" class="tint fancybox" rel="saskatchewan-a">
                                    	<img class="img-responsive" src="images/meetings/100-to-1000/saskatchewan-a.jpg">
                                    </a>
                                    
                                    <h3>
                                        Saskatchewan Ballroom A                                    </h3>
                                    <p>
                                        This is the second largest of the ballrooms, accommodating up to 175 people. Perfect for use in conjunction with Ballroom B and C, this ballroom also boasts plenty of natural light.                                    </p>
                                                                        
                                    <div>
                                    	<a href="images/meetings/100-to-1000/saskatchewan-a-3d.png" class="btn-plans fancybox" rel="floorplans-large" title="Saskatchewan Ballroom A">View floor plan</a>
                                    </div>
                                    
                                                                        
                                </div>
                                <div class="hidden">
									<a href='images/meetings/100-to-1000/large/saskatchewan-a-2.jpg' class='fancybox' rel='saskatchewan-a'></a>                                </div>
                                                            <div class="col-md-3 meeting-item meeting-item-large " >
                                    <a href="images/meetings/100-to-1000/large/saskatchewan-b.jpg" class="tint fancybox" rel="saskatchewan-b">
                                    	<img class="img-responsive" src="images/meetings/100-to-1000/saskatchewan-b.jpg">
                                    </a>
                                    
                                    <h3>
                                        Saskatchewan Ballroom B                                    </h3>
                                    <p>
                                        The largest of the three ballrooms, Saskatchewan Ballroom B has an open floor plan with no pillars and can hold up to 325 people on its own.                                    </p>
                                                                        
                                    <div>
                                    	<a href="images/meetings/100-to-1000/saskatchewan-b-3d.png" class="btn-plans fancybox" rel="floorplans-large" title="Saskatchewan Ballroom B">View floor plan</a>
                                    </div>
                                    
                                                                        
                                </div>
                                <div class="hidden">
									<a href='images/meetings/100-to-1000/large/saskatchewan-b-2.jpg' class='fancybox' rel='saskatchewan-b'></a>                                </div>
                                                            <div class="col-md-3 meeting-item meeting-item-large meeting-item-last" >
                                    <a href="images/meetings/100-to-1000/large/saskatchewan-c.jpg" class="tint fancybox" rel="saskatchewan-c">
                                    	<img class="img-responsive" src="images/meetings/100-to-1000/saskatchewan-c.jpg">
                                    </a>
                                    
                                    <h3>
                                        Saskatchewan Ballroom C                                    </h3>
                                    <p>
                                        Located on the mezzanine level, this is a versatile room suited particularly to weddings and social events. It has natural lighting and a beautiful winding staircase leading to a private balcony area. On its own, the room can accommodate up to 150 people. Combined with Ballroom B, it can accommodate up to 500 people.                                    </p>
                                                                        
                                    <div>
                                    	<a href="images/meetings/100-to-1000/saskatchewan-c-3d.png" class="btn-plans fancybox" rel="floorplans-large" title="Saskatchewan Ballroom C">View floor plan</a>
                                    </div>
                                    
                                                                        
                                </div>
                                <div class="hidden">
									<a href='images/meetings/100-to-1000/large/saskatchewan-c-2.jpg' class='fancybox' rel='saskatchewan-c'></a>                                </div>
                                                            <div class="col-md-3 meeting-item meeting-item-large " >
                                    <a href="images/meetings/100-to-1000/large/saskatchewan-abc.jpg" class="tint fancybox" rel="saskatchewan-abc">
                                    	<img class="img-responsive" src="images/meetings/100-to-1000/saskatchewan-abc.jpg">
                                    </a>
                                    
                                    <h3>
                                        Saskatchewan Ballroom ABC                                     </h3>
                                    <p>
                                        This largest configuration is a spectacular setting for big conferences, trade shows, social events and weddings up to 1,200 people.                                    </p>
                                    										
									                                    
                                </div>
                                <div class="hidden">
									                                </div>
                                                    </div>
                    </div>
                    
                 
                  </div>
			</div>
		</div><!-- /.row -->
        <!--div class="row">
        	<div class="col-lg-6 col-md-6 col-sm-6 page-heading no-padding-left">
            	<div class="page-heading">
                	<a id="catering"></a>
                    <h2>
                        Our wide variety of appetizers, plated meals, buffet choices, entrées and desserts have been designed to offer you flexibility in creating the perfect menu.
                    </h2>
                    <br clear="all" /><br />
                    
                </div>
      		</div>
            <div class="col-lg-6 col-md-6 col-sm-6 sub-page-heading" style="padding-left:0;padding-right:0;line-height: 24px; font-size: 15px;">
                <p>
                	Our Executive Chef and culinary team welcome the opportunity to create a special menu just for you. Below you will find our catering information and various menus. You can also download and view our Conference Planning Guide in its entirety as well. 
                
                </p>
            </div>
        </div><!-- /.row -->
        <div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 heading-call">
            	Email <a href="mailto:meetings@Panpacificinn.com">meetings@Panpacificinn.com</a>, call 306.668.9635 or toll free at 1.877.282.2420 for all catering inquiries!
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

<!-- Mirrored from www.Panpacificinn.com/meetings-and-conferences.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:53:46 GMT -->
</html>