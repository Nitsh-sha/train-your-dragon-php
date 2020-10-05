<?php 
  include "connection.php";
  if(!isset($_GET['id'])) {
    header("Location: videos.php");
  } else {
    $item_id = $_GET['id'];
    $sql = "SELECT * FROM items WHERE id='$item_id'";
    $q = $conn->query($sql);
    if(mysqli_num_rows($q) == 0) {
       header("Location: videos.php");
    }
    $sql2 = "SELECT * FROM items WHERE items_category_id=1 ORDER BY RAND() LIMIT 3";
    $q2 = $conn->query($sql2);

    $sql3 = "SELECT * FROM items WHERE items_category_id=2 ORDER BY RAND() LIMIT 3";
    $q3 = $conn->query($sql3);

    $row = $q->fetch_object();
  }


?>


<?php include "header.php"; ?>

  <!-- Page Content -->
  <div class="container">

    <header>
      <div class="overlay"></div>
      <div class="video"><iframe src="<?php echo $row->url; ?>" frameborder="0" allowfullscreen></iframe></div>
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white">
            <h1 class="display-3"><?php echo $row->name; ?></h1>
            <p class="lead mb-0"><?php echo $row->description; ?></p>
          </div>
        </div>
      </div>
    </header>

    <div class="container py-5 mt-5">
      <div class="text-center">
        <h1 class="display-4">Recommended Videos</h1>
      </div>
    
      <div class="row">
        <div class="col-lg-11 mx-auto">
          <div class="row py-5">
            <?php while($row2=$q2->fetch_object()) { ?>
            <div class="col-lg-4">
              <figure class="rounded p-3 bg-white shadow-sm">
                <div class="video"><iframe src="<?php echo $row2->url; ?>" frameborder="0" allowfullscreen></iframe></div>
                <figcaption class="p-4 card-img-bottom">
                  <h2 class="h5 font-weight-bold mb-2 font-italic"><?php echo $row2->name; ?></h2>
                  <a class="" href="game.php?id=<?php echo $row2->id; ?>" role="button">Learn more now</a>
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
        <div class="col-sm-3">
          <div class="rating-block">
            <h4>Average user rating</h4>
            <h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
            <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
          </div>
        </div>
        <div class="col-sm-3">
          <h4>Rating breakdown</h4>
          <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
              <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
              <div class="progress" style="height:9px; margin:8px 0;">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                <span class="sr-only">80% Complete (danger)</span>
                </div>
              </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">1</div>
          </div>
          <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
              <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
              <div class="progress" style="height:9px; margin:8px 0;">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                <span class="sr-only">80% Complete (danger)</span>
                </div>
              </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">1</div>
          </div>
          <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
              <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
              <div class="progress" style="height:9px; margin:8px 0;">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                <span class="sr-only">80% Complete (danger)</span>
                </div>
              </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">0</div>
          </div>
          <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
              <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
              <div class="progress" style="height:9px; margin:8px 0;">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                <span class="sr-only">80% Complete (danger)</span>
                </div>
              </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">0</div>
          </div>
          <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
              <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
              <div class="progress" style="height:9px; margin:8px 0;">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                <span class="sr-only">80% Complete (danger)</span>
                </div>
              </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">0</div>
          </div>
        </div>			
      </div>			
      
      <div class="row">
        <div class="col-sm-7">
          <hr/>
          <div class="review-block">
            <div class="row">
              <div class="col-sm-3">
                <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                <div class="review-block-name"><a href="#">nktailor</a></div>
                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
              </div>
              <div class="col-sm-9">
                <div class="review-block-rate">
                  <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                </div>
                <div class="review-block-title">this was nice in buy</div>
                <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
              </div>
            </div>
            <hr/>
            <div class="row">
              <div class="col-sm-3">
                <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                <div class="review-block-name"><a href="#">nktailor</a></div>
                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
              </div>
              <div class="col-sm-9">
                <div class="review-block-rate">
                  <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                </div>
                <div class="review-block-title">this was nice in buy</div>
                <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
              </div>
            </div>
            <hr/>
            <div class="row">
              <div class="col-sm-3">
                <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                <div class="review-block-name"><a href="#">nktailor</a></div>
                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
              </div>
              <div class="col-sm-9">
                <div class="review-block-rate">
                  <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </button>
                </div>
                <div class="review-block-title">this was nice in buy</div>
                <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div> <!-- /container -->
  
    <div class="container">
      <div class="row" style="margin-top:40px;">
        <div class="col-md-6">
          <div class="well well-sm">
                <div class="text-right">
                    <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Leave a Review</a>
                </div>
            
                <div class="row" id="post-review-box" style="display:none;">
                    <div class="col-md-12">
                        <form accept-charset="UTF-8" action="" method="post">
                            <input id="ratings-hidden" name="rating" type="hidden"> 
                            <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
            
                            <div class="text-right">
                                <div class="stars starrr" data-rating="0"></div>
                                <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                                <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                                <button class="btn btn-success btn-lg" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
             
        </div>
      </div>
    </div>
    


    <div class="container py-5 mt-5">
      <div class="text-center">
        <h1 class="display-4">Recommended Games</h1>
      </div>
    
      <div class="row">
        <div class="col-lg-11 mx-auto">
          <div class="row py-5">
            <?php while($row3=$q3->fetch_object()) { ?>
            <div class="col-lg-4">
              <figure class="rounded p-3 bg-white shadow-sm">
                <div class="video"><iframe src="<?php echo $row3->url; ?>" frameborder="0" allowfullscreen></iframe></div>
                <figcaption class="p-4 card-img-bottom">
                  <h2 class="h5 font-weight-bold mb-2 font-italic"><?php echo $row3->name; ?></h2>
                  <a class="" href="game.php?id=<?php echo $row3->id; ?>" role="button">Learn more now</a>
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
  <script src="js/review.js"></script>

  <?php include "footer.php"; ?>