<?php
$page_title = "eGuru ADMIN";

if (isset($_POST['deleteheading'])) {
    $id = $_POST['id'];
    echo  "manee $id";
    $query = "DELETE from heading where hid='$id'";
    include('../connection.php');
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Data Deleted");</script>';
        header("location:heading.php");
    } else {
        echo '<script>alert("Data not Deleted");</script>';
    }
}