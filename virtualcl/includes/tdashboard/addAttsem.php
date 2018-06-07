<?php
  include_once 'theader.php';
  // include '../dbh.inc.php';
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
    Select Sem:
      <form class="ui form" action="addAttvalidate.php" method="post">
        <div id="semform" class="ui small input fluid">
          <select name="sem" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
          </select>
        </div><br>
        <div>
          Subject:
          <input type="text" name="sub" value="" required>
        </div><br>
        <div>
          Total Classes:
          <input type="number" name="total" value="" required>
        </div><br>
        <div>
          <button class="ui button primary" type="submit" id="sembut" name="submit">Select</button>
        </div>
      </form>
  </div>
  <div style="text-align:center">
    <a class="ui button basic primary" href="viewAttendance.php">View Attendance</a><br><br>
    <a class="ui blue basic button" href="tdashboard.php">Back</a>
  </div>
</section>
