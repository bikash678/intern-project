<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/fontawesome.all.min.css">
<link rel="stylesheet" href="includes/admincss.css">
<title>Academia Admin</title>

<div class="container-fluid">
    <h1 class='text-center text-dark my-3'>Add New Team Member</h1>
    <div class="row">

        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="conatiner">
                        <form action="" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <label for="" class='font-weight-bold'> Name</label>
                                <input type="text" name="name" id="name" class='form-control'>
                                <label for="" class='font-weight-bold'>Work</label>
                                <input type="text" name="work" id="work" class='form-control'>
                                <label for="" class='font-weight-bold'>Address</label>
                                <input type="text" name="address" id="address" class='form-control'>
                                <label for="" class='font-weight-bold'>Add Member Image</label>
                                <input type="file" name="img" id="img" class='form-control'>
                                <input type="submit" value="Add" name="add" class='btn btn-warning mt-5'>
                                <a href="team_mem.php" class="btn btn-danger mt-5 mx-5">CANCEL</a>
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
    $name = $_POST['name'];
    $work = $_POST['work'];
    $address = $_POST['address'];
    $img = ($_FILES["img"]['name']);
    include('../connection.php');
    $query = "INSERT INTO team_mem (id,name,work,address,img) values('','$name','$work','$address','$img')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        header('Location: team_mem.php');
    } else {
        echo 'Failed';
    }
}
?>


<script src="../js/jquery.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/fontawesome.all.min.js"></script>