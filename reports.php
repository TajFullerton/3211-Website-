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
    <title>TimeClock</title>
    <link href="main.css" type="text/css" rel="stylesheet">
    <script src="project.js"></script>
</head>

<div class="custom-padding">
        <nav>
            <div class="Pescatore">TimeClock</div>
            <ul class="menu-area">
                <li><a href="home.html">Return Home</a></li>
                
            </ul>
        </nav>
    </div>
<br>
<a>
  <div class="Clock" id="ClockDisplay">
  </div>
<script>
function showTime(){
    var date = new Date();
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();

    if (h==0){
        h = 12;
    }

    if (h > 12){
        h = h - 12;
    }

    if (h < 10){
        h = "0" + h;
    }

    if (m < 10){
        m = "0" + m;
    }

    if (s < 10){
        s = "0" + s;
    }



    var time = h + ":" + m + ":" + s;
    document.getElementById("ClockDisplay").innerText = time;
    document.getElementById("ClockDisplay").textContent = time;
    setTimeout(showTime, 1000);
  }
    showTime();
    </script>
</a>
<br>
<div class="clockin">
<form action=clockin.php method=POST>
    <button type=submit> Clock in </button>
</form>
<form action=clockout.php method=POST>
    <button type=submit> Clock out </button>
</form>
</div>
<br>
