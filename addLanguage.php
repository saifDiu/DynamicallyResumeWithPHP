  <?php include 'dbConnection.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add language</title>
  </head>
  <body>
    <a href="http://localhost/myresume/userpannel/home.php">Home</a>
    <form class="" action="#" method="post">
      Language name :
      <input type="text" name="languageName" placeholder="Enter your Lanuage name"><br>
      Skill level :
      <input type="text" name="proficiencyLevel" placeholder="Enter level"><br>
      <input type="submit" name="add" value="Add Language">

    </form>
    <?php
    if (isset($_POST['add']))
                 {
                     $languageName = $_POST['languageName'];
                     $proficiencyLevel = $_POST['proficiencyLevel'];
                     $insertionQuery = "insert into _language values ('','$languageName','$proficiencyLevel')";
                                  $insertValue = mysqli_query($conn,$insertionQuery);
                                  if ($insertValue)
                                  {
                                      echo "
                                      <script>
                                          alert('Skills added Successfull !');
                                      </script>

                                      ";
                                  }
                                 }
     ?>
  </body>
</html>
