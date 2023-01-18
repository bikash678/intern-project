<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/fontawesome.all.min.css">
<link rel="stylesheet" href="includes/admincss.css">
<title>eguru Admin</title>

<?php

$id = $_POST['id'];


$sql = " select heading.hid,heading.subheading,course.cname,des.did,des.details from 
 ((heading inner join course on course.cid=heading.cid) inner join des on des.hid=heading.hid) where did='$id'";
include('../connection.php');

$sql_run = mysqli_query($conn, $sql);

if ($sql_run) {
    while ($row = mysqli_fetch_array($sql_run)) {



?>
<div class="container-fluid">
    <h1 class='text-center text-dark my-3'>Edit </h1>
    <div class="row">

        <div class="col-8 mx-auto">
            <div class="form-group">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="  <?php echo $row['did'] ?> ">

                    <label for="" class='font-weight-bold'>Course</label>
                    <select name="couraseselect" id="couraseselect" class='form-control' readonly>
                        <option value="<?php echo $row['cid']   ?>"><?php echo $row['cname']   ?></option>
                        <?php
                                include('../connection.php');
                                $query = "select * from course";

                                $query_run = mysqli_query($conn, $query);
                                if ($query_run) {
                                    while ($rowss = mysqli_fetch_array($query_run)) {
                                ?>
                        <option readonly value="<?php echo $rowss['cid']   ?>"><?php echo $rowss['cname']   ?></option>
                        <?php
                                    }
                                }
                                ?>
                    </select>
                    <label for="" class='font-weight-bold'> Heading</label>

                    <input type="text" name="subheading" id="subheading" class='form-control' readonly
                        value='<?php echo $row['subheading'] ?>'>


                    <label for="" class='font-weight-bold'> Description</> <br>
                        <textarea name="des" id="des" cols="70" rows="15"
                            value="<?php echo $row['details']; ?>"> <?php echo $row['details']  ?></textarea>
                        <input type="submit" value="ADD" name="update" class='btn btn-success mt-5'
                            class="form-control" />
                        <a href="description.php" class="btn btn-danger mt-5 mx-5">CANCEL</a>
                </form>

                <?php
            }
        }
                ?>
            </div>

        </div>
    </div>


    <?php

            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $subheading = $_POST['subheading'];
                $course = $_POST['couraseselect'];

                $desss = $_POST['des'];

                $query_update = "Update des set details='$desss'
                 where did='$id'";
                include('../connection.php');
                $query_result = mysqli_query($conn, $query_update);
                header('Location: admincourse.php');
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

        width: "800px",
        height: "500px"

    });
    </script>