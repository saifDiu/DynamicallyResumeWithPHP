<?php 
session_start();
unset($_SESSION["email"]);
unset($_SESSION["password"]);
header("Location:http://localhost/myResume");
session_destroy();

?>