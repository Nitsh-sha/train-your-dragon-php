<?php 
  session_start();
  // if session id is not set, redirect user to signin page
  if(!isset($_SESSION['id'])) {
      header("Location: signin.php");
  } 
  include "connection.php";
  // if there is no requested id, redirect the user to the dragons page
  if(!isset($_GET['id'])) {
    header("Location: dragons.php");
  } else {
  // if there is an id, select all from the dragons table where the id match 
    $dragon_id = $_GET['id'];
    $sql = "SELECT * FROM dragons WHERE id='$dragon_id'";
    $q = $conn->query($sql);
    // if the number of row is equal to zero, redirect the user to the dragons page
    if(mysqli_num_rows($q) == 0) {
       header("Location: dragons.php");
    }
    // select all from the items table where the category is 1 and the dragon id matches. Order by random and limit to 3 rows.
    $sql2 = "SELECT * FROM items WHERE items_category_id=1 and dragon_id='$dragon_id' ORDER BY RAND() LIMIT 3";
    $q2 = $conn->query($sql2);
    // select all from the items table where the category is 1 and the dragon id is not equal to the requested id. Order by random and limit to 3 rows.
    $sql3 = "SELECT * FROM items WHERE items_category_id=1 and dragon_id!='$dragon_id' ORDER BY RAND() LIMIT 3";
    $q3 = $conn->query($sql3);

    $row = $q->fetch_object();

  }


?>

<?php include "header.php"; ?>
<div class="container">
    <header>
      <div class="overlay"></div>
      <!-- If the string length is equal or more than 20 character, use the youtube iframe format. If not, use the video embedded format -->
        <?php if(strlen($row->url) <= 20){ ?>
          <iframe class="embed-responsive-item" title="<?php echo $row->name; ?>" src="https://www.youtube.com/embed/<?php echo $row->url; ?>?&autoplay=1&mute=1&loop=1&controls=0" 
          width="100%" height="500px" allowfullscreen=""></iframe>  
        <?php } else { ?>
          <video style="height: auto; width: 100% !important;" controls="yes" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="<?php echo $row->url; ?>" type="video/mp4">
            <p>Your browser doesn't support HTML5 video. Here is
              a <a href="<?php echo $row->url; ?>">link to the video</a> instead.</p>
          </video>
        <?php } ?>
    </header>

    <div class="container h-100 mt-4">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100">
          <!-- print name and description from the sql request from the database-->
            <h1 class="display-3"><?php echo $row->name; ?></h1>
            <p class="lead mb-0"><?php echo $row->description; ?></p>
          </div>
        </div>
    </div>

    <div class="container py-5 mt-5">
      <div class="text-center">
       <!-- print name from the sql request from the database-->
        <h1 class="display-4">Recommended <?php echo $row->name ?> Videos</h1>
      </div>
    
      <div class="row">
        <div class="col-lg-11 mx-auto">
          <div class="row py-5">
            <?php while($row2=$q2->fetch_object()) { ?>
            <div class="col-lg-4">
              <figure class="rounded p-3 bg-white shadow-sm" style="min-height: 367px;">
                <div class="video">
                 <!-- If the string length is equal or more than 20 character, use the youtube iframe format. If not, use the video embedded format -->
                  <?php if(strlen($row2->url) <= 20){ ?>
                    <iframe class="embed-responsive-item" title="<?php echo $row2->name; ?>" src="https://www.youtube.com/embed/<?php echo $row2->url; ?>?autoplay=1&mute=1" 
                    allowfullscreen=""></iframe>
                  <?php } else { ?>
                    <video  style="height: auto; width: 100% !important;" controls="yes" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                      <source src="<?php echo $row2->url; ?>" type="video/mp4">
                      <p>Your browser doesn't support HTML5 video. Here is
                      a <a href="<?php echo $row2->url; ?>">link to the video</a> instead.</p>
                    </video>
                  <?php } ?>
                </div>
                <figcaption class="p-4 card-img-bottom">
                <!-- print name and description from the sqls request from the database-->
                  <h2 class="h5 font-weight-bold mb-2 font-italic"><?php echo $row2->name; ?></h2>
                  <p class="mb-0 text-small text-muted font-italic"><?php echo $row2->description; ?></p>
                </figcaption>
              </figure>
            </div>
              <?php 
                } 
              ?>
          </div>
    
    
          <div class="separator my-3"></div>
        </div>
      </div>
    </div>


    <div class="container py-5 mt-5">
      <div class="text-center">
        <h1 class="display-4">Recommended Other Dragon Videos</h1>
      </div>
  
      <div class="row">
        <div class="col-lg-11 mx-auto">
          <div class="row py-5">
          <!-- from sql3 request, create a while loop and go through all 3 rows -->
            <?php while($row3 = $q3->fetch_object()) { ?>
              <div class="col-lg-4">
                <figure class="rounded p-3 bg-white shadow-sm" style="min-height: 367px;">
                  <div class="video">
                   <!-- If the string length is equal or more than 20 character, use the youtube iframe format. If not, use the video embedded format -->
                  <?php if(strlen($row3->url) <= 20){ ?>
                    <iframe class="embed-responsive-item" title="<?php echo $row3->name; ?>" src="https://www.youtube.com/embed/<?php echo $row3->url; ?>?&autoplay=1&mute=1&loop=1&controls=0" 
                    width="100%" height="100%" 
                      allowfullscreen=""></iframe>
                  <?php } else { ?>
                    <video style="height: auto; width: 100% !important;" controls="yes" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                      <source src="<?php echo $row3->url; ?>" type="video/mp4">
                      <p>Your browser doesn't support HTML5 video. Here is
                      a <a href="<?php echo $row3->url; ?>">link to the video</a> instead.</p>
                    </video>
                  <?php } ?>
                  </div>
                  <figcaption class="p-4 card-img-bottom">
                    <h2 class="h5 font-weight-bold mb-2 font-italic"><?php echo $row3->name; ?></h2>
                    <p class="mb-0 text-small text-muted font-italic"><?php echo $row3->description; ?></p>
                  </figcaption>
                </figure>
              </div>
              <?php } ?>
      
            <div class="separator my-3"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="separator my-3"></div>

  </div>

  <?php include "footer.php"; ?>
