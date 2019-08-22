
<?php
include 'serverConfig.php';

?>
function checkPassword()
{
   var password = document.forms["registration"]["password"].value;
    var conpass = document.forms["registration"]["repass"].value;
    var back = document.getElementById('conpass1');
    var gcolor =  "#66cc66";
    var bcolor =   "#ff6666";
    if( password == conpass)
    {
       back.style.backgroundColor = "#66cc66";
    }
    else
    {
        back.style.backgroundColor = "#ff6666";
        alert("Password mismatched!");
    }
}

function deleteAccount()
{
  $query = "delete from registeredUser where email = <?php $_SESSION["email"]; ?>";
  $executeQuery = mysqli_query($con,$query);

  if ($executeQuery)
  {
      alert('Account deleted');
      header("Location:index.php");

  }


function checkage()
{
    var age = document.forms["registration"]["age"].value;
    if (age < 18)
    {
        alert("Sorry! You are underage.");
    }
}
