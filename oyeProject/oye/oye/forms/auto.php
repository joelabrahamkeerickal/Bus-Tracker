<html>
<body>

<!--
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChBgKdSG0US4m2iB5C6UmbXdW4mYSChDQ&callback=myMap"></script>
-->

<script async defer src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyChBgKdSG0US4m2iB5C6UmbXdW4mYSChDQ&callback=intilize&libraries=places"></script>
<!--

-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>

 <script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', intilize);
    function intilize() {
        var autocomplete = new google.maps.places.Autocomplete(document.getElementById("txtautocomplete"));

        google.maps.event.addListener(autocomplete, 'place_changed', function () {

        var place = autocomplete.getPlace();
        var location = "Address: " + place.formatted_address + "<br/>";
        location += "Latitude: " + place.geometry.location.lat() + "<br/>";
		location += "Longitude: " + place.geometry.location.lng();
        
        });
		document.getElementById('lblresult').innerHTML = location;
    };

    </script>
<span>location:</span><input type="text" id="txtautocomplete" style="width:200px" placeholder="enter the adress"/>
    <label id="lblresult"></label>
	
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>