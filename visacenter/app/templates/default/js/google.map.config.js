(function($){
	$(document).ready(function(){

		// Google Maps
		//-----------------------------------------------
		if ($("#map-canvas").length>0) {
			var map, myLatlng, myZoom, marker;
			var infowindow = new google.maps.InfoWindow({
				content: '<h3 style="margin:10px 0">Global Link Visa Center</h3>' + 
					'4852 Yonge St. Unit B<br>Toronto, ON M2N 5N2'
			});
			// Set the coordinates of your location
			myLatlng = new google.maps.LatLng(43.762641, -79.4114733);
			myZoom = 16;

			function initialize() {
				var mapOptions = {
					zoom: myZoom,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					center: myLatlng,
					scrollwheel: false
				};
				map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);
				marker = new google.maps.Marker({
					map:map,
					draggable:true,
					animation: google.maps.Animation.DROP,
					position: myLatlng,
					
				});
				google.maps.event.addDomListener(window, "resize", function() {
					map.setCenter(myLatlng);
				});

				google.maps.event.addListener(marker, 'click', function() {
					infowindow.open(map,marker);
				});
			}
			google.maps.event.addDomListener(window, "load", initialize);
		}
	}); // End document ready

})(this.jQuery);