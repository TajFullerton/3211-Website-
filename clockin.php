<?php
  session_start();
  $current_id = $_SESSION['id'];
  $connection = mysqli_connect("localhost", "root", "vincent13769", "punches");
  date_default_timezone_set('America/New_York');
  $today = date('y-m-d');

  $clockin = "INSERT INTO timepunches (id, date_)
  VALUES ('$current_id', '$today')";

  $clockinstatus = mysqli_query($connection, "SELECT * from timepunches WHERE time_in = time_out AND id = $current_id");
  if ($clockinstatus==FALSE) {
      echo "error please try again";
  }
  elseif (mysqli_num_rows($clockinstatus)!==0){
      echo "you are already clocked in!";
  }
  else {  
  if (mysqli_query($connection, $clockin)) {
      echo "Clock in successful";
  }

  else {
      echo "Error: " . $clockin . "<br>" . mysqli_error($connection);
  }
  }
  mysqli_close($connection);

  ?>