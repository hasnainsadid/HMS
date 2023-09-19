<?php 
session_start();
  include("./includes/config.php");
  $id = $_SESSION['id'];
  $appointment = $db->query("SELECT * FROM appointment WHERE p_id = '$id'");
  $approve_appointment = $db->query("SELECT * FROM appointment WHERE p_id = '$id' AND status = '1'");
  $patients = $db->query("SELECT * FROM patients");
  $doctors = $db->query("SELECT * FROM doctors");
  $admin = $db->query("SELECT * FROM admin");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./dist/img/fevicon.png" type="image/x-icon">
  <title>TrueMedicare Haven | Dashboard</title>
  <?php include("./includes/home_style.php") ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include("./includes/preloader.php");?>

  <!-- Navbar -->
  <?php include("./includes/top_navbar.php"); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include("./includes/left_sidebar.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $_SESSION['name'] ?>, Welcome to the Dashboard.</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content mt-3">
      <div class="container-fluid">
        <div class="row">
        <!-- appointment goes here -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-calendar-alt"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><a href="./view_appointment.php">Patient Appointment</a></span>
                <span class="info-box-number"><?php echo $appointment->num_rows; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-calendar-alt"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><a href="./view_appointment.php">Approved Appointment</a></span>
                <span class="info-box-number"><?php echo $approve_appointment->num_rows; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /appointment goes here -->
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("./includes/footer.php")?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include("./includes/home_footer_link.php");?>

</body>
</html>
