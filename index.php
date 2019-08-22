<?php
include 'serverConfig.php';

?>

<!DOCTYPE html5>
<html lang="en">
    <head>
        <meta charset="utf8" />
        <title> Login form </title>
        <script src="main.js"></script>
        <link href="style.css" rel="stylesheet" >

    </head>
    <body>

        <div class="flex-container">
            <div class="control">
                <h2>Login </h4>

            <form action="#" method="POST">
                            <input type="email" name="email" placeholder="Enter your email" required><br>

                        <input type="password" name="password" placeholder="Enter your password" required>
                        <input name="log" type="submit" value="Login">
                        <h3>Not registered?Create Account</h3>
                        <img src="direct.png" height="80px" width="150px;" alt="">
                    </form>
                    <?php

                    session_start();
                    $error = "";
                        if (isset($_POST['log']))
                        {
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $query =mysqli_query($con,"select * from registeredUser where email = '$email' and _password = '$password'");
                            $checkData = mysqli_fetch_array($query);
                            if(is_array($checkData))
                            {
                                $_SESSION["name"] = $checkData['full_name'];
                                $_SESSION["email"] = $checkData['email'];
                                $_SESSION["password"] = $checkData['_password'];
                            }
                            else {
                                echo "
                                <script>
                                alert('Invalid email or Password');
                             </script>
                             ";
                            }
                            if(isset($_SESSION['name']))
                            {
                                header("Location:home.php");
                            }
                        }
                        else
                        {

                        }

                    ?>
            </div>
            <div class="form-control">
                <h2>Registration</h2>
                <form name="registration" action="#" method="POST" >

                        <input type="text" placeholder="Full name" name="fullname" size="10" minlength="5" maxlength="15"  required>
                  <br>

                        <input type="email" placeholder="Email" name="email" required>

                   <input type="password" name="password"  id="pass" placeholder="Enter password" >
                   <br>
                   <input type="password" name="repass"   id="conpass1"  placeholder="Retype password" onchange="return checkPassword();">

                   <br>
                   <input type="number" name="age" placeholder="Age" onchange="return checkage();" required>
                    <br>
                    <select   name="religion" required>
                            <option value="">Religion</option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">hindu</option>
                            <option value="Christian">christian</option>

                          </select>
                          <br>
                          <input type="radio" name="gender" value="Male" required>Male
                          <input type="radio" name="gender" value="Female" required>Female <br>
                          <input type="checkbox" name="terms" id="check" value="terms" required > <b>I agree with the terms & conditions</b> <br>

                    <div class="submission">
                    <input  name="reg"   type="submit" value="Signup"   />
                    </div>
                </form>

                <?php

                    if (isset($_POST['reg']))
                    {
                        $full_name = $_POST['fullname'];
                        $email = $_POST['email'];
                        $_password = $_POST['password'];
                        $conpass = $_POST['repass'];
                        $age = $_POST['age'];
                        $religion = $_POST['religion'];
                        $gender = $_POST['gender'];

                        if ($_password == $conpass)
                        {
                            $query = "select * from registeredUser where email = '$email'";
                            $executeQuery = mysqli_query($con,$query);

                            if ($executeQuery)
                            {
                                if(mysqli_num_rows($executeQuery) > 0)
                                {
                                    echo "
                                    <script>
                                    alert('This email is already taken');
                                    </script>

                                    ";
                                }

                                else
                                {
                                    $id="";
                                    $insertionQuery = "insert into registeredUser values ('','$full_name','$email','$_password','$age','$religion','$gender')";
                                    $insertValue = mysqli_query($con,$insertionQuery);
                                    if ($insertValue)
                                    {
                                        echo "
                                        <script>
                                            alert('Registration Successfull !');

                                        </script>

                                        ";
                                    }
                                    else
                                    {
                                        echo "
                                        <script>
                                            alert('Registration Unsuccessfull !');

                                        </script>

                                        ";

                                    }

                                }
                            }
                            else
                            {
                                echo "
                                <script>
                                    alert('Connection failed !');
                                    window.location.href='index.php';
                                </script>

                                ";
                            }
                        }
                        else
                        {
                                echo "
                                <script>
                                    alert('Password didnot match');
                                </script>


                                ";
                        }

                    }
                    else
                    {

                    }
                    ?>
            </div>
        </div>
    </body>
</html>
