<?php include 'dbConnection.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add Work place</title>
</head>
<body>
  <a href="http://localhost/myresume/userpannel/home.php">Home</a>
  <form class="" action="#" method="post">
    Title/Company name :
    <input type="text" name="title" placeholder="Enter your Title & Company name"><br>
    Work Duration :
    <input type="text" name="totalYears" placeholder="Enter Duration in Years"><br>
    Description :
    <input type="text" name="Description" placeholder="Enter Description">
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
