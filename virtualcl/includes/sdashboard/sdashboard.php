<?php
  include_once 'sheader.php';
  session_start();
?>

<br><br><br>
<?php
  echo "<h3 class='dept'>".strtoupper($_SESSION['s_dept']) . " ( SEM ". strtoupper($_SESSION['s_sem']) ." )</h3>";
  echo "<p class='name'>Welcome, ". strtoupper($_SESSION['s_first']) . " ". strtoupper($_SESSION['s_last']) . "</p>";
 ?>
<div class="container">
<div class="ui three column grid">
  <div class="column">
    <a href="viewAssignment.php">
    <div class="ui olive inverted segment">
      <br>
      <h5 id="op">VIEW <br>ASSIGNMENTS</h5>
      <br>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="viewAttendance.php">
    <div class="ui orange inverted segment">
      <br>
      <h5 id="op">VIEW <br>ATTENDANCE</h5>
      <br>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="viewStudyMaterial.php">
    <div class="ui red inverted segment">
      <br>
      <h5 id="op">VIEW <br>STUDY MATERIAL</h5>
      <br>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="viewQuestions.php">
    <div class="ui teal inverted segment">
      <br>
      <h5 id="op">DISCUSSION <br>FORUM</h5>
      <br>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="viewAnnouncement.php">
    <div class="ui blue inverted segment">
      <br>
      <h5 id="op">VIEW <br>ANNOUNCEMENT</h5>
      <br>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="sprofile.php">
    <div class="ui violet inverted segment">
      <br>
      <h5 id="op">VIEW <br>PROFILE</h5>
      <br>
    </div>
    </a>
  </div>

  </div>
</div>
</div>

<?php
  include_once 'sfooter.php';
 ?>
