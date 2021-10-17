<?php
  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp'); //('Server-location', 'username', 'password', 'database-name')

    if($connection) {
      echo 'We are connected';
    } else {
       echo 'We are NOT connected';
    }

    if($username && $password) {
      // Do Something
    } else {
      // Do Something Else
    }
  } 
?>