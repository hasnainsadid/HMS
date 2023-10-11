<?php 
  session_start();
  include("./includes/config.php");
  $id = $_REQUEST['id'];
  if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $db->query("UPDATE patients SET name='$name', address='$address', dob='$dob', gender='$gender', email='$email', phone='$phone' WHERE id = '$id'");

    if ($db->affected_rows) {
      echo "<script>alert('Updated Successfully.')</script>";
    }

  }
  $result = $db->query("SELECT * FROM patients WHERE id = '$id'");
  $row = $result->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./dist/img/fevicon.png" type="image/x-icon">
  <title>TrueMedicare Haven | Edit Patient</title>
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
              <h1>Edit Patients</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Patients</li>
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
                    <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Patient's Name</label>
                      <input type="text" name="name" class="form-control form-control-border" id="exampleInputEmail1" value="<?php echo $row->name ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <input type="text" name="address" class="form-control form-control-border" id="exampleInputPassword1" value="<?php echo $row->address ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Date of Birth</label>
                      <input type="date" name="dob" class="form-control form-control-border" id="exampleInputEmail1" value="<?php echo $row->dob ?>">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" <?php echo ($row->gender == "Male")? "checked": "" ?>>
                        <label class="form-check-label" for="exampleRadios1">
                          Male
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female" <?php echo ($row->gender == "Female")? "checked": "" ?>>
                        <label class="form-check-label" for="exampleRadios2">
                          Female
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control form-control-border" id="exampleInputEmail1" value="<?php echo $row->email ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone Number</label>
                      <input type="text" name="phone" class="form-control form-control-border" id="exampleInputPassword1" value="<?php echo $row->phone ?>">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-success m-auto d-block w-25">Submit</button> <br>
                    <a class="btn btn-success m-auto d-block w-25" href="./view_patients.php">Go to Patients List</a>
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