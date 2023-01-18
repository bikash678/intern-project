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
    <h1 class='text-center text-dark my-3'>Add New Course</h1>
    <div class="row">

        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="conatiner">
                        <form action="" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <label for="" class='font-weight-bold'>Course Name</label>
                                <input type="text" name="cname" id="cname" class='form-control'>
                                <label for="" class='font-weight-bold'>Course Desciption</label>
                                <textarea name="cdes" id="cdes" cols="30" rows="10" class='form-control'></textarea>
                                <label for="" class='font-weight-bold'>Add Course image</label>
                                <input type="file" name="cimg" id="cimg" class='form-control'>
                                <input type="submit" value="Add" name="add" class='btn btn-warning mt-5'>
                                <a href="admincourse.php" class="btn btn-danger mt-5 mx-5">CANCEL</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

if (isset($_POST['add'])) {
    $cname = $_POST['cname'];
    $cdes = $_POST['cdes'];
    $cimg = ($_FILES["cimg"]["name"]);
    $course_img_temp = ($_FILES["cimg"]["temp_name"]);
    $img_folder = "../img/databaseimg/" . $cimg;


    // $img_folder = '../img/databaseimg/' . $cimg;
    move_uploaded_file($course_img_temp, $img_folder);



    $query = "INSERT INTO course(cid,cname,img,cdes) values('','$cname','$cimg','$cdes')";
    include('../connection.php');

    $query_run = mysqli_query($conn, $query);

    header('Location: admincourse.php');
}
?>


<script src="../js/jquery.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/fontawesome.all.min.js"></script>