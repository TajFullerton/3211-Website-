<!DOCTYPE html>
<div class="welcome-header">
<?php
  session_start();
  
  if(!isset($_SESSION['username']))
  {
    header("location: http://localhost/3211-Website-/admin.html");
  }
  else
  {
    echo "Welcome ".$_SESSION['username'];
  }
?>
</div>
<!DOCTYPE html>

<html>

<head>
    <title>Reports</title>
    <link href="main.css" type="text/css" rel="stylesheet">
    <script src="project.js"></script>
</head>

<div class="custom-padding">
        <nav>
            <div class="Pescatore">See Employee Hours</div>
            <ul class="menu-area">
                <li><a href="home.html">Return Home</a></li>
                
            </ul>
        </nav>
    </div>
<br>

<form action="calculation.php" method="POST">
<label for="startdate">Start Date</label>
<input type="date" id="startdate" name="startdate">
<label for="enddate">End Date</label>
<input type="date" id="enddate" name="enddate">
<label for="emp">Employee ID</label>
<input type="number" id="emp" name="emp">
<button type="submit"> Generate Report </button>
</form>