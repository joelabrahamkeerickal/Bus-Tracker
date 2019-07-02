<?php
error_reporting(E_PARSE | E_ERROR);
echo $coordinates = $_POST['coordinates'];
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OyeSample</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 4.0.0 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  -->
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
 <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script> -->
  


<!--for countries-->
<script type= "text/javascript" src = "../../List_Country_State-master/countries.js"></script>
<!--till here-->

<!--for maps-->
<!-- Bootstrap core CSS -->
<!-- 
my new API key
AIzaSyBYUjuXb95ah_fAyzw6Gk0ztMNRE969B50
AIzaSyC3pSHCbRl0S6k2e2uBXvcrmwSSQ-coFVA
my old API key
AIzaSyChBgKdSG0US4m2iB5C6UmbXdW4mYSChDQ
-->

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChBgKdSG0US4m2iB5C6UmbXdW4mYSChDQ&callback=init_map" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
    <![endif]-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script>	
 var current_lat = 19.0760;
 var current_lon = 72.8777;
      function init_map(lat,lng) {
		  <?php
		  $lat = "<script>document.write(lat)</script>";
		  $lng = "<script>document.write(lng)</script>";
		  ?>
		var var_location = new google.maps.LatLng(lat,lng);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
 
		var var_marker = new google.maps.Marker({
			position: var_location,
			map: var_map,
			title:"Your location"});
		
		var info_window = new google.maps.InfoWindow({
			label: 'R'
		});			
		
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
		var_marker.setMap(var_map);	
		var_marker.addListener('click',function(){
			info_window.open(var_map,var_marker);
		});
      }
 
    google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>
<!--till here-->

<script type="text/javascript">
$(document).ready(function(){
	$('#demo').load('check_user.php').show();
	$('#oyepinID').keyup(function(){
		$.post('check_user.php',{oyepin: form.oyepin.value },
		function(result){
			$('#demo').html(result).show();		
		});
	});
});
</script>

<style>
/*
body,div,.login-box-body,.box-footer,.box-header with-border{
	background : #d2d6de;
}
*/
  body { background-color:#CCC }
      #map-outer {  height: 440px; 
	  				padding: 20px; 
					border: 2px solid #CCC; 
					margin-bottom: 20px; 
					background-color:#FFF }
	  #map-container { height: 400px }
	  @media all and (max-width: 991px) {
		#map-outer  { height: 650px }
		}
		.input-group[class*="col-"] {
    padding-right: 15px;
    padding-left: 15px;
    }

</style>


</head>
<body>
		<!-- ../send_otp.php -->
		<div class="login-box-body">
			
            <div class="box-header with-border">
              <h3 class="login-box-msg">Sign up to create an account</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="location-form" class="form-horizontal" >
			<div class="form-group">
					<div class="col-sm-2"></div>
					<label class="col-sm-2 control-label">Address*</label>
					<div class="col-sm-4">
						<textarea class="form-control" rows="2" name="address" id="location-input" placeholder="city,state,country,pincode" required></textarea>
					</div>					
					<button type="submit" class="btn btn-info col-sm-2 " >Check location below</button>
					<!-- <div class="col-sm-4" type="hidden" name="coordinates" id="geometry" ></div> -->
				</div>
			
			</form>
			
			<form name="form" class="form-horizontal" enctype="multipart/form-data" method="post" action="../send_otp.php">
			
			<div class="form-group">
				<div class="col-sm-2"></div>
			<label class="col-sm-2 control-label">Latitude</label>
			<div class="col-sm-4">
			   <input type="text" class="form-control" name="latitude" id="lati">
			</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-2"></div>
			<label class="col-sm-2 control-label">Longitude</label>
			<div class="col-sm-4">
			   <input type="text" class="form-control" name="longitude" id="longi" >
			</div>
			</div>
			
			  <div class="box-body">
			  
                <div class="form-group">
				  <div class="col-sm-2"></div>
                  <label class="col-sm-2 control-label">Personal Name*</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="personal_name" placeholder="" required>
                  </div>
                </div>
				
                <div class="form-group">
				  <div class="col-sm-2"></div>
                  <label class="col-sm-2 control-label">Location Owner Name*</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="loc_owner_name" placeholder="" required>
                  </div>
                </div>
				
				<div class="form-group">
				  <div class="col-sm-2"></div>
                  <label class="col-sm-2 control-label">OyePin*</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="oyepinID" name="oyepin" placeholder="" required>
                  </div>
				  <span id="demo"></span>	
                </div>
								
				
				<div class="form-group">	
				<div class="col-sm-4"></div>
				<div class="col-sm-2">
						<select type="text" id="country" name ="country" class="form-control"></select>
				</div>
				<div class="col-sm-2">
						<select type="text" name ="state" id ="state" class="form-control"></select>
				</div>
				</div>
				
				<script language="javascript">
					populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
				</script>
				
				
				<div class="form-group">
				<div class="col-sm-4"></div>
				  <div class="col-sm-2">
				   <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
				  </div>                 
                  <div class="col-sm-2">
                    <input type="number" maxlength="6" class="form-control" name="pincode" id="pincode" placeholder="Pincode" required>
                  </div>
                </div>
				
				
				
				<div class="form-group">
				  <div class="col-sm-2"></div>
                  <label class="col-sm-2 control-label">Email*</label>
                  <div class="col-sm-4">
                    <input type="email" class="form-control" name="email" placeholder="">
                  </div>
                </div>
				
				<div class="form-group">
				  <div class="col-sm-2"></div>
                  <label class="col-sm-2 control-label">Phone*</label>
                  <div class="col-sm-4">
                    <input type="number" name="number" class="form-control" placeholder="without 0 or +91" required>
                  </div>
                </div>
				
				
				<div class="form-group">
				  <div class="col-sm-2"></div>
                  <label class="col-sm-2 control-label">Password*</label>
                  <div class="col-sm-4">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="" required>
                  </div>
                </div>
				<!--
				<div class="form-group">
				  <div class="col-sm-2"></div>
                  <label class="col-sm-2 control-label">Confirm Password*</label>
                  <div class="col-sm-4">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="" required>
                  </div>				  
                </div>	
				-->
				 <div class="form-group">
				 <div class="col-sm-2"></div>
                   <label class="col-sm-2 control-label">Type of ownership*</label>
					<div class="row">
					
					<div class="radio">
                    <label class="col-sm-1"><input type="radio" name="ownership_type" value="temporary" required>Temporary</label>
					
					<label class="col-sm-1"><input type="radio" name="ownership_type" value="permanent" required>Permanent</label>
                  </div>
				</div>
				</div>
				
              <!-- /.box-body -->
			
			  		
				
			  <!--for maps-->
			  <div class="container">
  <div class="row">
  <div class="col-sm-2"></div>
  <h3>Your Location</h3>
  <div class="col-sm-2"></div>
      <div id="map-outer" class="col-md-8">          
        <div id="map-container" class="col-md-12"></div>
      </div><!-- /map-outer -->
  </div> <!-- /row -->
 </div>
 
 <!-- /row -->
<!-- /container -->

		<div class="form-group">
		<div class="col-sm-3"></div>
            <label class="col-sm-2 control-label">Upload document to verify*</label>
			<input type="file" name="image" required>
			<p class="help-block col-sm-6">(Voter ID card/Aadhar/Passport/Light Bill/Telephone Bill/Water Bill)</p>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
	<!--maps code till here-->
	  <div class="box-footer" > 
                <div class="col-sm-3"></div>
				
                <button type="submit" class="btn btn-info col-sm-offset-7 " >Submit</button>
              </div>
			 
			  
              </div>
            </form>
    
          </div>
<script>

    // Get location form
    var locationForm = document.getElementById('location-form');

    // Listen for submiot
   locationForm.addEventListener('submit', geocode);

    function geocode(e){
      // Prevent actual submit
      e.preventDefault();

      var location = document.getElementById('location-input').value;

      axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
        params:{
          address:location,
          key:'AIzaSyBO59mo6rMe4ChzmBqEQ8gz9QmWjg_X38c'
        }
      })
      .then(function(response){
        // Log full response
        console.log(response);

		
        // Geometry
        var lat = response.data.results[0].geometry.location.lat;
        var lng = response.data.results[0].geometry.location.lng;
		document.getElementById('lati').value = lat;
		document.getElementById('longi').value = lng;
		init_map(lat,lng);
      })
      .catch(function(error){
        console.log(error);
      });
    }


   
  </script>
				
        
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="../../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
	
			 