   

   var i = 0;
   var iteraciones=2;
   var tiempo = 200;
   var correcta = 0;
   var concurrent;
   var temporal="";
   var arr1 = new Array(
"968"
,"370"
,"275"
,"678"
,"509"
,"358"
,"557"
,"577"
,"368"
,"678"
,"302"
,"474"
,"208"
,"523"
,"742"

,"102"
,"789"
,"456"
,"159"
,"753"
,"321"
,"547"
,"547"
,"515"
,"655"
,"987"
,"547"
,"214"
,"875"
,"247"

,"875"
,"214"
,"369"
,"852"
,"496"
,"562"
,"314"
,"852"
,"314"
,"875"
,"214"
,"385"
,"325"
,"245"
,"654"

,"686"
,"370"
,"621"
,"678"
,"509"
,"532"
,"907"
,"577"
,"142"
,"678"
,"723"
,"435"
,"632"
,"523"
,"742"

,"899"
,"700"
,"436"
,"788"
,"241"
,"456"
,"234"
,"908"
,"678"
,"535"
,"801"
,"782"
,"660"
,"356"
,"856"

,"789"
,"677"
,"909"
,"562"
,"683"
,"789"
,"741"
,"120"
,"159"
,"138"
,"345"
,"776"
,"145"
,"148"
,"238"

,"158"
,"148"
,"957"
,"540"
,"335"
,"654"
,"190"
,"745"
,"770"
,"367"
,"500"
,"247"
,"987"
,"942"

,"530"
,"245"
,"654"
,"654"
,"257"
,"369"
,"690"
,"254"
,"215"
,"371"
,"264"
,"870"
,"579"
,"167"

,"504"
,"320"
,"287"
,"349"
,"325"
,"870"
,"210"
,"654"
,"350"
,"325"
,"158"
,"980"
,"550"
,"345"

,"785"
,"214"
,"632"
,"471"
,"285"
,"649"
,"547"
,"807"
,"985"
,"247"
,"369"
,"102"
,"857"

,"548"
,"804"
,"321"
,"215"
,"630"
,"648"
,"790"
,"567"
,"701"
,"879"
,"801"
,"158"
,"649"

,"870"
,"649"
,"852"
,"315"
,"330"
,"745"
,"401"
,"648"
,"566"
,"987"
,"247"
,"920"
,"157"

,"124"
,"547"
,"201"
,"639"
,"540"
,"374"
,"259"
,"854"
,"201"
,"365"
,"140"
,"879"

,"456"
,"120"
,"615"
,"645"
,"215"
,"295"
,"453"
,"486"
,"824"
,"645"
,"236"
,"880"

,"648"
,"854"
,"650"
,"465"
,"493"
,"845"
,"441"
,"565"
,"415"
,"486"
,"851"
,"368"

,"510"
,"544"
,"201"
,"159"
,"458"
,"135"
,"102"
,"879"
,"147"
,"358"
,"301"

,"787"
,"480"
,"115"
,"369"
,"478"
,"302"
,"851"
,"201"
,"336"
,"789"
,"456"

,"875"
,"249"
,"645"
,"287"
,"315"
,"972"
,"540"
,"368"
,"150"
,"521"
,"655"

,"252"
,"656"
,"210"
,"540"
,"687"
,"345"
,"682"
,"350"
,"487"
,"513"

,"579"
,"548"
,"620"
,"987"
,"540"
,"396"
,"258"
,"947"
,"213"
,"546"

,"456"
,"218"
,"902"
,"450"
,"642"
,"387"
,"648"
,"325"
,"168"
,"325"

    );



function stop_precepcion_numerica(){
  clearInterval(concurrent);
  correcta=0;
  i=0;
  temporal="";
  iteraciones=0;
  init=0;
  init_clock=0;
}

function initEvent(){
  init2=0;
}

function percepcion_numerica_clear(){
  stop_precepcion_numerica();
  try{
    document.getElementsByClassName('contenedor_Rapida_percepcion_numerica')[0].style.visibility="hidden";
    document.getElementById("numbers").style.display = "block";
    i=Math.floor((Math.random() * parseInt(arr1.length)) + 1);
    document.getElementById("numbers").innerHTML = ""+arr1[i];
  }catch{}
}



var init_clock=0;
function iniciar_reloj(){if(init_clock==0){init_clock=1;playTimerForward();}}


var init=0,init2=0;
    function init_number(){
      if(init==0){
        init=1; 
        iteraciones++;
        i=Math.floor((Math.random() * parseInt(arr1.length)) + 1);
        document.getElementsByClassName('contenedor_Rapida_percepcion_numerica')[0].style.visibility="visible";
        document.getElementById("numbers").innerHTML = ""+arr1[i];
        document.getElementById("selectNumber").addEventListener('click',function(event){iniciar_reloj();},false);  
      }
      if(init2==0){
        init2=1;
        document.getElementById("selectNumber").addEventListener('keyup',function(event){evento_key(event);},false);
      }
    }
    
  
   function masText(){
      i=Math.floor((Math.random() * parseInt(arr1.length)) + 1);
      iteraciones++;
      document.getElementById("numbers").innerHTML = (arr1[i]); 
      console.log(iteraciones);
      if (iteraciones >= 23) {
        //salert("Ultimo : "+ arr1[i]);
        //alert(correcta);
        clearInterval(concurrent);
        resultado();
      }  
      concurrent=setInterval(cambiarColor, tiempo);

      calificar();              
   }

    function cambiarColor(){
    document.getElementById("numbers").style.display = "none";
    clearInterval(concurrent);
  } 


   function evento_key(e){
            if (e.keyCode == 13) {
            calificar();
            clearInterval(concurrent);
            limpiar();  
            masText(); 

            return false; 
            }

        }

   
function limpiar(){ 
  // masText();
   document.getElementById("selectNumber").value = " ";
   document.getElementById("numbers").style.display = "block";

}


function calificar(){
  if (document.getElementById("selectNumber").value == parseInt(arr1[i])) {
    correcta++;
  }else{
     
  }
  
}

  function resultado(){
        iteraciones=0;
        stopTimerCurrentForward();
        var tiempo=document.getElementById('clock').innerHTML;
          vdialog({
          modal: true,
          title: 'Resultados',
          content: 'Tiempo de duración '+tiempo+'<br>Correctas : '+correcta+' de 20',
          width: '400px',
          height: 'auto',
          left: 'auto',
          top: 'auto',
          padding: 'auto',
          ok: function(){
            //detener cronometros
            location.reload(true);
            stopTimerCurrent();
            stopTimerCurrentForward();


          }
        });
    }


       
    
 
     function screenBlack_Rapida_percepcion_numerica(){

      var black = document.getElementById("gameScreen");
      black.style.backgroundColor = "#303030";
      document.getElementById("numbers").style.color = "#FFFFFF";
      console.log("screen black");
      
    }

    function screenWhite_Rapida_percepcion_numerica(){
      var white = document.getElementById("gameScreen");
      white.style.backgroundColor = "#FFFFFF";
      document.getElementById("numbers").style.color = "#000000";
      console.log("screen white");
    }

    function screenGray_Rapida_percepcion_numerica(){
      var white = document.getElementById("gameScreen");
      white.style.backgroundColor = "#F2F2F2";
      try{document.getElementById("numbers").style.color = "#000000";}catch{}
      console.log("screen white");
    }

