<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/fontawesome.all.min.css">
<link rel="stylesheet" href="includes/admincss.css">
<title>eguru Admin</title>

<?php

$id = $_POST['id'];

// $sql = "select * from heading where hid='$id'";
$sql = "select * from course where cid='$id'";
include('../connection.php');
// $des = $_POST['cdes'];
// $data = str_replace('&', '&amp;', $des);
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
                    <input type="hidden" name="id" value="  <?php echo $row['cid'] ?> ">
                    <label for="" class='font-weight-bold'>Course</label>
                    <input type="text" name="cname" class="form-control" value="<?php echo $row['cname'] ?>"
                        placeholder="Enter Course Name"><br>

                    <label for="" class='font-weight-bold'>Image</label>
                    <input type="file"> <br>
                    <label for="" class='font-weight-bold'> Description</label> <br>
                    <textarea name="des" id="des" cols="70" rows="15"
                        value="<?php echo $row['cdes']; ?>"> <?php echo $row['cdes']  ?></textarea>
                    <input type="submit" value="ADD" name="update" class='btn btn-success mt-5' class="form-control" />
                    <a href="admincourse.php" class="btn btn-danger mt-5 mx-5">CANCEL</a>
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
                $cname = $_POST['cname'];
                $cdesss = $_POST['des'];
                // $cimg = ($_FILES["cimg"]["name"]);
                $query_update = "Update course set cname='$cname',cdes='$cdesss'
                 where cid='$id'";
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