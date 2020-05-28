var pause=1; 
function play_stop_button(){ 
  pause++; 
     if (pause%2==0) {
      //document.getElementById("play").className = "glyphicon glyphicon-stop"; 
       
      document.getElementById('play_control').style.backgroundImage="url('../assets/images/Stop.svg')";
     
     }else{
      //document.getElementById("play").className = "glyphicon glyphicon-play"; 
 
      document.getElementById('play_control').style.backgroundImage="url('../assets/images/Play.svg')";
     
     }    
     if(pause==3){pause=1;}
  } 
