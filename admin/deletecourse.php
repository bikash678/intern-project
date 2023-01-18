<?php

if (isset($_POST['deletecourse'])) {
    $id = $_POST['id'];;
    $query = "DELETE from course where cid='$id'";
    include('../connection.php');
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Data Deleted");</script>';
        header("location:admincourse.php");
    } else {
        echo '<script>alert("Data not Deleted");</script>';
    }
}