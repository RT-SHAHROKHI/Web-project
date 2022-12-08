function realtimeClock(){
    var rtClock = new Date();
    var hours = rtClock.getHours();
    var minutes= rtClock.getMinutes();
    var seconds = rtClock.getUTCSeconds(); 

    // add am & pm system 
    var amPm= ( hours < 12 ) ? "AM" : "PM";

    //conver hours component to 12-hours format
    hours = (hours > 12) ? hours -12 : hours;

    //pad the hours , minutes and seconds with landing zeroes 
    hours=("0"+hours).slice(-2);
    minutes=("0" + minutes).slice(-2);
    seconds=("0" + seconds).slice(-2);

    //display the clock 
    document.getElementById('clock').innerHTML=
        hours + " : " + minutes + " : " + seconds + " : " + " " + amPm;
        var t=setTimeout(realtimeClock,500);

}