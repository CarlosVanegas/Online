

var timerInterval;
var finish=1;
var timerClock = $("#clock");
var seconds, minutes;
var binario=0;



function startTimer(m,s) {
    seconds=s;
    minutes=m;
   // timerClock.text(minutes+":00");
    if(minutes>0){minutes--;}
    finish=1;
    binario=0
    //timerClock.removeClass('inactive');
}


function pauseTimer(){
    clearInterval(timerInterval);
    //timerClock.addClass('inactive');
}

function playTimer(){
    //timerClock.removeClass('inactive');
    timerInterval = setInterval(function () {
        timerClock.text(returnFormattedToSeconds());
    }, 1000);
}


function returnFormattedToSeconds(){
    seconds--;
    if((seconds==0) && (minutes==0)){binario=1;pauseTimer();finish=0;}
    if(seconds==0 && binario==0){seconds=60;minutes--;}
    if(seconds<10){seconds="0"+seconds;}
    if(minutes<10){minutes="";minutes="00"+minutes;}
    return minutes + ":" + seconds;
}


function stopTimerCurrent(){
    clearInterval(timerInterval);
    //timerClock.addClass('inactive');
}

function fin(){
    return finish;
}