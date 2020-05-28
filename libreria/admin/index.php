<!DOCTYPE html>
<html>
<head>
	<title>Registrar | SR </title>
<script type="text/javascript" src="../js/imagen.js"></script>
<script language="JavaScript" type="text/javascript"></script>
 
<link rel="apple-touch-icon" sizes="57x57" href="../icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="32x32" href="../icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../icons/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="16x16" href="../icons/favicon-16x16.png">
<link rel="stylesheet" href="../css/main.css"> 
<link href="../css/style_login.css" rel="stylesheet" type="text/css" media="all">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fuel Serve Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs  for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../css/bootstrap_register.css" rel='stylesheet' type='text/css' />  
<link href="../css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="../css/main.css"> 
	<link href="../css/font-awesome.css" rel="stylesheet"> 			<!-- font-awesome icons -->
<!-- //Custom Theme files -->
<!-- fonts -->
<link href="../css/bootstrap_register.css" rel='stylesheet' type='text/css' /> 
<link href="../css/style_fom_register.css" rel='stylesheet' type='text/css' />
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<!-- //fonts -->


<script language="JavaScript" >
function Procesar(){
var nombre=document.getElementById ("nombre").value;
var apellido=document.getElementById ("apellido").value;
var matricula=document.getElementById ("matricula").value;
var year=document.getElementById ("year").value;
var inicial=nombre.charAt(0);
document.getElementById ("user_name").value="SR"+inicial+apellido;
document.getElementById ("user_pass").value=matricula+year;

}
</script>
</head>
<body>

<div class="header-top">
		<!-- container -->
		<div class="container">
			<div class="social w3-agileitsicons"> 
				<ul>
					<img src="../images/logoinnova.png" alt="Smiley face" height="42" width="52">
				</ul>  
			</div>
			<div class="w3layouts-details">
				<ul>
					 
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>

<div class="content col-md-6">	
	<section>				
        <div id="container_demo">
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
				<div id="login" class="animate form">
					 <p class="registrar">Registrar usuario</p>
                    <form  action="up.php" autocomplete="on" method="post"> 
                   
                    		<div class="col-md-12" style="width: 370px;">
                    			<input id="matricula" name="matricula" required="required" type="text" placeholder="Matricula"/> 
                            <!-- Matricula -->
                    		</div> 
                       
                         	<div class="col-md-6">
                         		  <input id="nombre"  name="nombre" required="required" type="text" placeholder="Nombre"/> <!-- Nombre -->
                         	</div>
                          

                          <div class="col-md-6" >
                          	<input id="apellido" name="apellido" required="required" type="text" placeholder="Apellido"/> <!-- Apellido -->
                          </div>
                         
						  <div class="col-md-4" style="width: 105px;">
							<input name="dia" required="required" type="number" placeholder="Día" />  
						  </div>
						 
							<select name="mes" class="col-md-4" style="margin-top: 10px; height: 40px; padding-left: 3px; margin-left: 10px; border: 1px solid rgba(26, 31, 43, 0.94); background: rgba(255, 255, 255, 0.2); "  >
							    <option value="1">Enero</option>
							    <option value="2">Febrero</option>
							    <option value="3">Marzo</option>
							    <option value="4">Abril</option>
							    <option value="5">Mayo</option>
							    <option value="6">Junio</option>
							    <option value="7">Julio</option>
							    <option value="8">Agosto</option>
							    <option value="9">Septembre</option>
							    <option value="10">Octubre</option>
							    <option value="11">Noviembre</option>
							    <option value="12">Diciembre</option>

							</select> 
						   	
						  <div class="col-md-4" style="width: 105px; margin-left: 3px;">
							<input id="year" name="year" required="required" type="number" placeholder="año" />  
						  </div>
						  <input name="nivel" required="required" type="number" placeholder="Nivel" />  
						 <select name="estado" class="col-md-4" style="height: 40px; padding-left: 3px;  border: 1px solid rgba(26, 31, 43, 0.94); background: rgba(255, 255, 255, 0.2); "  >
							    <option value="A">Estado 0</option>
							    <option value="B">Estado 1</option>

							</select>  

						
                     	
                          
                        <p class="login button"> 
                            <input id="register_user" onclick="Procesar();" value="        Procesar" />
			</p>


		    <input id="user_name" name="mail"></input>
		    <input id="user_pass" name="contra"></input>


                        <p class="login button"> 
                            <input id="register_user" type="submit" value="Registrar" />
			</p>        
                        
                    </form>
                </div>
			
	</div>


        </div>  
    </section>
</div>


<div class="content col-md-6">	
	<section>				
        <div id="container_demo  " >
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
				<div id="login" class="animate form">
					 <p class="registrar">Consultar registro</p>
                   

                   <div class="col-md-6" style="width: 105px;">
							<input id="password" name="number" required="required" type="text" placeholder="Matricua" />  
				    </div>

				    <div class="col-md-6" style="margin-left: 20px;">
                   	<p class=" button"> 
                            <input id="register_user" type="submit" value="Mostrar" /> 
						</p>
                   </div>  


                </div>
			
			</div>


        </div>  
    </section>
</div>



<div class="footer col-md-12 "> 
		<p class="coppy">© 2018 Innova S.A. Todos los derechos reservados | Smart Reading Online</p>
	</div> 

	<script src="../libs/jquery/jquery.js"></script>
    <script src="../src/jquery.backstretch.js"></script>
	<script>
        $.backstretch([
         "../images/1.jpg",
          "../images/2.jpg",
          "../images/3.jpg"
        ], {
            fade: 750,
            duration: 4000
        });
    </script>

</body>
</html>