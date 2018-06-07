<?php
//IF SUBMIT BUTTON IS CLICKED
if (isset($_POST['submit'])){
    include 'dbh.inc.php';
    //escape string is used to convert any html that user types to string format
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $tid = $_POST['tid'];
    $quali = $_POST['quali'];
    $dept = $_POST['dept'];
    $email = mysqli_real_escape_string( $conn ,$_POST['email']);
    $pwd = mysqli_real_escape_string( $conn ,$_POST['pwd']);

    //prevent double sign up
    $sql = "SELECT * FROM teachers WHERE t_tid='$tid'";
		$result = mysqli_query($conn , $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) {
      echo "<script>alert('User already signed in!')</script>";
      echo "<script>location='../login.php' </script>";
     } else {

      //Hashing the password
      $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
      //Inser the user into the database
      $sql = "INSERT INTO teachers (t_first, t_last, t_tid, t_quali, t_dept, t_email, t_pwd) VALUES ('$first','$last','$tid','$quali','$dept','$email','$hashedPwd');";
      mysqli_query($conn, $sql);
      header("Location: ../tlogin.php");
      exit();
    }

  } else{
  //if submit button is not clicked (user just types in the url then)
  //Redirect back to signup.php
    header("Location: ../signup.php");
  exit();
}
