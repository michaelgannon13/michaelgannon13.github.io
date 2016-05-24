
    // The latitude and longitude of your business / place
    var position = [53.3004978, -6.2838544];
     
    function showGoogleMaps() {
     
        var latLng = new google.maps.LatLng(position[0], position[1]);
        var mapOptions = {
            streetViewControl: false, // hide the yellow Street View pegman
            scaleControl: true, // allow users to zoom the Google Map
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            center: latLng,
            zoom: 14,                        // set the zoom level manually
            zoomControl: false,
            scrollwheel: false,
        };
     
        map = new google.maps.Map(document.getElementById('googlemaps'),
            mapOptions);
     
        // Show the default red marker at the location
        marker = new google.maps.Marker({
            position: latLng,
            map: map,
            draggable: false,
            animation: google.maps.Animation.DROP
        });
    }
     
    google.maps.event.addDomListener(window, 'load', showGoogleMaps);