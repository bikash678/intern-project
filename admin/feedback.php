<?php
include('session.php');
?>

<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/fontawesome.all.min.css">
<link rel="stylesheet" href="includes/admincss.css">
<title>eguru Admin</title>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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

        <?php
        $query = "select * from contactus";
        include('../connection.php');
        $query_run = mysqli_query($conn, $query);
        ?>
        <div class='w-100 useradmin'>
            <h2 class="text-center mt-2">Message</h2>
            <hr>
            <div class="container">
                <table class="table table boardered" style="background-color: white;">
                    <thead class="table-dark" width="100%">
                        <tr>
                            <th>ID</th>
                            <th> Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($query_run) {
                            while ($row = mysqli_fetch_array($query_run)) {

                        ?>
                        <tr>
                            <th><?php echo $row['SN'] ?></th>
                            <th><?php echo $row['name'] ?></th>
                            <th><?php echo $row['email'] ?></th>
                            <th><?php echo $row['subject'] ?></th>
                            <th><?php echo $row['message'] ?></th>

                            <form action="deletemsg.php" method="POST">
                                <input type="hidden" name="id" value=" <?php echo $row['SN'] ?>">
                                <th><input type="submit" name="deletemsg" class="btn btn-danger" value="DELETE"></th>
                            </form>
                        </tr>
                    </tbody>

                    <?php   }
                        } else {
                            echo '<alert>data not found</alert>';
                        } ?>



                </table>
            </div>
        </div>
    </div>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.js"></script>