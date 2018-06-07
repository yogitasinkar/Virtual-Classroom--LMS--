<?php
  include_once 'sheader.php';
  session_start();
?>

<br><br><br>
<?php
  // echo "<h3 class='dept'>".strtoupper($_SESSION['s_dept']) . " ( SEM ". strtoupper($_SESSION['s_sem']) ." )</h3>";
  // echo "<p class='name'> ". strtoupper($_SESSION['s_first']) . " ". strtoupper($_SESSION['s_last']) . "</p>";
 ?>
<section>
  <h2  style="text-align:center">Discussion Forum</h2>
  <div class="ui raised very padded text container segment">
      <form class="ui form" action="discussion.php" method="post" enctype="multipart/form-data">

        Add your question:
        <div class="ui fluid input">
          <textarea name="question" rows="8" cols="80"></textarea>
        </div><br>
        <div>
          Subject:
          <input type="text" name="sub" value="" required>
        </div><br>
        <div class="ui fluid input">
          <button class="ui button basic primary" type="submit" name="submit">Add</button>
        </div>
      </form>
  </div >
  <div style="text-align:center">
    <a class="btn btn-primary" href="viewQuestions.php">Back</a><br><br>
    <!-- <a class="ui blue basic button" href="tdashboard.php">Back</a> -->
  </div>
</section>
