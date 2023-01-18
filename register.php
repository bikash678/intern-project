<?php include_once("session.php");
include 'main.php';
include 'nav1.php';
include 'js.php';
$nameErr = $emailErr = $phoneErr = $user_password_Err = $user_cpassword_Err = "";
$name = $email = $phone = $user_password = $user_cpassword =  "";
?>

<html>

<head>
    <!-- Start Course Header Section -->
    <header class="back-img" style="background-image: url(img/course.jpg);">
        <div class="text-center">
            <br>
            <h4 class="text-danger">Welcome to Academia </h4>
            <p class="white">Don't be afraid to fail. Be afraid not to try.</p>
            <img src="img/logo.jpg" style="width: 200px; height:auto;">
        </div>
    </header>
    <!-- End Course Header Section -->
</head>

<body>
    <!-- Start Our All Courses -->
    <div class="container">
        <!-- Start Container Courses -->
        <h3 class="text-center mt-4">Quiz</h3>
        <div class="row">
            <!-- Start Row Courses -->

            <div class=" col-sm-12 col-md-6 col-lg-6 my-3">
                <!-- Start Column Courses -->
                <div class="card">
                    <!-- Start Card Courses -->
                    <img src="img/cp.jpg" class="card-img-top" alt="..." style="height: 300px;" width="30px">
                    <div class="card-body">
                        <h5 class="card-title">C</h5>
                        <p class="card-text">C is a general-purpose, procedural computer programming language supporting
                            structured programming, lexical variable scope, and recursion, with a static type system.
                        </p>
                    </div>
                    <div class="card-footer">

                        <a class="btn btn-primary text-white fw-bolder float-end" href="chome.php">MCQ Questions</a>
                    </div>
                </div> <!-- End Card Courses -->
            </div><!-- End Column Courses -->

            <div class=" col-sm-12 col-md-6 col-lg-6 my-3">
                <!-- Start Column Courses -->
                <div class="card">
                    <!-- Start Card Courses -->
                    <img src="img/html2.png" class="card-img-top" alt="..." style="height: 300px;" width="30px">
                    <div class="card-body">
                        <h5 class="card-title">HTML</h5>
                        <p class="card-text">HTML (HyperText Markup Language) is the most basic building block of the
                            Web. It defines the meaning and structure of web content.</p>
                    </div>
                    <div class="card-footer">

                        <a class="btn btn-primary text-white fw-bolder float-end" href="htmlhome.php">MCQ Questions
                        </a>
                    </div>
                </div> <!-- End Card Courses -->
            </div><!-- End Column Courses -->

            <div class=" col-sm-12 col-md-6 col-lg-6 my-3">
                <!-- Start Column Courses -->
                <div class="card">
                    <!-- Start Card Courses -->
                    <img src="img/java1.png" class="card-img-top" alt="..." style="height: 280px;" width="30px">
                    <div class="card-body">
                        <h5 class="card-title">Java</h5>
                        <p class="card-text">Java is a high-level, class-based, object-oriented programming language
                            that is designed to have as few implementation dependencies as possible.</p>
                    </div>
                    <div class="card-footer">

                        <a class="btn btn-primary text-white fw-bolder float-end" href="javahome.php">MCQ
                            Questions</a>
                    </div>
                </div> <!-- End Card Courses -->
            </div><!-- End Column Courses -->

            <div class=" col-sm-12 col-md-6 col-lg-6 my-3">
                <!-- Start Column Courses -->
                <div class="card">
                    <!-- Start Card Courses -->
                    <img src="img/phpp.jpg" class="card-img-top" alt="..." style="height: 300px;" width="30px">
                    <div class="card-body">
                        <h5 class="card-title">PHP</h5>
                        <p class="card-text">PHP is a general-purpose scripting language especially suited to web
                            development.</p>
                    </div>
                    <div class="card-footer">

                        <a class="btn btn-primary text-white fw-bolder float-end" href="phphome.php">MCQ Questions</a>
                    </div>
                </div> <!-- End Card Courses -->
            </div><!-- End Column Courses -->




        </div><!-- End Row Courses -->
    </div><!-- End Container Courses -->

    <!-- End Our All Courses -->
    <!-- Start Footer Section -->
    <?php
    include 'footer.php';
// } else {
 //   header('location:login.php');
//}
    ?>
    <!-- End Footer Section -->


</body>
<html>
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $name = ($_POST["name"]);
        $email = ($_POST["email"]);
        $phone = ($_POST["phone"]);
        $user_password = $_POST['password'];
        $user_cpassword = $_POST['cpassword'];


        //$pass = password_hash($user_password, PASSWORD_BCRYPT);
        //$cpass = password_hash($user_cpassword, PASSWORD_BCRYPT);

        $token = bin2hex(random_bytes(15));

        if ($name != '' && $email != '' && $phone != '' && $user_password != '' && $user_cpassword != '') {

            if (empty($name)) {
                echo 'it is empty bro';
                $nameErr = "Name is required";
            } else {
                $name = ($_POST["name"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Only alphabets and white space are allowed";
                }
            }


            if (empty($email)) {
                $emailErr = "Email is required";
            } else {
                $email = ($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if (empty($phone)) {
                $phoneErr = "Mobile no is required";
            } else {
                $phone = ($_POST["phone"]);
                if (!preg_match("/^[0-9]*$/", $phone)) {
                    $phoneErr = "Only numeric value is allowed.";
                }
                //check mobile no length should not be less and greator than 10  
                if (strlen($phone) != 10) {
                    $phoneErr = "Mobile no must contain 10 digits.";
                }
            }



            include 'connection.php';
            $emailquery = "select * from user where email='$email'";
            $query_run = mysqli_query($conn, $emailquery);
            $emailcount = mysqli_num_rows($query_run);

            if ($emailcount > 0) {
                echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
                <strong>Message! Email Already Exits</strong> <span id="msg"></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            } else {



                if ($user_password == $user_cpassword) {
                    $sql = "INSERT INTO user(name,email,phone, password,cpassword,token) VALUES ('$name','$email','$phone','$user_password','$user_cpassword','$token')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        //$_SESSION['msg'] = "Registration Successfull..... Now you can Login";
                        header("location: login.php");

                        //Start sending mail
                        $to = "$email";
                        $subject = 'Email From Academia';
                        $message = "Hello $name 🙂\n Welcome to Academia \n Thanks for choosing us";
                        $header = "From: Academia1@gmail.com \r\nReply-To: Academia1@gmail.com";
                        $mail_sent = mail($to, $subject, $message, $header);
                        if ($mail_sent == true) {
                            //echo "Mail Sent to $to";
                        } else {
                            echo "Mail Failed";
                        }
                        //end sending mail
                    }
                } else {
                    echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
                <strong>Message! Password Does not Match</strong> <span id="msg"></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
                }
            }
        } else {
            echo '    <div class="alert alert-danger  alert-dismissible fade show" role="alert">
            <strong>Message! All Fields are required</strong> <span id="msg"></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }
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
                            <input type="name" id="name" class="login" name="name" placeholder="Name" />
                            <span class="error">
                                <?php echo $nameErr; ?>
                            </span>
                        </div>
                        <br>
                        <i class="fa fa-envelope d-inline-block"></i>
                        <div class="form-group d-inline-block">
                            <input type="email" id="email" class="login" name="email" placeholder="Email ID" />
                            <span class="error">
                                <?php echo $emailErr; ?>
                            </span>
                        </div>
                        <br>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="form-group d-inline-block">
                            <input type="phone" id="phone" class="login" name="phone" placeholder="Phone" />
                            <span class="error">
                                <?php echo $phoneErr; ?>
                            </span>
                        </div>
                        <br>

                        <i class="fa fa-key d-inline-block"></i>
                        <div class="form-group d-inline-block">
                            <input type="password" id="password" class="login" name="password" placeholder="Password" />
                        </div>
                        <br>
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <div class="form-group d-inline-block">
                            <input type="password" id="rpassword" class="login" name="cpassword"
                                placeholder="Confirm your Password" />
                        </div>
                        <button type="submit" value="Submit" name="submit"
                            class="btn btn-primary px-4 mt-4">Register</button>
                    </form>
                </div>

            </div>
            <div class="col-sm-3 text-center mt-5 offset-sm-1">
                <img src="img/f.png" alt="Computer" width="350" height="350" style="border-radius: 50%;">
                <div style="margin-top: 50px;">
                    <a href="login.php" class="edit">I am already member</a>
                </div>

            </div>
        </div>

    </div>

</body>

</html>