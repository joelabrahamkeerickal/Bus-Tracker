<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OyeSample</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
  
<script type="text/javascript">

</script>

<!--for countries-->
<script type= "text/javascript" src = "../../List_Country_State-master/countries.js"></script>
<!--till here-->

<!--for maps-->
<!-- Bootstrap core CSS -->

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
 
      function init_map() {
		var var_location = new google.maps.LatLng(19.0760,72.8777);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
 
		var var_marker = new google.maps.Marker({
			position: var_location,
			map: var_map,
			title:"Venice"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
		var_marker.setMap(var_map);	
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>
<!--till here-->
	
	
	
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
		
		<div class="login-box-body">
			
            <div class="box-header with-border">
              <h3 class="login-box-msg">Sign up to create an account</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="send_otp.php" >
              <div class="box-body">
			  
                <div class="form-group">
				  <div class="col-sm-2"></div>
                  <label for="inputPersonalName1" class="col-sm-2 control-label">Personal Name*</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
                </div>
				
                <div class="form-group">
				  <div class="col-sm-2"></div>
                  <label for="inputOwnerName1" class="col-sm-2 control-label">Location Owner Name*</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="" required>
                  </div>
                </div>
				
				<div class="form-group">
					<div class="col-sm-2"></div>
					<label for="address" class="col-sm-2 control-label">Address*</label>
					<div class="col-sm-4">
						<textarea class="form-control" rows="4" id="address" required></textarea>
					</div>
				</div>
				
				<div class="form-group">	
				<div class="col-sm-4"></div>
				<div class="col-sm-2">
						<select id="country" name ="country" class="form-control"></select>
				</div>
				<div class="col-sm-2">
						<select name ="state" id ="state" class="form-control"></select> 
				</div>
				</div>
				<script language="javascript">
					populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
				</script>
				
				<div class="form-group">
				<div class="col-sm-4"></div>
				  <div class="col-sm-2">
				   <input type="text" class="form-control" id="city" placeholder="City" required>
				  </div>                 
                  <div class="col-sm-2">
                    <input type="number" maxlength="6" class="form-control" id="pincode" placeholder="Pincode" required>
                  </div>
                </div>
				
				<div class="form-group">
				  <div class="col-sm-2"></div>
                  <label class="col-sm-2 control-label">Email*</label>
                  <div class="col-sm-4">
                    <input type="email" class="form-control" name="email" placeholder="" required>
                  </div>
                </div>
				
				<div class="form-group">
				  <div class="col-sm-2"></div>
                  <label class="col-sm-2 control-label">Phone*</label>
                  <div class="col-sm-4">
                    <input type="number" name="number" class="form-control" placeholder="" required>
                  </div>
                </div>
				
				
				<div class="form-group">
				  <div class="col-sm-2"></div>
                  <label for="inputPassword1" class="col-sm-2 control-label">Password*</label>
                  <div class="col-sm-4">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="" required>
                  </div>
                </div>
				
				<div class="form-group">
				  <div class="col-sm-2"></div>
                  <label for="inputPassword1" class="col-sm-2 control-label">Confirm Password*</label>
                  <div class="col-sm-4">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="" required>
                  </div>
                </div>				
				 <div class="form-group">
				 <div class="col-sm-2"></div>
                   <label class="col-sm-2 control-label">Type of ownership*</label>
					<div class="row">
					
					<div class="radio">
                    <label class="col-sm-1"><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>Temporary</label>
					
					<label class="col-sm-1"><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>Permanent</label>
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
            <label for="exampleInputFile" class="col-sm-2 control-label">Upload document to verify*</label>
			<input type="file" name="file">
			<p class="help-block col-sm-6">(Voter ID card/Aadhar/Passport/Light Bill/Telephone Bill/Water Bill)</p>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
	<!--maps code till here-->
	  <div class="box-footer" > 
                <div class="col-sm-7"></div>
             
                <button type="submit" class="btn btn-info col-sm-offset-3 " >Submit</button>
              </div>
			  
			  
              </div>
            </form>
          </div>

        
<!-- ./wrapper -->

<!-- jQuery 3 -->



<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
	
			 