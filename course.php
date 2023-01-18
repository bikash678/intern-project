 <?php include_once("session.php"); ?> <?php
                                        if (isset($_SESSION['user'])) {
                                            include 'main.php';
                                            include 'nav1.php';
                                        ?>
 <html>

 <body>
     <div class="container mt-1">
         <h2 class="text-center text-danger my-4">Available Courses. </h2>
         <div class="row">
             <?php
                                            $id = '';
                                            $id = (isset($_POST['id']) ? $_POST['id'] : '');
                                            include 'connection.php';
                                            $query = "select * from course";

                                            $query_run = mysqli_query($conn, $query);
                                            if ($query_run) {

                                                while ($row = mysqli_fetch_array($query_run)) {
                    ?>

             <div class="col-4 my-4">
                 <div class="mycard my-4">
                     <?php echo '<img src="data:image;base64,' . base64_encode($row['img']) . '" alt="img" class="img-fluid rounded-circle cover mb-3 mt-2 courseimg"' ?>
                     <br>
                     <h4 style="text-align: center;"><?php echo $row['cname']; ?></h4> <br>
                     <!-- <a href="detailcourse.php" class="btn btn-danger" name="details">Start Course</a> -->
                     <form action="detailcourse.php" method="POST" style="text-align: center;">

                         <input type="hidden" name="id" value=" <?php echo $row['cid'] ?>">
                         <input type="submit" value="Start Course" name=details class="btn btn-danger my-3 p-2">
                     </form>
                 </div>
             </div>
             <?php
                                                    #$_SESSION['courseid'] = $row['cid'];
                                                    #echo $_SESSION['courseid'];
                                                }
                                            }
                    ?>


         </div>
     </div>

     <?php
                                            include 'footer.php';
                                        } else {
                                            header('location:login.php');
                                        }
        ?>
 </body>


 </html>