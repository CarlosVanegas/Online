var daySelect=0;
    function setdayofweek(index){
      daySelect=index;
    }
    function getdayofweek(index){
      return daySelect;
    }

    var meses=["Domingo","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
    var dias = new Array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');

    var fecha = new Date();
    var current_day=fecha.getDay();
    var current_year=fecha.getFullYear();//primero nos ubicamos en el anyo actual
    var current_month=fecha.getMonth();//se iniciara en el mes actual del calendario real

    document.getElementsByClassName('current_dateB')[0].innerHTML=dias[current_day]+" "+(current_month+1)+" de "+meses[current_month]+" "+current_year;

  function Post_cancelar_reserva_sr(ubicacion){
        var parametros = {
                "ubicacion" : ubicacion,
        };
        xhr=$.ajax({
                data:  parametros, 
                url:   'cancelar_reserva_sr.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                  //console.log("llamando al php");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                  console.log(response);
                if(parseInt(response)==1){
                  vdialog({
                      modal: true,
                      title: 'Cancelar reserva',
                      content: 'Tu reserva ha sido cancelada.',
                      width: '300px',
                      height: 'auto',
                      left: 'auto',
                      top: 'auto',
                      padding: 'auto',
                      ok: function(){
                        console.log('OK!');
                      }
                  });
                }

                if(parseInt(response)==0){
                  vdialog({
                      modal: true,
                      title: 'Cancelar reserva',
                      content: 'No existe tu reserva tienes que reservar.',
                      width: '300px',
                      height: 'auto',
                      left: 'auto',
                      top: 'auto',
                      padding: 'auto',
                      ok: function(){
                        console.log('OK!');
                      }
                  });
                }
                
  
                }
        });
    }
