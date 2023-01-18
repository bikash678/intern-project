<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/fontawesome.all.min.css">
<link rel="stylesheet" href="includes/admincss.css">
<title>eguru Admin</title>
<?php

$query = "select * from course";
include('../connection.php');
$query_run = mysqli_query($conn, $query);
?>
<div class="container-fluid">
    <h1 class='text-center text-dark my-3'>Add Heading</h1>
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="col-8 mx-auto">
                <div class="form-group">
                    <form action="" method="POST">

                        <label for="" class='font-weight-bold'>Course</label>
                        <select name="couraseselect" id="couraseselect" class='form-control'>
                            <?php
                            if ($query_run) {
                                while ($row = mysqli_fetch_array($query_run)) {

                            ?>


                            <option value="<?php echo $row['cid']   ?>"><?php echo $row['cname']   ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                        <!-- <label for="" class='font-weight-bold'>Heading</label>
                        <select name="heading" id="heading" class=form-control>
                            <option value="Basic">Basic</option>
                            <option value="Medium">Medium</option>
                            <option value="Advance">Advance</option>
                            <option value="Projects">Projects</option>
                        </select> -->
                        <label for="" class='font-weight-bold'> Heading</label>
                        <input type="text" name="subheading" id="subheading" class='form-control'>
                        <input type="submit" value="ADD" name="add" class='btn btn-success mt-5'>
                        <a href="heading.php" class="btn btn-danger mt-5 mx-5">CANCEL</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php

    if (isset($_POST['add'])) {
        #  $heading = $_POST['heading'];
        $subheading = $_POST['subheading'];
        $cid = $_POST['couraseselect'];



        $query = "INSERT INTO heading(hid,subheading,cid)values('','$subheading','$cid')";
        include('../connection.php');
        $query_run = mysqli_query($conn, $query);
        header('Location: heading.php');
    }
    ?>
    <script src="../js/jquery.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/fontawesome.all.min.js"></script>