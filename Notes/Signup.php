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
