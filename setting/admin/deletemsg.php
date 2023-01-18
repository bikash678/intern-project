<?php

if (isset($_POST['deletemsg'])) {
    $id = $_POST['id'];
    // echo  "manee $id";
    $query = "DELETE from contactus where SN='$id'";
    include('../connection.php');
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Data Deleted");</script>';
        header("location:feedback.php");
    } else {
        echo '<script>alert("Data not Deleted");</script>';
    }
}