<?php
include '../dbh.inc.php';
session_start();


//$_FILES['name of input type=submit']
if(isset($_POST['submit'])){
  //$_FILES['name of input type=file']
  $file = $_FILES['file'];
  // $name= $_FILES['file']['name'];
  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileError = $_FILES['file']['error'];

  $description =$_POST['desc'];
  $sem = $_POST['sem'];

  $tid= $_SESSION['t_tid'];
  $tdept= $_SESSION['t_dept'];

  if($fileError === 0){
    $fileDestination = 'uploads/'.$fileName;
    move_uploaded_file($fileTmpName, $fileDestination);

    $sql="INSERT INTO upload (tid, tdept, sem, description, filename) VALUES ('$tid', '$tdept', '$sem', '$description', '$fileName');";
    $result =mysqli_query($conn, $sql);

    echo "<script>alert('File uploaded succesfully')</script>";
    echo "<script>location='viewAssignment.php' </script>";

    exit();
  } else{
    echo "There was an error uploading your file!";
  }
}
