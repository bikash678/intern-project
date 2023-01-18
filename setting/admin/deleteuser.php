<?php

if (isset($_POST['deleteuser'])) {
    $id = $_POST['id'];
    // echo  "manee $id";
    $query = "DELETE from user where SN='$id'";
    include('../connection.php');
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Data Deleted");</script>';
        header("location:user.php");
    } else {
        echo '<script>alert("Data not Deleted");</script>';
    }
}