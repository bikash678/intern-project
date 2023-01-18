<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/fontawesome.all.min.css">
<link rel="stylesheet" href="includes/admincss.css">
<title>eguru Admin</title>

<?php
$id = $_POST['id'];

// $sql = "select * from heading where hid='$id'";
$sql = "select * from heading inner join course on course.cid=heading.cid where hid='$id'";
include('../connection.php');
$sql_run = mysqli_query($conn, $sql);




if ($sql_run) {
    while ($row = mysqli_fetch_array($sql_run)) {



?>
<div class="container-fluid">
    <h1 class='text-center text-dark my-3'>Edit </h1>
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="col-8 mx-auto">
                <div class="form-group">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="  <?php echo $row['hid'] ?> ">
                        <label for="" class='font-weight-bold'>Course</label>
                        <select name="couraseselect" id="couraseselect" class='form-control'>
                            <option value="<?php echo $row['cid']   ?>"><?php echo $row['cname']   ?></option>
                            <?php
                                    include('../connection.php');
                                    $query = "select * from course";

                                    $query_run = mysqli_query($conn, $query);
                                    if ($query_run) {
                                        while ($rowss = mysqli_fetch_array($query_run)) {
                                    ?>
                            <option value="<?php echo $rowss['cid']   ?>"><?php echo $rowss['cname']   ?></option>
                            <?php
                                        }
                                    }
                                    ?>
                        </select>


                        <label for="" class='font-weight-bold'> Heading</label>

                        <input type="text" name="subheading" id="subheading" class='form-control'
                            value='<?php echo $row['subheading'] ?>'>
                        <input type="submit" value="ADD" name="add" class='btn btn-success mt-5'>
                        <a href="heading.php" class="btn btn-danger mt-5 mx-5">CANCEL</a>

                    </form>
                    <?php
                }
            }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <?php

            if (isset($_POST['add'])) {
                $id = $_POST['id'];
                # $heading = $_POST['heading'];
                $subheading = $_POST['subheading'];
                $course = $_POST['couraseselect'];
                $query_update = "Update heading set subheading='$subheading',cid='$course'
                 where hid='$id'";
                include('../connection.php');
                $query_result = mysqli_query($conn, $query_update);
                header('Location: heading.php');
            }
            ?>
    <script src="../js/jquery.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/fontawesome.all.min.js"></script>