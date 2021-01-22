<?php
    if(isset($_POST['submit'])) {
        $username = $_POST['name'];
        $password = $_POST['password'];
        echo $username . "  " . $password; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <form action="form.php" method="post">
        <input type="text" placeholder="Enter Name" name="name"/><br>
        <input type="password" placeholder="Enter Password" name="password"/><br>
        <input type="submit" name="submit"/>
    </form>
</body>
</html>