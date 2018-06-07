<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Virtual Classroom</title>
    <link rel="stylesheet" href="assets\bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/911fcf40cf.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styles.css">

  </head>
  <body>
    <header>

      <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
      <div class="container" style="font-size:17px;">
        <!-- Brand -->
        <a class="navbar-brand" href="index.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
    Virtual Classroom</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">

          <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li> -->
            <li class="nav-item">
              <a href="#" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Contact</a>
            </li>
          </ul>
          <?php
          if (isset($_SESSION['s_enroll']) || isset($_SESSION['t_tid'])) {
            if(isset($_SESSION['s_enroll'])){
              echo 's
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <form action="includes/sdashboard/sdashboard.php" method="POST">
                  <button style="background-color:#2c3e50;color:white;border:none" class="nav-link" type="submit" name="submit">
                      Dashboard
                  </button>
                </form>
                </li>
              ';
            } elseif (isset($_SESSION['t_tid'])) {
              echo 't
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                  <form action="includes/tdashboard/tdashboard.php" method="POST">
                    <button style="background-color:#2c3e50;color:white;border:none" class="nav-link" type="submit" name="submit">
                        Dashboard
                    </button>
                  </form>
                  </li>
              ';
            }

						echo '

              <li class="nav-item">
  						<form action="includes/logout.inc.php" method="POST">
  							<button style="background-color:#2c3e50;color:white;border:none" class="nav-link" type="submit" name="submit">
                    Logout
                </button>
  						</form>
              </li>
              </ul>
						';
					} else {

           echo '
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="login.php">Student</a>
                      <a class="dropdown-item" href="tlogin.php">Teacher</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sign Up
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="signup.php">Student</a>
                            <a class="dropdown-item" href="tsignup.php">Teacher</a>
                          </div>
                  </li>
                </ul>
                ';
          }
          ?>
        </div>
      </div>
    </nav>
<br><br>
  </header>
