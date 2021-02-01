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
