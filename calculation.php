<?php
  session_start();
  if (isset($_POST['startdate'])) {
      $beginrange = date($_POST['startdate']);
  }
  else {
      echo "Please enter a start date";
  }
  if (isset($_POST['enddate'])) {
    $endrange = date($_POST['enddate']);
  }
  else {
      echo "Please enter an end date";
  }

  $employee_in_question = $_POST['emp'];
  
  $connection = mysqli_connect("localhost", "root", "vincent13769", "punches");
  $getemployeehours = mysqli_query($connection, "SELECT SEC_TO_TIME(SUM(time_passed)*60)
  FROM timepunches
  WHERE id = $employee_in_question
  AND date_ >= '$beginrange'
  AND date_ <= '$endrange'");

  $connection2 = mysqli_connect("localhost", "root", "vincent13769", "login");
  $getemployeeusername = mysqli_query($connection2, "SELECT username
  FROM users
  WHERE id = $employee_in_question");
  
  echo"<table border='1'>";
  while ($row2 = mysqli_fetch_assoc($getemployeeusername)) {
      echo"<tr><td>{$row2['username']}</td>";
  }
  while($row = mysqli_fetch_assoc($getemployeehours)) {
      echo"<tr><td>{$row['SEC_TO_TIME(SUM(time_passed)*60)']}</td><tr>\n";
  }
  echo"</table>";
  
  
  //echo"<table border='1'>";
  //echo"<tr><td>Hours</td>";
  //while($row = mysqli_fetch_assoc($getemployeehours)) {
  //    echo"<tr><td>{$row['SEC_TO_TIME(SUM(time_formatted))']}</td><tr>\n";
  //}
  //echo"</table>";


  
  //if ($getemployeehours==FALSE) {
  //  echo "ERROR";
  //}
  //else {
  //  while ($hoursworked = mysqli_fetch_assoc($getemployeehours)) {
  //      print_r($hoursworked);
  //  }
  //}
  ?>

