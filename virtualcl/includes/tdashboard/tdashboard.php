<?php
  include_once 'theader.php';
  session_start();

?>
<link rel="stylesheet" href="dashstyle.css">
<br><br><br>
<?php
echo "<h3 class='dept'>".strtoupper($_SESSION['t_dept']) . "</h3>";
echo "<p class='name'>". strtoupper($_SESSION['t_first']) . " ". strtoupper($_SESSION['t_last']) . "</p>";
 ?>
<form>

</form>


<div class="container">
<div class="ui three column grid">
  <div class="column">
    <a href="viewAssignment.php">
    <div class="ui  blue inverted segment">
      <br>
      <h5 id="op">ADD <br>ASSIGNMENTS</h5>
      <br>
    </div>
  </a>
  </div>
  <div class="column">
    <a href="addAttsem.php">
    <div class="ui  blue inverted segment">
      <br>
      <h5 id="op">ADD <br>ATTENDANCE</h5>
      <br>
    </div>
  </a>
  </div>
  <div class="column">
    <a href="viewStudyMaterial.php">
    <div class="ui  blue inverted segment">
      <br>
      <h5 id="op">ADD <br>STUDY MATERIAL</h5>
      <br>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="viewQuestions.php">
    <div class="ui blue inverted segment">
      <br>
      <h5 id="op">DISCUSSION <br>FORUM</h5>
      <br>
    </div>
  </a>
  </div>
  <div class="column">
    <a href="viewAnnouncement.php">
    <div class="ui  blue inverted segment">
      <br>
      <h5 id="op">ADD <br>ANNOUNCEMENT</h5>
      <br>
    </div>
    </a>
  </div>
  <div class="column">
    <a href="tprofile.php">
    <div class="ui blue inverted segment">
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
  include_once '../sdashboard/sfooter.php';
 ?>
