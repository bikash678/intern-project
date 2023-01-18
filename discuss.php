<?php include_once("session.php");
if (isset($_SESSION['id']) && isset($_SESSION['user'])) {
?>
<?php
    include 'main.php';
    include 'nav1.php';
    ?>
<html>

<body>
    <div class="row mt-1">
        <h1 class="text-center text-danger">This is discuss page</h1>
    </div>
    <?php
        include 'footer.php';
        ?>
</body>

</html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>