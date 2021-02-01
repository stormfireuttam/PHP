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
