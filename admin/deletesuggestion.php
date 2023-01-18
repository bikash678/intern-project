<?php

if (isset($_POST['deletesug'])) {
    $id = $_POST['id'];
    // echo  "manee $id";
    $query = "DELETE from suggestion where id='$id'";
    include('../connection.php');
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Data Deleted");</script>';
        header("location:adminsuggestion.php");
    } else {
        echo '<script>alert("Data not Deleted");</script>';
    }
}