<!-- konovabei somikoron mile na -->
<?php 
session_start();
  include('./includes/config.php');
  if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $result = $db->query("SELECT password FORM users WHERE email = '$email'");
    $row = $result->fetch_assoc();

    if (password_verify($o_pass, $row['password'])) {
      if ($n_pass == $c_pass) {
        $hashedPassword = password_hash($n_pass, PASSWORD_BCRYPT);
        $db->query("UPDATE users SET password = '$hashedPassword' WHERE email = '$email'");

        echo "updated";
      } else{
        echo "confirm password not match";
      }
    } else{
      echo "Old password not match";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./dist/img/fevicon.png" type="image/x-icon">
  <title>TrueMedicare Haven | Change Password</title>
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
              <h1>Change Password</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Change Password</li>
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
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control form-control-border" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Old Password</label>
                      <input type="password" name="o_pass" class="form-control form-control-border" id="exampleInputEmail1">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">New Password</label>
                      <input type="password" name="n_pass" class="form-control form-control-border" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Confirm Password</label>
                      <input type="password" name="c_pass" class="form-control form-control-border" id="exampleInputPassword1">
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