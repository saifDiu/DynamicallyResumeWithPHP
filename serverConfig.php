<?php

$database_name = 'myResume';
$con = mysqli_connect('localhost','root','') or die ('Database is not connected');

mysqli_select_db($con,$database_name);

?>