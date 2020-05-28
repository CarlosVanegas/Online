{//Variables publicas
var arrayWords = ["sol","red","muy","circo","terco","mono","ático","cristal","sujeta","espina","cocina","desvío","arcada","pastilla","jesuita","himnos","satélites","brumoso","jeroglífico","gimnasios","penalización","protuberancia","expresionismo","norteamericano",
"tal","fue","son","pato","vela","sopa","mano","tenso","puerta","tórrido","textos","entonar","rebelde","jarabes","clásicos","exponer","mimoso","remedios","horóscopo","cavernícola","sonámbulo","canibalismo","medicamento","remordimientos",
"el","sol","fue","con","todo","pala","obra","lado","cuota","prisa","oasis","litera","clavel","liturgia","jilguero","nominal","litografía","estirados","normalizar","helicópteros","edificaciones","exuberancia","acontecimiento","convenientemente",
"yo","tos","pez","gol","gira","popa","jefe","gema","alivio","crecer","fibras","olmos","avispa","escollo","infinito","chusma","fragancia","granjeros","ecuánime","articulación","segregación","energúmeno","nomenclatura","negativamente",


"mil","ida","pala","cala","jurar","tinto","hábil","sabe","fábrica","escrito","diluvio","hombre","echaba","dialecto","primado","versiones","cavidades","balanceos","facilidades","ecuaciones","humanidad","esplendores","intercambios","nombramiento",
"si","tal","par","con","cola","tono","calla","siente","rápido","puente","parcial","tomate","nativos","adentro","hospital","tentación","caluroso","almacenar","normalizar","taquigrafía","boxeadores","tradicionales","desobediente","contribuyentes",
"le","mi","col","en","tren","palo","tallo","caja","corre","fijarse","dibujo","limpiar","bailaba","asiento","esquina","emplear","instruye","partidos","completo","descansa","aritmética","hermandad","adivinanzas","cómodamente",
"si","lío","ola","res","sed","tela","pera","cede","mole","jaleas","sector","hablar","mueve","tablilla","similar","digerido","bromista","costarán","reconocer","alucinados","celebridades","mezcladoras","complejidades","internacionales",
  

"da","fin","con","ven","que","cine","vino","toro","faros","clero","carros","dardos","mucho","tomaron","funciona","oculistas","mariposa","comenzar","adivinanza","deletrearon","aplaudieron","depositaro","mentalmente","implicaciones",
"al","sé","los","sin","con","cien","vaso","mole","mico","corto","sonar","vimos","pelear","largas","pensar","común","triunfar","arrancar","servicial","maldición","cualidades","económico","invitaciones","consecuencia",
"si","no","fin","voy","hoy","cala","caja","pollo","bolsa","globo","labios","faculta","infinito","delitos","pariente","evidente","vacación","pacientes","verdaderos","aparecieron","arquitectura","distribuidores","procedimiento","reconocimiento",
"le","lo","tal","cal","dar","tela","paro","tanto","pelea","ganan","enredo","ningún","servido","vendían","religioso","cortados","estimado","impulsos","panadero","doméstico","tremendos","conveniente","inconcebible","determinantes",


"en","del","oso","tos","cita","liso","arca","tema","jaula","mora","noche","norma","mismo","grullas","lechero","madrina","corazón","muñeca","exponer","pedagogo","hipotálamo","metalúrgica","monosílabo","metamorfósis",
"no","mi","los","del","mis","piso","coro","saco","tiene","gente","mente","sonreír","discos","tomate","querido","amarillo","recuerdo","alumbrar","instintivos","caramelos","adivinanzas","experimental","intransigentes","proporcionales",
"de","tu","mi","ten","sin","bis","tres","dije","hilar","valer","vimos","bolero","largas","pocos","orienta","mírame","aparente","temblores","asustadiza","pulmonares","protagonista","confirmación","representación","correspondencias",
"le","su","me","par","dos","jugo","azul","abril","cama","piano","sabrá","reales","recibir","manos","troncos","semana","perderse","ejercicios","destrezas","posibilidad","permitieron","bondadosos","deslumbrante","representación"
  ];

var colorArray = ['#3B0030','#F53A33','#E5822B','#00374C','#8AAD1B','#455059','#009BD8','#000000'];
var Etiqueta=document.getElementById("word");
//var Indice;
var Controlador;
var pause=1;
}



{//Class reconocimiento por impacto
function Reconocimiento_por_Impacto(Etiqueta,Palabras,Velocidad_Inicial,Indice_Inicial,Cantidad_Inicial){
  //this.Palabras=Palabras;
  Dom=Etiqueta;
  Velocidad_Interna=Velocidad_Inicial;
  Indice=Indice_Inicial;
  Velocidad_Externa=1;
  Cantidad=Cantidad_Inicial;
  velocidad_standard=Velocidad_Inicial; 
  tiempo_de_percepcion=(60/velocidad_standard)*1000;
  //alert(tiempo_de_percepcion);
  //clearTimeout(Controlador);
}


Reconocimiento_por_Impacto.prototype.Reiniciar_Juego = function() {
  //alert("Reiniciar_Juego");
  Indice=0;
  clearTimeout(Controlador);
  
};

Reconocimiento_por_Impacto.prototype.Detener_Impacto = function() {
  clearTimeout(Controlador);
};

Reconocimiento_por_Impacto.prototype.Iniciar_Impacto = function() {
  //alert ('Iniciar impacto');  
  Reconocimiento_por_Impacto.prototype.Renderizar_Palabra();
};

Reconocimiento_por_Impacto.prototype.Decrementar_Velocidad = function() {
  //alert("Decrementar_Velocidad");
  velocidad_standard-=30;
  
  tiempo_de_percepcion=(60/velocidad_standard)*1000;
  //alert("ppm: "+velocidad_standard+" tiempo de persepcion: "+tiempo_de_percepcion);  
  //Velocidad_Interna+=90;
  document.getElementById("number").innerHTML = Velocidad_Externa-=1;
  if (document.getElementById("number").innerHTML < 1) {
      document.getElementById("menos").disabled = true;
    }else if (document.getElementById("number").innerHTML == 1) {
    document.getElementById("menos").disabled = true;
  }else if (document.getElementById("number").innerHTML < 5) {
    document.getElementById("mas").disabled = false;
  }

};

Reconocimiento_por_Impacto.prototype.Icrementar_Velocidad = function() {
  //alert("Icrementar_Velocidad");
  velocidad_standard+=30; 

  tiempo_de_percepcion=(60/velocidad_standard)*1000;
  //alert("ppm: "+velocidad_standard+" tiempo de persepcion: "+tiempo_de_percepcion); 
  //Velocidad_Interna-=90;
  document.getElementById("number").innerHTML = Velocidad_Externa+=1;
  if (document.getElementById("number").innerHTML > 4) {
    document.getElementById("mas").disabled = true;
  }else if (document.getElementById("number").innerHTML > 0) {
    document.getElementById("menos").disabled = false;
  }
};

var current=0;
Reconocimiento_por_Impacto.prototype.Renderizar_Palabra = function() {
  //alert(Indice);
  var tiempo = $("#clock").html();
  if (tiempo  == "2:00") {pauseTimerForward();Reconocimiento_por_Impacto.prototype.Reiniciar_Juego();Reconocimiento_por_Impacto.prototype.Resultados();}
  Indice = Math.random()*(arrayWords.length);
  Indice = Math.floor(Indice)

  //colorArra/
  indice2 = Math.random()*(colorArray.length);
  indice2 = Math.floor(indice2);
  
  if (Indice > arrayWords.length) {Indice = 0;}
  Dom.innerHTML=arrayWords[Indice];
  Dom.style.color= colorArray[indice2];

  Cantidad++;
  if(current==0){Controlador=setTimeout(function(){Reconocimiento_por_Impacto.prototype.Renderizar_Palabra() }, tiempo_de_percepcion);}
};



Reconocimiento_por_Impacto.prototype.Resultados = function() {
        //alert(parseInt(Cantidad));
    current=1;
    document.getElementById('play_control').style.backgroundImage="url('../assets/images/Play.svg')";
  var speedReading=(parseInt(Cantidad)*60)/(2*60);
   vdialog({
    modal: true,
    title: 'Resultados',
    content: 'velocidad '+parseInt(speedReading)+' ppm<br>tiempo 2 minutos',
    width: '200px',
    height: 'auto',
    left: 'auto',
    top: 'auto',
    padding: 'auto',
    ok: function(){
      location.reload(true);
      //console.log('se almacenaran en la base de datos');
    }
  });           
};

}//Fin de la class


var Objeto_Impacto;
Instancia();
function Instancia(){//Instancia
  startTimerForward();
  Objeto_Impacto=new Reconocimiento_por_Impacto(Etiqueta,arrayWords,220,0,0);

}//Fin instancia


function Start_Game(){ 
  pause++; 
   if (pause%2==0) {
      document.getElementById('play_control').style.backgroundImage="url('../assets/images/Stop.svg')";
      Objeto_Impacto.Iniciar_Impacto(); 
      playTimerForward();
     }else{
      document.getElementById('play_control').style.backgroundImage="url('../assets/images/Play.svg')";
      Objeto_Impacto.Detener_Impacto();
      pauseTimerForward();
     }    
     if(pause==3){pause=1;}
  } 