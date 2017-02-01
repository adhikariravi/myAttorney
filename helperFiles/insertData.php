<?php
    include 'Database/dbconfig.php' ;
    $final_query="";
    //$base_query="INSERT INTO forum(name,latitude,longitude) VALUES(";

    $allData=[
        array("name"=>"Reliance Law Firm","lat"=>"27.67355299999999","lng"=>"85.31725100000001"),
        array("name"=>"Neupane Law Associates | Law Firm in Nepal","lat"=>"27.691221","lng"=>"85.31811900000001"),
        array("name"=>"Kusum law firm","lat"=>"27.688836","lng"=>"85.32731199999999"),
        array("name"=>"Shreejana Law Firm","lat"=>"27.676732","lng"=>"85.3171759"),
        array("name"=>"Sunshine Law Firm","lat"=>"27.702344","lng"=>"85.321612"),
        array("name"=>"Ale Law Firm Pvt. Ltd.","lat"=>"27.6990334","lng"=>"85.32890189999999"),
        array("name"=>"Pradhan & Associates","lat"=>"27.6942111","lng"=>"85.3211412"),
        array("name"=>"NBSM","lat"=>"27.7150088","lng"=>"85.3267041"),
        array("name"=>"PYC & ASSOCIATES","lat"=>"27.702976","lng"=>"85.3226059"),
        array("name"=>"Prime Law Associates","lat"=>"27.6985927","lng"=>"85.3288042"),
        array("name"=>"TR Upadhya & Co.","lat"=>"27.7126651","lng"=>"85.3207479"),
        array("name"=>"NBSM","lat"=>"27.715111","lng"=>"85.326883"),
        array("name"=>"Global Law Associates","lat"=>"27.7040523","lng"=>"85.32271569999999"),
        array("name"=>"BRS NEUPANE & CO.","lat"=>"27.711779","lng"=>"85.329065"),
        array("name"=>"Thompson Nepal Pvt Ltd (Part of J. Walter Thompson Worldwide)","lat"=>"27.713487","lng"=>"85.32028"),
        array("name"=>"Apex Law Chamber","lat"=>"27.6926394","lng"=>"85.3193763"),
        array("name"=>"KB Chitracar & Co, Chartered Accountants","lat"=>"27.6864923","lng"=>"85.3199154"),
        array("name"=>"Pioneer Law Associates","lat"=>"27.697571","lng"=>"85.32893299999999"),
        array("name"=>"Social Legal Services","lat"=>"27.6927647","lng"=>"85.3123342")
    ];

    foreach ($allData as $associates) {
        $name=$associates["name"];
        $lat=$associates["lat"];
        $lng=$associates["lng"];

        $final_query.=$base_query.
            "'".$name."',".
            "'".$lat."',".
            "'".$lng."');";

    }

    $connection->multi_query($final_query);
    $result=$connection->close();
    echo $result;
?>
<!---->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Insert Data Script</title>-->
<!--</head>-->
<!--<body>-->
<!--<script>-->
<!--    var data=[{"name":"Reliance Law Firm","lat":27.67355299999999,"lng":85.31725100000001},{"name":"Neupane Law Associates | Law Firm in Nepal","lat":27.691221,"lng":85.31811900000001},{"name":"Kusum law firm","lat":27.688836,"lng":85.32731199999999},{"name":"Shreejana Law Firm","lat":27.676732,"lng":85.3171759},{"name":"Sunshine Law Firm","lat":27.702344,"lng":85.321612},{"name":"Ale Law Firm Pvt. Ltd.","lat":27.6990334,"lng":85.32890189999999},{"name":"Pradhan & Associates","lat":27.6942111,"lng":85.3211412},{"name":"Pradhan & Associates","lat":27.6941386,"lng":85.32119080000001},{"name":"NBSM","lat":27.7150088,"lng":85.3267041},{"name":"PYC & ASSOCIATES","lat":27.702976,"lng":85.3226059},{"name":"Prime Law Associates","lat":27.6985927,"lng":85.3288042},{"name":"TR Upadhya & Co.","lat":27.7126651,"lng":85.3207479},{"name":"NBSM","lat":27.715111,"lng":85.326883},{"name":"Global Law Associates","lat":27.7040523,"lng":85.32271569999999},{"name":"BRS NEUPANE & CO.","lat":27.711779,"lng":85.329065},{"name":"Thompson Nepal Pvt Ltd (Part of J. Walter Thompson Worldwide)","lat":27.713487,"lng":85.32028},{"name":"Apex Law Chamber","lat":27.6926394,"lng":85.3193763},{"name":"KB Chitracar & Co, Chartered Accountants","lat":27.6864923,"lng":85.3199154},{"name":"Pioneer Law Associates","lat":27.697571,"lng":85.32893299999999},{"name":"Social Legal Services","lat":27.6927647,"lng":85.3123342}];-->
<!--    var form_name;-->
<!--    var form_lat;-->
<!--    var form_lon;-->
<!--    function insert() {-->
<!--        var phpData="";-->
<!--        for(var i=0;i<data.length;i++) {-->
<!--            var loc = data[i];-->
<!--            var name=loc['name'];-->
<!--            var lat = loc['lat'];-->
<!--            var lng = loc['lng'];-->
<!--            phpData+="array(";-->
<!--            phpData+="\"name\"=>"+"\""+name+"\",";-->
<!--            phpData+="\"lat\"=>"+"\""+lat+"\",";-->
<!--            phpData+="\"lng\"=>"+"\""+lng+"\"";-->
<!--            phpData+="),"-->
<!--        }-->
<!--        document.getElementById("phpData").innerHTML=phpData;-->
<!--    }-->
<!---->
<!---->
<!--</script>-->
<!---->
<!--<p id="phpData">-->
<!---->
<!--</p>-->
<!--<input type="button" name="generate" onclick="insert()">-->
<!--</body>-->
<!--</html>-->
