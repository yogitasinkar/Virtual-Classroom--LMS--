<?php
$dbServerName  ="localhost";
$dbUserName ="root" ;
$dbPassword ="";
$dbName ="virtualcl";
session_start();
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName );



if(isset($_POST['submit'])){

  $senroll= $_SESSION['s_enroll'];
  $sdept= $_SESSION['s_dept'];
  $sfirst= $_SESSION['s_first'];
  $slast= $_SESSION['s_last'];
  $sem= $_SESSION['s_sem'];
  $subject= $_SESSION['subject'];
  $answer= $_POST['answer'];
  $qid = $_SESSION['qid'];

    $sql="INSERT INTO aforum (senroll, sdept, sem, subject, sfirst, slast, qid, answer) VALUES ('$senroll', '$sdept','$sem', '$subject','$sfirst', '$slast', '$qid','$answer');";
    $result =mysqli_query($conn, $sql);

    echo "<script>alert('Answer added succesfully')</script>";
    $href= "viewAnswers.php?".$qid;
    echo "<script>location='$href' </script>";

    exit();
  } else{
    echo "There was an error";
  }
