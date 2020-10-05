<?php 
  session_start();
  // if session id is not set, redirect user to signin page
  if(!isset($_SESSION['id'])) {
      header("Location: signin.php");
  } 
  include "connection.php";
  // select all from the items table where the item category id is equal to 2
  $sql = "SELECT * FROM items WHERE items_category_id=2";
  $q = $conn->query($sql);

 ?>

<?php include "header.php"; ?>

  <div class="hero-image hero-image-games">
    <div class="hero-text">
      <h1>Featured Dragon Games</h1>
    </div>
  </div>

  <!-- Page Content -->
  <div class="container my-4">

    
    <h1 class="mt-4 mb-3">Dragon Games
    </h1>

    
    <!-- from sql request, create a while loop and go through all rows -->
    <?php while($row = $q->fetch_object()) { ?>
      <section class="pb-5 pt-5">
        <div class="container">
          <div class="row align-items-center justify-content-between ">
            <div class="col-12 col-md-7  mt-4 mt-md-0">
              <div class="embed-responsive embed-responsive-16by9 shadow-lg rounded overflow-hidden">
                <!-- If the string length is equal or more than 20 character, use the youtube iframe format. If not, use the video embedded format -->
                  <?php if(strlen($row->url) <= 20){ ?>
                    <!-- echo the youtube embeded url -->
                  <iframe class="embed-responsive-item" title="<?php echo $row->name; ?>" src="https://www.youtube.com/embed/<?php echo $row->url; ?>?autoplay=1&mute=1" 
                    allowfullscreen=""></iframe>
                  <?php } else { ?>
                     <!-- echo the video url -->
                    <video controls="yes" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                      <source src="<?php echo $row->url; ?>" type="video/mp4">
                      <p>Your browser doesn't support HTML5 video. Here is
                      a <a href="<?php echo $row->url; ?>">link to the video</a> instead.</p>
                    </video>
                  <?php } ?>
              </div>
            </div>
            <div class="col-12 col-md-5 pr-md-5 ">
               <!-- echo the name -->
              <h1 class="mb-3 mt-5 display-4 font-weight-bold"><?php echo $row->name; ?></h1>
               <!-- echo the description -->
              <p class="lead"><?php echo $row->description; ?></p>
              <div class="d-flex mt-3 mb-1">
                 <!-- echo the id to redirect to the individual game page -->
                <a class="btn btn-success btn-lg mt-md-3" href="game.php?id=<?php echo $row->id; ?>" role="button">Learn about <?php echo $row->name; ?> </a>
              </div>
            </div>
            
          </div>
        </div>
      </section>
    <?php } ?>

</div>






  <?php include "footer.php"; ?>