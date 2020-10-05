<?php 
  session_start();
  if(!isset($_SESSION['id'])) {
      header("Location: signin.php");
  } 
  include "connection.php";
  if(!isset($_GET['id'])) {
    header("Location: dragons.php");
  } else {
    $dragon_id = $_GET['id'];
    $sql = "SELECT * FROM dragons WHERE id='$dragon_id'";
    $q = $conn->query($sql);
    if(mysqli_num_rows($q) == 0) {
       header("Location: dragons.php");
    }
    $sql2 = "SELECT * FROM items WHERE items_category_id=1 and dragon_id='$dragon_id' ORDER BY RAND() LIMIT 3";
    $q2 = $conn->query($sql2);

    $sql3 = "SELECT * FROM items WHERE items_category_id=1 and dragon_id!='$dragon_id' ORDER BY RAND() LIMIT 3";
    $q3 = $conn->query($sql3);

    $row = $q->fetch_object();

    $sql5 = "SELECT r.*, u.email as email FROM reviews as r JOIN users as u ON r.user_id = u.id WHERE item_id=".$_GET['id'];
    $q5 = $conn->query($sql5);
    $counter=0;
    $sum_of_ratings=0;
    $count_of_ratings=1;
    $array_of_ratings = ['1' => 0, '2'=>0, '3'=>0, '4'=>0, '5'=>0];
    while($row5=$q5->fetch_object()) {
      $sum_of_ratings+=$row5->rating;
      $count_of_ratings++;
      // $current_array_rating = $array_of_ratings[$row5->rating];
      $array_of_ratings[$row5->rating]++;
    }
    
    $avg_of_ratings = round($sum_of_ratings/$count_of_ratings, 2);

    if(isset($_POST['submit'])) {
       if(!isset($_POST['name']) || !isset($_POST['description']) || !isset($_POST['rating'])){
            $msg = "Keys are missing";
        } else {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $rating = $_POST['rating'];
            if(empty($name) || empty($description) || empty($rating)) {
                $msg = "Please fill in all the fields";
            } else {
               $sql = "INSERT INTO reviews (name, description, rating, user_id, item_id, date_inserted) 
                              VALUES ('".$name."', '".$description."', '".$rating."','".$_SESSION['id']."', '".$_GET['id']."', NOW())";
                      if($q = $conn->query($sql)) {
                          $msg = "Review left successfully";
                      } else {
                          $msg = "Something went wrong, please try again.".mysqli_error($conn);
                      }
            }
          }
    }

  }


?>

<?php include "header.php"; ?>
<div class="container">
    <header>
      <div class="overlay"></div>
        <?php if(strlen($row->url) <= 20){ ?>
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $row->url; ?>?&autoplay=1&mute=1&loop=1&controls=0" width="100%" height="500px" allowfullscreen=""></iframe>  
          <!-- //change everywehre// -->
        <?php } else { ?>
          <video style="height: auto; width: 100% !important;" controls="yes" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="<?php echo $row->url; ?>" type="video/mp4">
          </video>
        <?php } ?>
    </header>

    <div class="container h-100 mt-4">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100">
            <h1 class="display-3"><?php echo $row->name; ?></h1>
            <p class="lead mb-0"><?php echo $row->description; ?></p>
          </div>
        </div>
    </div>

    <div class="container py-5 mt-5">
      <div class="text-center">
        <h1 class="display-4">Recommended <?php echo $row->name ?> Videos</h1>
      </div>
    
      <div class="row">
        <div class="col-lg-11 mx-auto">
          <div class="row py-5">
            <?php while($row2=$q2->fetch_object()) { ?>
            <div class="col-lg-4">
              <figure class="rounded p-3 bg-white shadow-sm" style="min-height: 367px;">
                <div class="video">
                  <?php if(strlen($row2->url) <= 20){ ?>
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $row2->url; ?>?autoplay=1&mute=1" allowfullscreen=""></iframe>
                  <?php } else { ?>
                    <video  style="height: auto; width: 100% !important;" controls="yes" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                      <source src="<?php echo $row2->url; ?>" type="video/mp4">
                    </video>
                  <?php } ?>
                </div>
                <figcaption class="p-4 card-img-bottom">
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


    <div class="container">
    	<div class="row">
       <div class="col-lg-12">
         <h1><?php echo ucfirst(explode('@', $_SESSION['email'])[0]); ?>, add your rating:</h1>
         <form class="form-signin" action="" method="POST">
                 <select name="rating" class="form-control" id="rating">
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                 </select>
                 <br>
                <div class="form-label-group">
                  <input type="text" name="name" id="name" class="form-control" placeholder="Review title" required autofocus>
                  <label for="name">Review title</label>
                </div>
                <div class="form-label-group">
                  <textarea name="description" id="description"  rows="4" class="form-control"></textarea>
                </div>
  
                
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Leave a review</button>
                <div><?php if(isset($msg)) echo $msg; ?></div>
                <hr class="my-4">
              </form>
       </div> 
      </div>		
      <div class="row">
        <div class="col-sm-3">
          <div class="rating-block">
            <h4>Average user rating</h4>
            <h2 class="bold padding-bottom-7"><?php echo $avg_of_ratings; ?><small>/ 5</small></h2>
            <?php 
                  $v=0;
                  while($v<round($avg_of_ratings)) {
                ?>
                  <svg class="bi bi-star-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="#e0a800" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                  <?php $v++; } ?>
          </div>
        </div>
        <div class="col-sm-3">
          <h4>Rating breakdown</h4>
          <?php foreach ($array_of_ratings as $key => $value) { 
            $part = $value/$count_of_ratings;
            
            ?>
            
          <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
              <div style="height:9px; margin:5px 0;"><?php echo $key; ?> <span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
              <div class="progress" style="height:9px; margin:8px 0;">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $part*100; ?>%">
                <span class="sr-only">80% Complete (danger)</span>
                </div>
              </div>
            </div>
            <div class="pull-right" style="margin-left:10px;"><?php echo $value; ?></div>
          </div>
          <?php } ?>
        </div>			
      </div>			
      
      <div class="row">
        <div class="col-sm-7">
          <hr/>
          <div class="review-block">
          <?php 
          mysqli_data_seek($q5, 0);
          while($row5 = $q5->fetch_object()) { ?>
            <div class="row">
              <div class="col-sm-3">
                <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                <div class="review-block-name"><a href="#"><?php echo $row5->email; ?></a></div>
                <div class="review-block-date"><?php echo $row5->date_inserted; ?></div>
                
              </div>
              <div class="col-sm-9">


                <div class="review-block-rate">
                <?php 
                  $r=0;
                  while($r<$row5->rating) {
                ?>
                  <svg class="bi bi-star-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="#e0a800" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                  <?php $r++; } ?>
                </div>
                <div class="review-block-title"><?php echo $row5->name; ?></div>
                <div class="review-block-description"><?php echo $row5->description; ?></div>
              </div>
            </div>
            <hr/>
            <?php } ?>
          </div>
        </div>
      </div>
      
    </div> <!-- /container -->


    <div class="container py-5 mt-5">
      <div class="text-center">
        <h1 class="display-4">Recommended Other Dragon Videos</h1>
      </div>
  
      <div class="row">
        <div class="col-lg-11 mx-auto">
          <div class="row py-5">
            <?php while($row3 = $q3->fetch_object()) { ?>
              <div class="col-lg-4">
                <figure class="rounded p-3 bg-white shadow-sm" style="min-height: 367px;">
                  <div class="video">
                  <?php if(strlen($row3->url) <= 20){ ?>
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $row3->url; ?>?&autoplay=1&mute=1&loop=1&controls=0" width="100%" height="100%" allowfullscreen=""></iframe>
                  <?php } else { ?>
                    <video style="height: auto; width: 100% !important;" controls="yes" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                      <source src="<?php echo $row3->url; ?>" type="video/mp4">
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
