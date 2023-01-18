<?php
include('session.php');
if (isset($_SESSION['admin'])) {


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
                <div class=" dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
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

            $query = " select heading.hid,heading.subheading,course.cname,des.did,des.details from ((heading inner join course on course.cid=heading.cid) inner join des on des.hid=heading.hid)";
            include('../connection.php');
            $query_run = mysqli_query($conn, $query);
            ?>
        <div class='w-100 useradmin'>
            <h2 class="text-center mt-2">Description Details</h2>
            <hr>
            <div class="float-right my-2 mr-2">
                <a href="adddescription.php" class='' style="text-decoration: none;
                font-size: 20px; font-weight: bold;">ADD Description
                    <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
            </div>


            <div class="container">
                <table class="table table boardered" style="background-color: white;">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Course</th>
                            <th>Heading</th>
                            <th>Description</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <?php
                        if ($query_run) {
                            while ($row = mysqli_fetch_array($query_run)) {

                        ?>
                    <tbody>

                        <tr>
                            <th><?php echo $row['did'] ?></th>
                            <th><?php echo $row['cname'] ?></th>

                            <th><?php echo $row['subheading'] ?></th>
                            <th><?php echo substr($row['details'], 0, 100) ?></th>

                            <form action="editdescription.php" method="POST">
                                <input type="hidden" name="id" value=" <?php echo $row['did'] ?>">
                                <th><input type="submit" name="editdes" class="btn btn-success" value="EDIT"></th>
                            </form>
                            <form action="deletedescription.php" method="POST">
                                <input type="hidden" name="id" value=" <?php echo $row['did'] ?>">
                                <th><input type="submit" name="deletedes" class="btn btn-danger" value="DELETE">
                                </th>
                            </form>
                        </tr>
                    </tbody>

                    <?php   }
                        }
                        ?>



                </table>
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