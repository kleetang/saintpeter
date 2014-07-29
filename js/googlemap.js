function initialize() {
    var map_canvas = document.getElementById('map_canvas');
    var map_options = {
        center: new google.maps.LatLng(40.7051606,-74.0159868),
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(map_canvas, map_options);
    // Creating a marker and positioning it on the map    
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.7051606,-74.0159868),
        map: map
    });
}
google.maps.event.addDomListener(window, 'load', initialize);