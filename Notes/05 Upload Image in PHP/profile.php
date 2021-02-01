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
