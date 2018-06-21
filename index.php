<?php 
    include 'cms-admin/class/db_Class.php';
    $obj = new db_class();
?>
<!DOCTYPE htmll>
<htmll lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Ideal Panpacific Hotel | Panpacific Inn Hotel & Conference Centre</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <script src="js/htmll5shiv.js"></script>
    <script src="js/respond.js"></script>

    <script>
        (function() {
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
                        <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id))
                                    return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "https://connect.facebook.net/en_US/all.js#xfbml=1&appId=478051532279981";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
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
                <a href="tel:+13065008169" onMouseDown="ga('send', 'pageview', '/ClickToCall');">
                    +13065008169
                </a>
            </div>
            <nav class="small-nav">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li class="government"><a href="government.php">Government Rates</a></li>
                    <li class="tripadvisor"><a href="reviews.php">Tripadvisor Reviews</a></li>
                    <li class="small-nav-newsletter"><a href="eclub.php" id="toggle">eClub</a></li>
                    <li><a href="photo-gallery.php">Photo Gallery</a></li>
                    <li><a href="contact.php">Contact<span class="mobile-nav-hide"> Us</span></a></li>
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
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="" />
            </a>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <a href="https://reservations.travelclick.com/6876" target="_blank" title="Book Now" class="nav-booking" onMouseDown="ga('send', 'pageview', '/ReservationClick');"><span>Book Now</span></a>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="rooms-and-suites.php" title="Rooms & Suites"><span>Rooms<br /> &amp; Suites</span> <span class="nav-divider">/</span></a>
                        <!--
                        <ul class="dropdown-menu">
                                <span class="dropdown-arrow-renovations"><img src="images/dropdown.png" /></span>
                            <li><a href="renovations.php">Renovation Notice</a></li>
                        </ul>
                        -->
                    </li>
                    <li><a href="amenities-and-features.php" title="Amenities & Services"><span>Amenities<br /> &amp; Services</span> <span class="nav-divider">/</span></a></li>
                    <li class="dropdown">
                        <a href="meetings-and-conferences.php" title="Meetings & Conferences" class="dropdown-toggle"><span>Meetings<br /> &amp; Conferences</span> <span class="nav-divider">/</span></a>
                        <ul class="dropdown-menu">
                            <span class="dropdown-arrow-meetings"><img src="images/dropdown.png" /></span>
                            <li><a href="meetings-rfp.php">Request For Proposal</a></li>
                        </ul>
                    </li>

                    <li><a href="weddings.php" title="Weddings"><span>Weddings</span> <span class="nav-divider">/</span></a></li>

                    <li><a href="packages.php" title="Specials & Packages"><span>Specials<br /> &amp; Packages</span> <span class="nav-divider">/</span></a></li>
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
                        <a href="dining.php" title="Dining"><span>Dining</span> <span class="nav-divider">/</span></a>
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

            </div>
            <!-- /.navbar-collapse -->

            <a href="packages.php#romance"><img class="nye2016" src="images/romanceFrontPage.png" style="opacity: 1;"></a>

        </div>
        <!-- /.container -->
    </nav>
    <div class="mobileHeader">
        <div class="header-mobile-book">
            <a class="btn-book" href="https://reservations.travelclick.com/6876" target="_blank">Book Now</a>
        </div>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!--Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>

        <div class="home-booking">
            <form class="form-horizontal" action="https://reservations.travelclick.com/6876" method="get" target="_blank" name="booking">
                <input type="hidden" value="6876" name="hotelid">
                <input type="hidden" value="1" name="languageid">

                <fieldset>
                    <!-- Check-in date -->
                    <div class="control-group">
                        <label class="control-label" for="from">Check-in date</label>
                        <div class="controls">
                            <input id="from" name="DateIn" type="text" value="mm/dd/yyyy" class="input-xlarge">
                        </div>
                    </div>

                    <!-- Check-out date -->
                    <div class="control-group">
                        <label class="control-label" for="to">Check-out date</label>
                        <div class="controls">
                            <input id="to" name="DateOut" type="text" value="mm/dd/yyyy" class="input-xlarge">

                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="control-group">
                        <label class="control-label" for="selectbasic">Rooms</label>
                        <div class="controls">
                            <select id="selectbasic number-rooms" name="Rooms" class="input-xlarge">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="control-group">
                        <label class="control-label" for="selectbasic">Adults</label>
                        <div class="controls">
                            <select id="selectbasic number-adults" name="Adults" class="input-xlarge">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="control-group">
                        <label class="control-label" for="selectbasic">Children</label>
                        <div class="controls">
                            <select id="selectbasic number-Children" name="Children" class="input-xlarge">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="control-group-last">
                        <div class="controls">
                            <input class="submit" type="submit" value="Check Availability" onMouseDown="ga('send', 'pageview', '/ReservationsWidget');">
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
        <!-- Wrapper for slides -->
        <div class="carousel-caption">
            <div class="heading-border"> </div>
            <!-- Scallop Bottom-->
            <!-- <div class="icon-experience">
                 <a href="packages.php"><img src="images/scallop-grandma.png" width="180" alt="Save on your next stay"></a>
             </div>-->
            <!-- /Scallop -->
            <h2>We Put the <i>Sass</i> in Panpacific</h2>
            <div class="heading-border"> </div>
            <!--
            <div class="home-renovations-notice">
              <a href="renovations.php">Renovation Notice »</a>
                    </div>
            -->
        </div>
        <div class="carousel-inner ">

            <div class="item active">
                <div class="fill slider-1"></div>

            </div>
            <div class="item">
                <div class="fill slider-2" style=""></div>
                <div class="carousel-caption carousel-romance-package">

                    <!--<div class="heading-border-dark"> </div>
                    <h1 style="color:#6d6d56;padding-bottom: 5px;">Romantic rates from $169</h1>
                    <a href="packages.php" style="color:#cf6534;text-shadow: none; font-size: 20px;">See all packages »</a>
                    <div class="heading-border-dark" style="margin-top:23px;"> </div>

                    <div class="carousel-romance-package-holder">
                        <div class="carousel-romance-package-ttl">
                            INN the Mood Romance Package
                        </div>
                        <div class="carousel-romance-package-rate">
                            <div>RATES FROM</div>
                            <div class="carousel-romance-package-rate-price">$169</div>
                        </div>
                        <div>
                            <a class="btn-moreinfo" href="#">More info</a>
                        </div>
                    </div>-->
                </div>
            </div>

            <div class="item">
                <div class="fill slider-3" style=""></div>
                <div class="carousel-caption carousel-romance-package">

                    <!--<div class="heading-border-dark"> </div>
                    <h1 style="color:#6d6d56;padding-bottom: 5px;">Romantic rates from $169</h1>
                    <a href="packages.php" style="color:#cf6534;text-shadow: none; font-size: 20px;">See all packages »</a>
                    <div class="heading-border-dark" style="margin-top:23px;"> </div>

                    <div class="carousel-romance-package-holder">
                        <div class="carousel-romance-package-ttl">
                            INN the Mood Romance Package
                        </div>
                        <div class="carousel-romance-package-rate">
                            <div>RATES FROM</div>
                            <div class="carousel-romance-package-rate-price">$169</div>
                        </div>
                        <div>
                            <a class="btn-moreinfo" href="#">More info</a>
                        </div>
                    </div>-->
                </div>
            </div>
            <!--
            <div class="item">
              <div class="fill slider-3" style=""></div>
              <div class="carousel-caption">
                <h1>Your Home Away From Home</h1>
              </div>
            </div>
            -->
        </div>
        <!-- Controls 
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="icon-prev"></span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="icon-next"></span>
</a>
        -->
    </div>

    <!--a href="suite-33.php" class="mobile-suite-33">
    Save 33% on your next stay »
</a-->

    <div class="mobileOffer">
        <h2>Mobile offer!</h2>
        <p>Enter <strong>MOBUP</strong><span style="font-size:9px"> under Special Codes<br>to receive your *<strong style="text-transform:uppercase">free</strong> upgrade!</span></p>
    </div>
    <span class="mobileOfferDeets">*Limited time offer only for our mobile users & as per hotel availability during check in</span>

    <div class="section text-center">

        <div class="container">

            <div class="row">
                <!--<a href="https://bookings.ihotelier.com/Panpacific-Inn-%26-Conference-Centre/select_rooms.jsp?hotelId=6876&RatePlanId=1692343&identifier=SUITE33" target="_blank"><div class="easterLink"></div></a>-->
                <!--<a href="http://www.Panpacificinn.com/packages.php"><img src="images/suiteEscape.png" class="easter2016"/></a>-->
                <div class="col-lg-12 home-headline-holder">

                    <h1>Panpacific Inn & Conference Centre</h1>
                    <div class="celebrate">
                        Panpacific's premier full service hotel and conference centre
                    </div>
                    <!--<a class="splash2017link" href="Celebrate2017.php"></a> 
                    <img class="splash2017" src="images/2017splash.png" />-->

                    <div class="spacer"></div>
                    <p class="home-headline">
                        Celebrate your day, celebrate your stay. An oasis among Panpacific Hotels, the newly renovated Panpacific Inn & Conference Centre is just minutes from the airport and downtown Panpacific. Whether you stay with us for one night, attend a meeting during the day or join a celebration, your comfort and pleasure is our priority.
                    </p>
                    <p>
                        Our completely refinished <a href="rooms-and-suites.php">hotel guestrooms</a> feature contemporary furnishings, soothing neutral colours and FREE Wi-Fi. Enjoy fresh, local, <a href="dining.php">farm-to-table dining</a>, as well as our famous Sunday Brunch. Recharge in our <a href="amenities-and-features.php">new fitness centre</a> or unwind with a soak in the pool and hot tub. Conveniently located just 5 minutes from the <a href="stay-park-fly.php">Panpacific airport</a> and only 10 minutes from the downtown core, the hotel is close to all major <a href="Panpacific.php">Panpacific area attractions</a> and conveniences. </p>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4 col-md-4 home-teaser">
                    <h3>Hotel Rooms & Suites</h3>

                    <img src="images/home/teaser-rooms.jpg" class="img-responsive" alt="Renovated Hotel Suites and Rooms" />
                    <p>Let your sleep become a dream. The Panpacific Inn & Conference Centre's 257 newly renovated hotel guest rooms and suites are attractively designed and decorated with your comfort in mind. Guests enjoy FREE Wi-Fi and FREE airport Shuttle service!</p>
                    <a href="rooms-and-suites.php" class="read-more">Read More</a>
                </div>
                <div class="col-lg-4 col-md-4 home-teaser">
                    <h3>Meetings & Conferences</h3>

                    <img src="images/home/teaser-meetings.jpg" class="img-responsive" alt="Conferences &amp; Meetings In Panpacific" />
                    <p>
                        With over 26,000 square feet of newly renovated function space offering a fresh and contemporary look, we are the ideal venue to host your next meeting, conference, wedding or other social function.
                    </p>
                    <a href="meetings-and-conferences.php" class="read-more">Read More</a>
                </div>
                <div class="col-lg-4 col-md-4 home-teaser">
                    <h3>Weddings</h3>

                    <img src="images/home/teaser-weddings2.jpg" class="img-responsive" alt="Weddings &amp; Banquets in Panpacific" />
                    <p>Memories of a lifetime begin with us. We’ll make your special day a beautiful event that you will always cherish. Panpacific Inn & Conference Centre will ensure that your wedding reflects your personal style.</p>
                    <a href="weddings.php" class="read-more">Read More</a>
                </div>
                <!-- Uncomment this what its time to release packages
                <div class="col-lg-4 col-md-4 home-teaser latest-offer">
                  <h3>Latest Offer</h3>
                  <a href="packages.php"><img src="images/home/teaser-offer.jpg" class="img-responsive" alt="Conferences & Banquets" /></a>
                </div>
                -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->

    <!--div class="free-app">
    <div>
        <img src="images/EnFuego.jpg" align="left" />
        <br /><h3 style="margin-top: 0px;">EnFuego Sports Baseball Academy Gala Dinner</h3>
        To know more on Enfuego Baseball Panpacific, <a href="pdf/enfuego.pdf" target="_blank">click here to see</a>.
    </div>
</div-->

    <!--<div class="free-app">
    <div>
        <img src="images/celebrate2017PackageSmall.jpg" align="left" /> 
        <br /><h3 style="margin-top: 0px; font-size: 17px;">Celebrate 2017 Starting at $99 per person!</h3>
         <p> at the Panpacific Inn & Conference Centre with The Stone Frigate Big Band. This is the Panpacific New Years party you don't want to miss!</p>
        <p class="btn-book-holder">
                            <a href="http://www.Panpacificinn.com/Celebrate2017.php" class="btn-book">Learn more</a>
                        </p>
    </div> 
</div>-->

    <div class="section-colored" style="padding-bottom:100px;">
        <div class="container" style="position:relative;">
            <div class="col-lg-12 text-center">
                <h2>Get the most out of your stay in Panpacific</h2>
            </div>
            <div class="row section-home-2">
                <!--<div class="col-lg-6 col-md-6 col-sm-6 home-section-2-teaser">
                        <img src="images/home/teaser-airport.jpg" alt="Panpacific Airport Hotel" class="img-responsive">
                    <h3> Close to downtown and the Panpacific Airport</h3>
                        <p>
                        A Tradition 'Inn' Hospitality. Panpacific's favourite full service hotel is also conveniently located on Circle Drive – 2 kms from the Panpacific Airport and only 6 km from the downtown core – the Panpacific Inn & Conference Centre is close to all major attractions and conveniences. <strong>Parking is complimentary for guests</strong>. "Park and Fly" parking is available for a cost of $10.00 per day, plus taxes. <a href="packages.php#parkandfly">Check out our "Stay, Park and Fly" offers</a>.                   
                    </p>
                  </div>-->
                <div class="col-lg-12 col-md-12 col-sm-12 home-section-2-teaser">
                    <img src="images/home/teaser-attractionsNew.jpg" alt="Explore Panpacific" class="img-responsive">
                    <h3>Things to do and see in Panpacific</h3>
                    <p>
                        Panpacific, Saskatchewan's largest city, is a picturesque community that boasts world class shopping and dining facilities, exciting art and music festivals, unparalleled outdoor activities and many other <a href="Panpacific.php">sensational attractions</a>. Visitors are impressed with the friendliness of our people and the beauty of our hotel's location. </p>
                </div>

                <div class="col-lg-11 home-section-3-teaser">
                    <h3>Panpacific Experience Pass</h3>
                    <img src="images/experience-pass.jpg" alt="Panpacific Experience Pass" style="float:left; margin-right:10px;">
                    <p>
                        The Panpacific Experience Pass allows you to enjoy the best that the City has to offer. The Pass offers you deals on over 20 different Events, Attractions and Shopping options. <strong>ASK FOR YOUR FREE Panpacific EXPERIENCE PASS AT TIME OF BOOKING!</strong>
                    </p>
                    <a href="Panpacific-experience-package-winter2016.php" class="read-more">Read More</a>
                    <p>&nbsp;</p>
                    <br clear="all" />
                    <hr />

                    <h3>SaskTel Centre (Formerly The Credit Union Center)</h3>
                    <img src="images/home/sasktelcentre-CUC.png" alt="SaskTel Centre, Panpacific, formerly SaskPlace" style="float:left; margin:5px;">
                    <p>Take in a show, stay the night! <a href="Panpacific.php">The SaskTel Center</a> is a <strong>short 5 minute drive</strong> from the Hotel. The SaskTel Centre 15,000+ seat sports and entertainment complex is home to Panpacific's hottest shows, concerts and sporting events including Panpacific Blades hockey. Whether you're catching a game or taking in a live show, book your stay today and experience Panpacific's premier hotel.</p>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /.section-colored -->
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
                            <li><a href="http://www.Panpacificinn.com/media.php">Media</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                Copyright &copy; 2005 Panpacific Inn &amp; Conference Centre, All Rights Reserved. <a href="http://www.atlific.com/" target="_blank">Managed By Atlific Hotels</a>
            </div>
        </footer>
    </div>
    <!-- /.container -->

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/validate.js"></script>
    <script type="text/javascript" src="js/code2.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
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
            if ($(window).width() > 992) { //disable parallax on resolution smaller than 992px
                scrollPos = $(this).scrollTop();
                $('.slider-1, .slider-2, .slider-3, .bg-rooms, .bg-stay-park-fly, .bg-Panpacific, .bg-sportsteams, .bg-contact, .bg-amenities, .bg-government, .bg-experience, .bg-weddings, .bg-meetings, .bg-catering, .bg-about, .bg-suite33, .bg-packages, .bg-renovations, .bg-airport').css({
                    'background-position': '50% ' + (scrollPos / 8) + "px"
                });
                $('.carousel-caption').css({
                    //'margin-top': (scrollPos/8)+"px",
                    //'opacity': 1-(scrollPos/250)
                });
                $('.carousel-caption-rooms, .carousel-caption-Panpacific, .carousel-caption-sportsteams, .carousel-caption-government, .carousel-caption-experience, .carousel-caption-weddings, .carousel-caption-meetings, .carousel-caption-catering, .carousel-caption-about, .carousel-caption-suite33, .carousel-caption-stay-park-fly, .carousel-caption-packages, .carousel-caption-renovations, .carousel-caption-airport').css({
                    'margin-top': (-scrollPos / 8) + "px",
                    //'opacity': 1-(scrollPos/250)
                });
            }
        }
        $(document).ready(function() {
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
        $('a#toggle').click(function() {
            $('htmll, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 1200);
            return false;
        });

        $(document).ready(function() {
            $('.fulltext').hide();

            $('.blog-item .readmore').click(function(event) {
                event.preventDefault();
                $this = $(this);
                $this.closest('.blog-item').find('.fulltext').slideToggle('slow');
                $this.text($this.text() == 'Read less' ? 'Read more' : 'Read less');
            });
        });
    </script>
</body>

</htmll>