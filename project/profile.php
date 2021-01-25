<?php
    session_start();
    require 'config.php';
    $query = "SELECT * from `users`";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="style01.css" />
</head>
<body>
      <div class="container">
          <center class="title">
             <div class="data">
                 <h3>Welcome <?php echo $_SESSION['username'];?></h3><br>
              <div>
                  <?php 
                    while($rows=mysqli_fetch_assoc($result)) {    
                  ?>
                        <p>Email id is : <?php echo $rows['email']; ?></p> 
                        <p>Mobile number is: <?php echo $rows['contact']; ?></p> 
                  <?php
                    }
                  ?>
              </div>
             </div>
              <div class="data">
                  <img src="img/avatar.svg" class="avatar"/>    
              </div>
          </center>
          <form class="forms-container" action="index.php" method="post">
              <input type="submit" id="logout-btn" value="Log Out" name="logout-btn">
          </form>
          <?php
            if(isset($_POST['logout-btn'])){
                    session_unset();
                    session_destroy();
                    header('location: index.php');
                    exit;
            }
          ?>
      </div>  
</body>
</html>