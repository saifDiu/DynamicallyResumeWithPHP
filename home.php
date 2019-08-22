<?php
 session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #4CAF50;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
</head>
<body>
  <?php
      if($_SESSION["name"])
      ?>
          <h2 align="center">Welcome <?php echo $_SESSION["name"]; ?></h2>
          <h3 align="center">click here to log out <a href = "logout.php">Logut</h3>
<div align="center">
<ul align="center">
  <li><a href="http://localhost/myResume/addSkills.php">Add new Skills</a></li>
  <li><a href="http://localhost/myResume/addSkills.php">Add languages</a></li>
  <li><a href="http://localhost/myResume/addSWorkplace.php">Add new Workplace</a></li>
  <li><a href="http://localhost/myResume/addEducation.php">About</a></li>
</ul>
</div>
</body>
</html>
