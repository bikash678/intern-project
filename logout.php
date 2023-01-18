<?php
ob_start();
// Initialize the session
// session_start();
include_once("session.php");
if (isset($_SESSION['user'])) {
    include 'main.php';
    include 'nav1.php';
    // Unset all of the session variables
    // session_unset();
    // Destroy the session.
    // session_destroy();
    // Redirect to login page
    // header("location: login.php");
    #exit;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Setting</title>
</head>

<body>
    <div class="wrapper">
        <?php
            include('setting/sidenav.php')
            ?>

        <div class="main-content ">


            <div class="info">
            </div>


        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to logout !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Logout !'
    }).then((result) => {
        breakme: if (result.isConfirmed) {
            window.location.href = "mainlogout.php";
            sessionStorage.clear();
            exit;

        } else {
            window.location.href = "setting.php";
            break breakme;

        }
    })
    </script>

</body>

</html>
<?php
    ob_end_flush();
    // // Unset all of the session variables
    // session_unset();
    // // // Destroy the session.
    // session_destroy();
    // // Redirect to login page
    // header("location: login.php");
}
?>