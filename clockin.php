<?php
  session_start();
  $current_id = $_SESSION['id'];
  $connection = mysqli_connect("localhost", "root", "vincent13769", "punches");
  date_default_timezone_set('America/New_York');
  $today = date('y-m-d');

  $clockin = "INSERT INTO timepunches (id, date_)
  VALUES ('$current_id', '$today')";

  if (mysqli_query($connection, $clockin)) {
      echo "Clock in successful";
  }

  else {
      echo "Error: " . $clockin . "<br>" . mysqli_error($connection);
  }

  mysqli_close($connection);

  ?>