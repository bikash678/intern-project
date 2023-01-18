<?php
session_start();
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
    <title>Forget Password</title>
</head>

<body>

    <div class="card bg-light my-5 ">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Recover Your Account</h4>
            <p class="text-center">Please fill email</p>

            <form action="" method="POST">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email address" name="email" required>

                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Send Mail</button>
                </div>
                <p class="text-center">Have an account? <a href="login.php">Log In</a></p>
            </form>
        </article>
    </div>
</body>

</html>

<?php
include('connection.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $emailquery = "select * from user where email='$email'";
    $query_run = mysqli_query($conn, $emailquery);
    $emailcount = mysqli_num_rows($query_run);

    if ($emailcount) {
        $userdata = mysqli_fetch_array($query_run);

        $username = $userdata['name'];
        $token = $userdata['token'];
        //Start sending mail
        //$to = "$email";
        $subject = 'Password Reset';
        $message = "Hi $username \n Click here to reset your password 
        http://localhost:8080/newelearning/elearning/reset_password.php?token=$token";
        //http://localhost/newelearning/elearning/reset_password.php?token=$token ";
        $header = "From: Academia1@gmail.com ";
        $mail_sent = mail($email, $subject, $message, $header);
        if ($mail_sent == true) {
            // $_SESSION['msg'] = "Check your mail to reset your password";
            echo '<script>alert("Check your mail to reset your password")
            window.location.href = "login.php";
            </script>';
            //header('location:login.php');
        } else {
            echo "Failed";
        }
        //end sending mail

    } else {
        echo '<script>alert("Email does not found")</script>';
    }
}

?>