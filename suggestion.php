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

<body>
    <div class="wrapper">
        <?php
            include('setting/sidenav.php')
            ?>
        <form action="" method="POST">
            <div class="main-content ">


                <div class="info">


                    <div class="row  ">
                        <img src="img/suggestion.jpg" alt="" style="width: 30%; height: 30%; margin-left: 350; ">
                    </div>
                    <br><br>
                    <div class="row">
                        <?php
                            $data = $_SESSION['user'];
                            $sql = "select * from user where name='$data'";
                            include('connection.php');
                            $sql_run = mysqli_query($conn, $sql);
                            if ($sql_run) {
                                while ($row = mysqli_fetch_array($sql_run)) {
                            ?>

                        <textarea name="suggestion" id="" cols="60" rows="8" placeholder="Write Your Suggestion Here"
                            style="margin-left: 250;  position:relative; padding:5px"></textarea>
                    </div>
                    <br>
                    <input type="hidden" name="id" value="<?php echo $row['SN'] ?>">
                    <input type="submit" name="add" value="SEND" class="btn btn-success " style="margin-left: 250; ">

                </div>
                <?php
                                }
                            }
            ?>
        </form>
    </div>
</body>

</html>

<?php

    if (isset($_POST['add'])) {

        $id = $_POST['id'];
        $suggestion = $_POST['suggestion'];

        if ($suggestion != '') {
            $query = "insert into suggestion(id,SN,suggestion) values('','$id','$suggestion')";

            include('connection.php');
            $query_run = mysqli_query($conn, $query);


            if ($query_run) {
                echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert" >
        <strong>Message! Saved Successfully !!!!!</strong> </span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
            } else {
                echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
        <strong>Message! Failed to add Suggestion.....</strong> </span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
            }
        } else {
            echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert"style="margin: button 50px;";>
        <strong>Message! Please Fill the Suggestion Box !!</strong> </span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
        }
    }


    ?>
<?php
} else {
    header("Location: index.php");
    exit();
}