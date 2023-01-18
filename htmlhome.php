<?php
include_once("session.php");
include 'main.php';
include 'nav1.php';
?>
<?php

if(!isset($_SESSION['username']))
$conn = mysqli_connect('localhost','root');

mysqli_select_db($conn, 'elearning');
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
    <div class="container">
       <br> <h1 class="text-center text-primary"> Welcome to eGuru Quiz World </h1> <br>
    <div class="col-lg-8 m-auto d-block">
       
    <form action="htmlcheck.php" method="post">
    <?php
    for($i=1 ; $i < 11 ; $i++){

    $q = "select * from htmlquestions where qid = $i";
    $query = mysqli_query($conn, $q);

    while ($rows = mysqli_fetch_array($query) ) {
        ?>

    <div class="card">
        <h4 class="card-header"> <?php echo $rows['question'] ?> </h4>

        <?php
        $q = "select * from htmlanswers where ans_id = $i";
        $query = mysqli_query($conn, $q);
    
        while ($rows = mysqli_fetch_array($query) ) {
        ?>

        <div class="card-body">
            <input type="radio" name="quizcheck[<?php echo $rows['ans_id'];  ?>]" value="<?php echo $rows['aid'];  ?>">
            <?php echo $rows['answer']; ?>    

        </div>

<?php        
    } 
  }
  }

    ?> 
    
    <br><input type = "submit" name="submit" value="Submit" class="btn btn-success m-auto d-block"><br>
    
    </form>
    
    </div>
    </div><br><br>

  

    </html>

    


    