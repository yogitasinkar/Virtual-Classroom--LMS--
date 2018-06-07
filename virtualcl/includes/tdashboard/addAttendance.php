<?php
  include_once 'theader.php';
  include '../dbh.inc.php';
  session_start();

  $tdept= $_SESSION['t_dept'];
?>
<br><br><br><br>
<section>
<?php
  echo "<h3 class='dept'>".strtoupper($_SESSION['t_dept']) . "</h3>";
?>

  <h2  style="text-align:center">Add Attendance</h2>

  <div class="ui raised very padded text container segment">
    <?php
      $subject=$_SESSION['Subject'];
      $sem = $_SESSION['Sem'];
      echo '<h4 style="text-align:center;">SEM: '.$sem.'</h4><br>';
      echo '<h4 style="text-align:center;">Subject: '.$subject.'</h4><br>';
     ?>

    <table id='myform' class='ui celled table'>
      <thead>
          <tr><th>Enroll</th>
          <th>Name</th>
          <th>Classes Attended</th>
          <th>Out of</th>
          </tr>
      </thead>
      <form class="ui form" action="attendance.php" method="post">
        <?php

          $sql = "SELECT s_first, s_last, s_sem, s_enroll FROM students WHERE s_dept='$tdept' AND s_sem='$sem'";
          $result = mysqli_query($conn, $sql);
          $total = $_SESSION['Total'];

          while($row = mysqli_fetch_array($result)){
            print "<tr>\n";
            print "\t<td>\n";
            echo "<font face=arial size=4/>" .$row['s_enroll'] ."</font>";
            print "</td>\n";
            print "\t<td>\n";
            echo "<font face=arial size=4/>" .$row['s_first']. " " . $row['s_last']."</font>";
            print "</td>\n";
            print "\t<td>\n";
            echo "<input name='attended[]' type='number' required>";
            print "</td>\n";
            print "\t<td>\n";
            echo $total;
            print "</td>\n";
            print "</tr>\n";
          }
        ?>

      </table>
        <div class="ui fluid input">
          <button class="ui button basic primary" type="submit" name="submit">Submit</button>
        </div>
      </form>
  </div >
  <div style="text-align:center">
    <!-- <a class="ui button basic primary" href="viewQuestions.php">View</a><br><br> -->
    <a class="ui blue basic button" href="addAttsem.php">Back</a>
  </div>
</section>
