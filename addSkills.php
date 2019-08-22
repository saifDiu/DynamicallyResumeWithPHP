<?php
  include 'dbConnection.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
      td{
        padding: 10px;
      }
    </style>
    <meta charset="utf-8">
    <title>Add your Skills</title>
  </head>
  <body>
    <a href="http://localhost/myresume/userpannel/home.php">Home</a>
    <table>
      <tr>
        <th>ID</th>
        <th>Skill Name</th>
        <th>Skill Level</th>
      </tr>
    </table>
    <?php
    $query = 'select * from skills';
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)) {
    //echo "id: " . $row["id"]. " - Name: " . $row["skillName"]. " " . $row["skillLevel"]. "<br>";
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['skillName']."</td>
            <td>".$row['skillLevel']."</td>
            <td><a href='updateSkills.php?id=$row[id] &name=$row[skillName]&level=$row[skillLevel]'>Edit</a></td>
            <td><a href = 'deleteSkills.php?id=$row[id]'>Delete</a></td>
        </tr> <br>";
    }
    ?>
    <br>
    <hr>
    <form class="" action="#" method="post">
      Skill name :
      <input type="text" name="sname" placeholder="Enter your skill name"><br>
      Skill level :
      <input type="text" name="slevel" placeholder="Enter level"><br>
      <input type="submit" name="add" value="Add Skill">
    </form>
    <?php
    if (isset($_POST['add']))
                 {
                     $skillName = $_POST['sname'];
                     $skillLevel = $_POST['slevel'];
                     $insertionQuery = "insert into skills values ('','$skillName','$skillLevel')";
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
