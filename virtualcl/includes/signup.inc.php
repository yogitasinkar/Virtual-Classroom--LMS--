<?php
//IF SUBMIT BUTTON IS CLICKED
if (isset($_POST['submit'])){
    include 'dbh.inc.php';
    //escape string is used to convert any html that user types to string format
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $enroll = $_POST['enroll'];
    $sem = $_POST['sem'];
    $dept = $_POST['dept'];
    $email = mysqli_real_escape_string( $conn ,$_POST['email']);
    $pwd = mysqli_real_escape_string( $conn ,$_POST['pwd']);

    $sql = "SELECT * FROM students WHERE s_enroll='$enroll'";
		$result = mysqli_query($conn , $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) {
      echo "<script>alert('User already signed in!')</script>";
      echo "<script>location='../login.php' </script>";

     } else {

      //Hashing the password
      $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
      //Insert the user into the database
      $sql = "INSERT INTO students (s_first, s_last, s_enroll, s_sem, s_dept, s_email, s_pwd) VALUES ('$first','$last','$enroll','$sem','$dept','$email','$hashedPwd');";
      mysqli_query($conn, $sql);
      header("Location: ../login.php");
      exit();
    }

  } else{
  //if submit button is not clicked (user just types in the url then)
  //Redirect back to signup.php
    header("Location: ../signup.php");
  exit();
}
