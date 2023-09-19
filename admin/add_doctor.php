<?php 
  include("./includes/config.php");
  session_start();
  if (isset($_REQUEST["submit"])) {
    extract($_REQUEST);
    $password = sha1($password);
    $db->query("INSERT INTO doctors(`id`, `name`, `designation`, `email`, `password`, `phone`, `status`, `d_id`) VALUES (NULL, '$name', '$designation', '$email', '$password', '$phone', '$status',  '$department')");
    
    if ($db->affected_rows) {
      header("Location: view_doctors.php");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./dist/img/fevicon.png" type="image/x-icon">
  <title>TrueMedicare Haven | Add Doctors</title>
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
              <h1>Add Doctors</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item active">Add Doctors</li>
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
                      <label for="exampleInputEmail1">Doctors's Name</label>
                      <input type="text" name="name" class="form-control form-control-border" id="exampleInputEmail1" value="Dr. ">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Designation</label>
                      <input type="text" name="designation" class="form-control form-control-border" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Department</label>
                      <?php 
                        $result = $db->query("SELECT id, name FROM department");
                      ?>
                      <select name="department" class="form-control form-control-border" id="exampleInputEmail1">
                        <option disabled selected>Select One</option>
                        <?php while($row = $result->fetch_object()) : 
                            $SESSION['d_id'] = $row->id;
                            $SESSION['d_name'] = $row->name;
                          ?>
                        <option value="<?php echo $SESSION['d_id']  ?>"><?php echo $SESSION['d_name']  ?></option>
                        <?php endwhile; ?>
                      </select>
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
                      <label for="exampleInputPassword1">Status</label>
                      <select name="status" class="form-control form-control-border" id="exampleInputEmail1">
                        <option selected disabled>Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
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