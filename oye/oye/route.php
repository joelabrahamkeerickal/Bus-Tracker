<?php
include 'dbConfig.php';

if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Route list has been added successfully.';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OyeSample</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>O</b>K</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Oye</b>Kidhar</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/OyeKidhar.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Oye Kidhar Pvt Ltd</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/OyeKidhar.png" class="img-circle" alt="User Image">

                <p>
                  Oye Kidhar Pvt Ltd
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/OyeKidhar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Oye Kidhar Pvt Ltd</p>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        
        <li class="treeview active">
		<a href="../index.php"><i class="fa fa-link"></i> <span>Dashboard</span></a>
		</li>
		
		<li class="treeview active">
          <a href="#"><i class="fa fa-link"></i> <span>Add Asset</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu menu-open">
            <li><a href="#">Add Asset</a></li>
            <li><a href="#">Manage Assets</a></li>
          </ul>
		</li>
		  
		  <li class="treeview active">
		   <a href="#"><i class="fa fa-link"></i> <span>Add Contact</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
           </a>
          <ul class="treeview-menu menu-open">
            <li><a href="#">Add Contact</a></li>
            <li><a href="#">Manage Contacts</a></li>
          </ul> 
		  </li>
		  
		  <li class="treeview active">
		  <a href="#"><i class="fa fa-link"></i> <span>Send Tracking</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu menu-open">
            <li><a href="#">Add</a></li>
            <li><a href="#">Manage</a></li>
          </ul> 
		  </li>
		  
		  <li class="treeview active">
		  <a href="#"><i class="fa fa-link"></i> <span>Live Tracking</span></a>
		  </li>
		 </ul>
			 <ul class="sidebar-menu" >
		  <li class="treeview active">
		  <a href="forms/upload.php"><i class="fa fa-link"></i> <span>School Bus</span></a>
		  </li>
           
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <?php if(!empty($statusMsg)&&($statusMsg=='Route list has been added successfully.')){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';         
		echo '<section class="content">
				  <div class="row">
				  <div class="col-lg-12">
				  <div class="box box-primary">
				  <div class="box-header with-border ">
				  <h1 class="box-title"><label>All Routes</label></h1>
				  </div>
				  <div class="box-body">
				  <table class="table table-bordered">
					<thead>
                    <tr>
                      <th>Latitude</th>
                      <th>Longitude</th>
                      <th>Time From</th>
                      <th>Time To</th>
                      <th>Status</th>
                    </tr>
					</thead>
					<tbody>';
					$mysql_tb = 'routes';

                    $query = $db->query("SELECT * FROM `".$mysql_tb."` ORDER BY id DESC");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ 
                    ?>
                    <tr>
                      <td><?php echo $row['lat']; ?></td>
                      <td><?php echo $row['lon']; ?></td>
                      <td><?php echo $row['time_from']; ?></td>
                      <td><?php echo $row['time_to']; ?></td>
                      <td><?php echo ($row['status'] == '1')?'Enabled':'Disabled'; ?></td>
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="5">No member(s) found.....</td></tr>
                    <?php
                     } 
					echo '</tbody></table></div></div></div></div></section>';
					}
					else if(!empty($statusMsg)&&($statusMsg=='Please upload a valid CSV file.')){
					echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
					}
	?>
    <!-- Main content -->
    <section class="content">
	   <div class="row">
        <!-- left column -->
        <div class=" col-lg-12 ">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border ">
              <h1 class="box-title"><label>Add Route List</label></h1>
            </div>
			
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="import_route.php" method="post" enctype="multipart/form-data" id="importFrm">
              <div class="box-body">
			  <div class="row">
			  <div class="col-sm-1"></div>
                <div class="form-group col-sm-2">
                    <h4><label>Bus Number*</label></h4>					
				</div>
				<div class="form-group col-sm-3">
                  <select class="form-control">
                    <option>MH 04 BE 4125</option>
                    <option>MH 04 AC 4126</option>
                    <option>MH 04 DF 4127</option>
                    <option>MH 04 GH 4128</option>
                  </select>
                </div>
				</div>
				<div class="row">
				<div class="col-sm-1"></div>
				<div class="form-group col-sm-1">
                    <h4><label>Shift*</label></h4>					
				</div>
				<div class="col-sm-1"></div>
				<div class="form-group col-sm-3">
                  <select class="form-control">
                    <option>01</option>
                    <option>02</option>
                  </select>
                </div>
				</div>
				<div class="row">
			  <div class="col-sm-1"></div>
                <div class="form-group col-sm-2">
                    <h4><label>Route Name*</label></h4>					
				</div>
				<div class="form-group col-sm-3">
                  <select class="form-control">
                    <option>Route_01</option>
                    <option>Route_02</option>
                    <option>Route_03</option>
                    <option>Route_04</option>
					<option>Route_05</option>
                  </select>
                </div>
				</div>
				
				<div class="row">
			  <div class="col-sm-1"></div>
				<div class="form-group col-sm-2">
                  <h4><label for="exampleInputFile">File input*</label></h4>
                  </div>
				<div class="form-group col-sm-4">
				  <input type="file" name="file">
				
                  <p class="help-block">Add a CSV format file here.</p>
                </div>
				</div>
			
				
				<div class="row">
			<div class="col-sm-1"></div>
                <div class="form-group col-sm-2">
                    <h4><label>Make it public*</label></h4>					
				</div>
				<div class="form-group col-sm-1">
                  
                <div class="radio">
                    <label><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>Yes</label>
				
					<label><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>No</label>
                  </div>
                
			    </div>
                </div>
				</div>
				
			  <div class="box-footer">
				<div class=" col-lg-5"></div>
                <button type="submit" name="importSubmit" class=" btn btn-primary" >Save & Upload</button>				
              </div>			  

			  </form>
				</div>
			  </div>
    </section>
</div>
</div>


<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
