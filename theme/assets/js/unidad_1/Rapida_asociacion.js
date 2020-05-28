var pause=1;

function restartRapida_asociacion(){
  pause=1;
}

function Rapida_asociacion_clear(){
  try{
    document.getElementsByClassName('padre')[0].style.visibility="hidden";
  }catch{}
}

function startRapida_asociacion(){ 
  pause++; 
   if (pause%2==0) {
      document.getElementsByClassName('padre')[0].style.visibility="visible";
      document.getElementById('play_control').style.backgroundImage="url('../assets/images/Stop.svg";
      playTimerForward();
     }else{
      document.getElementById('play_control').style.backgroundImage="url('../assets/images/Play.svg";
      stopTimerCurrentForward();
      resultado_final_Rapida_asociacion();
     }    
     if(pause==3){pause=1;}
  } 


  var conterResultTask4 = 0;
  function valResultTask4(){

  var val_1 = $("#val_ra_1").val();
  var val_2 = $("#val_ra_2").val();
  var val_3 = $("#val_ra_3").val();
  var val_4 = $("#val_ra_4").val();
  var val_5 = $("#val_ra_5").val();
  var val_6 = $("#val_ra_6").val();
  var val_7 = $("#val_ra_7").val();
  console.log(val_1);
    if (3 == parseInt(val_1)){
      conterResultTask4++;
    }  if (2 == parseInt(val_2)){
      conterResultTask4++;
    }  if (4 == parseInt(val_3)){
      conterResultTask4++;
    }  if (3 == parseInt(val_4)){
      conterResultTask4++;
    }  if (1 == parseInt(val_5)){
      conterResultTask4++;
    }  if (5 == parseInt(val_6)){
      conterResultTask4++;
    }  if (2 == parseInt(val_7)){
      conterResultTask4++;
    }  
  }

function resultado_final_Rapida_asociacion(){
	valResultTask4();
    stopTimerCurrentForward();
    var tiempo=document.getElementById('clock').innerHTML;
    vdialog({
      modal: true,
      title: 'Resultados',
      content: 'Tiempo  '+tiempo+"<br>"+ 'Correctas : ' + conterResultTask4 + ' de 7',
      width: '400px',
      height: 'auto',
      left: 'auto',
      top: 'auto',
      padding: 'auto',
      ok: function(){
      	conterResultTask4 = 0;
      	location.reload(true);
        //detener cronometros
        stopTimerCurrentForward();
        startTimerForward();
        //detener cronometros


      }
    });

}



     function screenBlack_Rapida_asociacion(){

      var black = document.getElementById("gameScreen");
      var words = document.getElementsByClassName('phrases-task3');
      black.style.backgroundColor = "#303030";
      for (var i = 0; i <= words.length-1; i++) {
        words[i].style.color = "#FFFFFF";
      }
      console.log("screen black");
      
    }

    function screenWhite_Rapida_asociacion(){
      var white = document.getElementById("gameScreen");
      var words = document.getElementsByClassName('phrases-task3');
      white.style.backgroundColor = "#FFFFFF";
      for (var i = 0; i <= words.length-1; i++) {
        words[i].style.color = "#000000";
      }
      console.log("screen white");
    }

    function screenGray_Rapida_asociacion(){
      var white = document.getElementById("gameScreen");
      var words = document.getElementsByClassName('phrases-task3');
      white.style.backgroundColor = "#F2F2F2";
      for (var i = 0; i <= words.length-1; i++) {
        words[i].style.color = "#000000";
      }
      console.log("screen white");
    }




