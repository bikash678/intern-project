<?php
include('session.php');
if (isset($_SESSION['admin'])) {
?>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/fontawesome.all.min.css">
<link rel="stylesheet" href="includes/admincss.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <title>Dashboard</title>
    <div class="container-fluid ">


        <form class="">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                style="width:500px;">

        </form>
        <ul class='list-unstyled'>
            <li class="nav-item  dropdown text-center font-weight-bold" style="margin-left: 300px;">

                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id=profileDropdown>
                    <span class="nav-profile-name"><?php
                                                        if (!isset($_SESSION['admin'])) {
                                                            echo "Profile";
                                                        } else {
                                                            echo $_SESSION['admin'];
                                                        }
                                                        ?>
                    </span>
                    <img src="../img/user.png" alt="profile" class="rounded-circle pl-0" style="width: 30px;" />

                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                    </a>
                    <a class="dropdown-item">
                        <i class="mdi mdi-logout text-primary"></i>
                        <a href="logout.php" id="new" class="pl-4">Logout</a>
                    </a>

                </div>
            </li>
        </ul>



    </div>
</nav>


<div class="row">
    <div class="col-2">
        <?php include('includes/navbar.php'); ?>
    </div>
    <div class="col-9">
        <h1 class='text-dark text-center'>Dashboard</h1>
        <hr>
        <div class="row">
            <div class="col text-center  text-dark col1">USERS
                <br><br> <i class="fa fa-users fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col text-center text-dark col2">COURSES
                <br><br> <i class="fa fa-book fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col text-center  text-dark col3">FEEDBACK
                <br><br> <i class="fa fa-comments fa-2x " aria-hidden="true"></i>
            </div>
        </div>
        <br>
        <div class="chart">
            <?php

                $dataPoints = array(
                    array("y" => 3373.64, "label" => "Banepa"),
                    array("y" => 2435.94, "label" => "Kathmandu"),
                    array("y" => 1842.55, "label" => "Dhulikhel"),
                    array("y" => 1828.55, "label" => "Panauti"),
                    array("y" => 1039.99, "label" => "Lalitpur"),
                    array("y" => 765.215, "label" => "Jhapa"),
                    array("y" => 612.453, "label" => "Budol")
                );

                ?>
            <!DOCTYPE HTML>
            <html>

            <head>
                <script>
                window.onload = function() {

                    var chart = new CanvasJS.Chart("chartContainer", {
                        animationEnabled: true,
                        theme: "light2",
                        title: {
                            text: ""
                        },
                        axisY: {
                            title: "Users City (in percentage)"
                        },
                        data: [{
                            type: "column",
                            yValueFormatString: "#,##0.## percentage",
                            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                        }]
                    });
                    chart.render();

                }
                </script>
            </head>

            <body>
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            </body>

            </html>
        </div>
    </div>

</div>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.js"></script>


<?php
} else {
    header("Location: index.php");
    exit();
}