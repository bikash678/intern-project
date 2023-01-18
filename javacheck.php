<?php
include_once("session.php");
include 'main.php';
include 'nav1.php';
?>
<?php

if (!isset($_SESSION['username']))
    $conn = mysqli_connect('localhost', 'root');

mysqli_select_db($conn, 'elearning');

if (isset($_POST['submit'])) {
    if (!empty($_POST['quizcheck'])) {
        $count = count($_POST['quizcheck']);
        //echo " Out of 10, you have selected " .$count. "options." ;
        $result = 0;
        $i = 1;

        $selected = $_POST['quizcheck'];
        //print_r($selected);

        $q = "select * from javaquestions";
        $query = mysqli_query($conn, $q);

        while ($rows = mysqli_fetch_array($query)) {
            // print_r($rows['ans_id']);
            $checked = $rows['ans_id'] == $selected[$i];

            if ($checked) {
                $result++;
            }
        }
        //echo "<br> Your Total Score is" .$result;
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!--Latest compiled and minified CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!--jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--Popper JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


</head>

<body>
    <div class="container text-center">
        <br><br>
        <h1 class="text-center text-success text-uppercase animateuse"> eGuru Quiz </h1>
        <br><br><br><br>
        <table class="table text-center table-bordered table-hover">
            <tr>
                <th colspan="2" class="bg-dark">
                    <h1 class="text-white">Result</h1>
                </th>

            </tr>
            <tr>
                <td>
                    Questions Attempted
                </td>

                <?php
                //$counter = 0;
                $result = 0;
                if (isset($_POST['submit'])) {
                    if (!empty($_POST['quizcheck'])) {
                        //Counting number of checked checkboxes.
                        $checked_count = count($_POST['quizcheck']);
                        //print_r($_POST);
                ?>

                <td>
                    <?php
                            echo "Out of 10, You have attempted " . $checked_count . " option."; ?>
                </td>

                <?php
                        //Loop to store and display values of individual checked checkbox.
                        $selected = $_POST['quizcheck'];

                        $q1 = "select ans_id from javaquestions";
                        $ansresults = mysqli_query($conn, $q1);
                        $i = 1;
                        while ($rows = mysqli_fetch_array($ansresults)) {
                            $flag = $rows['ans_id'] == $selected[$i];

                            if ($flag) {
                                //echo "correct ans is ".$rows['ans']."<br>";
                                //$counter++;
                                $result++;
                                //echo "Well Done! Your ".$counter. "answer is correct <br><br>";
                            } else {
                                $count++;
                                //echo "Sorry! Your ".$counter." answer is incorrect <br><br>";
                            }
                            $i++;
                        }
                        ?>

            <tr>
                <td>
                    Your Total Score
                </td>
                <td colspan="2">
                    <?php
                        echo "Your Score is " . $result;

                    ?>
                </td>
            </tr>


        </table>
        <div class="container">
            <br>
            <h1 class="text-center text-primary">Answers</h1> <br>
            <div class="col-lg-8 m-auto d-block">
                <div class="col-15 mt-1">
                    <img src="img/javaans.png" alt="" class="img-fluid" style="object-fit: contain;">
                    <br> <br>
                    <a href="quiz.php" class="btn btn-danger mb-3" style="width: 100px;">Back</a>
                </div>
            </div>
            <?php
                    } else {
                        echo "<b>Please Attempt All The Questions.</br>";
                    }
                }
    ?>
</body>

</html>