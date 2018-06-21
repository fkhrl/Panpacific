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
                                if (d.getElementById(id)) return;
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
                <a href="tel:++13065008169" onMouseDown="ga('send', 'pageview', '/ClickToCall');">
                    +13065008169
                </a>
            </div>
            <nav class="small-nav">
                <ul>
                    <li><a href="index-2.php">Home</a></li>
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
            <a class="navbar-brand" href="index-2.php">
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

        </div>
        <!-- /.container -->
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
                    <div class="carousel-caption carousel-caption-packages">
                        <div class="heading-border"></div>
                        <h2>Hiring Now</h2>
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
        <p>Must book a minimum of 3 consecutive nights, free night must be consumed in your stay, it cannot be transferred to another stay. Must book the 3rd Night Free promotional rate plan to take advantage of the offer, not available in conjunction with any other rate plan. Subject to availability at the time of booking.</p>

    </div>

    <div class="popup" id="popup-romance" style="display:none;">
        <h3>INN the Mood Romance Package includes</h3>
        <ul style="margin: 0;padding: 0;">
            <li>- Overnight accommodation featuring our Jacuzzi Suite or any other Room Type</li>
            <li>- Chef's chocolate selection for two in room </li>
            <li>- Roses </li>
            <li>- Yellow Tail Bubbles sparkling wine</li>
            <li>- Our famous Sunday Brunch for two (Only available on Sunday) or Breakfast for two at Garden Café / Room Service </li>
            <li>- Two appetizer coupon for Garden Café </li>
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
            <li>- Breakfast for two at Garden Café / Room Service </li>
            <li>- Two appetizer coupon for Garden Café </li>
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

                

          

        <div style="background: white; border: 1px dashed #a7aeb8; overflow: hidden;" class="col-lg-12 col-md-12 col-sm-12 amenities-right-col-item dining-list vday">           
            <h2>Hiring-now</h2>
            <form  method="post" action="" id="system_ids">
            <div class="col-lg-4">
    <div class="input-group">   
      <input type="text" class="form-control" name="suggest" id="system_id_text" placeholder="Enter Your System Number...">
      <span class="input-group-btn">
       <button type="button" name="suggest" class="btn btn-secondary" id="system_id" >Search</button>
      </span>   
    </div>
  </div> 
  </form>  
    <div style="clear: both; display: block; overflow: hidden; margin-bottom: 10px;"></div>
            <table class="table table-bordered" id="Table">
                                        <thead>
                                            <tr>
                                                <th>System File no</th>
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Passport No</th>
                <th>Country of origin</th>
                <th>Job Title</th>
                <th>Employer Business Name</th>
                <th>Business Address</th>
                <th>Contract period</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody id="result">
                                            <tr>
                                                
                                                <td colspan="9">Information Will Appear Here</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
    </div>
    <!-- /.container -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places"></script>
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
            $('html, body').animate({
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


<script type="text/javascript">

$(document).ready(function(){

    $("#system_id").click(function(){
        var sit=$("#system_id_text").val();
        $.post("./ajax/system_result.php",{'term':sit}, function(data){

            // Display the returned data in browser

            $("#result").html(data);

        });

    });

});

</script>
<script type="text/javascript">
$(document).ready(function()
{
$("#Table").hide();
$("#system_id").click(function()
{
    $("#Table").show();
 
});
});
</script>
</body>



</html>