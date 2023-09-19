<?php
session_start();
include("./includes/config.php");
$result = $db->query("SELECT * FROM `doctors`");
if (isset($_REQUEST["submit"])) {
  extract($_REQUEST);
  $db->query("INSERT INTO `patients`(`id`, `name`, `address`, `dob`, `gender`, `blood_grp`, `email`, `password`, `phone`, `d_id`) VALUES ('NULL','$name','$address','$dob','$gender', '$blood', '$email','$password','$phone', '$doctor')");
  if ($db->affected_rows) {
    header("Location: view_patients.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./dist/img/fevicon.png" type="image/x-icon">
  <title>TrueMedicare Haven | Add Patients</title>
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
              <h1>Add Patients</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item active">Add Patients</li>
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
                      <label for="exampleInputEmail1">Patient's Name</label>
                      <input type="text" name="name" class="form-control form-control-border" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <input type="text" name="address" class="form-control form-control-border" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Date of Birth</label>
                      <input type="date" name="dob" class="form-control form-control-border" id="exampleInputEmail1">
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Gender</label>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male">
                              <label class="form-check-label" for="exampleRadios1">
                                Male
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female">
                              <label class="form-check-label" for="exampleRadios2">
                                Female
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-7">
                          <div class="form-group">
                            <label for="exampleInputPassword1">Blood Group</label>
                            <select name="blood" class="form-control form-control-border w-75">
                              <option selected disabled>Select Blood Group</option>
                              <option value="A+">A+</option>
                              <option value="B+">B+</option>
                              <option value="AB+">AB+</option>
                              <option value="O+">O+</option>
                              <option value="A-">A-</option>
                              <option value="B-">B-</option>
                              <option value="AB-">AB-</option>
                              <option value="O-">O-</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control form-control-border" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input type="password" name="password" class="form-control form-control-border" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone Number</label>
                      <input type="text" name="phone" class="form-control form-control-border" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Doctor Name</label>
                      <select name="doctor" class="form-control form-control-border">
                        <option selected disabled>Select Doctor</option>
                        <?php while ($row = $result->fetch_object()) : ?>
                          <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                        <?php endwhile; ?>
                      </select>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-success m-auto d-block w-25">Submit</button>
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