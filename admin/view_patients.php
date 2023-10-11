<?php
session_start();
if (!isset($_SESSION)) {
  header("Location: index.php");
}
include_once("./includes/config.php");


$result = $db->query("SELECT * FROM doc_patient_view");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./dist/img/fevicon.png" type="image/x-icon">
  <title>TrueMedicare Haven | View Patients</title>
  <?php include("./includes/view_style_link.php") ?>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include("./includes/top_navbar.php"); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include("./includes/left_sidebar.php") ?>

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Patients</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
              <li class="breadcrumb-item active">View Patients</li>
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
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                        <th>ID No</th>
                        <th>Patients's Name</th>
                        <th>Address</th>
                        <th>Doctor</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      while ($row = $result->fetch_object()) :
                      ?>
                        <tr>
                          <td><?php echo $row->id; ?></td>
                          <td><?php echo $row->name ?></td>
                          <td><?php echo $row->address ?></td>
                          <td><?php echo $row->doctor?></td>
                          <td>
                            <a title="View" class="btn-outline-primary btn" href="./view_details.php?id=<?php echo $row->id; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>

                            <a title="Edit" class="btn-outline-success btn my-1" href="./edit_patient.php?id=<?php echo $row->id; ?>"><i class="fas fa-edit"></i></a>

                            <a title="Delete" class="btn-outline-danger btn" href="./del_patient.php?id=<?php echo $row->id; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                          </td>
                        </tr>
                      <?php endwhile; ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    
    <?php include("./includes/footer.php") ?>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php include("./includes/view_admin_footerLink.php") ?>
</body>

</html>