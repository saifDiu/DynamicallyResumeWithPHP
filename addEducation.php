<?php include 'dbConnection.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add Education</title>
</head>
<body>
  <a href="http://localhost/myresume/userpannel/home.php">Home</a>
  <form class="" action="#" method="post">
    institutionName:
    <input type="text" name="institutionName" placeholder="Enter your Title & Company name"><br>
    Years of Education:
    <input type="text" name="Duration" placeholder="Enter Duration in Years"><br>
    Description :
    <input type="text" name="degree" placeholder="Enter Degree name">
    <input type="submit" name="add" value="Add Work place">

  </form>
  <?php
  if (isset($_POST['add']))
               {
                   $title = $_POST['title'];
                   $totalYears = $_POST['totalYears'];
                   $description = $_POST['Description'];
                   $insertionQuery = "insert into workExperience values ('$title','$totalYears','$description')";
                                $insertValue = mysqli_query($conn,$insertionQuery);
                                if ($insertValue)
                                {
                                    echo "
                                    <script>
                                        alert('Workplace added Successfull !');
                                    </script>

                                    ";
                                }
                               }
   ?>
</body>
</html>
