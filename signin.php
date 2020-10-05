<?php 
    session_start();
    // If the session id is set (user logged in), redirect the user to the index page
    if(isset($_SESSION['id'])) {
        header("Location: index.php");
    } 
    include "connection.php";
    // Check if f the submit variable is set 
    if(isset($_POST['submit'])){
        echo 'hello';
        // If email or password variable is not set, shows the message that keys are missing
        if(!isset($_POST['email']) || !isset($_POST['password'])){
            $msg = "Keys are missing";
        } else {
            $email = $_POST['email'];
            $password = $_POST['password'];
            // if the email or password field is empty, shows the messaage to fill in all the fields.
            if(empty($email) || empty($password)) {
                $msg = "Please fill in all the fields";
            } else {
              // if the user fill in all the fields and click submit, hash the password submitted and check against 
              //the database to see if the password and the user email match
              $password = md5($password);
                $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
                print_r($_POST);
                $q = $conn->query($sql);
                if(mysqli_num_rows($q) == 0) {
                    $msg = "Wrong username or password.";
                // if all match, redirect the user to the index page
                } else {
                    $user = $q->fetch_object();
                    $_SESSION['id'] = $user->id;
                    $_SESSION['email'] = $user->email;
                    header("Location: index.php");
                }

            }
        }
    }
        
    
    
?>
<?php include "header.php"; ?>

<body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Sign In</h5>
              <form class="form-signin" action="" method="POST">
                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email address</label>
                </div>
  
                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>
                <!-- For future development -->
                <!-- <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div> -->
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Sign in</button>
                <!-- Shows the error message if there is any -->
                <div><?php if(isset($msg)) echo $msg; ?></div>
                <hr class="my-4">
                <!-- For future development -->
                <!-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



