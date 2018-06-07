<?php
  include_once 'header.php';
 ?>

 <section class="main-container">
        <div class="main-wrapper">
          <br><br><br>
          <h2 style="text-align:center">Teacher Sign Up</h2>
          <div class="ui raised very padded text container segment">
              <form class="ui form" action="includes/tsignup.inc.php" method="post">
                <label>Name</label><br>
                <div class="two fields">
                  <div class="field">
                    <input type="text" name="first" placeholder="First Name">
                  </div>
                  <div class="field">
                    <input type="text" name="last" placeholder="Last Name">
                  </div>
                </div>
                Teacher Id<br>
                <div class="ui small input fluid">
                  <input type="number" name="tid"  placeholder="ID" value="1" required>
                </div><br>
                Qualification <br>
                <div class="ui small input fluid">
                  <input type="text" name="quali"  placeholder="Qualification" value="M.E" required>
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
                  </select>
                </div><br>
                  Email <br>
                <div class="ui small input fluid">
                  <input type="email" name="email" placeholder="email" value="y@gmail.com" required>
                </div><br>
                Password <br>
                <div class="ui small input fluid">
                  <input type="password" name="pwd" placeholder="Password" value="test123" required>
                </div><br>
                <button class="ui button primary" type="submit" name="submit">Sign Up</button>
              </form>
          </div>
       </div>
  </section>

<?php
  include_once 'footer.php';
?>
