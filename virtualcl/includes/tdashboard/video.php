<?php
include '../dbh.inc.php';
session_start();

if(isset($_POST['submit'])){
  $link = $_POST['link'];
  $description =$_POST['desc'];
  $sem = $_POST['sem'];
  $subject = $_POST['subject'];

  $tid= $_SESSION['t_tid'];
  $tdept= $_SESSION['t_dept'];

    $sql="INSERT INTO videos (tid, tdept, sem, subject, description, link) VALUES ('$tid', '$tdept', '$sem', '$subject', '$description', '$link');";
    $result =mysqli_query($conn, $sql);

    echo "<script>alert('Video added succesfully')</script>";
    echo "<script>location='viewVideos.php' </script>";

    exit();
  } else{
    echo "There was an error";
  }
