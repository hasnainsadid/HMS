<?php 
  include("./includes/config.php");
  $id = $_REQUEST['id'];
  $db->query("DELETE FROM doctors WHERE id='$id'");
  if ($db->affected_rows) {
    header("Location: ./view_doctors.php");
  }
?>