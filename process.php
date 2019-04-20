<?php
  session_start();
  
  $username = $_POST['user'];
  $password = $_POST['pass'];

  //$username = stripcslashes($username);
  //$password = stripcslashes($password);
  //$username = mysql_real_escape_string($username);
  //$password = mysql_real_escape_string($password);

  $connection = mysqli_connect("localhost", "root", "vincent13769");
  mysqli_select_db($connection, "login");

  $result = mysqli_query($connection, "select * from users where username = '$username' and password = '$password'")
    or die("Failed to query database " .mysqli_error($connection));
  $row = mysqli_fetch_array($result);
  if ($row['username'] == $username && $row['password'] == $password ){
      echo "Login success! Welcome ".$row['username'];
      $_SESSION['username'] = $username;
      header('location: http://localhost/3211-Website-/timeclock.php');
      die;
  } else {
      echo "Failed to login!";
  }
?>

