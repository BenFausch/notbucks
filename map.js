var map;
var infoWindow;
if (navigator.geolocation) {
    if (navigator.geolocation) {
        var options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        }
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            console.log(position)
            initMap(pos);
        }, function() {
            console.log('yes')
        }, function() {
            console.log('error')
        }, options);
    } else {
        console.log('no')
    }
} else {
    console.log('nope')
}

function initMap(pyrmont) {
    /////
    map = new google.maps.Map(document.getElementById('map'), {
        center: pyrmont,
        zoom: 14
    });
    infoWindow = new google.maps.InfoWindow;
    infoWindow.setPosition(pyrmont);
    infoWindow.setContent('You');
    infoWindow.open(map);
    var service = new google.maps.places.PlacesService(map);
    service.nearbySearch({
        location: pyrmont,
        radius: 3000,
        keyword: ['coffee']
    }, addMarkers);
}

function addMarkers(results, status) {
    console.log('results', results)
    if (status === google.maps.places.PlacesServiceStatus.OK) {
        for (var i = 0; i < results.length; i++) {
            if ((results[i].name).indexOf('tarbucks') < 0) {
                console.log(results[i]);
                createMarker(results[i]);
            }
        }
    }
}

function createMarker(place) {
    var placeLoc = place.geometry.location;
    var icon = {
        url: place.icon, // url
        scaledSize: new google.maps.Size(25, 25), // scaled size
        origin: new google.maps.Point(0, 0), // origin
        anchor: new google.maps.Point(0, 0) // anchor
    };
    var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location,
        icon: icon,
        scale: 3
    });
    google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent('<strong class="infoW"><a href="https://www.google.com/maps/place/?q=place_id:' + place.place_id + '" target=_blank">' + place.name + '<br>' + place.vicinity + '</a></strong><p class="rating">' + place.rating + '</p>');
        infoWindow.open(map, this);
    });
}