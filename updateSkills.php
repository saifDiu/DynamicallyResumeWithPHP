<?php
$id=$_GET['id'];
$name=$_GET['name'];
$level=$_GET['level'];
include 'dbConnection.php';
 ?>
 <br>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update your skills</title>
  </head>
  <body style="background-color:pink;">
    <h3 align="center">Edit your previous skills</h3>
    <form class="" action="#" method="post" align="center">
      Skill Name :
      <input type="text" name="skillsName" value="<?php echo $_GET['name'];
  ?>"><br>
      Skill Level:
      <input type="text" name="skillLevel" value="<?php echo $_GET['level'];
  ?>"><br>
      <input type="submit" name="Update" value="update">
    </form>
    <?php

    if (isset($_POST['Update']))
                       {
                           $skillName = $_POST['skillsName'];
                           $skillLevel = $_POST['skillLevel'];
                           //$id = $_POST['id'];
                           $query =mysqli_query($conn, "UPDATE skills SET skillName=".$skillName.", skillLevel=".$skillLevel." WHERE id='1'");
                           $checkData = mysqli_fetch_array($query);
                           if(($checkData))
                           {
                             echo "
                             <script>
                             alert('Data updated successfully');
                          </script>
                          ";
                           }
                         }
                         ?>

  </body>
</html>
