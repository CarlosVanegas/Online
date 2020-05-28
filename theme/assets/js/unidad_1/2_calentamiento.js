var current,incre=5,percepcion=1,regla=0.0,alto=0,init=0;

function incrementar(){percepcion++;if(percepcion>=5){percepcion=5;incre=25;}else{incre=incre+5;}document.getElementById('number').innerHTML=percepcion;}
function decrementar(){percepcion--;if(percepcion<=1){percepcion=1;incre=5;}else{incre=incre-5;}document.getElementById('number').innerHTML=percepcion;}
function zigzig_start(){trafico(); 
    alto++;
    if(alto==2){
      alto=0; 
      }
    if(init==0){
		init=1;
		
    	//canvas responsivo
		var canvas = document.getElementsByClassName("canvasConfig"); // canvas div
		var ctx = canvas[0].getContext('2d');
		var s = getComputedStyle(canvas[0]);
		var w = s.width;
		var h = s.height;
		canvas[0].width=w.split("px")[0];
		canvas[0].height=h.split("px")[0];
		//canvas responsivo
    }
    }


function trafico(){

  if(alto%2==0){  
    document.getElementById('play_control').style.backgroundImage="url('../assets/images/Stop.svg')";
    playTimer();
    current=setInterval(function() { mover(); }, t);
    }else{ 
      document.getElementById('play_control').style.backgroundImage="url('../assets/images/Play.svg')";
    pauseTimer();
    clearInterval(current);
    }
  }


function stopZig(){
	clearInterval(current);
	init=0;
	x=20.0;y=45;logico=0; t=1;bolo=1;xi=20.0;yi=45;
  incre=5;percepcion=1;regla=0.0;alto=0;pasadas=0;init=0;
}
    

    aaa=1;



    var pasadas=0;
    var x=20.0,y=45,logico=0, t=1,bolo=1,xi=20.0,yi=45;
    function mover()
    {

    var canvas = document.getElementsByClassName("canvasConfig"); // canvas div
         ///console.log(canvas[0]);
    var ctx = canvas[0].getContext('2d');

    var time=fin();
    if(time==0){
        alto=1;
        var resultadoPasadas=pasadas;
        stopZig();
        document.getElementById('play_control').style.backgroundImage="url('../../../images/control_buttons/Play.svg')";
        clearInterval(current);
            vdialog({
              modal: true,
              title: 'Resultados',
              content: 'Numero de pasadas '+resultadoPasadas+' Tiempo 1 minuto',
              width: '400px',
              height: 'auto',
              left: 'auto',
              top: 'auto',
              padding: 'auto',
              ok: function(){ location.reload(); }
            });

    }
    
    if(alto%2==1){
  


   regla=(0.0655*incre)/1;

   ctx.save();
   //ctx.clearRect(0, 0, canvas[0].width, canvas[0].height);
   //ctx.translate(ctx.canvas.width/2, ctx.canvas.height/2);
   //ctx.scale(0.5, 0.5);
   //ctx.translate(-ctx.canvas.width/2, -ctx.canvas.height/2);
   ctx.beginPath();
   ctx.lineWidth = 7;
   ctx.moveTo(parseFloat(xi), parseFloat(yi));
   ctx.lineTo(x, y);





//ctx.shadowOffsetX = 5;
//ctx.shadowOffsetY = 5;



   //hue = hue + 10 * Math.random();
   ctx.strokeStyle = '#2C7CB0';
   ctx.shadowColor = "#2C7CB0";
   ctx.shadowBlur = 1;
   ctx.stroke();
   ctx.restore();
   if(fin()==0){ctx.clearRect(0, 0, canvas[0].width, canvas[0].height);}

      if(logico==0){xi=x;yi=y;x=x+incre;}
      if(logico==1){xi=x;yi=y;x=x-incre;y=y+regla;}
      
      //xi=x;yi=y;
      if(x>=800.0){logico=1;}
      if(x<=20.0){logico=0;}
      if(y>=350.0&&x>=800.0){pasadas++;xi=20.0;yi=45;logico=0;x=20.0;y=45;ctx.clearRect(0, 0, canvas[0].width, canvas[0].height);}
      
}

}
 
    



    function screenBlack_zigzag(){
      var black = document.getElementById("screenPractice");
      black.style.backgroundColor = "#303030";
    }

    function screenWhite_zigzag(){
      var white = document.getElementById("screenPractice");
      white.style.backgroundColor = "#FFFFFF";
    }

    function screenGray_zigzag(){
      var white = document.getElementById("screenPractice");
      white.style.backgroundColor = "#F2F2F2";
    }




