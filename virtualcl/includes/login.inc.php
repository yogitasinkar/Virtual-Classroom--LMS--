<?php

session_start();

  if(isset($_POST['submit'])){

      include 'dbh.inc.php';
      $enroll = $_POST['enroll'];
      $pwd = $_POST['pwd'];

      //ERROR HANDLERS

        //Check if user exits in Db..i.e has signed up
        $sql ="SELECT * FROM students WHERE s_enroll='$enroll'";
        $result =mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck < 1){
          echo "<script>alert('You need to sign up first')</script>";
          echo "<script>location='../signup.php' </script>";
        } else{
          //Check if user has entered the correct pwd
          if($row = mysqli_fetch_assoc($result)){
            //De-hashing the pwd
            $hashedPwdCheck = password_verify($pwd, $row['s_pwd']);
            if($hashedPwdCheck == false){
              // header("Location: ../login.php?login=error");
              // exit();
              echo "<script>alert('Wrong password!')</script>";
              echo "<script>location='../login.php' </script>";
            } elseif($hashedPwdCheck == true){
              //login the user
              $_SESSION['s_id']= $row['s_id'];
              $_SESSION['s_first']= $row['s_first'];
              $_SESSION['s_last']= $row['s_last'];
              $_SESSION['s_enroll']= $row['s_enroll'];
              $_SESSION['s_sem']= $row['s_sem'];
              $_SESSION['s_dept']= $row['s_dept'];
              $_SESSION['s_email']= $row['s_email'];
              // echo "hello " . $_SESSION['s_first'];
              header("Location: sdashboard/sdashboard.php");
              exit();
            }
          }
        }
      // }

  }else{
    header("Location: ../index.php?login=error");
    exit();
  }
