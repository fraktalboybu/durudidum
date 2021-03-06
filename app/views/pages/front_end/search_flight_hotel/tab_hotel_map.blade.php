<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">

			<style type="text/css">
			/* Set a size for our map container, the Google Map will take up 100% of this container */
			#map {
				/*width: 750px;*/
				height: 500px;
			}
			</style>

        <!-- 
            You need to include this script on any page that has a Google Map.
            When using Google Maps on your own site you MUST signup for your own API key at:
                https://developers.google.com/maps/documentation/javascript/tutorial#api_key
            After your sign up replace the key in the URL below or paste in the new script tag that Google provides.
        -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{featureType:"water",elementType:"all",stylers:[{hue:"#76aee3"},{saturation:38},{lightness:-11},{visibility:"on"}]},{featureType:"road.highway",elementType:"all",stylers:[{hue:"#8dc749"},{saturation:-47},{lightness:-17},{visibility:"on"}]},{featureType:"poi.park",elementType:"all",stylers:[{hue:"#c6e3a4"},{saturation:17},{lightness:-2},{visibility:"on"}]},{featureType:"road.arterial",elementType:"all",stylers:[{hue:"#cccccc"},{saturation:-100},{lightness:13},{visibility:"on"}]},{featureType:"administrative.land_parcel",elementType:"all",stylers:[{hue:"#5f5855"},{saturation:6},{lightness:-31},{visibility:"on"}]},{featureType:"road.local",elementType:"all",stylers:[{hue:"#ffffff"},{saturation:-100},{lightness:100},{visibility:"simplified"}]},{featureType:"water",elementType:"all",stylers:[]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
            }
            </script>
            <div id="map"></div>
        </div>
    </div>
</div>