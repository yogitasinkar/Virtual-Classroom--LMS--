<?php
  include_once 'sheader.php';
  session_start();

?>
<br><br><br>
<div class="ui raised fluid very padded text container segment ">
  <h2 class="h">PROFILE</h2><br>
  <?php
    echo "<h4>NAME:   " . "<strong>" . @strtoupper($_SESSION[s_first]) ." ". @strtoupper($_SESSION[s_last]) . "</strong><h4>";
    echo "<h4>ENROLL: " . "<strong>" . @$_SESSION[s_enroll] . "</strong><h4>";
    echo "<h4>SEM:    " . "<strong>" . @$_SESSION[s_sem] . "</strong><h4>";
    echo "<h4>DEPT:   " . "<strong>" . @strtoupper($_SESSION[s_dept]) ."</strong><h4>";
    echo "<h4>EMAIL:  " . "<strong>" . @$_SESSION[s_email] . "</strong><h4>";

      ?>
      <a href="sdashboard.php">DASHBOARD</a>

    </div>
