<?php
  include_once 'theader.php';
  session_start();
?>
<br><br><br>

<section>
  <h2  style="text-align:center">Make Announcement</h2>
  <div class="ui raised very padded text container segment">
      <form class="ui form" action="announce.php" method="post" enctype="multipart/form-data">
        Message:
        <div class="ui fluid input">
          <textarea name="message" rows="8" cols="80"></textarea>
        </div><br>
        <div class="ui fluid input">
          <button class="ui button basic primary" type="submit" name="submit">Add</button>
        </div>
      </form>
  </div >
  <div style="text-align:center">
    <a class="btn btn-primary" href="tdashboard.php">Back</a>
  </div>
</section>
