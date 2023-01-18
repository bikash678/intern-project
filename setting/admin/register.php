<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/mystyle.css">
<?php

include("../main.php");
?>
<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($username != '' && $email != '' && $password != '' && $cpassword != '') {



        if ($password == $cpassword) {

            $query = "INSERT INTO adminregister(id,username,email,password,cpassword)values('','$username','$email','$password','$cpassword')";
            include('../connection.php');
            $query_run = mysqli_query($conn, $query);
            header('Location: index.php');
        } else {
            echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
            <strong>Message! Password Does Not Match!!</strong> </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }
    } else {
        echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
            <strong>Message! All Fields are required</strong> </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup </title>
    <?php include '../main.php'; ?>


</head>

<body>

    <div class="container mt-5">
        <div class="row mt-5 box">
            <div class="col-sm-4 offset-sm-2 mt-5 ">
                <h2 class="text-center">Sign Up</h2>
                <div class="signup_form">
                    <form action="" method="POST">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <div class="form-group d-inline-block">
                            <input type="name" id="name" class="login" name="username" placeholder="Name" required />

                        </div>
                        <br>
                        <i class="fa fa-envelope d-inline-block"></i>
                        <div class="form-group d-inline-block">
                            <input type="email" id="email" class="login" name="email" placeholder="Email ID" required />

                        </div>
                        <br>

                        <i class="fa fa-key d-inline-block"></i>
                        <div class="form-group d-inline-block">
                            <input type="password" id="password" class="login" name="password" placeholder="Password"
                                required />
                        </div>
                        <br>
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <div class="form-group d-inline-block">
                            <input type="password" id="rpassword" class="login" name="cpassword"
                                placeholder="Confirm your Password" required />
                        </div>
                        <br>
                        <button type="submit" value="submit" name="submit"
                            class="btn btn-info px-4 mt-4">Register</button>
                    </form>
                </div>

            </div>
            <div class="col-sm-3 text-center mt-5 offset-sm-1">
                <img src="../img/4.png" alt="Computer" width="350" height="350" style="border-radius: 50%;">
                <div style="margin-top: 50px;">
                    <a href="index.php" class="edit">I am already member</a>
                </div>

            </div>
        </div>

    </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/fontawesome.all.min.js"></script>
</body>

</html>