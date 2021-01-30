<?php
    session_start();
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Demo</title>
</head>
<body>
<!-- Container -->
    <div class="container">
<!-- Forms sub container -->
        <div class="forms-container">
            <div class="signin-signup">
               
<!-- Sign In  -->
                <form action="index.php" class="sign-in-form" method="post" id="login-form">
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                      <i class="fas fa-user"></i>
                      <input type="text" id="login-username" name="username" placeholder="Enter Username" autocomplete="off" required/>
                      <i class="fas fa-check-circle status"></i>
                      <i class="fas fa-exclamation-circle status"></i>
                      <small class="error">Error message!</small>
                    </div>
                    
                    <div class="input-field">
                      <i class="fas fa-lock"></i>
                      <input type="password" id="login-password" name="password" placeholder="Enter Password" autocomplete="off" required/>
                      <i class="fas fa-check-circle status"></i>
                      <i class="fas fa-exclamation-circle status"></i>
                      <small>Error message!</small>
                    </div>
                    <input type="submit" value="Login" class="btn solid" name="login-btn"/>
                </form>
               <?php
                    if(isset($_POST['login-btn'])) {
                        $username = mysqli_real_escape_string($con, $_POST['username']);
                        $password = mysqli_real_escape_string($con, $_POST['password']);
                        $loggedIn = TRUE;
                        $hashed_password = hash('sha512', $password); 
                        echo "<script> console.log('" . $hashed_password . "'); </script>";
                        $query = "select * from `users` where `username`='$username' AND `password`='$hashed_password'";
                        $query_run = mysqli_query($con, $query);
                        if($query_run) {
                            if(mysqli_num_rows($query_run) > 0) {
                                //valid
                                $_SESSION['username'] = $username;
                                header('location:profile.php');
                            }
                            else {
                                //invalid
                                echo '<script type="text/javascript"> alert("Invalid credentials...") </script>';
                            }
                        }
                        else {
                            echo '<script type="text/javascript"> alert("Server error...") </script>';
                        }
                    }
                ?>
                
<!--  Sign Up -->
               <form action="index.php" class="sign-up-form" method="post" id="sign-up-form">
                       <h2 class="title">Sign Up</h2>
                       <div class="input-field">
                          <i class="fas fa-user"></i>
                          <input type="text" name="username" id="username" placeholder="Enter Username" autocomplete="off" />
                          <i class="fas fa-check-circle status"></i>
                          <i class="fas fa-exclamation-circle status"></i>
                          <small>Error message!</small>
                      </div>
                      
                      <div class="input-field">
                          <i class="fas fa-envelope"></i>
                          <input type="email" name="email" id="email" placeholder="Enter Email"  autocomplete="off"/>
                          <i class="fas fa-check-circle status"></i>
                          <i class="fas fa-exclamation-circle status"></i>
                          <small>Error message!</small>
                     </div>
                     
                     <div class="input-field">
                        <i class="fas fa-mobile"></i>
                        <input type="text" name="contact" id="contact" placeholder="Enter Contact Number" autocomplete="off"/>
                        <i class="fas fa-check-circle status"></i>
                        <i class="fas fa-exclamation-circle status"></i>
                        <small>Error message!</small>
                    </div>
                    
                     <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Enter Password" autocomplete="off"/>
                        <i class="fas fa-check-circle status"></i>
                        <i class="fas fa-exclamation-circle status"></i>
                        <small>Error message!</small>
                    </div>
                    
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" autocomplete="off"/>
                        <i class="fas fa-check-circle status"></i>
                        <i class="fas fa-exclamation-circle status"></i>
                        <small>Error message!</small>
                    </div> 
                    
                    <input type="submit" class="btn" name="submit-btn" value="Sign up"/>
              </form>
              <?php
                        if(isset($_POST['submit-btn'])) {
                                $username = mysqli_real_escape_string($con, $_POST['username']);
                                $password = mysqli_real_escape_string($con, $_POST['password']);
                                $hashed_password = hash('sha512', $password); 
                                $email = mysqli_real_escape_string($con, $_POST['email']);
                                $contact = $_POST['contact'];
                                $query = "select * from `users` where `username`='$username'";
                                $query_run = mysqli_query($con, $query);
                                if(mysqli_num_rows($query_run) > 0) {
                                    echo "<script>alert('User already exists');</script>";
                                }
                                //User not present
                                else
                                {
                                    echo"<script> alert('User registered'); </script>";
                                    $query = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `contact`) VALUES (NULL, '$username', '$hashed_password', '$email', '$contact')";
                                    $query_run = mysqli_query($con, $query);
                                } 
                        }
             ?>
             <script src="validations.js"></script>
        </div>
<!-- Panel sub container-->
        <div class="panels-container">
<!--  Left Panel containing button for SignUp -->
            <div class="panel left-panel">
                <div class="content">
                    <h2>New here?</h2>
                    <p>Click here to join our community!!</p>
                    <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                </div>
                <img src="img/login.svg" class="image" alt="Login">
            </div>
<!--  Right Panel for logging in -->
            <div class="panel right-panel">
                <div class="content">
                    <h2>One of us?</h2>
                    <p>Login to check whats new!!</p>
                    <button class="btn transparent" id="sign-in-btn">Sign In</button>
                </div>
                <img src="img/welcome.svg" class="image" alt="Login">
            </div>
        </div>
        </div>
    <script src="app.js"></script>
    </body>
</html>