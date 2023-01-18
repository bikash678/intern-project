<?php
session_start();
include 'nav1.php';
include 'js.php';
include("main.php");
if (isset($_POST['submit'])) {
    $login_name = $_POST['lname'];
    $login_password = $_POST['lpassword'];
    if ($login_name != '' && $login_password != '') {
        $sql = "SELECT SN from user where name='$login_name' and password='$login_password'";
        include 'connection.php';
        $result = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($result);

        // If result matched $myusername and $mypassword, table row must be 1 row
        if ($count == 1) {
            $_SESSION['user'] = $login_name;
            header("location: index.php");
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Message! Enter Correct Username and Password.....</strong> </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }
    } else {
        echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
        <strong>Message! All Fields are required</strong> <span id="msg"></span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }
} ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>


</head>

<body>

    <div class="container mt-5">
        <div class="row mt-5 box">
            <div class="col-sm-4 text-center mt-5">
                <img src="img/7.1.jpg" alt="Computer" width="320" height="320" style="border-radius: 50%;">
                <div style="margin-top: 50px;">
                    <a href="register.php" class="edit">Create an account</a> <br>
                    <a href="recover_email.php" class="edit">Forget Password</a>
                </div>

            </div>
            <div class="col-sm-4 offset-sm-1 mt-5 ">
                <h2 class="text-center">Login</h2>
                <div class="login_form">
                    <form action="" method="POST">
                        <i class="fa fa-envelope d-inline-block"></i>
                        <div class="form-group d-inline-block">
                            <input type="text" id="name" class="login" name="lname" placeholder="User Name" />
                        </div>
                        <br>
                        <i class="fa fa-key d-inline-block"></i>
                        <div class="form-group d-inline-block">
                            <input type="password" id="password" class="login" name="lpassword"
                                placeholder="Password" />
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary px-4 mt-4">Login</button>
                    </form>
                </div>

            </div>
        </div>

    </div>

</body>

</html>