<?php
$dbServerName  ="localhost";
$dbUserName ="root" ;
$dbPassword ="";
$dbName ="virtualcl";
session_start();
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName );


//$_FILES['name of input type=submit']
if(isset($_POST['submit'])){
  //$_FILES['name of input type=file']
  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileError = $_FILES['file']['error'];

  $subject =$_POST['subject'];
  $description =$_POST['desc'];
  $sem = $_POST['sem'];

  $tid= $_SESSION['t_tid'];
  $tdept= $_SESSION['t_dept'];

  if($fileError === 0){
    $fileDestination = 'materials/'.$fileName;
    move_uploaded_file($fileTmpName, $fileDestination);

    $sql="INSERT INTO material (tid, tdept, sem, subject, description, filename) VALUES ('$tid', '$tdept', '$sem', '$subject','$description', '$fileName');";
    $result =mysqli_query($conn, $sql);

    echo "<script>alert('File uploaded succesfully')</script>";
    echo "<script>location='viewStudyMaterial.php' </script>";

    exit();
  } else{
    echo "There was an error uploading your file!";
  }
}
