<?php include_once("session.php"); ?>
<?php
if (isset($_SESSION['user'])) {
    include 'main.php';
    include 'nav1.php';
?>
<html>

<body>
    <div class="container-fluid mt-1">
        <div class="row">
            <div class="col-2 myscroll bg-dark text-light">
                <table class="table">
                    <tr>
                        <thead class='text-md-center my-5' style="font-weight: bold;"> Start To Learn
                        </thead>
                        <!-- <a href="course.php"><i class="fa fa-arrow-left ml-5" style="color:#fff;"
                                aria-hidden="true"></i></a> -->
                    </tr>
                    <hr class="bg-light">
                    <?php

                        $id = (isset($_POST['id']) ? $_POST['id'] : '');
                        $query = "select * from heading where cid='$id'";
                        include('connection.php');
                        $query_run = mysqli_query($conn, $query);


                        if ($query_run) {
                            while ($row = mysqli_fetch_array($query_run)) {

                        ?>
                    <br>
                    <tbody>
                        <tr>
                            <form action="" method="POST">
                                <input type="hidden" name="head_id" value="<?php echo $row['hid'] ?>">
                                <input type="hidden" name="cid" value="<?php echo $row['cid'] ?>">
                                <input type="submit" name="send" class="mylist"
                                    value="<?php echo $row['subheading']; ?>">
                            </form>

                        </tr>
                    </tbody>
                    <?php

                            }
                        }
                        if (isset($_POST['send'])) {

                            $coid = $_POST['cid'];
                            // echo $coid;
                            $querys = "select * from heading where cid='$coid'";
                            echo $id;
                            $querys_run = mysqli_query($conn, $querys);

                            if ($querys_run) {

                                while ($rows = mysqli_fetch_array($querys_run)) {
                                ?>
                    <br>
                    <tbody>
                        <tr>
                            <form action="" method="POST">
                                <input type="hidden" name="head_id" value="<?php echo $rows['hid'] ?>">
                                <input type="hidden" name="cid" value="<?php echo $rows['cid'] ?>">
                                <input type="submit" name="send" class="mylist"
                                    value="<?php echo $rows['subheading']; ?>">
                            </form>

                        </tr>
                    </tbody>
                    <?php
                                }
                            } else {
                                echo "Milena";
                            }
                        }
                        ?>
                </table>



            </div>
            <div class=" col-10">
                <?php
                    if (!isset($_POST['send'])) {

                        #$id = $_POST['id'];

                        $sql = "select * from course where cid='$id'";
                        include('connection.php');
                        $sql_run = mysqli_query($conn, $sql);

                        if ($sql_run) {
                            while ($row = mysqli_fetch_array($sql_run)) {
                    ?>


                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="  <?php echo $row['cid'] ?> ">

                    <table>

                        <br>
                        <tbody class="coursedes">
                            <tr><?php echo $row['cdes'] ?></tr>

                        </tbody>
                    </table>
                </form>

                <?php
                            }
                        }
                        ?>
                <?php
                    } else {
                        $headid = $_POST['head_id'];

                        #echo $headid;
                        $qry = "select * from des where hid='$headid'";
                        include('connection.php');
                        $qry_run = mysqli_query($conn, $qry);
                        if ($qry_run) {
                            while ($row = mysqli_fetch_array($qry_run)) {


                                echo $row['details'];
                            }
                        }
                    }

                    ?>


            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
} else {
    header('location:login.php');
}
    ?>
    <script>

    </script>
</body>


</html>