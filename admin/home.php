<?php 
session_start();
  include("./includes/config.php");
  $patients = $db->query("SELECT * FROM patients");
  $doctors = $db->query("SELECT * FROM doctors");
  $admin = $db->query("SELECT * FROM admin");
  $department = $db->query("SELECT * FROM department");
  $seat = $db->query("SELECT * FROM seat");
  $available = $db->query("SELECT * FROM seat WHERE status = '0'");
  $income_result = $db->query("SELECT SUM(amount_paid) AS profit FROM income WHERE status='1'");
  $incomes = $income_result->fetch_object();
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
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row mt-2">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-wheelchair"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Patients</span>
                <span class="info-box-number"><?php echo $patients->num_rows; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-md"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Doctors</span>
                <span class="info-box-number"><?php echo $doctors->num_rows; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
          <div class="clearfix hidden-md-up"></div>
          <!-- Administration -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Administrator</span>
                <span class="info-box-number"><?php echo $admin->num_rows; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Department</span>
                <span class="info-box-number"><?php echo $department->num_rows; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-bed"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Available Seat</span>
                <span class="info-box-number"><?php echo $available->num_rows; ?> out of <?php  echo $seat->num_rows; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-dollar-sign"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Income</span>
                <span class="info-box-number">$<?php echo $incomes->profit; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
  </div>
  <!-- /.content-wrapper -->
  <?php include("./includes/footer.php")?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include("./includes/home_footer_link.php");?>

</body>
</html>