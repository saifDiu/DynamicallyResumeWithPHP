<<?php
  include 'dbConnection.php';
  $id=$_GET['id'];
  $result = mysqli_query($conn, "DELETE FROM skills WHERE id=$id");
  header("Location:addSkills.php");
 ?>
