<?php
  include_once 'theader.php';
  session_start();

?>
<br><br><br>
<div class="ui raised fluid very padded text container segment ">
  <h2 class="h">PROFILE</h2><br>
  <?php
    echo "<h4>NAME:   " . "<strong>" . @strtoupper($_SESSION[t_first]) ." ". @strtoupper($_SESSION[t_last]) . "</strong><h4>";
    echo "<h4>ID: " . "<strong>" . @$_SESSION[t_tid] . "</strong><h4>";
    echo "<h4>QUALIFICATION:    " . "<strong>" . @$_SESSION[t_quali] . "</strong><h4>";
    echo "<h4>DEPT:   " . "<strong>" . @strtoupper($_SESSION[t_dept]) ."</strong><h4>";
    echo "<h4>EMAIL:  " . "<strong>" . @$_SESSION[t_email] . "</strong><h4>";

      ?>
      <a href="tdashboard.php">DASHBOARD</a>

    </div>
