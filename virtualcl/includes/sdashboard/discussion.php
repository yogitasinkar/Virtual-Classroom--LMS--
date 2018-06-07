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
  $question= $_POST['question'];
  $subject = $_POST['sub'];
  $_SESSION['subject']= $subject;
    $sql="INSERT INTO qforum (senroll, sdept, sem, subject, sfirst, slast, question) VALUES ('$senroll', '$sdept','$sem', '$subject','$sfirst', '$slast','$question');";
    $result =mysqli_query($conn, $sql);

    echo "<script>alert('Question added succesfully')</script>";
    echo "<script>location='viewQuestions.php' </script>";

    exit();
  } else{
    echo "There was an error";
  }
