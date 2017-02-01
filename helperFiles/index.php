<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>myAttorney</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/formCustom.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">myAttorney</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="findLawyer.php">Find A Lawyer</a></li>
            </ul>
        </div>
    </nav>
</div>

<body>
<div class="container">

    <div id="map" style="width:100%;height:500px"></div>

    <script>

//        var jsonData=[{"name":"Reliance Law Firm","lat":27.67355299999999,"lng":85.31725100000001},{"name":"Neupane Law Associates | Law Firm in Nepal","lat":27.691221,"lng":85.31811900000001},{"name":"Kusum law firm","lat":27.688836,"lng":85.32731199999999},{"name":"Shreejana Law Firm","lat":27.676732,"lng":85.3171759},{"name":"Sunshine Law Firm","lat":27.702344,"lng":85.321612},{"name":"Ale Law Firm Pvt. Ltd.","lat":27.6990334,"lng":85.32890189999999},{"name":"Pradhan & Associates","lat":27.6942111,"lng":85.3211412},{"name":"Pradhan & Associates","lat":27.6941386,"lng":85.32119080000001},{"name":"NBSM","lat":27.7150088,"lng":85.3267041},{"name":"PYC & ASSOCIATES","lat":27.702976,"lng":85.3226059},{"name":"Prime Law Associates","lat":27.6985927,"lng":85.3288042},{"name":"TR Upadhya & Co.","lat":27.7126651,"lng":85.3207479},{"name":"NBSM","lat":27.715111,"lng":85.326883},{"name":"Global Law Associates","lat":27.7040523,"lng":85.32271569999999},{"name":"BRS NEUPANE & CO.","lat":27.711779,"lng":85.329065},{"name":"Thompson Nepal Pvt Ltd (Part of J. Walter Thompson Worldwide)","lat":27.713487,"lng":85.32028},{"name":"Apex Law Chamber","lat":27.6926394,"lng":85.3193763},{"name":"KB Chitracar & Co, Chartered Accountants","lat":27.6864923,"lng":85.3199154},{"name":"Pioneer Law Associates","lat":27.697571,"lng":85.32893299999999},{"name":"Social Legal Services","lat":27.6927647,"lng":85.3123342}];
//         Note: This example requires that you consent to location sharing when
//         prompted by your browser. If you see the error "The Geolocation service
//         failed.", it means you probably did not give permission for the browser to
//         locate you.

    function initMap() {

            var map = new google.maps.Map(document.getElementById('map'), {
                center:{lat: 27.712136, lng: 85.342559},
                zoom: 15
            });

            var infoWindow = new google.maps.InfoWindow({map: map});

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    infoWindow.setPosition(pos);
                    infoWindow.setContent('You Are Here!');
                    map.setCenter(pos);

                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                alert("The Browser Does not Support Geo Location. ")
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeYHkcH0fGv8QOuZ_iBU8gbAv0dB36J8U&callback=initMap">
    </script>
</div>

</body>

<div class="container">

    <?php
    require_once('includes/footer.php');
    ?>

</div>