<?php 
session_start();
include("./includes/config.php");
$result = $db->query("SELECT * FROM doctors");
if (isset($_REQUEST['submit'])) {
  extract($_REQUEST);
  $p_id = $_SESSION['id'];
  $db->query("INSERT INTO `appointment`(`id`, `p_id`, `date`, `reason`, `doc_id`, `status`) VALUES(NULL, '$p_id', '$date', '$reason', '$doctor', '0')");
  if ($db->affected_rows) { 
    header("Location: view_appointment.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./dist/img/fevicon.png" type="image/x-icon">
  <title>TrueMedicare Haven | Request Appointment</title>
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
              <h1>Request Appointment</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Request Appointment</li>
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
                <form method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Doctor's Name</label>
                      <select name="doctor" class="form-control form-control-border">
                        <option selected disabled>Select Doctor</option>
                        <?php while($row = $result->fetch_object()):?>
                        <option value="<?php echo $row->id?>"><?php echo $row->name; ?></option>
                        <?php endwhile; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Appointment Date</label>
                      <input type="date" name="date" class="form-control form-control-border" id="exampleInputEmail1">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Reason</label>
                      <input type="text" name="reason" class="form-control form-control-border" id="exampleInputPassword1">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-success m-auto d-block w-25">Submit</button> <br>
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