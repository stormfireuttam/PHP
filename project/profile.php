<?php
    session_start();
    require 'config.php';
    if(!isset($_SESSION['username']) || $_SESSION['username'] == NULL)  
    {     
        header('location: index.php');
    } 
    $user = $_SESSION['username'];
    $query = "SELECT * from `users` WHERE `username` LIKE '$user'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style01.css" />
</head>
<body>
         <div class="container">
              <center class="title">
                 <div class="data">
                     <h1>Welcome <?php echo $_SESSION['username'];?></h1><br>
                  <div>
                      <?php 
                        $rows=mysqli_fetch_assoc($result);   
                      ?>
                            <h2>Email id is : <?php echo $rows['email']; ?></h2> 
                            <h2>Mobile number is: <?php echo $rows['contact']; ?></h2> 
                  </div>
                  <br>
                 </div>
                 <?php if (isset($_GET['error'])): ?>
                    <p><?php echo $_GET['error']; ?></p>
                <?php endif ?>
                 <div class="img-container">
                 <?php
                    $img = $rows['image'];
                    $img_url = "avatar.svg";
                    if($img != NULL) {
                        $img_url = $img;
                    }
                 ?>
                  <img src="uploads/<?=$img_url?>" alt="Avatar" class="image" style="width:80%"> 
                    <form class="middle" action="upload.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="my_image" id="fileToUpload" class="text">
                        <input type="submit" name="submit" value="Upload" id="upload-img">
                    </form>
                  </div>
                 </center>
              <br>
              <form class="forms-container" action="index.php" method="post">
                  <input type="submit" id="logout-btn" value="Log Out" name="logout-btn">
              </form>
              <?php
                if(isset($_POST['logout-btn'])){
                        $_SESSION['username'] = NULL;
                        session_unset();
                        session_destroy();
                        header('location: index.php');
                        exit;
                }
              ?>
          </div> 
</body>
</html>