<?php 
  if(isset($_POST['submit'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];

    echo 'Hello ' . $username . ', your password is: ' . $password;
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Submission</title>
</head>
<body>
  <form action="./lesson-2.php" method="POST"> <!-- The action keyword sends this data to another page -->
    <input type="text" name="name" placeholder="Name">
    <input type="password" name='password' placeholder="Password">
    <br>
    <input type="submit" name="submit">
  </form>
</body>
</html>