//LIGHTBOX
	
		$(document).ready(function() {
			$(".fancybox").fancybox();
			
			$('#flexible').on('change',function(){
				if( $(this).val()==="Yes"){
				$("#otherType").show()
				}
				else{
				$("#otherType").hide()
				}
			});
		});
		
		$(window).scroll(function() {
		 var scroll = $(window).scrollTop();
            $('.nye2016').css({'opacity':(( 400-scroll )/400)});
});
		
		//GOOGLE MAP
		var map;
		function initialize() {
			var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(52.157717, -106.679735)
				
			};	 
			map = new google.maps.Map(document.getElementById('map-canvas'),
				mapOptions);
				
			var marker = new google.maps.Marker({
			  position: new google.maps.LatLng(52.155799, -106.682521), 
			  map: map, 
			  title:"Hello World!"
			}); 
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		
		//PRELOAD IMAGES
		var myimages=new Array()
		function preloadimages(){
			for (i=0;i<preloadimages.arguments.length;i++){
				myimages[i]=new Image()
				myimages[i].src=preloadimages.arguments[i]
			}
		}
		preloadimages("images/slider/1.jpg","images/slider/3.jpg","images/rooms/bg-rooms.jpg","images/amenities/bg-amenities.jpg","images/catering/bg-catering.jpg","images/meetings/bg-meetings.jpg","images/packages/bg-packages.jpg","images/weddings/bg-weddings.jpg","images/packages/bg-experience.jpg","images/government/bg-government.jpg","images/saskatoon/bg-saskatoon.jpg","images/about/bg-about.jpg","images/renovations/bg-renovations.jpg", "images/airport-bg.jpg")