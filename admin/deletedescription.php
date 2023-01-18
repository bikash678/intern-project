<?php
$page_title = "eGuru ADMIN";

if (isset($_POST['deletedes'])) {
    $id = $_POST['id'];

    $query = "DELETE from des where did='$id'";
    include('../connection.php');
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Data Deleted");</script>';
        header("location:description.php");
    } else {
        echo '<script>alert("Data not Deleted");</script>';
    }
}