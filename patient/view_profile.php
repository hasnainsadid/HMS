<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./dist/img/fevicon.png" type="image/x-icon">
  <title>TrueMedicare Haven | Patient Profile</title>
  <?php include("./includes/add_patients_style_link.php") ?>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include("./includes/top_navbar.php"); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include("./includes/left_sidebar.php"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Patient Profile</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="d_home.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Patient Profile</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Patient Name</label>
                      <input type="text" name="name" class="form-control form-control-border" id="exampleInputEmail1" value="<?php echo $_SESSION['name']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="email" name="email" class="form-control form-control-border" id="exampleInputPassword1" value="<?php echo $_SESSION['email']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <input type="text" name="address" class="form-control form-control-border" id="exampleInputPassword1" value="<?php echo $_SESSION['address']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Gender</label>
                      <input type="text" name="gender" class="form-control form-control-border" id="exampleInputPassword1" value="<?php echo $_SESSION['gender']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Blood Group</label>
                      <input type="text" name="blood" class="form-control form-control-border" id="exampleInputPassword1" value="<?php echo $_SESSION['blood_grp']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Status</label>
                      <input type="text" name="status" class="form-control form-control-border" id="exampleInputPassword1" value="<?php echo $_SESSION['status'] == 1 ? 'Active' : 'Inactive'?>" readonly>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.content-wrapper -->
    <?php include("./includes/footer.php"); ?>

  </div>
  <!-- ./wrapper -->

  <?php include("./includes/add_patients_footer_link.php") ?>
  </script>
</body>

</html>