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
<?php
    $data = $_SESSION['user'];

    $query = "Select * from user  where name='$data'";

    include('connection.php');
    $query_run = mysqli_query($conn, $query);


    if ($query_run) {
        while ($row = mysqli_fetch_array($query_run)) {

    ?>

<body>
    <div class="wrapper">
        <?php
                    include('setting/sidenav.php')
                    ?>
        <div class="main-content">
            <!-- <div class="header">Welcome!!!!!!!!!</div> -->
            <div class="info">
                <div>
                    <form action="" method="POST" class="form-group" style="margin-left: 250;  ;width: 100%;">
                        <h4 class="text-lg-center mb-4">Personal Information</h4>

                        <div class="form-row">
                            <label for="" class="col-sm-3">UserName</label>
                            <input type="text" name="name" class="form-control col-sm-9"
                                value="<?php echo $row['name'] ?>">

                        </div>
                        <br>
                        <div class="form-row">
                            <label for="" class="col-sm-3">Email </label>
                            <input type="email" name="email" class="form-control col-sm-9"
                                value="<?php echo $row['email'] ?>" readonly>
                        </div>
                        <br>
                        <div class="form-row">
                            <label for="" class="col-sm-3">Phone</label>
                            <input type="number" name="phone" class="form-control col-sm-9"
                                value="<?php echo $row['phone'] ?>">
                        </div>
                        <br>
                        <div class="form-row">

                            <label for="" class="col-sm-3">Address</label>
                            <input type="text" name="address" class="form-control col-sm-9"
                                value="<?php echo $row['address'] ?>">

                        </div><br>
                        <div class="form-row">
                            <label for="" class="col-sm-3">Occupation</label>
                            <input type="text" name="occupation" class="form-control col-sm-9"
                                value="<?php echo $row['occupation'] ?>">

                        </div><br>
                        <div class="form-row">
                            <label for="" class="col-sm-3">School/College</label>
                            <input type="text" name="school" class="form-control col-sm-9"
                                value="<?php echo $row['school'] ?>">

                        </div><br>
                        <div class="form-row">
                            <label for="" class="col-sm-3">Level</label>
                            <input type="text" name="level" class="form-control col-sm-9"
                                value="<?php echo $row['level'] ?>">

                        </div><br>
                        <div class="form-row">
                            <label for="" class="col-sm-3"> Intrested Course</label>
                            <input type="text" name="interest" class="form-control col-sm-9"
                                value="<?php echo $row['interested_course'] ?>">
                        </div>
                        <br>
                        <div class="form-row">


                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
<?php
        }
    }
    ?>

</html>

<?php
} else {
    header("Location: index.php");
    exit();
}