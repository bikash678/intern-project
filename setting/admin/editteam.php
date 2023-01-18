<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/fontawesome.all.min.css">
<link rel="stylesheet" href="includes/admincss.css">
<title>eguru Admin</title>
<?php
$id = $_POST['id'];


$sql = "select * from team_mem where id='$id'";
include('../connection.php');
$sql_run = mysqli_query($conn, $sql);
if ($sql_run) {
    while ($row = mysqli_fetch_array($sql_run)) {
?>
<div class="container-fluid ">
    <h1 class='text-center text-dark my-3'>Edit Team Member </h1>
    <!-- <div class="row"> -->
    <form action="" method="POST" class="form-group" style="margin-left: 300 ; margin-right: 300;">
        <input type="hidden" name="id" value="  <?php echo $row['id'] ?> ">
        <label for="" class="">Name </label>
        <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>"> <br>
        <label for="" class="">Work </label>
        <input type="text" name="work" class="form-control" value="<?php echo $row['work'] ?>"><br>
        <label for="" class="">Address </label>
        <input type="text" name="address" class="form-control" value="<?php echo $row['address'] ?>"><br>
        <br>
        <input type="submit" class="btn btn-success" name="add" value="SAVE">
        <a href="team_mem.php" class="btn btn-danger">CANCLE</a>
    </form>
</div>
<?php
    }
}
?>

<?php

if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $work = $_POST['work'];
    $address = $_POST['address'];
    echo $id;

    $query_update = "UPDATE team_mem SET name='$name', work='$work', address='$address' where id='$id'";
    # UPDATE `team_mem` SET `work` = 'ACCA' WHERE `team_mem`.`id` = 7;
    include('../connection.php');
    $query_result = mysqli_query($conn, $query_update);
    header('Location: team_mem.php');
}
?>
<script src="../js/jquery.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/fontawesome.all.min.js"></script>