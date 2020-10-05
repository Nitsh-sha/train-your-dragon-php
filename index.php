<?php
  session_start();
  //if the session id is not set by user logging in, redirect to the signin page
  if(!isset($_SESSION['id'])) {
      header("Location: signin.php");
  } 

  include "connection.php";
  // database query to select all columns from dragons table and order by random with the limit of 4 rows
  $sql = "SELECT * FROM dragons ORDER BY RAND() LIMIT 4";
  $q = $conn->query($sql);


?>
<?php include "header.php"; ?>

  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h1 class="masthead-text">Train Your Dragon</h1>
          <h2 class="masthead-text">A Tribute to the real fans of 'How to train your dragon'</h2>
        </div>
      </div>
    </div>
  </header>


  <!-- Page Content -->
  <div class="container">
    <div class="character-grid">
      <div class="container">
          <div class="intro">
              <h2 class="text-center">Featured Dragon Characters </h2>
          </div>
          <div class="row">
           <!-- Populate the url and name of each row from the database requested from the dragons table -->
            <?php while($row = $q->fetch_object()) { ?>
            <div class="col-md-4 col-lg-3 item">
              <div class="box">
                <iframe class="embed-responsive-item" title="<?php echo $row->name; ?>" src="https://www.youtube.com/embed/<?php echo $row->url; ?>" 
                  allowfullscreen=""></iframe>
                <div class="">
                  <h3 class="name"><?php echo $row->name; ?></h3>
                  <div class="d-flex justify-content-center mt-3 mb-1">
                    <div class="character-grid-button">
                      <a class="btn btn-success btn-lg  mt-md-3" href="dragon.php?id=<?php echo $row->id; ?>" role="button">Learn more</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <?php } ?>
      </div>
    </div>

    <div class="separator my-3"></div>

    <section class="pt-5 pb-5">
      <div class="container">
          <div class="row align-items-center justify-content-center">
              <div class="col-12 col-md-6 mt-4 mt-md-0 order-md-1 order-2">
                <img alt="Dragon game image" class="img-fluid" src="img/1.jpg">
              </div>
              <div class="col-12 col-md-4 order-1 order-md-2">
                  <h2>Checkout Dragon Games</h2>
                  <p class="text-h3 mt-3">A collection of the best How To Train Your Dragon games for you to play online. You can play on any device of your choice: 
                    Desktop PC, tablet, or mobile. 
                  Browse through our collection and see what amazing games you'll discover.</p>
                  <div class="  d-flex mt-3 mb-1">
                    <a class="btn btn-success btn-lg  mt-md-3" href="games.php" role="button">See all Games</a>
                  </div>
              </div>
          </div>
          <div class="row align-items-center justify-content-center pt-5 pb-5">
              <div class="col-12 col-md-4 offset-md-1  ">
                  <h2>Checkout Fan Drawings</h2>
                  <p class="text-h3 mt-3"> A collection of the best How To Train Your Dragon drawings. We ask you to send in your best dragon drawings. Take a look at 
                    these brilliant creations!</p>
                  <div class="  d-flex mt-3 mb-1">
                    <a class="btn btn-success btn-lg  mt-md-3" href="drawings.php" role="button">See all Drawings</a>
                  </div>
  
              </div>
              <div class="col-12 col-md-6   mt-4 mt-md-0">
                  <img alt="Dragon drawing image by fans" class="img-fluid" src="img/dragon-drawing.png">
              </div>
          </div>
          <div class="row align-items-center justify-content-center">
              <div class="col-12 col-md-6   mt-4 mt-md-0 order-md-1 order-2">
                  <img alt="Dragon video image" class="img-fluid" src="img/12.png">
              </div>
              <div class="col-12 col-md-4 order-1 order-md-2">
                  <h2>Checkout Dragon Videos</h2>
                  <p class="text-h3 mt-3">Visually speaking, most family films -- especially animated family films -- are as bright as polished marble. Fortunately, 
                    How to Train Your Dragon directors Chris Sanders and Dean DeBlois have devised a world often lit by just fire, and by staying remarkably true to 
                    that fact they’ve fashioned a unique visual experience. Watch trailers, clips and videos, play games, explore the world and discover dragons!</p>
                  <div class="  d-flex mt-3 mb-1">
                    <a class="btn btn-success btn-lg  mt-md-3" href="videos.php" role="button">See all Videos</a>
                  </div>
              </div>
          </div>
      </div>
    </section>

  </div>

  

  
  <div class="separator my-3"></div>
  
  

  




</div>

<!-- /.container -->




<?php include "footer.php"; ?>