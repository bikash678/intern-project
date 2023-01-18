<?php include_once("session.php");
if (isset($_SESSION['user'])) {
    include 'main.php';
    include 'nav1.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
</head>
<?php
    $data = $_SESSION['user'];

    $query = "Select * from user  where name='$data'";

    include('connection.php');
    $query_run = mysqli_query($conn, $query);


    if ($query_run) {
        while ($row = mysqli_fetch_array($query_run)) {

    ?>

<body>
    <div class="wrapper">
        <?php
                    include('setting/sidenav.php')
                    ?>
        <div class="main-content">
            <!-- <div class="header">Welcome!!!!!!!!!</div> -->
            <div class="info">
                <div>
                    <div class="card " style="width: 18rem; text-align: center; margin-left: 350;">
                        <img class="card-img-top" src="img/user1.png" alt="Card image cap">
                        <div class="card-body" style="text-align: center; ">

                            <table class="text" style="text-align: center; margin-left: 20; ">
                                <tr>
                                    <th> <?php echo $row['name'] ?></th>
                                </tr>
                                <tr>
                                    <th> <?php echo $row['phone'] ?></th>
                                </tr>
                                <tr>
                                    <th> <?php echo $row['email'] ?></th>
                                </tr>
                            </table>
                        </div>

                        <div class="card-body">
                            <!-- <a href="profile.php" class="btn btn-success ">Add More Details</a> -->
                            <form action="profile.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['SN'] ?>">
                                <input type="submit" class="btn btn-success" name="edit_profile"
                                    value="Add More Details">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
        }
    }
    ?>

</html>
<?php
} else {
    header("Location: index.php");
    exit();
}