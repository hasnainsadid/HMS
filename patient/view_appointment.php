<?php
session_start();
if (!isset($_SESSION)) {
  header("Location: index.php");
}
include_once("./includes/config.php");
$name = $_SESSION['name'];

$result = $db->query("SELECT * FROM appointment_view WHERE patient = '$name' ORDER BY date DESC;");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./dist/img/fevicon.png" type="image/x-icon">
  <title>TrueMedicare Haven | View Appointment</title>
  <?php include("./includes/view_style_link.php") ?>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include("./includes/top_navbar.php"); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include("./includes/left_sidebar.php") ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>View Appointment</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                <li class="breadcrumb-item active">View Appointment</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover text-center">
                    <thead>
                      <tr>
                        <th style="width: 1.3rem;">Sl No</th>
                        <th>Doctor's Name</th>
                        <th>Date</th>
                        <th>Reason</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sn = 1;
                      while ($row = $result->fetch_object()) : ?>
                        <tr>
                          <td style="width: 1.3rem;"><?php echo $sn;
                              $sn++ ?></td>
                          <td><?php echo $row->doctor ?></td>
                          <td><?php echo $row->date ?></td>
                          <td><?php echo $row->reason ?></td>
                          <td><b><?php echo ($row->status == 1) ? "Approved" : "Pending"; ?></b></td>
                        </tr>
                      <?php endwhile; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include("./includes/footer.php") ?>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php include("./includes/view_admin_footerLink.php") ?>
</body>

</html>