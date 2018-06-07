<?php
  include_once 'theader.php';
  session_start();
?>
<br><br><br>

<section>
  <h2  style="text-align:center">Add Video Links</h2>
  <div class="ui raised very padded text container segment">
      <form class="ui form" action="video.php" method="post" enctype="multipart/form-data">
        Video Link
        <div class="ui fluid input">
          <input type="text" name="link" value="">
        </div><br>
        Subject:
        <div class="ui fluid input">
          <input type="text" name="subject"/>
        </div><br>
        Description :
        <div class="ui fluid input">
          <input type="text" name="desc"/>
        </div><br>
        Select Sem:
        <div class="ui fluid input">
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
        <div class="ui fluid input">
          <button class="ui button basic primary" type="submit" name="submit">Add</button>
        </div>
      </form>
  </div >
  <div style="text-align:center">
    <a class="btn btn-primary" href="viewVideos.php">Back</a><br><br>
    <!-- <a class="ui blue basic button" href="tdashboard.php">Back</a> -->
  </div>
</section>
