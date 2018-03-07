function init_map() {
    var myOptions = {
        zoom: 15,
        center: new google.maps.LatLng(10.9514056, 108.1011908),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('gmap_canvas'),
        myOptions);
    marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(10.9514056, 108.1011908)
    });
    infowindow = new google.maps.InfoWindow({
        content: '<strong>Ford Bình Thuận</strong><br><br>'
    });
    google.maps.event.addListener(marker, 'click',
        function() {
            infowindow.open(map, marker);
        });
    infowindow.open(map, marker);
}
google.maps.event.addDomListener(window, 'load', init_map);