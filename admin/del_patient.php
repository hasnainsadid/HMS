<?php 
  include("./includes/config.php");
  $id = $_REQUEST['id'];
  $db->query("DELETE FROM patients WHERE id='$id'");
  if ($db->affected_rows) {
    header("Location: ./view_patients.php");
  }
?>