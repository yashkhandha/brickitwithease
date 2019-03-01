var map;
var markers = [];
var infoWindow;
var locationSelect;
var results;
var current;
var currentpos;

function initMap() {
    var monash = {lat: -37.8774581, lng: 145.0427023};
    map = new google.maps.Map(document.getElementById('map'), {
        center: monash,
        zoom: 11,
        mapTypeId: 'roadmap',
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
    });

    infoWindow = new google.maps.InfoWindow();

    //to show current location

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            var marker = new google.maps.Marker({
                map: map,
                position: pos,
                animation: google.maps.Animation.BOUNCE
            });
            google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent('You are here !!');
                infoWindow.open(map, marker);
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            });
        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }

    searchButton = document.getElementById("searchButton").onclick = searchLocations;

    locationSelect = document.getElementById("locationSelect");
    results = document.getElementById("results");

    locationSelect.onchange = function() {
        var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
        if (markerNum != "none"){
            google.maps.event.trigger(markers[markerNum], 'click');
        }
    };

    var input = document.getElementById('addressInput');
    var searchBox = new google.maps.places.SearchBox(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }
        // Clear out the old markers.
        markers.forEach(function(marker) {
            marker.setMap(null);
        });
        markers = [];

        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds(
        );

        places.forEach(function(place) {
            if (!place.geometry) {
                console.log("Returned place contains no geometry");
                alert("Returned place contains no geometry");
                return;
            }
            var html =
                "<b style='align-content: center; font-size: large'>" + place.name + "</b> <br/>"
                + "<b>Address : </b>" + place.formatted_address + "<br/>";
            var image = 'images/downloaded/flag1.png';
            // Create a marker for each place.
            var marker = new google.maps.Marker({
                map: map,
                icon: image,
                position: place.geometry.location
            });
            google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent(html);
                infoWindow.open(map, marker);
            });
            markers.push(marker);

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });

    new AutocompleteDirectionsHandler(map);
}

function searchLocations() {

    //current location

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            //alert('creating current position');
            currentpos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            //alert('current pos lat = ' + currentpos.lat);
        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }

    var address = document.getElementById("addressInput").value;

    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({address: address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var pos = {
                lat: (results[0].geometry.location).lat(),
                lng: (results[0].geometry.location).lng()
            };
            searchLocationsNear(pos,currentpos);
        } else {
            //alert(address + ' Not found : Please enter valid location address');
            // to fetch results when location is not specified
            // HTTPS required on chrome
                    searchLocationsNear(currentpos,currentpos);
        }
    });
}


function searchLocationsNear(center,currentPos) {
    // alert('before clear locations');
    clearLocations();
    // alert('after clear locations');

    var radius = document.getElementById('radiusSelect').value;
    // alert('radius = '+radius);
    var sport = document.getElementById("sportInput").value;

    var searchUrl = 'facilitylocator.php?lat=' + center.lat + '&lng=' + center.lng + '&radius=' + radius + '&sport=' + sport;
    // alert('search  url = ' + searchUrl);
    downloadUrl(searchUrl, function(data) {
        var xml = parseXml(data);
        var markerNodes = xml.documentElement.getElementsByTagName("marker");

        // alert('marker nodes length = '+markerNodes.length);
        if(markerNodes.length == 0){
            alertify.error("No sport facility found of your interest. Please try some other choices. Cheers !");
            sport.value = 'All';
        }

        var bounds = new google.maps.LatLngBounds();
        for (var i = 0; i < markerNodes.length; i++) {
            var id = markerNodes[i].getAttribute("id");
            var name = markerNodes[i].getAttribute("name");
            var address = markerNodes[i].getAttribute("address");
            var sports = markerNodes[i].getAttribute("sports");
            var number_of_field_courts = markerNodes[i].getAttribute("number_of_field_courts");
            var field_surface_type = markerNodes[i].getAttribute("field_surface_type");
            var facility_since = markerNodes[i].getAttribute("facility_since");
            var facility_condition = markerNodes[i].getAttribute("facility_condition");
            var changing_room =  markerNodes[i].getAttribute("changing_room");
            var distance = parseFloat(markerNodes[i].getAttribute("distance"));
            var latlng = new google.maps.LatLng(
                parseFloat(markerNodes[i].getAttribute("lat")),
                parseFloat(markerNodes[i].getAttribute("lng")));

            createOption(name, distance, i);
            // alert('before calling create marker');
            createMarker(currentPos,latlng, name, address, sports, number_of_field_courts, field_surface_type, facility_since, facility_condition, changing_room);
            // alert('calling create marker now');
            bounds.extend(latlng);
        }
        map.fitBounds(bounds);
        locationSelect.style.visibility = "visible";
        results.style.visibility = "visible";

        var custom = {lat: center.lat, lng: center.lng};
        if(markerNodes.length == 0) {

            map = new google.maps.Map(document.getElementById('map'), {
                center: custom,
                zoom: 11,
                mapTypeId: 'roadmap',
                mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
            });

            if (document.getElementById("addressInput").value == ""){

                var marker = new google.maps.Marker({
                    map: map,
                    position: custom,
                    animation: google.maps.Animation.BOUNCE
                });
                google.maps.event.addListener(marker, 'click', function() {
                    infoWindow.setContent('You are here !!');
                    infoWindow.open(map, marker);
                    if (marker.getAnimation() !== null) {
                        marker.setAnimation(null);
                    } else {
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                    }
                });
            }
            else {
                var image = 'images/downloaded/flag1.png';
                var marker = new google.maps.Marker({
                    map: map,
                    position: custom,
                    icon:image
                });
                google.maps.event.addListener(marker, 'click', function () {
                    infoWindow.setContent('You are here !!');
                    infoWindow.open(map, marker);
                    if (marker.getAnimation() !== null) {
                        marker.setAnimation(null);
                    } else {
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                    }
                });
            }

            // document.getElementById("addressInput").value = "";
        }
        locationSelect.onchange = function() {
            var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
            google.maps.event.trigger(markers[markerNum], 'click');

        };
    });
}

function createMarker(currentPos,latlng, name, address, sports, number_of_field_courts, field_surface_type, facility_since, facility_condition, changing_room) {

    var addr = name + " " + address;
    var a = addr.split(' ').join('+');
    var la = currentPos.lat;
    var lo = currentPos.lng;
    var modAddr = la + "," + lo + "/" + a + "/@" + latlng  + ",13z";
    //alert('modAddr = '+modAddr);

    var html =
          "<b style='align-content: center; font-size: large'>" + name + "</b> <br/>"
        + "<b>Address : </b>" + address + "<br/>"
        + "<b>Sports played : </b>" + sports + "<br/>"
        + "<b>Number of field courts : </b>" + number_of_field_courts + "<br/>"
        + "<b>Field surface types : </b>" + field_surface_type + "<br/>"
        + "<b>Facility since : </b>" + facility_since + "<br/>"
        + "<b>Facility rating : </b>" + facility_condition + "<br/>"
        + "<b>Changing rooms : </b>" + changing_room + "<br/><br/>"
        + "<b>Get Directions : <a target='_blank' href='https://www.google.com.au/maps/dir/"+modAddr+"'>Click here</a></b>";

    // to change the image based on sports
    // Needs fix

    // if (sports.toLowerCase().contains('cricket')){
    //     alert(sports.toLowerCase());
         var image = 'images/downloaded/flag2.png';
    // }
    // else {
        //var image = 'images/downloaded/flag3.png';
        // var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
    //}
    var marker = new google.maps.Marker({
        map: map,
        position: latlng,
        animation: google.maps.Animation.DROP,
        icon:image
    });
    google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
    });
    markers.push(marker);
}

function myFunction() {

    window.open()
}

function createOption(name, distance, num) {
    var option = document.createElement("option");
    option.value = num;
    option.innerHTML = name;
    locationSelect.appendChild(option);
}

function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;

    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request.responseText, request.status);
        }
    };

    request.open('GET', url, true);
    request.send(null);
}

function clearLocations() {
    //alert("in clear lcoations 1");
    infoWindow.close();
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(null);
    }
    markers.length = 0;

    locationSelect.innerHTML = "";
    var option = document.createElement("option");
    option.value = "none";
    option.innerHTML = "Pick one specific sport location here";
    locationSelect.appendChild(option);
    // alert('cleared locations');
}


function parseXml(str) {
    if (window.ActiveXObject) {
        var doc = new ActiveXObject('Microsoft.XMLDOM');
        doc.loadXML(str);
        return doc;
    } else if (window.DOMParser) {
        return (new DOMParser).parseFromString(str, 'text/xml');
    }
}

function doNothing() {}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
    //infoWindow.open(map);
}



