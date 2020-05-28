
var palabras=0;

  function textos_random() {
    //200
    var textosCompletos1 = ["Había una vez un hombre que calumnió grandemente a un amigo suyo, todo por la envidia que le tuvo al ver el éxito que éste había alcanzado. Tiempo después se arrepintió de la ruina que trajo con sus calumnias a ese amigo y visitó a un hombre sabio a quien le dijo: 'Quiero arreglar todo el mal que hice a mi amigo. ¿Cómo puedo hacerlo?', a lo que el hombre respondió: 'Toma una bolsa llena de plumas de ave y suéltalas por donde vayas'. El hombre al cabo de un día las había soltado todas. Volvió donde el sabio y le dijo: ’ Ya he terminado', a lo  que el sabio contestó: 'Esa es la parte más fácil. Ahora debes volver a llenar la bolsa con las mismas plumas que soltaste. Sal a la calle y búscalas'. el hombre se sintió muy triste, pues sabía que eso era imposible. El sabio le dijo: 'Así como no pudiste juntar de nuevo las plumas que volaron con el viento, así mismo el mal que hiciste voló de boca en boca y el daño ya está hecho. Sé humilde y reconoce el daño pidiendo perdón a tu amigo, y jamás vuelvas a repetirlo."];
    //161
    var textosCompletos2 = ['Dice una leyenda árabe que dos amigos viajaban por el deserto y en un determinado punto del viaje discutieron, y uno le dio una bofetada al otro. El otro, ofendido, sin nada que decir, escribió en la arena: “Hoy, mi mejor amigo me pegó una bofetada en el rostro”. Siguieron adelante y llegaron a un oasis donde resolvieron bañarse. El que había sido abofeteado comenzó a ahogarse, y su amigo lo salvó. Al recuperarse tomó un estilete y escribió en una piedra: “Hoy, mi mejor amigo me salvó la vida”. Intrigado, el amigo preguntó: “¿Por qué después que te pegué escribiste en la arena y ahora en cambio escribes en una piedra?”. Sonriendo, el otro amigo respondió: “Cuando un amigo nos ofende, debemos escribir en la arena en donde el viento del olvido y el perdón se encargarán de borrarlo y apagarlo. Pero cuando nos ayuda, debemos grabarlo en la piedra de la memoria del corazón, donde ningún viento podrá borrarlo”.'];
    //189
    var textosCompletos3 = ["¿Quién no ha escuchado reiteradamente esta impertinente pregunta? Hace años que decidí contestar con una triple respuesta, basada en una leyenda apócrifa de Galileo, que sorprende y obliga a reflexionar: - “No lo sé exactamente, pero son poco y menos aún los de buena salud”.Porque los años que tenemos son los que no hemos astado, los que aún no hemos vivido. Y nadie cuántos tenemos todavía para continuar nuestra vida. Las estadísticas apuntan a que, en el caso de América del Norte, la esperanza de vida actual está fijada en 77,6 años. En todo caso nos restan pocos años, pocos meses, pocos días de existencia terrenal. Las horas son como las monedas de una bolsa, que se van agotando implacablemente. Conviene disfrutar cada instante como si fuera el último, porque nunca se repetirá. El ayer se fue y el mañana es incierto. ¡Aprovechemos el hoy! Y cuando quede tan poco tiempo, solo cabe hacer el bien, dejar una familia, unos amigos y una obra de perdure más allá de nuestros días en esta tierra, y confinar en que nuestro espíritu hay una nueva morada más allá de lo temporal."];
 

    var myArray = ["El saco de las plumas", "Perdonar y agradecer", "¿Cuántos años tienes?"];
    
    var rand = Math.floor(Math.random() * myArray.length);
    var concat = myArray[rand];

    document.getElementById("title").innerHTML = (concat);

       if (concat == "El saco de las plumas") {
      document.getElementById("text").innerHTML = textosCompletos1;
      document.getElementById("text").style.fontSize = "18px";
      document.getElementById("text").style.paddingTop = "10px";
      document.getElementById("text").style.lineHeight = "33px";
      palabras=200;
      }


      if (concat == "Perdonar y agradecer") {
      document.getElementById("text").innerHTML = textosCompletos2;
      document.getElementById("text").style.fontSize = "18px";
      document.getElementById("text").style.paddingTop = "10px";
      document.getElementById("text").style.lineHeight = "33px";
      palabras=161;
      }

      if (concat == "¿Cuántos años tienes?") {
      document.getElementById("text").innerHTML = textosCompletos3;
      document.getElementById("text").style.fontSize = "18px";
      document.getElementById("text").style.paddingTop = "10px";
      document.getElementById("text").style.lineHeight = "33px";
      palabras=189;
      }
 
  }



  function init(){textos_random();}

  var pause=1;
  function Start_Game(){ 
    pause++; 
     if (pause%2==0) {
        document.getElementById('gameScreen').style.visibility="visible";
        document.getElementById('play_control').style.backgroundImage="url('../assets/images/Stop.svg')";
        playTimerForward();
       }else{
        Resultados();
        document.getElementById('play_control').style.backgroundImage="url('../assets/images/Play.svg')";
        pauseTimerForward();
       }    
       if(pause==3){pause=1;}
    } 



  function Resultados(){
   var tiempo=document.getElementById("clock").innerHTML;
   var velocidad = ((224 * 60) /returnTick() );
   var res='';
   if(tiempo.split(":")[1].charAt(0)=='0'){
    res=tiempo.split(":")[1].charAt(1);
   }
   else{
    res=tiempo.split(":")[1];
   }
   vdialog({
    modal: true,
    title: 'Resultados',
    content: 'Tiempo de duración : '+tiempo.split(":")[0]+' minutos y '+res+' segundos<br> Velocidad : '+parseInt(velocidad)+" ppm",
    width: '450px',
    height: 'auto',
    left: 'auto',
    top: 'auto',
    padding: 'auto',
    ok: function(){
      console.log('se almacenaran en la base de datos');
      location.reload(true);
    }
  });           
}

function screenBlack(){
   var title = document.getElementsByClassName("Deslizamiento_en_zigzag_2_1-title"); 
   var text = document.getElementsByClassName("Deslizamiento_en_zigzag_2_1"); 
   var gameScreen  = document.getElementById("gameScreen");
   gameScreen.style.backgroundColor = "#303030";
   title[0].style.color = "#fff";
   for(var i=0;i<text.length;i++){text[i].style.color = "#fff";}
}

function screenWhite(){
   var title = document.getElementsByClassName("Deslizamiento_en_zigzag_2_1-title"); 
   var text = document.getElementsByClassName("Deslizamiento_en_zigzag_2_1"); 
   var gameScreen  = document.getElementById("gameScreen");
   gameScreen.style.backgroundColor = "#fff";
   title[0].style.color = "#000"; 
   for(var i=0;i<text.length;i++){text[i].style.color = "#000"; }
}


