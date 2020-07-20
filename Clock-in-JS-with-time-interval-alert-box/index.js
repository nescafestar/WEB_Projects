function realTimeClock(){

    var rtClock=new Date();
    var hours= rtClock.getHours();
    var min= rtClock.getMinutes();
    var sec= rtClock.getSeconds();
    
    //add AM PM system
    var amPm= (hours<12) ?"AM":"PM";

    //Convert to 12 hours cycle
    hours= (hours>12)?hours-12:hours;
    
    //Pad the hours,minmsec with leading zeros

    hours=("0"+hours).slice(-2);
    min=("0"+min).slice(-2);
    sec=("0"+sec).slice(-2);

    //Display the clock
    document.getElementById('clock').innerHTML=
    hours + " : " + min + " : " + sec + " " +amPm;
    var t=setTimeout(realTimeClock,500);

    setInterval(function(){ alert("Hello (This will pop up every 3 seconds)"); }, 
3000); 

}