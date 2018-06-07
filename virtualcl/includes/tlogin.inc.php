<?php

session_start();

  if(isset($_POST['submit'])){

      include 'dbh.inc.php';

      $tid = $_POST['tid'];
      $pwd = $_POST['pwd'];

      //ERROR HANDLERS

        //Check if user exits in Db..i.e has signed up
        $sql ="SELECT * FROM teachers WHERE t_tid='$tid'";
        $result =mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck < 1){
          // header("Location: ../index.php?login=error");
          // exit();
          echo "<script>alert('You need to sign up first')</script>";
          echo "<script>location='../tsignup.php' </script>";
        } else{
          //Check if user has entered the correct pwd
          if($row = mysqli_fetch_assoc($result)){
            //De-hashing the pwd
            $hashedPwdCheck = password_verify($pwd, $row['t_pwd']);
            if($hashedPwdCheck == false){
              // header("Location: ../tlogin.php?login=error");
              // exit();
              echo "<script>alert('Wrong password!')</script>";
              echo "<script>location='../login.php' </script>";

            } elseif($hashedPwdCheck == true){
              //login the user
              $_SESSION['t_id']= $row['t_id'];
              $_SESSION['t_first']= $row['t_first'];
              $_SESSION['t_last']= $row['t_last'];
              $_SESSION['t_tid']= $row['t_tid'];
              $_SESSION['t_quali']= $row['t_quali'];
              $_SESSION['t_dept']= $row['t_dept'];
              $_SESSION['t_email']= $row['t_email'];
              // echo "hello " . $_SESSION['s_first'];
              header("Location: tdashboard/tdashboard.php");
              exit();
            }
          }
        }
      // }

  }else{
    header("Location: ../index.php?login=error");
    exit();
  }
