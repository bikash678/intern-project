<!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
<title><?php if (isset($page_title)) {
            echo "$page_title";
        } ?>Academia</title>
<link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/mystyle.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark " id="page-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Academia</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto custom-nav pl-5">
                <li class="nav-item custom-nav-item">
                    <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>

               
                <!-- <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="discuss.php">Discuss</a>
                </li> -->
                <li class="nav-item custom-nav-item">
                    <a class="nav-link " href="colleges.php">Colleges</a>
                </li>
                <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="admission.php">Admission</a>
                </li>
                <li class="nav-item custom-nav-item">
                    <a class="nav-link " href="scholarship.php">Scholarship</a>
                </li>
                
                <li class="nav-item custom-nav-item">
                    <a class="nav-link " href="about.php">About Us</a>
                </li>
                <li class="nav-item custom-nav-item">
                    <a class="nav-link " href="contact.php">Contact</a>
                </li>
                <?php
                if (!isset($_SESSION['user'])) {
                ?>
                <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="register.php">SignIn</a>
                </li>
                <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="login.php">LogIn</a>
                </li>
                <?php
                } else {
                ?>

                <li class="nav-item  dropdown ms-0 text-center font-weight-bold" style="margin-left: 400px;">

                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id=profileDropdown>
                        <span class="nav-profile-name"><?php
                                                            if (!isset($_SESSION['user'])) {
                                                                echo "Profile";
                                                            } else {
                                                                echo $_SESSION['user'];
                                                            }
                                                            ?></span>
                        <img src="img/user.png" alt="profile" class="rounded-circle pl-0" style="width: 30px;" />

                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="mdi mdi-settings text-primary"></i>
                            <a href="setting.php" id="new" class="pl-4">Setting</a>

                        </a>
                        <a class="dropdown-item">
                            <i class="mdi mdi-logout text-primary"></i>
                            <a href="mainlogout.php" id="new" class="pl-4">Logout</a>
                        </a>

                    </div>
                </li>
                <?php

                }
                ?>


            </ul>
        </div>
    </div>
</nav>