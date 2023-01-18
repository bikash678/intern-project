<?php
include_once("session.php");
if (isset($_SESSION['user'])) {
    include('main.php');
    include 'js.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<?php
    $data = $_SESSION['user'];
    // $id = $_POST['id'];

    $query = "Select * from user  where name='$data'";

    include('connection.php');
    $query_run = mysqli_query($conn, $query);


    if ($query_run) {
        while ($row = mysqli_fetch_array($query_run)) {

    ?>


<body>
    <div class="container " style="text-align: center; display: block; height: 100%; width: 100%;">
        <?php

                    if (isset($_POST['edit'])) {
                        // $id = $_POST['id'];
                        $name = $_POST['name'];
                        $phone = $_POST['phone'];
                        $address = $_POST['address'];
                        $occupation = $_POST['occupation'];
                        $school = $_POST['school'];
                        $level = $_POST['level'];
                        $int_course = $_POST['interest'];

                        $sql = "update user set name='$name',phone='$phone',address='$address',occupation='$occupation',
    school='$school',level='$level',interested_course='$int_course' where name='$data'";
                        include('connection.php');
                        $sql_run = mysqli_query($conn, $sql);
                        if ($sql_run) {

                            echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
        <strong>Message! Saved Successfully !!!!!</strong> </span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
                        } else {
                            echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
        <strong>Message! Failed to add details.....</strong> </span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
                        }
                    }

                    ?>

        <div class="row text-justify ">

            <div class="col-4">
                <img class="rounded-circle cover" src="img/user1.png" alt="" style="height: 250; width: 250;">
                <table class="table-content " style="text-align: center; margin-left: 20;">
                    <tr>
                        <th> <?php echo $row['name'] ?></th>
                    </tr>
                    <tr>
                        <th> <?php echo $row['email'] ?></th>
                    </tr>
                    <tr>
                        <th><?php
                                        if (is_null($row['address']) && (empty($row['address']))) {
                                        } else {
                                            echo $row['address'];
                                        }
                                        ?></th>
                    </tr>
                </table>

            </div>
            <div class="col-8">
                <form action="" method="POST" class="form-group">
                    <h3 class="text-lg-center mb-5">My Profile</h3>
                    <div class="form-row">
                        <label for="" class="col-sm-3">UserName</label>
                        <input type="text" name="name" readonly class="form-control col-sm-9"
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

                        <input type="submit" name="edit" value="Save" class="btn btn-success">
                        <a href="setting.php" class="btn btn-danger mx-5">Cancle</a>
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