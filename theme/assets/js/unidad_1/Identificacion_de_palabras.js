var pause=1;

function restartIdentificacion_de_palabras(){
  pause=1;
}

function Identificacion_de_palabras_clear(){
  try{
    document.getElementsByClassName('padre_level1')[0].style.visibility="hidden";
  }catch{}
}

function startIdentificacion_de_palabras(){ 
  pause++; 
   if (pause%2==0) {
      document.getElementsByClassName('padre_level1')[0].style.visibility="visible";
      document.getElementById('play_control').style.backgroundImage="url('../assets/images/Stop.svg";
      playTimerForward();
     }else{
      document.getElementById('play_control').style.backgroundImage="url('../assets/images/Play.svg')";
      stopTimerCurrentForward();
      resultado_final_Identificacion_de_palabras();
     }    
     if(pause==3){pause=1;}
  } 


  var conterResultTask3 = 0;
  function valResult(){

  var val_1 = $("#val_1").val();
  var val_2 = $("#val_2").val();
  var val_3 = $("#val_3").val();
  var val_4 = $("#val_4").val();
  var val_5 = $("#val_5").val();
  var val_6 = $("#val_6").val();
  var val_7 = $("#val_7").val();
  var val_8 = $("#val_8").val(); 

    if (2 == parseInt(val_1)){
      conterResultTask3++;
    }  if (2 == parseInt(val_2)){
      conterResultTask3++;
    }  if (1 == parseInt(val_3)){
      conterResultTask3++;
    }  if (4 == parseInt(val_4)){
      conterResultTask3++;
    }  if (1 == parseInt(val_5)){
      conterResultTask3++;
    }  if (3 == parseInt(val_6)){
      conterResultTask3++;
    }  if (4 == parseInt(val_7)){
      conterResultTask3++;
    }  if (2 == parseInt(val_8)){
      conterResultTask3++;
    }
    console.log(conterResultTask3);
  }

function resultado_final_Identificacion_de_palabras(){
    stopTimerCurrentForward();
    valResult();
    var tiempo=document.getElementById('clock').innerHTML;
    vdialog({
      modal: true,
      title: 'Resultados',
      content: 'Tiempo  '+tiempo+"<br>"+ 'Correctas : ' + conterResultTask3 + ' de 8', 
      width: '400px',
      height: 'auto',
      left: 'auto',
      top: 'auto',
      padding: 'auto',
      ok: function(){
        conterResultTask3 = 0;
        location.reload(true);
        //detener cronometros
        stopTimerCurrent();
        stopTimerCurrentForward();
        startTimerForward();
        //detener cronometros

      }
    });

}



     function screenBlack_Identificacion_de_palabras(){

      var black = document.getElementById("screenPractice");
      var words = document.getElementsByClassName('phrases-task3');
      black.style.backgroundColor = "#303030";
      for (var i = 0; i <= words.length-1; i++) {
        words[i].style.color = "#FFFFFF";
      }
      console.log("screen black");
      
    }

    function screenWhite_Identificacion_de_palabras(){
      var white = document.getElementById("screenPractice");
      var words = document.getElementsByClassName('phrases-task3');
      white.style.backgroundColor = "#FFFFFF";
      for (var i = 0; i <= words.length-1; i++) {
        words[i].style.color = "#000000";
      }
      console.log("screen white");
    }

    function screenGray_Identificacion_de_palabras(){
      var white = document.getElementById("screenPractice");
      var words = document.getElementsByClassName('phrases-task3');
      white.style.backgroundColor = "#F2F2F2";
      for (var i = 0; i <= words.length-1; i++) {
        words[i].style.color = "#000000";
      }
      console.log("screen white");
    }




