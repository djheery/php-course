<?php 
  if(isset($_POST['submit'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];
    
    function checkPassword($pass) {
      $max_pass_length = 15;
      $min_pass_length = 5;
      if(strlen($pass) < $min_pass_length) echo 'Password is too small';
      if(strlen($pass) > $max_pass_length) echo 'Password is too long';
    };
    
    function checkUser($user) {
      $users = ['Daniel', 'Anna', 'Liz', 'Mohamed Salah'];
      // in_array built in function to check an array
      if(!in_array($user, $users)) {
        echo 'You are not a recognized user';
      } else {
        echo 'Hello ' . $user . ', welcome back!';
      }
    }
    
    checkUser($username);
    checkPassword($password);
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Submission</title>
</head>
<body>
  <form action="./lesson-3.php" method="POST"> <!-- The action keyword sends this data to another page -->
    <input type="text" name="name" placeholder="Name">
    <input type="password" name='password' placeholder="Password">
    <br>
    <input type="submit" name="submit">
  </form>
</body>
</html>