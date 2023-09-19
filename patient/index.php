<?php
if (isset($_REQUEST['submit'])) :
  extract($_REQUEST);
  $pass = sha1($password);
  include_once("./includes/config.php");
  $result = $db->query("SELECT * FROM patients WHERE email='$email' AND password='$pass'");
  $row = $result->fetch_object();
  session_start();
  if ($result->num_rows) {
    $_SESSION['id'] = $row->id;
    $_SESSION['name'] = $row->name;
    $_SESSION['email'] = $row->email;
    $_SESSION['address'] = $row->address;
    $_SESSION['gender'] = $row->gender;
    $_SESSION['blood_grp'] = $row->blood_grp;
    $_SESSION['status'] = $row->status;
    header("Location: home.php");
  } else {
    $_SESSION['msg'] = "Invalid Email or Password";
    header("Location: index.php");
  }
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="shortcut icon" href="./dist/img/fevicon.png" type="image/x-icon">
  <title>Login</title>
</head>

<body>
  <div class="container">
    <div class="row m-auto w-25">
      <div class="col-md-12">
        <h2 class="text-center mt-5 mb-3">Login Here</h2>
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

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>