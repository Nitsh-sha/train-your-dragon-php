<?php 
  session_start();
   // if session id is not set, redirect user to signin page
  if(!isset($_SESSION['id'])) {
      header("Location: signin.php");
  }
  include "connection.php";
  // if there is no requested id, redirect the user to the drawings page
  if(!isset($_GET['id'])) {
    header("Location: drawings.php");
  } else {
    $item_id = $_GET['id'];
    // select all from the items table where the id matchs
    $sql = "SELECT * FROM items WHERE id='$item_id'";
    $q = $conn->query($sql);
    // if the number of rows is equal to zero, redirect the user to the drawings page
    if(mysqli_num_rows($q) == 0) {
       header("Location: drawings.php");
    }
    // select all from the items table where item category id is equl to one and arrange at ramdom with a limit of 3 rows.
    $sql2 = "SELECT * FROM items WHERE items_category_id=1 ORDER BY RAND() LIMIT 3";
    $q2 = $conn->query($sql2);
    // select all from the items table where item category id is equl to three and arrange at ramdom with a limit of 3 rows.
    $sql3 = "SELECT * FROM items WHERE items_category_id=3 ORDER BY RAND() LIMIT 3";
    $q3 = $conn->query($sql3);

    $row = $q->fetch_object();

    // query to select all reviews of the item with the id that was requested including the user's email address
    $sql5 = "SELECT r.*, u.email as email FROM reviews as r JOIN users as u ON r.user_id = u.id WHERE item_id=".$_GET['id'];
    $q5 = $conn->query($sql5);
    $counter=0;
    $sum_of_ratings=0;
    $count_of_ratings=1;
    // creating an array of ratings from 1-5 in order to calculate the average and show rating breakdown
    $array_of_ratings = ['1' => 0, '2'=>0, '3'=>0, '4'=>0, '5'=>0];
    // loop through each row and sum the rating
    while($row5=$q5->fetch_object()) {
      $sum_of_ratings+=$row5->rating;
      $count_of_ratings++;
      // $current_array_rating = $array_of_ratings[$row5->rating];
      $array_of_ratings[$row5->rating]++;
    }
    // find the average of rating
    $avg_of_ratings = round($sum_of_ratings/$count_of_ratings, 2);

    if(isset($_POST['submit'])) {
      // if one or more of the values are not set, shows the message that keys are missing
       if(!isset($_POST['name']) || !isset($_POST['description']) || !isset($_POST['rating'])){
            $msg = "Keys are missing";
        } else {
          // add the review that has just been submitted to the database
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


  <!-- Page Content -->
  <div class="container">

    
    <!-- Portfolio Item Row -->
    <div class="row my-4">

      <div class="col-md-8">
        <img class="img-fluid" src="<?php echo $row->url; ?>" alt="<?php echo $row->name; ?>">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">Description</h3>
        <p><?php echo $row->description; ?></p>
        <h3 class="my-3">Want to learn more?</h3>
        <a class="" href="<?php echo $row->link; ?>">Click here to see the drawer's detail</a>
      </div>
      

    </div>
    <!-- /.row -->
   
    
    

    <div class="container py-5 mt-5">
      <div class="text-center">
        <h1 class="display-4">Recommended Dragon Videos</h1>
        </p>
      </div>
    
      <div class="row">
        <div class="col-lg-11 mx-auto">
          
          <div class="row py-5">
          <!-- from sql2 request, create a while loop and go through all 3 rows -->
            <?php while($row2=$q2->fetch_object()) { ?> 
            <div class="col-lg-4">
              <figure class="rounded p-3 bg-white shadow-sm" style="min-height: 367px;">
                <div class="video">
                <!-- If the string length is equal or more than 20 character, use the youtube iframe format. If not, use the video embedded format -->
                <?php if(strlen($row2->url) <= 20){ ?>
                  <iframe class="embed-responsive-item" title="<?php echo $row2->name; ?>" src="https://www.youtube.com/embed/<?php echo $row2->url; ?>?&autoplay=1&mute=1&loop=1&controls=0" 
                    width="100%" height="100%" allowfullscreen=""></iframe>
                <?php } else { ?>
                  <video style="height: auto; width: 100% !important;" controls="yes" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="<?php echo $row2->url; ?>" type="video/mp4">
                    <p>Your browser doesn't support HTML5 video. Here is
                      a <a href="<?php echo $row2->url; ?>">link to the video</a> instead.</p>
                  </video>
                <?php } ?>
                </div>
                <figcaption class="p-4 card-img-bottom">
                  <h2 class="h5 font-weight-bold mb-2 font-italic"><?php echo $row2->name; ?></h2>
                  <p class="mb-0 text-small text-muted font-italic"><?php echo $row2->name; ?></p>
                </figcaption>
              </figure>
            </div>
            <?php
              }
            ?>
    
    
          <div class="separator my-3"></div>
        </div>
      </div>
    </div>


    <div class="container">
    	<div class="row">
       <div class="col-lg-12">
       <!-- shows the first part of the user's email  -->
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
                <!-- shows a message if there are any errors -->
                <div><?php if(isset($msg)) echo $msg; ?></div>
                <hr class="my-4">
              </form>
       </div> 
      </div>		
      <div class="row">
        <div class="col-sm-3">
          <div class="rating-block">
            <h4>Average user rating</h4>
            <!-- shows the average rating -->
            <h2 class="bold padding-bottom-7"><?php echo $avg_of_ratings; ?><small>/ 5</small></h2>
            <?php 
            // show the amount of stars related to the average rating
                  $v=0;
                  while($v<round($avg_of_ratings)) {
                ?>
                  <svg class="bi bi-star-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="#e0a800" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 
                    4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                  <?php $v++; } ?>
          </div>
        </div>
        <div class="col-sm-3">
          <h4>Rating breakdown</h4>
          <!-- shows the rating breakdown by looping through the rating array -->
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
          // adjust the result pointer back to the beginning
          mysqli_data_seek($q5, 0);
          // show the reviews
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
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 
                    4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
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
      <h1 class="display-4">Recommended Fans' Drawings</h1>
    </div>
  
    <div class="row">
      <div class="col-lg-11 mx-auto">
        <div class="row py-5">
        <!-- from sql3 request, create a while loop and go through all 3 rows -->
        <?php while($row3=$q3->fetch_object()) { ?>
          <div class="col-lg-4">
            <figure class="rounded p-3 bg-white shadow-sm" style="min-height: 367px;">
            <!-- echo the image url -->
              <img src="<?php echo $row3->url; ?>" alt="<?php echo $row3->name; ?>" class="w-100 card-img-top">
              <figcaption class="p-4 card-img-bottom">
               <!-- echo the name -->
                <h2 class="h5 font-weight-bold mb-2 font-italic"><?php echo $row3->name; ?></h2>
                 <!-- echo the id to redirect to the individual drawing -->
                <a class="" href="drawing.php?id=<?php echo $row3->id; ?>" role="button">Learn more about this drawing</a>
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

  </div>
  <!-- /.container -->

</div>
 

  <?php include "footer.php"; ?>