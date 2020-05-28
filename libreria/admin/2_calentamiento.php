<?php  
include '../../libreria/cmd.php';
$obj=new cmd(); 
$obj->Proteccion("../index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>2 Ejercicio de Calentamiento</title>
<link rel="apple-touch-icon" sizes="57x57" href="../../icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../../icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../../icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../../icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../../icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../../icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../../icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../../icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../../icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="..//android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../../icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../icons/favicon-16x16.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../assets/css/components_buttons.css" />
 
        <script type="text/javascript" src="lib/alertify.js"></script>
        <link rel="stylesheet" href="themes/alertify.core.css" />
        <link rel="stylesheet" href="themes/alertify.default.css" />
  <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">  


<!-- css -->
<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../assets/css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../assets/css/style_page.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="../assets/css/ball-zig-zag_play2.css" type="text/css" media="all" /> 

<link rel="stylesheet" href="../assets/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="../assets/css/main.css" type="text/css" media="all" />
<link rel="stylesheet" 	href="../assets/css/chocolat.css" type="text/css" media="all">
<link href="https://fonts.googleapis.com/css?family=Ramabhadra" rel="stylesheet">

<link rel="stylesheet" href="../unidad_1/button_circle.css" type="text/css" media="all" />  
<link rel="stylesheet" href="../assets/css/style_unidad_2.css" type="text/css" media="all" />
<script src="../assets/js/clook12.js"></script> 

<!--// css -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'> 		 
	<script src="../assets/assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
 
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="w3l_header_left"> 
				<ul>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+ (502) 2217 6500</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="../assets/mailto:info@innovadiez.com">info@innovadiez.com</a></li>
				</ul>
			</div>
			
			<div class="w3l_header_right">
				<ul>
					<li><a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="../assets/cerrars.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>CERRAR SESIÓN</a></li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
				
		</div>
	</div> 
  <div class="w3header">
        <div class="container">
          <nav class="navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <h1><a  href="index.html"> <img src="../../images/innova_opt.png" style="padding-left: 30px; padding-top: 10px;" alt=" "></a></h1> 
            </div>
            <!-- navbar-header -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
              <br> 
              <ul class="nav navbar-nav navbar-right">  
                <li><a href="../index.php">Inicio</a></li> 
                <li><a href="../#about" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teoria <span class=""></span></a>
                </li> 
                <li><a href="../ejercicios.php">Ejercicios</a></li>
                <li><a href="../#services">Servicios</a></li>
              </ul> 
              <div class="clearfix"> </div> 
            </div>
          </nav>
        </div>  
      </div> 	 

                <div class="container_clock  " >
                    <div style="visibility:hidden" class="number"   id="Horas">00</div>
                    <span style="visibility:hidden" class="number"  >:</span>
                    <div class="number"  id="Minutos">00</div>
                    <span class="number"  >:</span>
                    <div class="number"  id="Segundos">00</div>
                    <span style="visibility:hidden;" class="number"  >:</span>
                    <div style="visibility:hidden;" class="number"  id="Centesimas">00</div> 
                 </div>


    	<div class="col-md-12">
 				<div class="col-md-2"></div>
 				<div class="col-md-8" id="screen" style=" text-align: center; height: 450px; background-color: #E7E7E8;" > 
								<?php
				$op=rand(0,0);
				if($op==0){
				echo ' <span hidden id="juego">0</span>
			<br><br><br>  
				 <div id="1a" style="width: 88px;"   class="col-md-2 ovalo1"></div>
				 <div id="2a" style="width: 113px;"  class="col-md-2 ovalo1"></div>
				 <div id="3a" style="width: 138px;"  class="col-md-2 ovalo1"></div>
				 <div id="4a" style="width: 163px;"  class="col-md-2 ovalo1"></div>
				 <div id="5a" style="width: 219px;"  class="col-md-2 ovalo1"></div>
					<br> <br> <br><br>
				 <div id="6a" style="width: 88px;"   class="col-md-2 ovalo1"></div>
				 <div id="7a" style="width: 113px;"  class="col-md-2 ovalo1"></div>
				 <div id="8a" style="width: 138px;"  class="col-md-2 ovalo1"></div>
				 <div id="9a" style="width: 163px;"  class="col-md-2 ovalo1"></div>
				<div id="10a" style="width: 219px;"  class="col-md-2 ovalo1"></div>

				 	<br> <br> <br><br>
				 <div id="11a" style="width: 88px;"   class="col-md-2 ovalo1"></div>
				 <div id="12a" style="width: 113px;"  class="col-md-2 ovalo1"></div>
				 <div id="13a" style="width: 138px;"  class="col-md-2 ovalo1"></div>
				 <div id="14a" style="width: 163px;"  class="col-md-2 ovalo1"></div>
				 <div id="15a" style="width: 219px;"  class="col-md-2 ovalo1"></div>

				 	<br> <br> <br><br>
				 <div id="16a" style="width: 88px;"  class="col-md-2 ovalo1"></div>
				 <div id="17a" style="width: 113px;" class="col-md-2 ovalo1"></div>
				 <div id="18a" style="width: 138px;" class="col-md-2 ovalo1"></div>
				 <div id="19a" style="width: 163px;" class="col-md-2 ovalo1"></div>
				 <div id="20a" style="width: 219px;" class="col-md-2 ovalo1"></div>

				 	<br> <br> <br><br>
				 <div  style="width: 88px;"  class="col-md-2 ovalo1"></div>
				 <div  style="width: 113px;" class="col-md-2 ovalo1"></div>
				 <div  style="width: 138px;" class="col-md-2 ovalo1"></div>
				 <div  style="width: 163px;" class="col-md-2 ovalo1"></div>
				 <div  style="width: 219px;" class="col-md-2 ovalo1"></div>

				 	<br> <br> <br><br>
				 <div  style="width: 88px;"  class="col-md-2 ovalo1"></div>
				 <div  style="width: 113px;" class="col-md-2 ovalo1"></div>
				 <div  style="width: 138px;" class="col-md-2 ovalo1"></div>
				 <div  style="width: 163px;" class="col-md-2 ovalo1"></div>
				 <div  style="width: 219px;" class="col-md-2 ovalo1"></div> 
				 <div   hidden class="col-md-2 ovalo1"></div>';}
if($op==1){
echo ' <span hidden id="juego">1</span>
  <p    style="text-align: left; font-size: 30px; margin-left: 15px; margin-right: 15px; line-height: 36px; color: #DBDBDB; ">
		<br>
		&nbsp;&nbsp;
                <span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X</span>
		<br><br>
                &nbsp;&nbsp;
		<span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X</span>
		<br><br>
		&nbsp;&nbsp;
                <span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X</span>
		<br><br>
		&nbsp;&nbsp;
                <span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X</span>
		<br><br>
		&nbsp;&nbsp;
                <span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X</span>
		<br><br>
		&nbsp;&nbsp;
                <span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span class="sinonimo">X</span>
		<span hidden class="sinonimo">X</span>
		<br><br>
</p>

';
}
			   ?>
 				</div>
 				<div class="col-md-2">
 					<button onclick="nextPlay();" class="btnstyle btnstyle-3 btnstyle-3b icon-arrow-right2">Siguiente</button>
 					<br><br> 
 				  	<button onclick="repeatExercice();" class="btnstyle btnstyle-3 btnstyle-3b icon-spinner11">Repetir</button>
					<br><br>
					<img onclick="unuty5();" style=" margin-left:55px; height: 106px;width: 73px; cursor: pointer; " src="../assets/image/3-off.png">
					<h3 style="color: #1B76FF;font-size: 17px; margin-top: 7px; margin-left: -6px;">Nivel 13</h3>		
 				</div>			 
			</div>


 			<div class="col-md-12" >
 				
 				<div class="col-md-2"></div>
 				<div class="col-md-8"  style=" text-align: center; height: 80px; background-color: #021025;" > 
						<div  class="col-md-4"	>
					<div class="col-md-2" ></div>	
					<div class="col-md-2 contrls-buttons" onclick="decrementar();" class="grad " id="menos"  >
						 <a class="btn-responsive" ><i class="glyphicon glyphicon-minus" style="color: #ffffff; font-size: 10px;" ></i></a>
					</div>	
					<div class="col-md-2" >
					<span  class="number_result" id="vel" >0</span>
					</div>	
					<div class="col-md-2 contrls-buttons" onclick="incrementar();" id="mas" >
						 <a class="btn-responsive" ><i class="glyphicon glyphicon-plus" style="color: #ffffff; font-size: 10px;"></i></a>
					</div>	
					<div class="col-md-2" ></div>	
					</div>

					<div  class=" container_obj col-md-4 play">
							<button onclick="increment();trafico();" type="button" class="btn btn-danger btn-circle btn-xl"><i id="trafico" class="glyphicon glyphicon-play"></i></button>
					</div>

					<div class=" container_obj col-md-4"  >
						<p style="color: #ffffff; margin-right: 20px; " >Fondo de pantalla</p>
						<div class="col-md-2" ></div>	
					<div class="col-md-2" >
						<button onclick="screenWhite();" style="background-color: #ffffff;" class="screen-color1 " id="blanco"></button>  
					</div>	
					<div class="col-md-2" >
						<span class="number_result" id=" "></span> 
					</div>	
					<div class="col-md-2" >
						<button  class="screen-color2"  onclick="screenBlack();" id="negro" ></button>
					</div>	
					<div class="col-md-2" ></div>	 
					</div>
 				</div>
 				<div class="col-md-2"></div>			 
			</div>

              
		 
			<script type="text/javascript">
				$(document).ready(function() {  
				 setInterval(function() {
				    $('1a').animate( { backgroundColor: 'red' }, 1000)
				    .animate( { backgroundColor: 'green' }, 1000); 
				    },1000);

				 });
			</script>


			
			 
	  	<span id="palabraspara" class=" " >1</span> 

	  	<style type="text/css">
	  		
	  		.circle{  
			 

			} 
	  	</style>


			<script language='JavaScript'>
			var elemento = document.getElementsByClassName("sinonimo");
			var element = document.getElementsByClassName("col-md-2 ovalo1");
			var cont,dir=0;
			var c=0;
                        var colores="#A0000A",pasadas=0;
			var para=parseInt(document.getElementById("juego").innerHTML);
                        //alert(para);
			//if(para>=0){alert("xx";}
			function color(){if(para==0){element[dir].style.background=colores;}else{elemento[dir].style.color=colores;}var param=document.getElementById("Minutos").innerHTML;if(param>=1){mensaje();};dir++;if(dir>30){pasadas++;
                        if(para==0){
element[0].style.background="#D1D1D1";
element[1].style.background="#D1D1D1";
element[2].style.background="#D1D1D1";
element[3].style.background="#D1D1D1";
element[4].style.background="#D1D1D1";
element[5].style.background="#D1D1D1";
element[6].style.background="#D1D1D1";
element[7].style.background="#D1D1D1";
element[8].style.background="#D1D1D1";
element[9].style.background="#D1D1D1";
element[10].style.background="#D1D1D1";
element[11].style.background="#D1D1D1";
element[12].style.background="#D1D1D1";
element[13].style.background="#D1D1D1";
element[14].style.background="#D1D1D1";
element[15].style.background="#D1D1D1";
element[16].style.background="#D1D1D1";
element[17].style.background="#D1D1D1";
element[18].style.background="#D1D1D1";
element[19].style.background="#D1D1D1";
element[20].style.background="#D1D1D1";
element[21].style.background="#D1D1D1";
element[22].style.background="#D1D1D1";
element[23].style.background="#D1D1D1";
element[24].style.background="#D1D1D1";
element[25].style.background="#D1D1D1";
element[26].style.background="#D1D1D1";
element[27].style.background="#D1D1D1";
element[28].style.background="#D1D1D1";
element[29].style.background="#D1D1D1";
}

var proteccion=0;
if(para==1){for(c=0;c<=30;c++){elemento[c].style.color=colores;}}
dir=0;}}
			//function color2(){elemento[dir].style.background="#000000";dir++;if(dir>=30){dir=0;}}
			var cont,alto=1,velocidad1=300,k=0,vel=0;

			function incrementar(){if(proteccion==1){vel++;if(vel>4){vel=5;}else{velocidad1-=50;clearInterval(cont);cont=setInterval(function() { color(); }, velocidad1);}document.getElementById('vel').innerHTML=vel;}}
			function decrementar(){if(proteccion==1){vel--;if(vel<0){vel=0;}else{velocidad1+=50;clearInterval(cont);cont=setInterval(function() { color(); }, velocidad1);}document.getElementById('vel').innerHTML=vel;}}
			function init(){if(k==0){document.getElementById('vel').innerHTML=0;k=10;cont=setInterval(function() { color(); }, 300);}else{cont=setInterval(function() { color(); }, velocidad1);}}
			function increment(){alto++;if(alto==2){alto=0;}}
			function trafico(){if(alto%2==0){init();inicio();proteccion=1;}else{clearInterval(cont);parar();proteccion=0; }}
			
			function mensaje(){
			  var parametro1 = document.getElementById("Horas").innerHTML   ;
			  var parametro2 = document.getElementById("Minutos").innerHTML   ;
			  var parametro3 = document.getElementById("Segundos").innerHTML   ;
			  var parametro4 = 200;
			  swal({
                          
			    title: 'Resultados : ',
			    text: 'Tiempo de Duración : '+ parametro2 + ":"+ parametro3+"<br> Número de pasadas : "+ pasadas,
                                         html:
			    'You can use <b>bold text</b>, ' +
			    '<a href="//github.com">links</a> ' +
			    'and other HTML tags'  

            
			  }, function(){
                            window.location.href = "calentamiento.php";
			  });
			  parar();
			  clearInterval(control);
			  document.getElementById("parar").disabled = true;
			  document.getElementById("continuar").disabled = false;
			}
function screenBlack(){
   var black = document.getElementById("screen");
   var words  = document.getElementById("demo");
   black.style.backgroundColor = "#303030";
   words.style.color = "#ffffff";



var element = document.getElementsByClassName("col-md-2 ovalo1");
element[0].style.background="#A0000A";
element[1].style.background="#A0000A";
element[2].style.background="#A0000A";
element[3].style.background="#A0000A";
element[4].style.background="#A0000A";
element[5].style.background="#A0000A";
element[6].style.background="#A0000A";
element[7].style.background="#A0000A";
element[8].style.background="#A0000A";
element[9].style.background="#A0000A";
element[10].style.background="#A0000A";
element[11].style.background="#A0000A";
element[12].style.background="#A0000A";
element[13].style.background="#A0000A";
element[14].style.background="#A0000A";
element[15].style.background="#A0000A";
element[16].style.background="#A0000A";
element[17].style.background="#A0000A";
element[18].style.background="#A0000A";
element[19].style.background="#A0000A";
element[20].style.background="#A0000A";
element[21].style.background="#A0000A";
element[22].style.background="#A0000A";
element[23].style.background="#A0000A";
element[24].style.background="#A0000A";
element[25].style.background="#A0000A";
element[26].style.background="#A0000A";
element[27].style.background="#A0000A";
element[28].style.background="#A0000A";
element[29].style.background="#A0000A";


colores="#A0000A";
}

function screenWhite(){

   var white = document.getElementById("screen");
   var words  = document.getElementById("demo");
   white.style.backgroundColor = "#FFFFFF";
   words.style.color = "#000000";
colores="#A0000A";

}
			</script>
	
			<script type="text/javascript">
				 function nextPlay(){
				 window.location='Instrucciones/Instrucciones_3.php';  
				}

				function repeatExercice(){
				 location.reload();
				}

				function unuty5(){
				  window.location='unidad_3.php';  
				}

			</script>

		 <footer><p> &copy; 2017 Innova S.A. Todos los Derechos Reservados| Smart Reading <a style="color: #ffffff;" href="../assets/http://www.innovadiez.com">Innova S.A.</a></p></footer> 	

	 <script src="../assets/js/bootstrap_1.js"></script>
</body>
</html>