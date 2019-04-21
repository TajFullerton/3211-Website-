<?php
  session_start();
  $current_id = $_SESSION['id'];
  $connection = mysqli_connect("localhost", "root", "vincent13769", "punches");
  date_default_timezone_set('America/New_York');
  $today = date('y-m-d');
  $currenttime = date('y-m-d H:i:s', time());

  $clockout = "UPDATE timepunches SET time_out='$currenttime' WHERE id='$current_id' AND time_in=time_out";

  if (mysqli_query($connection, $clockout)) {
      echo "Clock out successful";
  }

  else {
      echo "Error: " . $clockout . "<br>" . mysqli_error($connection);
  }

  mysqli_close($connection);

  ?>