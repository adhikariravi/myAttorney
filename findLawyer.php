<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>myAttorney - Your Legal Helper</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/formCustom.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 80%;
            width:  80%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body onload="getLocation()">
<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="localhost/myAttorney">myAttorney</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="findLawyer.php">Find A Lawyer</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </nav>

</div>


    <div class="container" id="map">


    </div>

<script>


        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(getPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function getPosition(position) {
            alert(position.coords.latitude+" "+position.coords.longitude);

//            x.innerHTML = "Latitude: " + position.coords.latitude +
//                "<br>Longitude: " + position.coords.longitude;
        }


    function initMap() {

        //USER GEO LOCATION


        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: myLatLng
        });
        origins="27.712136,85.342559";

        var infowindow = new google.maps.InfoWindow();
        for(var i=0;i<places.length;i++) {
            var item={};
            var loc = places[i];
            var lat = loc['lat'];
            var lng = loc['lng'];
            destinations+=lat+","+lng+"|";
            var destination = new google.maps.LatLng(lat, lng);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(lat, lng),
                map: map,
                title: loc['name']
            });

//            item['title']=loc['name'];
//            item['lat']=lat;
//            item['lng']=lng;
//            item['description']=loc['name'];

            item['origin']="current";
            item['destination']=loc['name'];
            item['distance']=google.maps.geometry.spherical.computeDistanceBetween(origin,destination);
            log.push(item);

//            google.maps.event.addListener(marker, 'click', (function(marker, i) {
//                return function() {
//                    infowindow.setContent(loc['name']);
//                    infowindow.open(map, marker);
//                }
//            })(marker, i));

        }


//        var jsonParseURL="https://maps.googleapis.com/maps/api/directions/json?origin=27.712136,85.342559&destination=27.67355299999999,85.31725100000001&key=AIzaSyBeYHkcH0fGv8QOuZ_iBU8gbAv0dB36J8U";
//        $.getJSON(jsonParseURL, function(data) {
//            document.write(data);
//        });

        var data=JSON.stringify(log);
        var url = 'data:text/json;charset=utf8,' + encodeURIComponent(data);
        window.open(url);

        var httpurl = "https://maps.googleapis.com/maps/api/distancematrix/json?origins="
        var suffix="&destinations=";
        var key="&key=AIzaSyBeYHkcH0fGv8QOuZ_iBU8gbAv0dB36J8U";
        var finalURL = httpurl+origins+suffix+destinations+key;
        window.open(finalURL)
    }


    /**
     *  Driving mode API Distance
     *  https://maps.googleapis.com/maps/api/directions/json?origin=27.712136,85.342559&destination=27.67355299999999,85.31725100000001&key=AIzaSyBeYHkcH0fGv8QOuZ_iBU8gbAv0dB36J8U
     */

    //    origin=27.712136,85.342559&destination=27.67355299999999,85.31725100000001
    //
    //    geocoder.geocode({'location': latlng}, function(results, status) {
    //        if (status === 'OK') {
    //            if (results[1]) {
    //                map.setZoom(11);
    //                var marker = new google.maps.Marker({
    //                    position: latlng,
    //                    map: map
    //                });
    //                infowindow.setContent(results[1].formatted_address);
    //                infowindow.open(map, marker);
    //            } else {
    //                window.alert('No results found');
    //            }
    //        } else {
    //            window.alert('Geocoder failed due to: ' + status);
    //        }
    //    });

    //    console.log(_coordinates);
    //    console.log(google.maps.geometry.spherical.computeDistanceBetween(_pCord, _coordinates));
    //    console.log(google.maps.geometry.spherical.computeDistanceBetween(_kCord, _coordinates));
    //
    //        for (i = 0; i < places.length; i++) {
    //            var loc = places[i];
    //            marker = new google.maps.Marker({
    //                position: new google.maps.LatLng(places['lat'], places['lng']),
    //                map: map
    //            });
    //
    //        }
    //
    //    function initMap() {
    //        var myLatLng = {lat: -25.363, lng: 131.044};
    //
    //        var map = new google.maps.Map(document.getElementById('map'), {
    //            zoom: 4,
    //            center: myLatLng
    //        });
    //
    //        var marker = new google.maps.Marker({
    //            position: myLatLng,
    //            map: map,
    //            title: 'Hello World!'
    //        });
    //    }
    //
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeYHkcH0fGv8QOuZ_iBU8gbAv0dB36J8U&callback=initMap&libraries=geometry">
</script>
</body>


<div class="container">
    <?php require_once 'includes/footer.php'?>
</div>