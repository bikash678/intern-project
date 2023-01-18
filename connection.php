<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "elearning";
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry we failed to connect" . mysqli_connect_error());
}