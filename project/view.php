<?php
// Include the database configuration file
include 'config.php';

// Get data from the database
$query = "SELECT * from `users`";
$result = mysqli_query($con, $query) or die(mysqli_error($con));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Data</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style02.css" />
</head>
<body>
       <div class="container">
           <table class="styled-table ">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                 <?php  
                        while($row = mysqli_fetch_assoc($result)){
                            $username = $row['username'];
                            $email = $row['email'];
                            $contact = $row['contact'];
                            if($row['image'] != NULL)
                                $imageURL = 'uploads/'.$row["image"];
                            else
                                $imageURL = 'uploads/avatar.svg';

                 ?>
                      <tr>
                          <td><?php echo $username; ?></td>
                          <td><?php echo $email; ?></td>
                          <td><?php echo $contact; ?></td>
                          <td><img src="<?php echo $imageURL; ?>" alt="" /></td>
                      </tr>
                   <?php
                        }
                    ?>
                </tbody>
            </table>
       </div>   
</body>
</html>


