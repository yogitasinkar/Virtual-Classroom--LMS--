<?php
$dbServerName  ="localhost";
$dbUserName ="root" ;
$dbPassword ="";
$dbName ="virtualcl";
session_start();
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName );



if(isset($_POST['submit'])){
  $message =$_POST['message'];
  $tid= $_SESSION['t_tid'];
  $tdept= $_SESSION['t_dept'];
  $tfirst= $_SESSION['t_first'];
  $tlast= $_SESSION['t_last'];

    $sql="INSERT INTO announce (tid, tdept, tfirst, tlast, message) VALUES ('$tid', '$tdept','$tfirst', '$tlast','$message');";
    $result =mysqli_query($conn, $sql);

    echo "<script>alert('Announcement added succesfully')</script>";
    echo "<script>location='viewAnnouncement.php' </script>";

    exit();
  } else{
    echo "There was an error";
  }
