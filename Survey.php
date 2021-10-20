<?php 
	//include 'php/session.php'
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add member</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
 <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
       <?php  echo 'Back To Main'; ?>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

   <div class="navbar-custom-menu">
       
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <!--<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>-->
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    <section class="content">
	
<form method="POST" action="Admin/Control/Add_PersonalDetails.php">
             <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Personal Details</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body col-md-12">
          <div class="row">
            <div class="col-md-6">
               
			 
              <!-- /.form-group -->
			    <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" class="form-control" id="FirstName" name="FirstName" required>
                </div>
				<div class="form-group">
                  
                  <label for="exampleInputEmail1">Surname</label>
                  <input type="Text" class="form-control" id="Surname" name="Surname" required>
                </div>
				
				 
			  	<div class="form-group">
                  
                  <label for="exampleInputEmail1">Age</label>
                  <input type="Text"  pattern=".{0}|.{2,2}" required title="Please make sure the id Number is Valid)"  class="form-control" id="ID_Number" name="Age"placeholder="Enter valid number" required>
                </div>
			  
			
			 
                  
            </div>  <div class="col-md-6">
               
			 
              <!-- /.form-group -->
			    <div class="form-group">
                  <label for="exampleInputEmail1">Contact_Number </label>
                  <input type="text" class="form-control" id="FirstName" name="Contact" required>
                </div>
				<div class="form-group">
                  
                  <label for="exampleInputEmail1">Favourate Food</label>
                  <select class="form-control select2" style="width: 100%;" name="Food" required >
					<option selected="selected" placeholder="Renewal"></option>
					
						<?php include 'Admin/Control/Food.php'; ?>
					
					</select>
                </div>
				
				 
			  	<div class="form-group">
                  
                  <label for="exampleInputEmail1">Date</label>
                  <input type="Text"  title="Please make sure the id Number is Valid)"  class="form-control" id="ID_Number" name="Date1" placeholder="Enter valid number" required>
                </div>
			  
			
			  
                  
            </div>
            <!-- /.col -->
            <div class="col-md-6">
             
			 
			  <div class="form-group">
                  
                  <label for="exampleInputEmail1">I_Like_To_Eat_Out</label>
                   <select class="form-control select2" style="width: 100%;" name="Eat_Out" required >
					<option selected="selected" placeholder="Renewal"></option>
					
						<?php include 'Admin/Control/FoodRates.php'; ?>
					
					</select>  </div>
			 
				<div class="form-group">
                  
                  <label for="exampleInputEmail1">I_Like_To_Watch_Movies</label>
				    <select class="form-control select2" style="width: 100%;" name="Movies" required >
					<option selected="selected" placeholder="Renewal"></option>
					
						<?php include 'Admin/Control/FoodRates.php'; ?>
					
					</select>
                </div>
             
            		
				 
				
                <!-- /.input group -->
              </div>  <div class="col-md-6">
             
			 
			  <div class="form-group">
                  
                  <label for="exampleInputEmail1">I_Like_To_Watch_TV</label>
                   
				   <select class="form-control select2" style="width: 100%;" name="Watch_TV" required >
					<option selected="selected" placeholder="Renewal"></option>
					
						<?php include 'Admin/Control/FoodRates.php'; ?>
					
					</select>
					
				</div>
			 
				<div class="form-group">
                  
                  <label for="exampleInputEmail1">I_Like_To_Listen_to_Radio</label>
				     <select class="form-control select2" style="width: 100%;" name="Radio" required >
					<option selected="selected" placeholder="Renewal"></option>
					
						<?php include 'Admin/Control/FoodRates.php'; ?>
					
					</select>
                </div>
             
            		
				 
				
                <!-- /.input group -->
              </div>
              <!-- /.form-group -->
			 
			  <div class="box-footer">
               
                <button class="btn btn-info  pull-right" type="submit" >Submit</button>
              </div>
			  
			  
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        
      </div>
     </form>
    </section>
	</div>
  </div>
  <!-- /.content-wrapper -->

<?php include 'php/admin/footer.php'?>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>
