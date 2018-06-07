<?php
include '../dbh.inc.php';
session_start();


if(isset($_POST['submit'])){

  $tid= $_SESSION['t_tid'];
  $tdept= $_SESSION['t_dept'];
  $sem = $_SESSION['Sem'];
  $subject = $_SESSION['Subject'];
  $total = $_SESSION['Total'];
  $attended=$_POST['attended'];

  $sql1 ="SELECT s_first, s_last FROM students WHERE s_dept='$tdept' AND s_sem='$sem'";
  $result1 =mysqli_query($conn, $sql1);
  $sname= array();
  while($row1 = mysqli_fetch_array($result1)){
    $full = $row1['s_first']. " ".$row1['s_last'];
    array_push($sname, $full);
  }

  $length = count($attended, COUNT_NORMAL );
  $length2 = count($sname, COUNT_NORMAL );

  for($i=0; $i<$length; $i++){
    if($attended[$i] > $total){
      echo '<script>alert("Classes attended cannot be more than Total Classes")</script>';
      echo "<script>location='addAttendance.php' </script>";
    } else{
      $sql="INSERT INTO attend (tid, tdept, sem, sname, subject, total, attended) VALUES ('$tid', '$tdept','$sem','$sname[$i]', '$subject','$total','$attended[$i]')";
      $result =mysqli_query($conn, $sql);
    }
  }

  echo "<script>alert('Attendance added succesfully')</script>";
  echo "<script>location='viewAttendance.php' </script>";

  } else{
    echo "There was an error";
  }
