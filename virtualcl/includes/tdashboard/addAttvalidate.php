<?php
include '../dbh.inc.php';
session_start();

if(isset($_POST['submit'])){
  $total = $_POST['total'];
  $subject =$_POST['sub'];
  $sem =$_POST['sem'];
  $_SESSION['Total'] = $total;
  $_SESSION['Subject']= $subject;
  $_SESSION['Sem']= $sem;

    $sql ="SELECT sem , subject FROM attend WHERE sem='$sem' AND subject= '$subject'";
    $result =mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck >= 1){
      echo "<script>alert('Attendance for this class has already been added!')</script>";
      echo "<script>location='addAttsem.php' </script>";
    } else{
      echo "<script>location='addAttendance.php' </script>";
    }
}
