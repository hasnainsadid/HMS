<?php 
  session_start();
  include("./includes/config.php");
  $id = $_REQUEST['id'];

  if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    echo("UPDATE doc_dept_view SET name='$name', designation='$designation', department='$department', email='$email', phone='$phone', status='$status' WHERE doctors_id='$id'");
     
    if ($db->affected_rows) {
      echo "<script>alert('Updated Successfully.')</script>";
      // header();
    }
  }

  $result=$db->query("SELECT * FROM doctors WHERE id='$id'");
  $row = $result->fetch_object();

  $result1 = $db->query("SELECT id, name FROM department");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./dist/img/fevicon.png" type="image/x-icon">
  <title>TrueMedicare Haven | Edit Doctor</title>
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
              <h1>Edit Doctor</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Doctor</li>
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
                    <input type="hidden" name="id" value="<?php echo $row->doctors_id; ?>">
                      <label for="exampleInputEmail1">Doctors's Name</label>
                      <input type="text" name="name" class="form-control form-control-border" id="exampleInputEmail1" value="<?php echo $row->name ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Designation</label>
                      <input type="text" name="designation" class="form-control form-control-border" id="exampleInputPassword1" value="<?php echo $row->designation ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Department</label>
                      <select name="department" class="form-control form-control-border">
                      <?php while($row1 = $result1->fetch_object()): ?>
                        <option value="<?php echo $row1->id?>"><?php echo $row1->name?></option>
                        <?php endwhile; ?>
                      </select>
                      <!-- <input type="text" name="department" class="form-control form-control-border" id="exampleInputEmail1" value="<?php //echo $row->department ?>"> -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control form-control-border" id="exampleInputEmail1" value="<?php echo $row->email ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone Number</label>
                      <input type="text" name="phone" class="form-control form-control-border" id="exampleInputPassword1" value="<?php echo $row->phone ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Status</label>
                      <select name="status" class="form-control form-control-border">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                      </select>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-success m-auto d-block w-25">Submit</button> <br>
                    <a class="btn btn-success m-auto d-block w-25" href="./view_doctors.php">Go to Doctors List</a>
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