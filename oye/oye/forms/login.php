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
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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


 body { background-color:CCC }
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

<style type="text/css">

/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	//background: url(image/page.png) center no-repeat #fff;
}


/*Base Style*/
footer{
	bottom:0px;
	left:0px;
	width:100%;
	line-height: 35px;
	text-align: center;
	font-weight: bold;
	background-color: #CCC;
}

/* Setting the background image*/

#background{
position: fixed;
top: 0;
left: 0;
width: 10000px;
	height: 100%;
 background: url('images/college_1.png') ;
 //background-color:transparent;
  background-repeat: no-repeat;
  background-position:center;
  background-attachment: fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  z-index: -1;
 }

 .background-image-blur{
 	-webkit-filter: blur(45px);
    -moz-filter: blur(45px);
    -o-filter: blur(45px);
    -ms-filter: blur(45px);
    filter: blur(45px);

    -webkit-transition: all 2s ease-out;
    -moz-transition: all 2s ease-out;
    -o-transition: all 2s ease-out;
    -ms-transition: all 2s ease-out;

    transition: all 2s ease-out;
 }


/*To give the gradient to the background image in "#background"*/

/*.FadeAway{
    position: absolute; top:0px; left:0px; width:100%; height:100%;
        background:transparent;
        background: linear-gradient(top, rgba( 255, 255, 255, 255 ) 0%, rgba( 255, 255, 255, 1 ) 100% );
        background: -moz-linear-gradient(top, rgba( 255, 255, 255, 0) 0%, rgba( 255, 255, 255, 1 ) 100% );
        background: -ms-linear-gradient(top, rgba( 255, 255, 255, 0 ) 0%, rgba( 255, 255, 255, 1 ) 100% );
        background: -o-linear-gradient( top, rgba( 255, 255, 255, 0 ) 0%, rgba( 255, 255, 255, 1 ) 100% );
        background: -webkit-linear-gradient( top, rgba( 255, 255, 255, 0 ) 0%, rgba( 255, 255, 255, 1 ) 100% );
        -ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#550000FF, endColorstr=#550000FF);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00ffffff, endColorstr=#ffffffff);

}*/

#header{
	width:100%;
	/*height:100px;*/
}

	.desktop-header{
		height: 100px;
	}

	.mobile-header{
		height: 0px;
	}

/* These 2 are temp styles. Get rid of them later*/
	#header-text h3{
		text-align: center;
		font-size: 30px;
	}

	#header-text p{
		text-align: center;
		font-size:20px;
	}

.form-body{
    margin:25px;
}

.form-top-right{
	width : 25%;
	float:left;
	font-size: 66px;
}
.form-top-left{
	width : 75%;
	float:left;
}

.form-element{
	display: inline;
	width:100%;
}
	button.form-element{
		margin-bottom: 20px;
	}

	.module-heading{
		margin:20px 0px;
	}


@media (min-width:768px){


	.middle-border {
	    min-height: 300px;
	    margin-top: 100px;
	    border-right: 1px solid #000;
	    border-right: 1px solid rgba(0, 0, 0, 0.6);
	}

	.mobile{
		display: none;
	}

	.desktop{
		display: inline;
	}

	.glyphicon-validation{
		font-size:15px;
		margin: 7px;
	}

}
@media (max-width:767px){


	.middle-border {
	    min-height: auto;
	    margin: 65px 30px 0 30px;
	    border-right: 0;
	}

	.mobile{
		display: inline;
		margin:20px 0px;
	}

	.desktop{
		display: none;
	}

	.glyphicon-validation{
		font-size:10px;
		margin: 7px;
	}
}

/* Just to remove the default padding of bootstrap's col-*-* 
* mainly need this for the form-heading*/

/*#main-login{
	padding-left:0px;
	padding-right: 0px;
}*/

.form-header{
	width:100%;
	padding: 30px;
}
.form-content{background-color: FFF;}
.multi-form-wrapper{
	/*margin-bottom:20px;*/
}
//Colors
.light-blue{color:#3498DB;}
.green{color:#00C957;}
.red{color: red;}
.maroon{color:#C0392B;}
.dark-green{color: #27AE60;}
.lemon-yellow{color:#2ECC71;}
.orange-yellow{color:#F39C12;}
.orange{color:#E67E22;}
.dark-orange{color:#D35400;}
.yellow{color:yellow;}
.white{color: white;}
.light-grey{color : #ECF0F1;}

.background-light-blue{background-color: #3498DB;}
.background-green{background-color: #1ABC9C;}
.background-red{background-color: red;}
.background-maroon{background-color: #C0392B;}
.background-dark-green{background-color: #16A085;}
.background-lemon-yellow{background-color:#F1C40F;}
.background-orange-yellow{background-color:#F39C12;}
.background-orange{background-color:#E67E22;}
.background-dark-orange{background-color:#D35400;}
.background-yellow{background-color:yellow;}
.background-white{background-color: white;}
.background-light-grey{background-color : #ECF0F1;}

</style>
<script type="text/javascript">
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
</head>
<body>
		<div id="background"></div>
	<div id="header"> </div>

	<div class="container multi-form-wrapper">
		 <div class="form-container row">
			

	 	<div class="col-sm-2"></div>
	 	<div class="col-sm-1 "></div>
		<div id="main-signup" class="module-form col-xs-12 col-sm-5 col-md-5 col-lg-5">
		

 	<div class="form-content">
        <div class="form-header background-maroon white">
        	<div class="form-top-left">
		          <h3>Signup</h3>
		          <p> For a unique OyePin </p>
		      </div>
		      <div class="form-top-right">
		      		<span class="glyphicon glyphicon-pencil"></span>
		      </div>
		      <br style="clear:both"/>
        </div>

        <div class="form-body">
			<form role="form">
			
            <div class="form-group personalName">
              <label for="personalName"> <span class="glyphicon glyphicon-user"> </span> Personal Name</label>
        	  <input type="textbox" class="form-control usn-validation form-element" name="personalName" placeholder="Personal Name" required>
            </div>
			
			<div class="form-group locationOwnerName">
              <label for="locationOwnerName"> <span class="glyphicon glyphicon-user"> </span> Location Owner Name</label>
        	  <input type="textbox" class="form-control usn-validation form-element" name="locationOwnerName" placeholder="Location Owner Name" required>
            </div>
			
			<div class="form-group Details">
			<label for="Details"> <span class="glyphicon glyphicon-home"> </span> Location Details</label>
			<select type="text" id="country" name ="country" class="form-control form-element col-sm-4"></select>
			</div>			
			<div class="form-group">
			<select type="text" name ="state" id ="state" class="form-control form-element col-sm-4 "></select>
			</div>
			
			<script language="javascript">
					populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
				</script>				
				
				<div class="form-group">
				<div class="col-sm-6 col-md-6 col-lg-6">
				   <input type="textbox" class="form-control form-element" name="city" id="city" placeholder="City" required>   
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
                    <input type="number" maxlength="6" class="form-control form-element" name="pincode" id="pincode" placeholder="Pincode" required>
                </div>
				</div>
								
			<div class="form-group is-hidden pin">
              <label for="OyePin"> <span class="glyphicon glyphicon-pushpin"> </span> Oye Pin</label>
        	  <input type="textbox" class="form-control form-element" name="OyePin" placeholder="Pin" required>
            </div>
				
             <div class="form-group is-hidden email">
              <label for="Email"> <span class="glyphicon glyphicon-envelope"> </span> Email</label>
        	  <input type="textbox" class="form-control form-element" name="email" placeholder="Email">
            </div>
			
			<div class="form-group is-hidden phone">
              <label for="Phone"> <span class="glyphicon glyphicon-earphone"> </span> Phone</label>
        	  <input type="textbox" class="form-control form-element" name="phone" placeholder="Phone" required>
            </div>

            <div class="form-group password">
              <label for="password"><span class="glyphicon glyphicon-eye-close"></span> Password</label>
			  <input  type="password" class="form-control password-validation form-element" name="password" placeholder="Password" data-validation="false" required>
            </div>
             <div class="form-group confirm-password">
              <label for="confirm-password"><span class="glyphicon glyphicon-eye-close"></span> Confirm Password</label>
			  <input  type="password" class="form-control password-confirmation form-element" name="password1" placeholder="Confirm Password" data-validation="false" required>
            </div>
			
			<div class="form-group Address">
              <label for="Address"> <span class="glyphicon glyphicon-globe"> </span> Address</label>
        	  <input type="textbox" class="form-control usn-validation form-element" name="Address" placeholder="City+State+Pincode" required>			  
            </div>
			
			<div class="form-group">
			<button type="button" class="btn btn-default background-light-blue white btn-block submit-btn signup-btn"><span class="glyphicon glyphicon-search"></span>&nbsp; Check Location below </button>
			</div>
			
			 <div class="form-group Latitude">
              <label for="Latitude"> <span class="glyphicon glyphicon-map-marker"> </span> Latitude</label>
        	  <input type="textbox" class="form-control usn-validation form-element" name="Latitude" placeholder="0.0">
            </div>
			
			 <div class="form-group Longitude">
              <label for="Longitude"> <span class="glyphicon glyphicon-map-marker"> </span> Longitude</label>
        	  <input type="textbox" class="form-control usn-validation form-element" name="Longitude" placeholder="0.0">
            </div>
			
			<br><br>
            <button type="button" class="btn btn-default btn-danger btn-block submit-btn signup-btn"><span class="glyphicon glyphicon-pencil"></span>&nbsp; Signup </button>
			<!--<input type="submit" class="submit-btn btn btn-primary btn-danger form-element" value="Signup"> -->
          </form>
        </div>
        <div class="modal-footer">

          <!-- Message from serverside (basanth)-->
          <div class="message pull-left" id="signup-message"></div>
        </div>
      </div>

		</div>
	</div> 



	</div>



 <!-- Modal -->
  <div class="modal fade" id="forgot-password-modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header background-green" style="padding:35px 50px;color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Forgot Password</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> New Password</label>
              <input type="password" class="form-control password-validation" id="new-password" placeholder="Enter New password">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Confirm Password</label>
              <input type="password" class="form-control confirm-password-validation" id="confirm-new-password" placeholder="Confirm New password">
            </div>
              <button type="button" id="send-email-confirmation-button" class="btn btn-success btn-block"> <span class="glyphicon glyphicon-envelope"></span> &nbsp;Send Me An Email Confirmation</button>
          </form>
        </div>
        <div class="modal-footer">
          <p id="forgot-password-message"></p>
        </div> 
      </div>
      
    </div>
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
	
			 