<?php 
    include 'cms-admin/class/db_Class.php';
    $obj = new db_class();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.Panpacificinn.com/meetings-rfp.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:53:47 GMT -->
<head>
	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Panpacific Inn Hotel & Conference Centre">
    <title>Panpacific Meetings and Conferences RFP | Panpacific Inn Hotel & Conference Centre</title>
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
        <div class="fill bg-meetings">
        </div>
        <div class="container">
        	            <div class="carousel-caption carousel-caption-meetings-rfp">
              <div class="heading-border"></div>	
              <h2>Request for proposal</h2>
              <div class="heading-border"></div>	
            </div>
                     </div>
      </div>
    </div>
    
</div>

	
		
<div class="section-colored" style="z-index:10;position:relative;">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-6">
            				
			
			<p class="home-headline text-center">
            	When you're looking to hold your next corporate function or business meeting in Panpacific, we can help coordinate all the details to ensure everything runs smoothly from beginning to end. Check availability for your meeting or event by providing us with a few details. Submit a Request for Proposal and one of our sales professionals will be in touch with you shortly.
            </p>
			<form class="rfp" action="#" method="post" enctype="multipart/form-data">
								<h3>Meeting or Event Type <span class="red">*</span></h3>
				<div class="form-item">
					<div class="radio">
						<input type="radio" name="event-type" id="ceremony" value="Ceremony"  />
					</div>
					<label for="ceremony">Ceremony</label>
				</div>
                <div class="form-item">
					<div class="radio">
						<input type="radio" name="event-type" id="wedding" value="Wedding"  />
					</div>
					<label for="wedding">Wedding</label>
				</div>
                <div class="form-item">
					<div class="radio">
						<input type="radio" name="event-type" id="christmas-party" value="Christmas Party"  />
					</div>
					<label for="christmas-party">Christmas Party</label>
				</div>
                <div class="form-item">
					<div class="radio">
						<input type="radio" name="event-type" id="board-executive-meeting" value="Board Executive Meeting"  />
					</div>
					<label for="board-executive-meeting">Board/Executive Meeting</label>
				</div>
				<div class="form-item">
					<div class="radio">
						<input type="radio" name="event-type" id="meeting" value="Meeting"  />
					</div>
					<label for="meeting">Meeting</label>
				</div>
				<div class="form-item">
					<div class="radio">
						<input type="radio" name="event-type" id="conference-convention" value="Conference Convention"  />
					</div>
					<label for="conference-convention">Conference/Convention</label>
				</div>
				<div class="form-item">
					<div class="radio">
						<input type="radio" name="event-type" id="training" value="Training"  />
					</div>
					<label for="training">Training</label>
				</div>
				<div class="form-item">
					<div class="radio">
						<input type="radio" name="event-type" id="presentation" value="Presentation"  />
					</div>
					<label for="presentation">Presentation</label>
				</div>
				<div class="form-item">
					<div class="radio">
						<input type="radio" name="event-type" id="tradeshow" value="Tradeshow"  />
					</div>
					<label for="tradeshow">Tradeshow</label>
				</div>
				<div class="form-item">
					<div class="radio">
						<input type="radio" name="event-type" id="press-conference" value="Press Conference"  />
					</div>
					<label for="press-conference">Press Conference</label>
				</div>
				<div class="form-item">
					<div class="radio">
						<input type="radio" name="event-type" id="other-event-type" value="Other Event Type"  />
					</div>
					<label for="other-event-type">Other Event Type</label>
				</div>
				


                <h3>Date of Your Event</h3>
                <div class="form-item">
                	<label class="float-left">Event Start Date <span class="red">*</span></label>
					<div class="float-left">
						<input type="text" class="datepicker" name="event-start-date" id="event-start-date" value="" />
					</div>
				</div>
				<div class="form-item">
                	<label class="float-left">Event End Date <span class="red">*</span></label>
					<div class="float-left">
						<input type="text" class="datepicker" name="event-end-date" id="event-end-date" value="" />
					</div>
				</div>
				<div class="form-item">
                	<label class="float-left">Are these dates flexible?</label>
					<div class="float-left">
						<select name="flexible" id="flexible">
				            <option value="No"  >No</option>
                            <option value="Yes" >Yes</option>
				        </select>
					</div>
				</div>
                <div id="otherType" style="display:none;">
                	<div class="form-item">
                        <label class="float-left">Alternate Event Start Date <span class="red">*</span></label>
                        <div class="float-left">
                            <input type="text" class="datepicker" name="alt-event-start-date" id="alt-event-start-date" value="" />
                        </div>
                    </div>
                    <div class="form-item">
                        <label class="float-left">Alternate Event End Date <span class="red">*</span></label>
                        <div class="float-left">
                            <input type="text" class="datepicker" name="alt-event-end-date" id="alt-event-end-date" value="" />
                        </div>
                    </div>
				</div>
				<div class="form-item">
                	<label class="float-left">Number of People Attending <span class="red">*</span></label>
					<div class="float-left">
						<input type="text" name="number-of-people-attending" id="number-of-people-attending" value="" />
					</div>
				</div>




                <h3>Set-Up Style</h3> 
					
				<div class="form-item">
					<div class="checkbox">
						<input type="checkbox" value="Boardroom" id="boardroom" name="set-up-style[]"  />
					</div>
					<label for="boardroom">Boardroom</label>
				</div>	
				<div class="form-item">
					<div class="checkbox">
						<input type="checkbox" value="U-shape" id="u-shape" name="set-up-style[]"  />
					</div>
					<label for="u-shape">U-Shape</label>
				</div>
				<div class="form-item">
					<div class="checkbox">
						<input type="checkbox" value="Hollow Square" id="hollow-square" name="set-up-style[]"  />
					</div>
					<label for="hollow-square">Hollow Square</label>
				</div>
				<div class="form-item">
					<div class="checkbox">
						<input type="checkbox" value="Theatre" id="theatre" name="set-up-style[]"  />
					</div>
					<label for="theatre">Theatre</label>
				</div>
				<div class="form-item">
					<div class="checkbox">
						<input type="checkbox" value="Classroom" id="classroom" name="set-up-style[]"  />
					</div>
					<label for="classroom">Classroom</label>
				</div>
				<div class="form-item">
					<div class="checkbox">
						<input type="checkbox" value="Dining (rounds)" id="dining" name="set-up-style[]"  />
					</div>
					<label for="dining">Dining (rounds)</label> 
				</div>	
				<div class="form-item">
					<div class="checkbox">
						<input type="checkbox" value="Cabaret (half-rounds)" id="cabaret" name="set-up-style[]"  />
					</div>
					<label for="cabaret">Cabaret (half-rounds)</label> 
				</div>	
				<div class="form-item">
					<div class="checkbox">
						<input type="checkbox" value="Other" id="other" name="set-up-style[]"  />
					</div>
					<label for="other">Other</label> 
				</div>	
							
					

				<h3>Food & Beverage</h3> 
					
				<div class="form-item">
					<div class="checkbox">
						<input type="checkbox" name="fb[]" id="breakfast" value="Breakfast"  />
					</div>
					<label for="breakfast">Breakfast</label>
				</div>
				<div class="form-item">
					<div class="checkbox">
						<input type="checkbox" name="fb[]" id="coffee-break" value="Coffee Break"  />
					</div>
					<label for="coffee-break">Coffee Break</label>
				</div>
				<div class="form-item">
					<div class="checkbox">
						<input type="checkbox" name="fb[]" id="lunch" value="Lunch"  />
					</div>
					<label for="lunch">Lunch</label>
				</div>
				<div class="form-item">
					<div class="checkbox">
						<input type="checkbox" name="fb[]" id="dinner" value="Dinner"  />
					</div>
					<label for="dinner">Dinner</label>
				</div>
                <div class="form-item">
					<div class="checkbox">
						<input type="checkbox" name="fb[]" id="reception" value="Reception"  />
					</div>
					<label for="reception">Reception</label>
				</div>
				
				<h3>Accommodations</h3>
                <div class="form-item">
                	<label class="float-left">Majority Arrival Date <span class="red">*</span></label>
					<div class="float-left">
						<input type="text" class="datepicker" name="majority-arrival-date" id="majority-arrival-date" value="" />
					</div>
				</div>
				<div class="form-item">
                	<label class="float-left">Majority Departure Date <span class="red">*</span></label>
					<div class="float-left">
						<input type="text" class="datepicker" name="majority-departure-date" id="majority-departure-date" value="" />
					</div>
				</div>
				<div class="form-item">
                	<label class="float-left">Number of Guestrooms <span class="red">*</span></label>
					<div class="float-left">
						<input type="text" name="number-of-guestrooms" id="number-of-guestrooms" value="" />
					</div>
				</div>


				<h3>Audio/Visual Requirements</h3>
				<div class="form-item">
                	<label class="float-left" for="comments">What audio-visual equipment or technology will your event require?</label>
					<div class="float-left">
						<textarea class="datepicker" name="audio-visual" id="audio-visual" cols="50" rows="10" /></textarea>
					</div>
				</div>


				<h3>Contact Information</h3>
                <div class="form-item">
                	<label class="float-left" for="fname">First Name <span class="red">*</span></label>
					<div class="float-left">
						<input type="text" name="fname" id="fname" value="" />
					</div>
				</div>
				<div class="form-item">
                	<label class="float-left" for="lname">Last Name <span class="red">*</span></label>
					<div class="float-left">
						<input type="text" name="lname" id="lname" value="" />
					</div>
				</div>
				<div class="form-item">
                	<label class="float-left" for="email">Email Address <span class="red">*</span>.</label>
					<div class="float-left">
						<input type="text" class="email" name="email" id="email" value="" />
					</div>
				</div>
				<div class="form-item">
                	<label class="float-left" for="company">Company Name</label>
					<div class="float-left">
						<input type="text" name="company" id="company" value="" />
					</div>
				</div>
                <div class="form-item">
                	<label class="float-left" for="industry-type">Industry Type</label>
					<div class="float-left">
						<select name="industry-type" id="industry-type" class="industry-type">
				            <option value="No Industry"                >No Industry</option>
                            <option value="Associations"               >Associations</option>
                            <option value="Financial/Accounting" 	   >Financial/Accounting</option>
                            <option value="Pharmaceutical"             >Pharmaceutical</option>
                            <option value="Medical/Surgical Equipment" >Medical/Surgical Equipment</option>
                            <option value="Real Estate/Mortgage"       >Real Estate/Mortgage</option>
                            <option value="Third Party"                >Third Party</option>
                            <option value="Cosmetics"                  >Cosmetics</option>
                            <option value="Publishing"                 >Publishing</option>
                            <option value="Incentive"                  >Incentive</option>
                            <option value="Automotive"                 >Automotive</option>
                            <option value="Agriculture"                >Agriculture</option>
                            <option value="Manufacturing"              >Manufacturing</option>
                            <option value="Chemical"                   >Chemical</option>
                            <option value="Transportation"             >Transportation</option>
                            <option value="Telecommunications"         >Telecommunications</option>
                            <option value="Computer"                   >Computer</option>
                            <option value="Food & Beverage"            >Food & Beverage</option>
                            <option value="Construction"               >Construction</option>
                            <option value="Consumer Electronics"       >Consumer Electronics</option>
                            <option value="Apparel"                    >Apparel</option>
                            <option value="Retail"                     >Retail</option>
                            <option value="Consumer Durables"          >Consumer Durables</option>
                            <option value="Law Firms"                  >Law Firms</option>
                            <option value="Sports"                     >Sports</option>
                            <option value="Energy/Oil & Gas"           >Energy/Oil &amp; Gas</option>
                            <option value="Other"                      >Other</option>
				        </select>
					</div>
				</div>
				<div class="form-item">
                	<label class="float-left" for="address">Address <span class="red">*</span></label>
					<div class="float-left">
						<input type="text" name="address" id="address" value="" />
					</div>
				</div>
				<div class="form-item">
                	<label class="float-left" for="city">City <span class="red">*</span></label>
					<div class="float-left">
						<input type="text" name="city" id="city" value="" />
					</div>
				</div>
				<div class="form-item">
                	<label class="float-left" for="state">Province/State</label>
					<div class="float-left">
						<select name="state" id="state">
				            <optgroup label="Canada">
				                <option value="AB" >Alberta</option>
				                <option value="BC" >British Columbia</option>
				                <option value="MB" >Manitoba</option>
				                <option value="NB" >New Brunswick</option>
				                <option value="NF" >Newfoundland</option>
				                <option value="NT" >Northwest Territories</option>
				                <option value="NS" >Nova Scotia</option>
				                <option value="NU" >Nunavut</option>
				                <option value="ON" >Ontario</option>
				                <option value="PE" >Prince Edward Island</option>
				                <option value="QC" >Quebec</option>
				                <option value="SK" >Saskatchewan</option>
				                <option value="YT" >Yukon Territory</option>
				            </optgroup>
				            <optgroup label="United States">
				                <option value="AK" >Alaska</option>
				                <option value="AL" >Alabama</option>
				                <option value="AR" >Arkansas</option>
				                <option value="AZ" >Arizona</option>
				                <option value="CA" >California</option>
				                <option value="CO" >Colorado</option>
				                <option value="CT" >Connecticut</option>
				                <option value="DC" >District of Columbia</option>
				                <option value="DE" >Delaware</option>
				                <option value="FL" >Florida</option>
				                <option value="GA" >Georgia</option>
				                <option value="HI" >Hawaii</option>
				                <option value="IA" >Iowa</option>
				                <option value="ID" >Idaho</option>
				                <option value="IL" >Illinois</option>
				                <option value="IN" >Indiana</option>
				                <option value="KS" >Kansas</option>
				                <option value="KY" >Kentucky</option>
				                <option value="LA" >Louisiana</option>
				                <option value="MA" >Massachusetts</option>
				                <option value="MD" >Maryland</option>
				                <option value="ME" >Maine</option>
				                <option value="MI" >Michigan</option>
				                <option value="MN" >Minnesota</option>
				                <option value="MO" >Missouri</option>
				                <option value="MS" >Mississippi</option>
				                <option value="MT" >Montana</option>
				                <option value="NC" >North Carolina</option>
				                <option value="ND" >North Dakota</option>
				                <option value="NE" >Nebraska</option>
				                <option value="NH" >New Hampshire</option>
				                <option value="NJ" >New Jersey</option>
				                <option value="NM" >New Mexico</option>
				                <option value="NV" >Nevada</option>
				                <option value="NY" >New York</option>
				                <option value="OH" >Ohio</option>
				                <option value="OK" >Oklahoma</option>
				                <option value="OR" >Oregon</option>
				                <option value="PA" >Pennsylvania</option>
				                <option value="PR" >Puerto Rico</option>
				                <option value="RI" >Rhode Island</option>
				                <option value="SC" >South Carolina</option>
				                <option value="SD" >South Dakota</option>
				                <option value="TN" >Tennessee</option>
				                <option value="TX" >Texas</option>
				                <option value="UT" >Utah</option>
				                <option value="VA" >Virginia</option>
				                <option value="VT" >Vermont</option>
				                <option value="WA" >Washington</option>
				                <option value="WI" >Wisconsin</option>
				                <option value="WV" >West Virginia</option>
				                <option value="WY" >Wyoming</option>
				            </optgroup>
				        </select>
					</div>
				</div>
				<div class="form-item">
                	<label class="float-left" for="postal">Postal Code/Zip <span class="red">*</span></label>
					<div class="float-left">
						<input type="text" name="postal" id="postal" value="" />
					</div>
				</div>
				<div class="form-item">
                	<label class="float-left" for="telephone">Telephone Number</label>
					<div class="float-left">
						<input type="text" name="telephone" id="telephone" value="" />
					</div>
				</div>
				<div class="form-item">
                	<label class="float-left">Fax</label>
					<div class="float-left">
						<input type="text" name="fax" id="fax" value="" />
					</div>
				</div>
				<div class="form-item">
                	<label class="float-left" for="method">Preferred Method of Contact</label>
					<div class="float-left">
						<select name="method-of-contact" id="method-of-contact" class="method-of-contact">
				            <option value="Phone" >Phone</option>
				            <option value="Email" >Email</option>
				            <option value="Fax"   >Fax</option>
				        </select>
					</div>
				</div>

				<h3>Additional Comments</h3>
                <div class="form-item">
                	<label class="float-left" for="comments">Special requirements? Questions or comments? Please specify.</label>
					<div class="float-left">
						<textarea class="datepicker" name="comments" id="comments" cols="50" rows="10" /></textarea>
					</div>
				</div>
				<div class="form-item" style="visibility:hidden;">
					<div class="checkbox">
						<input type="checkbox" id="sendCopy" name="sendCopy" value="true" checked="checked" />
					</div>
					<label for="sendCopy">Send me a copy of this RFP</label>
				</div>
				<div class="form-item">
					<input type="submit" name="submit" id="submit" value="Submit RFP" class="btn-large btn-ghost-gold font-bold"> 
				</div>

			</form>
			
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

<!-- Mirrored from www.Panpacificinn.com/meetings-rfp.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 05:53:47 GMT -->
</html>