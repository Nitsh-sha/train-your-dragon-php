<?php 
    include "connection.php";
    // check if submit has been set/declared and is not null
    if(isset($_POST['submit'])){
      // if variable email or password or password2 is not set, shows a message as below
        if(!isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['password2'])){
            $msg = "Keys are missing";
        } else {
          // if varibles are set, then the variables are equal to the value entered into the form
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            // if any of the form fields below are empty, shows message to fill in all fields.
            if(empty($email) || empty($password) || empty($password)) {
                $msg = "Please fill in all the fields";
            } else {
              // if both passwords are not the same, shows the message the they are not the same
                if($password != $password2) {
                    $msg = "Your passwords are not same";
                } else {
                  // sql query to select all columns from user table that have the same email as given
                   $sql2="SELECT * FROM users WHERE email='$email'";
                   $q2=$conn->query($sql2);
                   // if the query comes back with the result of more then zero row, show the message the email already exist
                   if(mysqli_num_rows($q2) > 0) {
                      $msg = "This email already exists";
                    } else {
                      // if the email does not already exist, store password as hashed passpword and store new email and registration time as now (timestamp)
                      $password = md5($password);
                      $sql = "INSERT INTO users (email, password, registration_time) 
                              VALUES ('".$email."', '".$password."', NOW())";
                      if($q = $conn->query($sql)) {
                          $msg = "Registration successful";
                          $login = 1;
                      } else {
                          $msg = "Something went wrong, please try again.";
                      }
                    }
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
              <h5 class="card-title text-center">Sign Up</h5>
              <form class="form-signin" action="" method="POST">
                <!-- For future development -->
                <!-- <div class="form-label-group">
                    <input type="text" id="inputName" class="form-control" placeholder="Full name" required autofocus>
                    <label for="inputName">Full name</label>
                </div> -->
                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email address</label>
                </div>
  
                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>
                <div class="form-label-group">
                  <input type="password" name="password2" id="inputPassword2" class="form-control" placeholder="Password2" required>
                  <label for="inputPassword">Password2</label>
                </div>
                <!-- For future development -->
                <!-- <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div> -->
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit" value="Register">Sign up</button>
                <!-- if the message variable is set, shows the message -->
                <div><?php if(isset($msg)) echo $msg; ?></div>
                <?php  
                // if login variable is set, shows the hyperlink that directs to login page 
                  if(isset($login)) {
                ?>
                    <div><a href="signin.php">Login</a></div>
                <?php
                    }
                ?>
                <hr class="my-4">
                <!-- For future development -->
                <!-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button> -->
                <!-- <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include "footer.php"; ?>




