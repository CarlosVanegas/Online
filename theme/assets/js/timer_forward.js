
var tick=0;
var timerIntervalForward;
var timerClockForward = document.getElementById("clock");
var secondsForward=0, minutesForward=0;




function startTimerForward() {
    tick=0;
    secondsForward=0;minutesForward=0;
    timerClockForward.innerHTML=minutesForward+":00";
    //timerClockForward.removeClass('inactive');
}


function pauseTimerForward(){
    clearInterval(timerIntervalForward);
    //timerClockForward.addClass('inactive');
}

function playTimerForward(){
    //timerClockForward.removeClass('inactive');
    timerIntervalForward = setInterval('returnFormattedToSecondsForwardForward()', 1000);
}


function returnFormattedToSecondsForwardForward(){
    secondsForward++;
    tick++;
    if(secondsForward>59){secondsForward=0;minutesForward++;}
    if(secondsForward<10){secondsForward="0"+secondsForward;}
    timerClockForward.innerHTML=minutesForward+":"+secondsForward;
}

function returnTick(){
    return tick;
}

function stopTimerCurrentForward(){
    clearInterval(timerIntervalForward);
    //timerClockForward.addClass('inactive');
}

