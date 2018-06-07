<?php
  include_once 'header.php';
 ?>

 <section>
        <div >
          <br><br><br>
          <h2 style="text-align:center">Student Login</h2>
          <div class="ui raised very padded text container segment" style="width:30%;">
              <form class="ui form" action="includes/login.inc.php" method="post">
                <div class="ui fluid input">
                  <input type="number" name="enroll" placeholder="Enrollment" value="" required >
                </div><br>
                <div class="ui fluid input">
                  <input type="password" name="pwd" placeholder="Password" value="test123" required>
                </div><br>
                <button class="ui button primary" type="submit" name="submit">Login</button>
            </div>
        </div>
   </section>
