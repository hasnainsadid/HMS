<?php
session_start();

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $pass = sha1($password);
    include_once("./includes/config.php");
    $result = $db->query("SELECT * FROM admin WHERE email='$email' AND password='$pass' AND status='1'");
    $row = $result->fetch_object();
    
    if ($result->num_rows) {
        $_SESSION['name'] = $row->name;
        $_SESSION['email'] = $row->email;
        $_SESSION['img'] = $row->img;
        $_SESSION['status'] = $row->status;
        header("Location: home.php");
    } else {
        $_SESSION['msg'] = "Invalid Email or Password";
        header("Location: index.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TrueMedicare Haven | Login</title>
  <link rel="shortcut icon" href="./dist/img/fevicon.png" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/maicons.css">
  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="./assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="./assets/css/theme.css">
  <link rel="stylesheet" href="./doctor/plugins/fontawesome-free/css/all.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-2">
          <a href="index.php" class="navbar-icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        </div>
        <div class="col-10">
          <a class="navbar-brand" href="index.php"><span class="text-primary">TrueMedicare Haven</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="page-hero bg-image overlay-dark" style="background-image: url(./assets/img/bg_image_1.jpg); background-position: bottom; height: 88.6vh;">
    <div class="hero-section">
      <div class="container wow zoomIn">
        <div class="row m-auto">
          <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
            <form method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
              </div>
              <button type="submit" name="submit" class="btn btn-primary m-auto d-block w-50">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="./assets/js/jquery-3.5.1.min.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="./assets/vendor/wow/wow.min.js"></script>
  <script src="./assets/js/theme.js"></script>
</body>

</html>