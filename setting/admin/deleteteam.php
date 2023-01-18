<?php

if (isset($_POST['deleteteam'])) {
    $id = $_POST['id'];;
    $query = "DELETE from team_mem where id='$id'";
    include('../connection.php');
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Data Deleted");</script>';
        header("location:team_mem.php");
    } else {
        echo '<script>alert("Data not Deleted");</script>';
    }
}