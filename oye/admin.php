<?php
include 'oye/dbConfig.php';
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Email has been successfully sent.';
			
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Some error occured while sending mail.';
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
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
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
              <img src="oye/images/OyeKidhar.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Oye Kidhar Pvt Ltd</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="oye/images/OyeKidhar.png" class="img-circle" alt="User Image">

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
          <img src="oye/images/OyeKidhar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Oye Kidhar Pvt Ltd</p>
        </div>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        
        <li class="treeview active">
		<a href="index.php"><i class="fa fa-link"></i> <span>Dashboard</span></a>
		</li>
		
		<li class="treeview active">
          <a href="#"><i class="fa fa-link"></i> <span>Add Asset</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu menu-open">
            <li><a href="index.php">Add Asset</a></li>
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
		  <a href="oye/forms/upload.php"><i class="fa fa-link"></i> <span>School Bus</span></a>
		  </li>
           
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="col-xs-3">
          <!-- small box -->
     <?php
		 include 'oye/dbConfig.php';
		 $mysql_tb = 'form_verify';
		 $query = $db->query("SELECT * FROM `".$mysql_tb."` WHERE status = 'checked' ORDER by id ");
		 if($query->num_rows > 0){ 
			while($row = $query->fetch_assoc()){
		 
		 echo '	
				<form method="post" action="admin_view.php">
				<div class="form-group col-sm-12">
				<input type="hidden" name="view" value="'.$row['id'].'">
				 <button type="submit" class="btn btn-danger ">View Form ID '.$row['id'].'</button>				                
				</div>
				</form>
			  ';
			}	
		 }else{
			 echo '<h4><label>No new forms found</label></h4>';
		 }
		 ?>
		 </div>
        <!-- ./col -->
        
        <!-- ./col -->
      <!-- /.row -->
      <!-- Main row -->
     
        <!-- Left col -->
          <!-- Custom tabs (Charts with tabs)-->
            <!-- Tabs within a box -->
			
              <form action="send_mail.php" method="post">
            
		  <div class="col-lg-8">
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Email</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" name="message" placeholder="Message"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>
		<?php
		if(!empty($statusMsg)){
					echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
					}
		?>
		
		</div>         
		
        </section>
		</div>
       
      </div>
   

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
