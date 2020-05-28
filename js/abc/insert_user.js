	var ubicacion=0;
	var especial=false;
	var tiempo=0;
	var xhr=null;
 	
 	var select = document.getElementById('country');
 	//var check = document.getElementById('check');

	select.addEventListener('change',function(){  
      var selectedOption = this.options[select.selectedIndex];
      ubicacion=selectedOption.value;
	});

	//check.addEventListener('change',function(){  
  //    especial=this.checked;
	//});

  function Limpiar_formulario(){
    var nombre=document.getElementById ("nombre").value="";
    var apellido=document.getElementById ("apellido").value="";
    var matricula=document.getElementById ("matricula").value="";
    var user_name=document.getElementById ("user_name").innerHTML="";
    var user_pass=document.getElementById ("user_pass").innerHTML="";
    document.getElementById ("tiempo").value="";
    document.getElementById('check').checked=false;
  }

	function Procesar_usuario(){
		var nombre=document.getElementById ("nombre").value;
		var apellido=document.getElementById ("apellido").value;
		var matricula=document.getElementById ("matricula").value;
		var user_name=document.getElementById ("user_name");
		var user_pass=document.getElementById ("user_pass");
		var inicial_nombre=nombre.charAt(0);
		var inicial_apellido=apellido.charAt(0);
		user_name.innerHTML="Innovadiez";
		user_pass.innerHTML=matricula+inicial_nombre+inicial_apellido;
	}

	function Procesar_tiempo(){
  	tiempo=document.getElementById ("tiempo").value=182;
  }

	function Guardar_usuario(matricula,nombre,apellido,user,pass,tiempo,especial,ubicacion){
    var parametros = {
  		"matricula" : matricula,
      "nombre" : nombre,
      "apellido" : apellido,
      "user" : user,
      "pass" : pass,
      "tiempo" : tiempo,
      "especial" : especial,
      "ubicacion" : ubicacion
    };
    xhr=$.ajax({
      data:  parametros, 
      url:   './abc/almacenar_registro.php',
      type:  'get',
      beforeSend: function(){
          //console.log("realizando procesameinto ajax");
      },
      success: function(response){
        if(response==0){
          document.getElementById('matricula').setCustomValidity("ya existe la matricula");
        }
        if(response==1){
          vdialog({
            modal: true,
            title: 'Evento',
            content: 'Usuario registrado con exito.',
            width: '300px',
            height: 'auto',
            left: 'auto',
            top: 'auto',
            padding: 'auto',
            ok: function(){
              Limpiar_formulario();
              console.log('OK!');
              location.reload(true);
            }
          });
        }
      }
    });
  }

  document.getElementById("procesar_tiempo").addEventListener('click',Procesar_tiempo,false);
	document.getElementById("procesar_usuario").addEventListener('click',Procesar_usuario,false);

  $("#form_register").on("submit", function(e){
    e.preventDefault();
    Guardar_usuario(matricula.value,nombre.value,apellido.value,user_name.innerHTML,user_pass.innerHTML,tiempo,especial,ubicacion);
  });
