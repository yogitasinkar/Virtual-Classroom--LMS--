<?php
  include_once 'header.php';
 ?>
 <style media="screen">
section {
 background-image: url("https://cdn.vox-cdn.com/thumbor/VZeT43bAJuhC2nE90N6ACbqSyB0=/cdn.vox-cdn.com/uploads/chorus_asset/file/3397278/GIF2_1200x675_v2.0.gif");
 /* background-color: #cccccc; */
 /* background-repeat: repeat-x; */
}
 </style>

      <section>
        <br>
        <div style="padding-top:70px; " class="container">
          <div  style="margin-top:40%; font-weight:700px;" >
            <h1 style="font-size:60px"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
        Welcome to VIRTUAL CLASSROOM</h1>
            <p style="font-size:30px">Make learning easier</p>
            <!-- <img style="z-index:-1;" src="https://cdn.vox-cdn.com/thumbor/VZeT43bAJuhC2nE90N6ACbqSyB0=/cdn.vox-cdn.com/uploads/chorus_asset/file/3397278/GIF2_1200x675_v2.0.gif" alt=""> -->
          </div>
        <div>

          </div>

          <?php
          if(isset($_SESSION['s_enroll']) || isset($_SESSION['t_id']) ){
            echo "You are logged in!";
          } ?>
        </div>
      </section>

<?php
  include_once 'footer.php';
?>
