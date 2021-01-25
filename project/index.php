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
                <form action="index.php" class="sign-in-form" method="post">
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                      <i class="fas fa-user"></i>
                      <input type="text" name="username" placeholder="Enter Username" required/>
                    </div>
                    <div class="input-field">
                      <i class="fas fa-lock"></i>
                      <input type="password" name="password" placeholder="Enter Password" required/>
                    </div>
                    <input type="submit" value="Login" class="btn solid" name="login-btn"/>
                </form>
               <?php
                    if(isset($_POST['login-btn'])) {
                        $username = mysqli_real_escape_string($con, $_POST['username']);
                        $password = mysqli_real_escape_string($con, $_POST['password']);
                        $query = "select * from `users` where `username`='$username' AND `password`='$password'";
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
                        else {echo '<script type="text/javascript"> alert("Ho gaya...") </script>';
                        }
                    }
                ?>
<!--  Sign Up -->
               <form action="index.php" class="sign-up-form" method="post">
                       <h2 class="title">Sign Up</h2>
                       <div class="input-field">
                          <i class="fas fa-user"></i>
                          <input type="text" name="username" placeholder="Enter Username" required/>
                      </div>
                      <div class="input-field">
                          <i class="fas fa-envelope"></i>
                          <input type="email" name="email" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/>
                     </div>
                     <div class="input-field">
                        <i class="fas fa-mobile"></i>
                        <input type="text" name="contact" placeholder="Enter Contact Number"/>
                    </div>
                     <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Enter Password" pattern=".{6,}" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="cpassword" placeholder="Confirm Password" pattern=".{6,}" required/>
                    </div>             
                    <input type="submit" class="btn" name="submit-btn" value="Sign up"/>
              </form>
              <?php
                if(isset($_POST['submit-btn'])) {
                    $username = mysqli_real_escape_string($con, $_POST['username']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);
                    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $contact = $_POST['contact'];
                    
                    if($password == $cpassword) {
                        $query = "select * from `users` where `username`='$username'";
                        $query_run = mysqli_query($con, $query);
                        
                        //User already present
                        if(mysqli_num_rows($query_run) > 0) {
                            echo '<script type="text/javascript"> alert("User already exists...try another username") </script>';
                        }
                        //User not present
                        else
                        {
                            $query = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `contact`) VALUES (NULL, '$username', '$password', '$email', '$contact')";
                            $query_run = mysqli_query($con, $query);
                            //If query run
                            if($query_run) {
                                echo '<script type="text/javascript"> alert("User registered...go to login page") </script>';
                            }
                            else {
                                echo '<script type="text/javascript"> alert("Error!") </script>';
                            }
                        }
                    }
                    else {
                        echo '<script type="text/javascript"> alert("Passwords entered do not match... Try Again!!") </script>';
                    }
                }  
              ?>
        </div>
<!-- Panel sub container-->
        <div class="panels-container">
<!--  Left Panel containing button for SignUp -->
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <p>Click here to join our community!!</p>
                    <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                </div>
                <img src="img/login.svg" class="image" alt="Login">
            </div>
<!--  Right Panel for logging in -->
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us?</h3>
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