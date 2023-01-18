<?php
session_start();
ob_start();
// include "nav1.php";
include 'js.php';
include("main.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>

<body>

    <div class="card bg-light my-5 ">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Recover Your Account</h4>
            <p class="text-center">Please insert new password</p>



            <form action="" method="POST">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="New Password" name="password" required>

                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword"
                        required>

                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Change Password</button>
                </div>
                <p class="text-center">Have an account? <a href="login.php">Log In</a></p>
            </form>
        </article>
    </div>
</body>

</html>

<?php
include 'connection.php';
if (isset($_POST['submit'])) {

    if (isset($_GET['token'])) {

        $token = $_GET['token'];

        $newpassword = $_POST['password'];
        $cpassword = $_POST['cpassword'];


        if ($newpassword === $cpassword) {
            $updatequery = "update user set password='$newpassword',cpassword='$cpassword' where token='$token'";
            $queryrun = mysqli_query($conn, $updatequery);
            if ($queryrun) {
                echo '<script>alert("Password Updated Successfully.......\n Now You can Login")
                window.location.href = "login.php";
                </script>';

                //header('location:login.php');
            } else {

                echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
                <strong>Message! Password Does not Updated</strong> <span id="msg"></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
                header('location:reset_password.php');
            }
        } else {

            echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
            <strong>Message! Password Does not Match</strong> <span id="msg"></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }
    } else {

        echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
        <strong>Message! No Token Found</strong> <span id="msg"></span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }
}
?>