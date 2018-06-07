<?php
  include_once 'header.php';
 ?>
 <style media="screen">
 section {
 background-image: url("background.gif");
 background-color: #cccccc;
 background-position: left;
 background-size: 90%;
 object-fit: cover;
 height:100%;
 background-repeat: repeat-x;
}
.jumbotron{
  margin-left: 62%;
  width:35%;
  padding-top: 10px;
  padding-bottom: 20px;
  /* padding-left: 20px; */
}
/* h1,p{
  color:navy blue;
} */
}
 </style>

      <section>
        <!-- <div style="z-index:2" class="container">
          <div style="margin-left:700px;width:400px; margin-top:20px;" class="  jumbotron">
            <h1 style="font-size:20px;padding-top:0px"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
            Welcome to VIRTUAL CLASSROOM</h1>
          </div> -->
          <br><br><br>
          <div class="jumbotron">

              <h1 style="text-align:center;">WELCOME</h1>
              <h1 style="text-align:center">TO</h1>
              <h1 style="text-align:center; font-size:45px;">VIRTUAL CLASSROOM</h1><br>
              <i><p  style="text-align:center; font-size:30px;">Make Learning Easier!</p></i>
            </div>

        </div>


          <?php
          if(isset($_SESSION['s_enroll']) || isset($_SESSION['t_id']) ){
            echo "You are logged in!";
          } ?>
        </div>
        <br><br><br><br>
      </section>

<?php
  include_once 'footer.php';
?>
