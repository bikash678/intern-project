<!doctype html>
<html lang="en">
<?php
include 'main.php';
include 'nav1.php';
?>

<body>
    <div class="row mt-1">
        <h1 class="text-center text-danger">This is discuss page</h1>
        <?php
        $id = intval($_GET['hid']);
        echo $id;
        echo 'the end';
        ?>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>