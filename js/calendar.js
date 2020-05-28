 $(function() {

    function c() {
        p();
        var e = h();
        var r = 0;
        var u = false;
        l.empty();
        var ci=0;
        var dayweek=0;
        
        while (!u) {
            if (s[r] == e[0].weekday) {
                u = true
            } else {
                l.append('<div class="day_block" onclick="setdayofweek('+dayweek+')" id="'+ci+'"></div>');
                ci++
                if(dayweek>5){dayweek=-1;}
                dayweek++
                r++
            }
        }

        for (var c = 0; c < 42 - r; c++) {
            if (c >= e.length) {
                l.append('<div class="day_block" onclick="setdayofweek('+dayweek+')" id="'+ci+'"></div>')
            } else {
                var v = e[c].day;
                var m = g(new Date(t, n - 1, v)) ? '<div class="day_block" onclick="setdayofweek('+dayweek+')" id="'+ci+'">' : '<div class="day_block" onclick="setdayofweek('+dayweek+')" id="'+ci+'">';
                l.append(m + "" + v + "</div>")
            }
            ci++
            if(dayweek>5){dayweek=-1;}
            dayweek++
        };

       function selectDay(){
       	 l.on("click", function() {
            alert("SELECT");
        });
       }


       function block_day_select(){
       	  l.prop('onclick',null).off('click');
       }

        var y = o[n - 1];
        a.css("background-color", y).find("h1").text(i[n - 1] + " " + t);
      
        d()

        to_unlock();
    }

    function h() {
        var e = [];
        for (var r = 1; r < v(t, n) + 1; r++) {
            e.push({
                day: r,
                weekday: s[m(t, n, r)]
            })
        }
        return e
    }

    function p() {
        f.empty();
        for (var e = 0; e < 7; e++) {
            f.append("<div class='day_of_the_week'>" + s[e].substring(0, 3) + "</div>")
        }
    }

    function d() {
        var t;
        var n = $("#calendar").css("width", e + "px");
        n.find(t = "#calendar_weekdays, #calendar_content").css("width", e + "px").find("div").css({
            width: e / 7 + "px",
            height: 45 + "px",
            "line-height": 50 + "px"
        });
        n.find("#calendar_header").css({
            height: e * (1 / 12) + "px"
        }).find('i[class^="icon-chevron"]').css("line-height", e * (1 / 18) + "px")
    }

    function v(e, t) {
        return (new Date(e, t, 0)).getDate()
    }

    function m(e, t, n) {
        return (new Date(e, t - 1, n)).getDay()
    }

    function g(e) {
        return y(new Date) == y(e)
    }

    function y(e) {
        return e.getFullYear() + "/" + (e.getMonth() + 1) + "/" + e.getDate()
    }

    function b() {
        var e = new Date;
        t = e.getFullYear();
        n = e.getMonth() + 1
    }
    var e = 810;
    var t = 2013;
    var n = 9;
    var r = [];
    var i = ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"];
    var s = [
        "Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"
    ];
    var o = ["#FF8600", "#55E6FA", "#021025", "#3E7B7F", "#193441", "#D49B24", "#454545", "#FFBB2B", "#51A1A6", "#FF8600", "#55E6FA", "#021025", "#3E7B7F", "#193441", "#D49B24", "#454545", "#FFBB2B", "#51A1A6"];
    var u = $("#calendar");
    var a = u.find("#calendar_header");
    var f = u.find("#calendar_weekdays");
    var l = u.find("#calendar_content");
    b();
    c();
    all_block()
var array_dias_bloqueados=new Array();
function day_null(day){
	var day_of_the_week = document.getElementsByClassName('day_of_the_week');
    	switch(day){
    		case "domingo":
    			day_of_the_week[0].style.opacity="0.4";
    			array_dias_bloqueados.push(0);array_dias_bloqueados.push(7);array_dias_bloqueados.push(14);
    			array_dias_bloqueados.push(21);array_dias_bloqueados.push(28);
    			 
    				///$(".day_block:eq(0)").attr("disabled", "true");
       		break;
    		case "lunes":
    			day_of_the_week[1].style.opacity="0.4";

    			array_dias_bloqueados.push(1);array_dias_bloqueados.push(8);array_dias_bloqueados.push(15);
    			array_dias_bloqueados.push(22);array_dias_bloqueados.push(29);
    		break;
    		case "martes":
    			day_of_the_week[2].style.opacity="0.4";

    			array_dias_bloqueados.push(2);array_dias_bloqueados.push(9);array_dias_bloqueados.push(16);
    			array_dias_bloqueados.push(23);array_dias_bloqueados.push(30);
    		break;
    	    case "miercoles":
    	    	day_of_the_week[3].style.opacity="0.4";

    			array_dias_bloqueados.push(3);array_dias_bloqueados.push(10);array_dias_bloqueados.push(17);
    			array_dias_bloqueados.push(24);array_dias_bloqueados.push(31);
    		break;
    	    case "jueves":
    	    	day_of_the_week[4].style.opacity="0.4";

    			array_dias_bloqueados.push(4);array_dias_bloqueados.push(11);array_dias_bloqueados.push(18);
    			array_dias_bloqueados.push(25);array_dias_bloqueados.push(32);
    		break;
    	    case "viernes":
    	    	day_of_the_week[5].style.opacity="0.4";

    			array_dias_bloqueados.push(5);array_dias_bloqueados.push(12);array_dias_bloqueados.push(19);
    			array_dias_bloqueados.push(26);array_dias_bloqueados.push(33);
    		break;
    		case "sabado":
    			day_of_the_week[6].style.opacity="0.4";

    			array_dias_bloqueados.push(6);array_dias_bloqueados.push(13);array_dias_bloqueados.push(20);
    			array_dias_bloqueados.push(27);array_dias_bloqueados.push(34);
    		break;
    	}
    	for(var i=0;i<array_dias_bloqueados.length;i++){
    		document.getElementsByClassName('day_block')[array_dias_bloqueados[i]].style.opacity="0.4";
    		document.getElementsByClassName('day_block')[array_dias_bloqueados[i]].style.cursor="not-allowed";
    	}
    }

    //lex();
    var clicks=1;
    function lex(){
	    	a.find('i[class^="icon-chevron"]').on("click", function() {
	    		
	        var e = $(this);
	        var r = function(e) {
	            n = e == "next" ? n + 1 : n - 1;
	            if (n < 1) {
	                n = 12;
	                t--
	            } else if (n > 12) {
	                n = 1;
	                t++
	            }
	            c()
	        };
	        if (e.attr("class").indexOf("left") != -1) {
	        	if(clicks==0){
	        		clicks=1
	            	r("previous")
			             departament = $('#country').val();
					    if (departament == "Ciudad de Guatemala") {
					    	day_null("domingo");
					    	console.log("es igual");
					    	//day_null("jueves");
					    	to_unlock();
					    	lex(); 
					    }else if (departament == "Quetzaltenango - Xela") {
					    	alert("Xelajú!!!");
					    }else if (departament == "Sacatepéquez-Antigua") {
					    	alert("PEGREEE");
					    }
				    //ale
	        	}

	            console.log(clicks)
	        } else {
	        	
	        	if(clicks==1){
	        		clicks=0
	            	r("next")
	            	  departament = $('#country').val();
				    if (departament == "Ciudad de Guatemala") {
				    	day_null("domingo");
				    	console.log("es igual");
				    	//day_null("jueves");
				    	to_unlock();
				    	lex(); 
				    }else if (departament == "Quetzaltenango - Xela") {
				    	alert("Xelajú!!!");
				    }else if (departament == "Sacatepéquez-Antigua") {
				    	alert("PEGREEE");
				    }
	            	  
	            }
	        }
 
	    })
    }
 	
    var headerCalendar;
    var calendar_weekdays; 
    var calendar_content;
    var daySect;
    var left;
    var right;

    function all_block(){
    	headerCalendar = $("#calendar_header").css({ 
            "opacity": 0.4
        });

        calendar_weekdays = $("#calendar_weekdays").css({
        	"opacity": 0.4
        });

        calendar_content = $("#calendar_content").css({
        	"opacity": 0.4,
        	 "cursor":"not-allowed"
        });

        l.prop('onclick',null).off('click');

        daySect = $("#daySect").css({
        	"cursor":"pointer"
        });
    }

    function to_unlock(){


    	headerCalendar = $("#calendar_header").css({ 
            "opacity": 1
        });
        calendar_weekdays = $("#calendar_weekdays").css({
        	"opacity": 1
        });
        calendar_content = $("#calendar_content").css({
        	"opacity": 1,
        	 "cursor":"pointer"
        });
        	// l.on("click", function() {
        	 //	console.log(this.id)
            //alert(this.id);
        //});

       	var lista = document.getElementById('calendar_content').querySelectorAll('div');
    	for(var i = 0;i < lista.length;i++){
      		lista[i].addEventListener('click',function(event){execute(this.id);},false);
    	}


        daySect = $(".day_block").css({
        	"cursor":"pointericon-chevron"
        });

        left = $("#left").css({
        	"cursor":"pointer"
        });
         right = $("#right").css({
        	"cursor":"pointer"
        });
    }


    var ubicacion_country=0;
    var display=0;
    

    function execute(event){
    	console.log(event);

    	var resultado=0;
    	for(var i=0;i<array_dias_bloqueados.length;i++){
    		if(array_dias_bloqueados[i]==event){resultado=1;}
    	}
    	if(resultado==1){console.log("dia bloqueado");}
    	else{

    		var old_month=document.getElementById('old_month').innerHTML.split(" ")[0];
    		var old=0;

    		if(old_month=="ENERO"){old=1;}
    		if(old_month=="FEBRERO"){old=2;}
    		if(old_month=="MARZO"){old=3;}
    		if(old_month=="ABRIL"){old=4;}
    		if(old_month=="MAYO"){old=5;}
    		if(old_month=="JUNIO"){old=6;}
    		if(old_month=="JULIO"){old=7;}
    		if(old_month=="AGOSTO"){old=8;}
    		if(old_month=="SEPTIEMBRE"){old=9;}
    		if(old_month=="OCTUBRE"){old=10;}
    		if(old_month=="NOVIEMBRE"){old=11;}
    		if(old_month=="DICIEMBRE"){old=12;}

            var fechaAux=document.getElementsByClassName('current_date')[0].innerHTML;
            var mes=document.getElementsByClassName('current_date')[0].innerHTML.replace("0","");
            var fecha=document.getElementsByClassName('day_block')[event].innerHTML;
            //console.log("mes__"+mes)  
            //console.log("ubicacion__"+ubicacion_country); 
            //console.log("fecha__"+fecha)   
            //console.log("mes: "+fechaAux.split("/")[0]);
            //console.log("fecha: "+fecha.split("/")[2]);
            //console.log("xyz-"+old+"="+mes);





            if(parseInt(mes.split("/")[1])==old){
            	if(parseInt(fecha)>parseInt(fechaAux.split("/")[0])){
            		Post_Reservar_SR(ubicacion_country,old,fecha);
        		}
        		else{
        			
        			if(display==0){
        				display=1;
		        		vdialog({
		                    modal: true,
		                    title: 'Malas noticias',
		                    content: 'No puedes reservar en esta fecha.',
		                    width: '300px',
		                    height: 'auto',
		                    left: 'auto',
		                    top: 'auto',
		                    padding: 'auto',
		                    ok: function(){display=0;}
		                });
	        		}
        		}
        	}

        	else{
            	Post_Reservar_SR(ubicacion_country,old,fecha);
        	}
        }
    }



    function Post_Reservar_SR(ubicacion_p,mes,fecha){
        var parametros = {
            "ubicacion" : ubicacion_p,
            "mes" : mes,
            "fecha" : fecha,
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'prueva_ejecucion.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                    //console.log("llamando al php");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                  if(response==0){
                        //response=1;
                        if(display==0){
        				display=1;
	                        vdialog({
	                            modal: true,
	                            title: 'Malas noticias',
	                            content: 'No existen horarios en esta fecha',
	                            width: '300px',
	                            height: 'auto',
	                            left: 'auto',
	                            top: 'auto',
	                            padding: 'auto',
	                            ok: function(){display=0;}
	                        });
                    	}
                  }
                    
                  if(response==1){
                    var year = new Date;
                    anyo = year.getFullYear();
                    
                    location.href="/reservar/reservar.php?day="+fecha+"&month="+mes+"&year="+anyo+"&location="+ubicacion_p+"&dayofweek="+getdayofweek();}
                    //alert(response);
                }
        });
    }

    function day_bloks(parametro){
    	var day=0,days=0;
    	if(parametro=="domingo"){day=0;days=6;}
    	if(parametro=="lunes"){day=1;days=7;}
    	if(parametro=="martes"){day=2;days=8;}
    	if(parametro=="miercoles"){day=3;days=9;}
    	if(parametro=="jueves"){day=4;days=10;}
    	if(parametro=="viernes"){day=5;days=11;}
    	if(parametro=="sabado"){day=6;days=12;}
    	var days_disabled=document.getElementsByClassName('day_block');
    	document.getElementsByClassName('day_of_the_week')[day].style.backgroundColor="#000000";	
    	if(day==5|day==6){days_disabled[day-1].style.backgroundColor="#000000";}
    	else{days_disabled[day].style.backgroundColor="#000000";} 		
    	//alert(days_disabled.length);
    	for(var i =0;i<days_disabled.length;){
    		console.log(i);
    		if(i!=0){
    		days_disabled[i].style.backgroundColor="#000000";	
    		}
    		if(day==0){
    		if(i>=6&&days<7){i++;i=i+6;}
    		if(i<6&&days<7){i=i+6;}
    		}
    		if(day==1){i=i+days;}
    		if(day==2){
    			if(i>=8){i=i+days;i--;}
    			if(i<=8){i=i+days;}
    		}
    		if(day==3){
    			if(i>=9){i=i+days;i--;i--;}
    			if(i<=9){i=i+days;}
    		}
    		if(day==4){
    			if(i>=10){i=i+days;i--;i--;i--;}
    			if(i<=10){i=i+days;}
    		}
    		if(day==5){
    			if(i>=11){i=i+days;i--;i--;i--;i--;}
    			if(i<=11){i=i+days;}
    		}
    		if(day==6){
    			if(i>=12){i=i+days;i--;i--;i--;i--;i--;}
    			if(i<=12){i=i+days;}
    		}
    	}
    }



		  $("#country").change(function(){
		    departament = $('#country').val();
		    
		    if (departament == "Ciudad de Guatemala - Zona 11") {
		    	ubicacion_country=1;
                day_null("domingo");
		    	//day_null("jueves");
		    	to_unlock();
		    	lex(); 
		    }else if (departament == "Ciudad de Guatemala - Zona 15") {
                ubicacion_country=2;
		    	//alert("Zona 15");
                day_null("domingo");
                //day_null("jueves");
                to_unlock();
                lex(); 
		    }else if (departament == "Quetzaltenango - Xela") {
		    	ubicacion_country=3;
                //alert("Xela");
		    }else if (departament == "Sacatepéquez-Antigua") {
                ubicacion_country=4;
                //alert("Antigua");
            }
		    //alert ("Departamento : "+departament);
		});





})




