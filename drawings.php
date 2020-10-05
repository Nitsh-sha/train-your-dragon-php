<?php 
  session_start();
   // if session id is not set, redirect user to signin page
  if(!isset($_SESSION['id'])) {
      header("Location: signin.php");
  } 
include "connection.php";
// select all from the items table where the item category id is equal to 3
$sql = "SELECT * FROM items WHERE items_category_id=3";
$q = $conn->query($sql);

?>

<?php include "header.php"; ?>

<div class="hero-image hero-image-drawings">
  <div class="hero-text">
    <h1>Featured Fans' Drawings</h1>
  </div>
</div>

<!-- Page Content -->
<div class="container my-4">

  
  <h1 class="mt-4 mb-3">Fans' Drawings
  </h1>


  <section class="pt-5 pb-5">
    <div class="container">
      <!-- from sql request, create a while loop and go through all rows -->
      <!-- use the first format if i is an even number, and use the second format if i is an odd number -->
      <?php 
      $i=0;
      while($row=$q->fetch_object()) { ?>

      <?php if($i % 2 == 0) {
        ?>
        <div class="row align-items-center justify-content-center">
          <div class="col-12 col-md-6   mt-4 mt-md-0 order-md-1 order-2">
            <!-- echo the image url -->
            <img alt="<?php echo $row->name; ?>" class="img-fluid img-thumbnail" width="400px" src="<?php echo $row->url; ?>">
          </div>
          <div class="col-12 col-md-4 order-1 order-md-2">
            <!-- echo the name -->
            <h2><?php echo $row->name; ?></h2>
            <!-- echo the description -->
            <p class="text-h3 mt-3"><?php echo $row->description; ?></p>
            <!-- echo the id to redirect to the individual drawing page -->
            <a class="btn btn-success btn-lg  mt-md-3" href="drawing.php?id=<?php echo $row->id; ?>" role="button">Learn about this drawing</a>
          </div>
        </div>
        <?php
      } else {
        ?>
        <div class="row align-items-center justify-content-center pt-5 pb-5">
          <div class="col-12 col-md-4 offset-md-1  ">
            <h2><?php echo $row->name; ?></h2>
            <p class="text-h3 mt-3"><?php echo $row->description; ?></p>
            <a class="btn btn-success btn-lg  mt-md-3" href="drawing.php?id=<?php echo $row->id; ?>" role="button">Learn about this drawing</a>
          </div>
          <div class="col-12 col-md-6   mt-4 mt-md-0">
            <img alt="<?php echo $row->name; ?>" class="img-fluid img-thumbnail" width="400px" src="<?php echo $row->url; ?>">
          </div>
            
          </div>
        <?php
      } 
      ?>

      <!-- increment i -->
      <?php 
      $i++;
    } 
    ?>


  </div>
</section>





</div>
<!-- /.container -->

<?php include "footer.php"; ?>
