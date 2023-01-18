<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/fontawesome.all.min.css">
<link rel="stylesheet" href="includes/admincss.css">
<title>eguru Admin</title>
<?php

$query = "select * from course  ";
include('../connection.php');
$query_run = mysqli_query($conn, $query);
?>
<div class="container-fluid">
    <h1 class='text-center text-dark my-3'>Add Description</h1>
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



                        <label for="" class='font-weight-bold'> Heading</label>
                        <select name="headselect" id="headselect" class='form-control'>
                            <?php
                            include('connection.php');
                            $course_id = $_POST['course_id'];

                            $sql = "select * from heading ";
                            $sql_run = mysqli_query($conn, $sql);
                            if ($sql_run) {
                                while ($rows = mysqli_fetch_array($sql_run)) {

                            ?>
                            <option value="<?php echo $rows['hid']   ?>"><?php echo $rows['subheading']   ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                        <label for="" class='font-weight-bold'>Course Desciption</label>
                        <textarea name="des" id="des" cols="30" rows="10" class='form-control'></textarea>
                        <input type="submit" value="ADD" name="add" class='btn btn-success mt-5'>
                        <a href="description.php" class="btn btn-danger mt-5 mx-5">CANCEL</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php

    if (isset($_POST['add'])) {

        $head_id = $_POST['headselect'];
        $des = $_POST['des'];
        echo $head_id;
        #  $cid = $_POST['couraseselect'];



        $queryy = "INSERT INTO des(did,hid,details)values('','$head_id','$des')";
        include('../connection.php');
        $queryy_run = mysqli_query($conn, $queryy);
        header('Location: description.php');
    }
    ?>
    <script src="../js/jquery.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/fontawesome.all.min.js"></script>
    <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
    <script>
    // Initialize CKEditor
    CKEDITOR.replace('des', {

        width: "600px",
        height: "400px"


    });
    </script>