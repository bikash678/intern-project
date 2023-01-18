<?php include_once("session.php");
if (isset($_SESSION['user'])) {
    include 'main.php';
    include 'nav1.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
</head>


<body>
    <div class="wrapper">
        <?php
            include('setting/sidenav.php')
            ?>

        <div class="main-content ">


            <div class="info ">

                <h3 style="margin-left: 250; margin-top: 50; font-family: cursive;">CHANGE PASSWORD</h3>
                <hr style="margin-left: 250;">
                <div>
                    <form method="POST" action="" class="form-group" style="margin-left: 250; margin-top: 50;">
                        <?php
                            if (isset($_POST['change'])) {


                                $data = $_SESSION['user'];

                                $cpassword = $_POST['cpassword'];
                                $current_password = $_POST['currentPassword'];
                                $new_password = $_POST['newPassword'];
                                $confirm_password = $_POST['confirmPassword'];
                                // echo $current_password;
                                // echo $cpassword;
                                // echo $new_password;
                                // echo $confirm_password;

                                include('connection.php');

                                if (($current_password === $cpassword)  || ($new_password === $confirm_password)) {

                                    $query = "update user set password='$new_password',cpassword='$confirm_password' where name='$data'";
                                    $query_run = mysqli_query($conn, $query);

                                    if ($query_run) {
                                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Message! Your Password has Been Changed.</strong> </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
                                    } else {
                                        echo '<div class="alert alert-danger alert-dismissible fade show mx-5" role="alert">
            <strong>Message! Failed To Change Password.</strong> </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
                                    }
                                } else {
                                    echo '<div class="alert alert-danger alert-dismissible fade show mx-5"  role="alert">
                                    <strong>Message!  Password does not Match.</strong> </span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
                                }
                            }



                            ?>

                        <?php
                            $data = $_SESSION['user'];
                            $qry = "select * from user where name='$data'";
                            // echo $data;
                            include('connection.php');
                            $qry_run = mysqli_query($conn, $qry);
                            if ($qry_run) {
                                while ($row = mysqli_fetch_array($qry_run)) {

                            ?>

                        Current Password:<br>
                        <input type="hidden" name="id" value="<?php echo $row['SN'] ?> ">
                        <input type="hidden" name="cpassword" value="<?php echo $row['password'] ?> ">
                        <input type="password" name="currentPassword" name="currentPassword" class="form-control"
                            required>
                        <br>
                        <?php

                                }
                            } ?>

                        New Password:<br>
                        <input type="password" name="newPassword" id="newPassword" class="form-control" required>

                        <br>
                        Confirm Password:<br>
                        <input type="password" name="confirmPassword" id="confirmPassword" class="form-control"
                            required>

                        <br>
                        <input type="submit" name="change" value="Save" class="btn btn-success "
                            style="margin-left: 100;">
                    </form>

                    <br>
                    <br>
                </div>
            </div>
        </div>
</body>

</html>

<?php
} else {
    header("Location: index.php");
    exit();
}