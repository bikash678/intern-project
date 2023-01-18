<?php include_once("session.php");
include 'main.php';
include 'nav1.php';
// include 'js.php';
if (isset($_POST['send'])) {
    $username = $_POST['uname'];
    $useremail = $_POST['uemail'];
    $subject = $_POST['usubject'];
    $message = $_POST['umessage'];

    if ($username != '' && $useremail != '' && $message != '' && $subject != '') {

        $sql = "insert into contactus(name,email,subject,message) VALUES ('$username','$useremail','$subject','$message')";
        include('connection.php');
        $qry = mysqli_query($conn, $sql);

        if ($qry) {

            echo ' <div class="alert alert-success  alert-dismissible fade show" role="alert">
            <strong>Message! Thankyou For Your feedback , We will respond Soon.</strong> <span id="msg"></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
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
?>


<html>

<body>


    <div class="container mt-1">
        <h3 class="text-center mt-1" style="margin:30px; padding-top:30px; font-weight: bold;">Contact Us</h3>
        <div class="row container mt-1">
            <div class="col-7 mt-1 ">
                <form action="" method="post" novalidate class="shadow p-4">
                    <div class="form-group">
                        <label for="">Name:</label>
                        <input type="text" name="uname" class="form-control" placeholder="Name">
                        <label for="">Email:</label>
                        <input type="email" name="uemail" class="form-control" placeholder="Email">
                        <label for="">Subject:</label>
                        <input type="text" name="usubject" class="form-control" placeholder="Subject">
                        <label for="">Message: </label>
                        <textarea name="umessage" id="" cols="30" class="form-control" rows="6"></textarea>
                    </div>
                    <button type="submit" name="send" value="send" class="btn btn-primary my-1">Send</button>
                </form>
            </div>
            <div class="col-5 mt-1">
                <img src="img/map.jpg" alt="" class="img-fluid" style="object-fit: contain;">
            </div>

        </div>
    </div>

    <?php
    include 'footer.php';
    ?>
</body>

</html>