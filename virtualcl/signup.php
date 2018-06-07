<?php
  include_once 'header.php';
 ?>

 <section>
        <div>
          <br><br><br>
          <h2 style="text-align:center">Student Sign Up</h2>
          <div class="ui raised very padded text container segment">
              <form class="ui form" action="includes/signup.inc.php" method="post">
                <label>Name</label><br>
                <div class="two fields">
                  <div class="field">
                    <input type="text" name="first" placeholder="First Name" required>
                  </div>
                  <div class="field">
                    <input type="text" name="last" placeholder="Last Name" required>
                  </div>
                </div>
                Enrollment<br>
                <div class="ui small input fluid">
                  <input type="number" name="enroll"  placeholder="Enrollment" required>
                </div><br>
                Sem <br>
                <div class="ui small input fluid">
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
                Department <br>
                <div class="ui small input fluid">
                  <select name="dept" required>
                    <option value="it">IT</option>
                    <option value="comp">COMPUTER</option>
                    <option value="ec">EC</option>
                    <option value="elec">ELECTRICAL</option>
                    <option value="mech">MECHANICAL</option>
                    <option value="civil">CIVIL</option>
                    <option value="civil">AERO</option>
                    <option value="civil">IC</option>
                  </select>
                </div><br>
                  Email <br>
                <div class="ui small input fluid">
                  <input type="email" name="email" placeholder="email"  required>
                </div><br>
                Password <br>
                <div class="ui small input fluid">
                  <input type="password" name="pwd" placeholder="Password"  required>
                </div><br>
                <button class="ui button primary" type="submit" name="submit">Sign Up</button>
              </form>
          </div>
       </div>
  </section>

<?php
  include_once 'footer.php';
?>
