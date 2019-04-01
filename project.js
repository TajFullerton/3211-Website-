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
