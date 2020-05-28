        <?php
            class cmd{
                
                private $host="localhost";
                private $user="root";
                private $pass="zodiaco";
                private $db="calendario";
                private $colapso=3600;
                private $con;

                private $valorA,$valorB,$valorC;

                public function Conexion(){
                    try{
			//mysqlii($servername, $username, $password, $dbname);

                        $this->con=mysqli_connect("localhost","root","zodiaco","calendario");
                        //$this->con=mysqli_connect($this->host, $this->user, $this->pass, $this->db);
                        //mysqli_select_db($this->db, $this->con);
                        //echo 'conexion exitosa';
                    }
                    catch(Exception $e){echo 'error de conexion';}
                }//fin del metodo conexion
                
                
                public function Desconexion(){
                        try{
			                      mysqli_close($this->con);
                            //mysqlii_close($this->con);
                            //echo 'desconexion exitosa';
                        } catch (Exception $ex) {
                            echo 'error de desconexion';
                        }    
                }//fin del metodo desconexion
                
                
                private function Ejecucion($param){
                        try{
                          $res = $this->con->query($param);
                            return $res;
                        } catch (Exception $ex) {
                            echo 'error';
                        }
                }//fin del metodo ejecucion de sentencias mysqlii
                 
                
                public function Eliminar_Informacion($tabla1,$tabla2){
                    try{
                        $obj=new cmd();
                        $obj->Conexion();
                        $sql="delete from ".$tabla1;
                        $obj->Ejecucion($sql);
                        $obj->Desconexion(); 

                        $obj->Conexion();
                        $sql="delete from ".$tabla2;
                        $obj->Ejecucion($sql);
                        $obj->Desconexion(); 

                    } catch (Exception $ex) {
                          echo 'error de insercion';
                    }
                }//fin del metodo insertar


                public function Insertar($tabla,$valores){
                    try{
                        $obj=new cmd();
                        $obj->Conexion();
                        $sql="INSERT INTO ".$tabla." VALUES(".$valores.")";
                        $obj->Ejecucion($sql);
                        $obj->Desconexion();   
                    } catch (Exception $ex) {
                          echo 'error de insercion';
                    }
                }//fin del metodo insertar
   
                
                
                public function Eliminar($tabla,$campodestino,$objetivo,$operador){
                    try{
                        $obj=new cmd();
                        $obj->Conexion();
                        $sql="DELETE FROM ".$tabla." WHERE(".$campodestino." ".$operador." ".$objetivo.")";
                        $obj->Ejecucion($sql);
                        $obj->Desconexion();               
                    } catch (Exception $ex) {
                          echo 'error de insercion';
                    }
                }//fin del metodo eliminar
                
                
                
                public function Modificar($tabla,$camposdestino,$campoabuscar,$objetivo){
                    try{
                        $obj=new cmd();
                        $obj->Conexion();
                        $sql="UPDATE ".$tabla." set ".$camposdestino." WHERE(".$campoabuscar."=".$objetivo.")";
                        $obj->Ejecucion($sql);
                        $obj->Desconexion();   
                    } catch (Exception $ex) {
                          echo 'error de modificacion';
                    }    
                }//fin del metodo modificar
                
                
                public function Registros($tabla){
                    try{
                        $obj=new cmd();
                        $obj->Conexion();
                        $sql="select * from ".$tabla;
                        $rec=$obj->Ejecucion($sql);
                        $nr = mysqli_num_rows($rec);
                        $obj->Desconexion();
                        return $nr; 
                    } catch (Exception $ex) {
                          echo 'error tipo: count(*)';
                    }    
                }//fin del metodo registros


                

                public function Buscar($tabla,$campos,$campodestino,$objetivo,$numcolumnas){
                    try{
                        
						            $cadena="";
                        $obj=new cmd();    
                        $obj->Conexion();
                        $sql="SELECT * FROM ".$tabla." WHERE(".$campodestino."=".$objetivo.")"; 
                        $rec=$obj->Ejecucion($sql);
                        
                        $cadena_aux=$campos;
                        $objeto=  explode(",", $cadena_aux);
                        
                        $cadena=$cadena.'<table border="1" style="width: 400px;">';
                        $cadena=$cadena.'<tr>'; 
                        for($ci=0;$ci<$numcolumnas;$ci++){
                            $cadena=$cadena.'<th style="text-align: center;">'.$objeto[$ci].'</th>';
                        } 
                        $cadena=$cadena.'</tr>'; 
                     
                        while($row=$rec->fetch_array(MYSQLI_NUM)) 
                        { 
                            $cadena=$cadena.'<tr>';
                            for($ci=0;$ci<$numcolumnas;$ci++){
                                $cadena=$cadena.'<td>'.$row[$ci].'</td>';
                            } 
                
                                             
                        } 
                        $cadena=$cadena.'</tr>';
                        $cadena=$cadena.'</table>';
                        $obj->Desconexion();
                        return $cadena;
                    } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
                        
                }//fin del metodo buscar
                


          public function Validar($tabla,$usuario,$clave){
                    try{
                        
                        $obj=new cmd();    
                        $obj->Conexion();
                        $sql="SELECT * FROM ".$tabla." WHERE(user=".$usuario."and pass=".$clave.")"; 
                        $rec=$obj->Ejecucion($sql);
                        
                        $nr = mysqli_num_rows($rec);
                        $obj->Desconexion();
                       return $nr;
                    } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
                        
                }//fin del metodo validar
               


        public function Existencia($tabla,$usuario){
                    try{
                        
                        $obj=new cmd();    
                        $obj->Conexion();
                        $sql="SELECT * FROM ".$tabla." WHERE(Huesped=".$usuario.")"; 
                        $rec=$obj->Ejecucion($sql);
                        
                        $nr = mysqli_num_rows($rec);
                        $obj->Desconexion();
                       return $nr;
                    } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
                        
                }//fin del metodo validar


               

        public function ExistenciaB($tabla,$campo,$objetivo){
                    try{
                        
                        $obj=new cmd();    
                        $obj->Conexion();
                        $sql="SELECT * FROM ".$tabla." WHERE(".$campo."=".$objetivo.")"; 
                        $rec=$obj->Ejecucion($sql);
                        
                        $nr = mysqli_num_rows($rec);
                        $obj->Desconexion();
                       return $nr;
                    } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
                        
                }//fin del metodo validar por campo espesifico


                public function ExistenciaC($tabla,$campo){
                    try{
                        
                        $obj=new cmd();    
                        $obj->Conexion();
                        $sql="SELECT * FROM ".$tabla." WHERE(".$campo.")"; 
                        $rec=$obj->Ejecucion($sql);
                        
                        $nr = mysqli_num_rows($rec);
                        $obj->Desconexion();
                       return $nr;
                    } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
                        
                }//fin del metodo validar por campo espesifico

        


         public function Reservar_Horario_SR(){
          try{
          //session_start();
          $obj=new cmd();

          $ubicacion=$_POST['ubicacion'];
          $mes=$_POST['mes'];
          $fecha=$_POST['fecha'];

          //recibo parametros para verificar si la matricula ya existe en una reserva
          //$capacidad=$obj->Registros("Reservas_SR WHERE(Id_horario=".$_POST['identificador_horario'].")");
          
          $horarios_disponibles=$obj->ExistenciaC("Horario_SR","Mes='".$mes."' and fecha='".$fecha."' and Id_ubicacion=".$ubicacion);

          //$matricula=$obj->Extraer_Parametro("Credenciales_Estudiantes WHERE(pass='".$_SESSION['nombre']."')", 0);
          //$puedoreservar=$obj->Extraer_Parametro("Reservas WHERE(Matricula='".$_SESSION['nombre']."')", 0);

          //$yareservo= $obj->ExistenciaB("Reservas_SR","Matricula","'".$matricula."'");
          //echo $puedoreservar;
          //$capacidad=$obj->Extraer_Parametro("Horario_de_reserva WHERE(Id='".$_POST['Id_reserva']."')", 3);
          //$resta=0;
          //if(int($capacidad)>0){$resta=$resta-1;}
          if($horarios_disponibles==0){echo 0;}
          if($horarios_disponibles>0){echo 1;}
          //echo $ubicacion."-".$mes."-".$fecha."-"."::::";
          //echo $horarios_disponibles;
          
          /*
          if($capacidad<6&&$yareservo==0&&$horarios_disponibles>0){
            echo 'tiene permitido reservar';
            //$obj->Modificar("Horario_de_reserva","Capacidad='".$resta."'","Id","'".$_POST['Id_reserva']."'");
            //$obj->Insertar("Reservas","".$_POST['identificador_horario'].",'".$matricula."'");

          }
          //if($yareservo>0&&$horarios_disponibles>0){
            //echo 'no tienes permitido reservar una segunda vez en el mismo horario';
            //echo '<script language="javascript">alert("Se modificara la entidad");</script>';
            //$obj->Modificar("Instancias","Inicio_De_Instancia='".time()."',Galleta='".$varr."'","Huesped","'".$_SESSION['nombre']."'");
          //}
          if($yareservo>0){
            echo 'parece que ya has reservado termina tu clase y reserva de nuevo no te permitire reservar';
            //$obj->Insertar("Reservas","".$_POST['identificador_horario'].",'".$matricula."'");
            //echo '<script language="javascript">alert("Se modificara la entidad");</script>';
            //$obj->Modificar("Instancias","Inicio_De_Instancia='".time()."',Galleta='".$varr."'","Huesped","'".$_SESSION['nombre']."'");
          }
          */

        
          } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
        }



        public function Reservar_Horario_MF(){
          try{
          //session_start();
          $obj=new cmd();

          $ubicacion=$_POST['ubicacion'];
          $mes=$_POST['mes'];
          $fecha=$_POST['fecha'];

          //recibo parametros para verificar si la matricula ya existe en una reserva
          //$capacidad=$obj->Registros("Reservas_SR WHERE(Id_horario=".$_POST['identificador_horario'].")");
          
          $horarios_disponibles=$obj->ExistenciaC("Horario_MF","Mes='".$mes."' and fecha='".$fecha."' and Id_ubicacion=".$ubicacion);

          //$matricula=$obj->Extraer_Parametro("Credenciales_Estudiantes WHERE(pass='".$_SESSION['nombre']."')", 0);
          //$puedoreservar=$obj->Extraer_Parametro("Reservas WHERE(Matricula='".$_SESSION['nombre']."')", 0);

          //$yareservo= $obj->ExistenciaB("Reservas_SR","Matricula","'".$matricula."'");
          //echo $puedoreservar;
          //$capacidad=$obj->Extraer_Parametro("Horario_de_reserva WHERE(Id='".$_POST['Id_reserva']."')", 3);
          //$resta=0;
          //if(int($capacidad)>0){$resta=$resta-1;}
          if($horarios_disponibles==0){echo 0;}
          if($horarios_disponibles>0){echo 1;}
          //echo $ubicacion."-".$mes."-".$fecha."-"."::::";
          //echo $horarios_disponibles;
          
          /*
          if($capacidad<6&&$yareservo==0&&$horarios_disponibles>0){
            echo 'tiene permitido reservar';
            //$obj->Modificar("Horario_de_reserva","Capacidad='".$resta."'","Id","'".$_POST['Id_reserva']."'");
            //$obj->Insertar("Reservas","".$_POST['identificador_horario'].",'".$matricula."'");

          }
          //if($yareservo>0&&$horarios_disponibles>0){
            //echo 'no tienes permitido reservar una segunda vez en el mismo horario';
            //echo '<script language="javascript">alert("Se modificara la entidad");</script>';
            //$obj->Modificar("Instancias","Inicio_De_Instancia='".time()."',Galleta='".$varr."'","Huesped","'".$_SESSION['nombre']."'");
          //}
          if($yareservo>0){
            echo 'parece que ya has reservado termina tu clase y reserva de nuevo no te permitire reservar';
            //$obj->Insertar("Reservas","".$_POST['identificador_horario'].",'".$matricula."'");
            //echo '<script language="javascript">alert("Se modificara la entidad");</script>';
            //$obj->Modificar("Instancias","Inicio_De_Instancia='".time()."',Galleta='".$varr."'","Huesped","'".$_SESSION['nombre']."'");
          }
          */

        
          } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
        }




         public function Reservar_Horario_SR_Guardar(){
          try{
          session_start();
          $obj=new cmd();

          $ubicacion=$_POST['ubicacion'];
          $fecha=$_POST['fecha'];
          $mes=$_POST['mes'];
          $horario=$_POST['horario'];

          //recibo parametros para verificar si la matricula ya existe en una reserva
          
          
          $id_horario=$obj->Extraer_Parametro("Horario_SR WHERE(Mes='".$mes."' and Fecha='".$fecha."' and Id_ubicacion=".$ubicacion." and Horario='".$horario."')",0);

          $capacidad=$obj->Registros("Reservas_SR WHERE(Id_horario=".$id_horario.")");
          
          $matricula=$obj->Extraer_Parametro("Credenciales_Estudiantes WHERE(pass='".$_SESSION['nombre']."')", 0);
          //$puedoreservar=$obj->Extraer_Parametro("Reservas WHERE(Matricula='".$_SESSION['nombre']."')", 0);

          $yareservo= $obj->ExistenciaB("Reservas_SR","Matricula","'".$matricula."'");
          //echo $puedoreservar;
          //$capacidad=$obj->Extraer_Parametro("Horario_de_reserva WHERE(Id='".$_POST['Id_reserva']."')", 3);
          //$resta=0;
          //if(int($capacidad)>0){$resta=$resta-1;}
          //echo $ubicacion."-".$mes."-".$fecha."-"."::::";
          //echo $horarios_disponibles;
          
          if($capacidad==6){echo 2;}
          if($capacidad<7&&$yareservo==0){
            echo 1;
            //$obj->Modificar("Horario_de_reserva","Capacidad='".$resta."'","Id","'".$_POST['Id_reserva']."'");
            $obj->Insertar("Reservas_SR","".$id_horario.",'".$matricula."'");

          }
          //if($yareservo>0&&$horarios_disponibles>0){
            //echo 'no tienes permitido reservar una segunda vez en el mismo horario';
            //echo '<script language="javascript">alert("Se modificara la entidad");</script>';
            //$obj->Modificar("Instancias","Inicio_De_Instancia='".time()."',Galleta='".$varr."'","Huesped","'".$_SESSION['nombre']."'");
          //}
          if($yareservo>0&&$capacidad<7){
            echo 0;
            //$obj->Insertar("Reservas","".$_POST['identificador_horario'].",'".$matricula."'");
            //echo '<script language="javascript">alert("Se modificara la entidad");</script>';
            //$obj->Modificar("Instancias","Inicio_De_Instancia='".time()."',Galleta='".$varr."'","Huesped","'".$_SESSION['nombre']."'");
          }
          
        
          } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
        }




        public function Reservar_Horario_MF_Guardar(){
          try{
          session_start();
          $obj=new cmd();

          $ubicacion=$_POST['ubicacion'];
          $fecha=$_POST['fecha'];
          $mes=$_POST['mes'];
          $horario=$_POST['horario'];

          //recibo parametros para verificar si la matricula ya existe en una reserva
          
          
          $id_horario=$obj->Extraer_Parametro("Horario_MF WHERE(Mes='".$mes."' and Fecha='".$fecha."' and Id_ubicacion=".$ubicacion." and Horario='".$horario."')",0);

          $capacidad=$obj->Registros("Reservas_MF WHERE(Id_horario=".$id_horario.")");
          
          $matricula=$obj->Extraer_Parametro("Credenciales_Estudiantes WHERE(pass='".$_SESSION['nombre']."')", 0);
          //$puedoreservar=$obj->Extraer_Parametro("Reservas WHERE(Matricula='".$_SESSION['nombre']."')", 0);

          $yareservo= $obj->ExistenciaB("Reservas_MF","Matricula","'".$matricula."'");
          //echo $puedoreservar;
          //$capacidad=$obj->Extraer_Parametro("Horario_de_reserva WHERE(Id='".$_POST['Id_reserva']."')", 3);
          //$resta=0;
          //if(int($capacidad)>0){$resta=$resta-1;}
          //echo $ubicacion."-".$mes."-".$fecha."-"."::::";
          //echo $horarios_disponibles;
          
          
          if($capacidad<6&&$yareservo==0){
            echo 1;
            //$obj->Modificar("Horario_de_reserva","Capacidad='".$resta."'","Id","'".$_POST['Id_reserva']."'");
            $obj->Insertar("Reservas_SR","".$id_horario.",'".$matricula."'");

          }
          //if($yareservo>0&&$horarios_disponibles>0){
            //echo 'no tienes permitido reservar una segunda vez en el mismo horario';
            //echo '<script language="javascript">alert("Se modificara la entidad");</script>';
            //$obj->Modificar("Instancias","Inicio_De_Instancia='".time()."',Galleta='".$varr."'","Huesped","'".$_SESSION['nombre']."'");
          //}
          if($yareservo>0){
            echo 0;
            //$obj->Insertar("Reservas","".$_POST['identificador_horario'].",'".$matricula."'");
            //echo '<script language="javascript">alert("Se modificara la entidad");</script>';
            //$obj->Modificar("Instancias","Inicio_De_Instancia='".time()."',Galleta='".$varr."'","Huesped","'".$_SESSION['nombre']."'");
          }
          
        
          } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
        }







         public function Extraer_Horarios_Disponibles($tabla){
                    try{
                        
                        $v1=$_GET['day'];
                        $v2=$_GET['month'];
                        $v3=$_GET['location'];

                        //$v1 = $_GET['day'];
                        //$v2 = $_GET['month'];
                        //$v3 = $_GET['location'];

                        //$v1 = get_valorA();
                        //$v2 = get_valorB();
                        //$v3 = get_valorC();
                        //echo getcwd()."<br>";
                        //echo "day:::::".$v1;

                        //recibo parametros para verificar si la matricula ya existe en una reserva
                        $cadena="";
                        $obj=new cmd();    
                        $obj->Conexion();
                        //SELECT CAST(PROD_CODE AS UNSIGNED) FROM PRODUCT
                        //Id_horario,Id_ubicacion,Mes,Dia,Fecha,CAST(Horario AS UNSIGNED)
                        $sql="SELECT * FROM ".$tabla." WHERE(Fecha='".$v1."' and Mes='".$v2."' and Id_ubicacion=".$v3.") ORDER BY Id_horario ASC"; 
                        $rec=$obj->Ejecucion($sql);
                        
                        
                        $id=0;
                        while($row=$rec->fetch_array(MYSQLI_NUM)) 
                        {   
                            //$cadena=$cadena.$row[5];
                            $cadena=$cadena.'<div class="item scheduleB">'.$row[5].'</div>';

                            $id_horario=$obj->Extraer_Parametro("Horario_SR WHERE(Mes='".$v2."' and Fecha='".$v1."' and Id_ubicacion=".$v3." and Horario='".$row[5]."')",0);

                            $capacidad=$obj->Registros("Reservas_SR WHERE(Id_horario=".$id_horario.")");
                            if($capacidad>7){$cadena=$cadena.'<div class="reserve number" id='.$id.'>0</div>';}
                            if($capacidad<=7){$limite=7-$capacidad;$cadena=$cadena.'<button onclick="evento_reservar('.$id.');" class="reserve number" id="'.$id.'">'.$limite.'</button>';}
                            
                            $id++;
                        } 

                        $obj->Desconexion();
                        return $cadena;
                    } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
                        
                }//fin del metodo extraer












                public function Extraer($tabla,$campos,$numcolumnas){
                    try{
                        
            $id=0;
			$cadena="";
                        $obj=new cmd();    
                        $obj->Conexion();
                        $sql="SELECT * FROM ".$tabla; 
                        $rec=$obj->Ejecucion($sql);
                        
                        $cadena_aux=$campos;
                        $objeto=  explode(",", $cadena_aux);

                        $cadena=$cadena.'<table class="table-bordered" border="1" style="width: 550px;" id="dataTables-example">';
                        $cadena=$cadena.'<tr>'; 
                        for($ci=0;$ci<$numcolumnas;$ci++){
                            $cadena=$cadena.'<th style="text-align: center;">'.$objeto[$ci].'</th>';
                        } 
                        $cadena=$cadena.'</tr>'; 
                     
                        while($row=$rec->fetch_array(MYSQLI_NUM)) 
                        { 
                            $cadena=$cadena.'<tr id="'.$id.'">';
                            for($ci=0;$ci<$numcolumnas;$ci++){
                                $cadena=$cadena.'<td>'.$row[$ci].'</td>';
                            } 
                $id++;
                                             
                        } 
                        $cadena=$cadena.'</tr>';
                        $cadena=$cadena.'</table>';
                        $obj->Desconexion();
                        return $cadena;
                    } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
                        
                }//fin del metodo extraer





                public function Extraer_Informacion($tabla){
                    try{
                        $semana="";
                        $obj=new cmd();    
                        $obj->Conexion();
                        $sql="SELECT * FROM ".$tabla; 
                        $rec=$obj->Ejecucion($sql);
                        $outp = array();
                        while( $rs = $rec->fetch_array(MYSQLI_NUM)) {
                          $outp[] = $rs;
                        }
                        echo json_encode($outp);
                    } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;
                    }
                        
                }//fin del metodo extraer


                public function Extraer_Calendario($tabla){
                    try{
                        $semana="";
                        $obj=new cmd();    
                        $obj->Conexion();
                        $sql="SELECT * FROM ".$tabla; 
                        $rec=$obj->Ejecucion($sql);
                        //$row=$rec->fetch_array(MYSQLI_NUM);
                    
                        while($row=$rec->fetch_array(MYSQLI_NUM)) 
                        { 
                            for($ci=0;$ci<6;$ci++){
                                $semana=$semana.$row[$ci].',';
                            } 
                            $semana=$semana.$row[$i].'/';
                                             
                        } 
                        $obj->Desconexion();
                        return $semana;
                    } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
                        
                }//fin del metodo extraer


                public function Extraer_Alumnos($tabla){
                    try{
                        $matriculas="";
                        $obj=new cmd();    
                        $obj->Conexion();
                        $sql="SELECT * FROM ".$tabla; 
                        $rec=$obj->Ejecucion($sql);
                        //$row=$rec->fetch_array(MYSQLI_NUM);
                    
                        while($row=$rec->fetch_array(MYSQLI_NUM)) 
                        { 
                            $matriculas=$matriculas.$row[9].' ';
                            $matriculas=$matriculas.$row[10].' - ';
                            $matriculas=$matriculas.$row[8].'/';                    
                        } 
                        $obj->Desconexion();
                        return $matriculas;
                    } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
                        
                }//fin del metodo extraer



                public function Extraer_Alumnos_Psicopedagoga($tabla){
                    try{
                        $matriculas="";
                        $obj=new cmd();    
                        $obj->Conexion();
                        $sql="SELECT * FROM ".$tabla; 
                        $rec=$obj->Ejecucion($sql);
                        //$row=$rec->fetch_array(MYSQLI_NUM);
                    
                        while($row=$rec->fetch_array(MYSQLI_NUM)) 
                        { 
                            $matriculas=$matriculas.$row[0].','; 
                            $matriculas=$matriculas.$row[1].','; //matricula
                            $matriculas=$matriculas.$row[2].','; //id_horario
                            $matriculas=$matriculas.$row[3].','; //ubicacion
                            $matriculas=$matriculas.$row[4].','; //mes
                            $matriculas=$matriculas.$row[5].','; //dia 
                            $matriculas=$matriculas.$row[6].','; //fecha
                            $matriculas=$matriculas.$row[7].'/'; //horario                   
                        } 
                        $obj->Desconexion();
                        return $matriculas;
                    } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
                        
                }//fin del metodo extraer




                public function Extraer_Parametro($tabla,$indice){
                    try{
                        
                        $obj=new cmd();    
                        $obj->Conexion();
                        $sql="SELECT * FROM ".$tabla; 
                        $rec=$obj->Ejecucion($sql);
                        $row=$rec->fetch_array(MYSQLI_NUM);
                        $obj->Desconexion();
                        return $row[$indice];
                    } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
                        
                }//fin del metodo extraer





            public function Extraer_Parametro_Estado($tabla,$indice){
                    try{
                        $obj=new cmd();    
                        $obj->Conexion();
                        $sql="SELECT * FROM ".$tabla; 
                        $rec=$obj->Ejecucion($sql);
                        $row=$rec->fetch_array(MYSQLI_NUM);
                        $obj->Desconexion();
                        return $row[$indice];
                    } catch (Exception $ex) {echo 'error al realizas la consulta tipo de error: '.$ex;

                    }
                        
                }//fin del metodo extraer





        public function Signup(){
        $varr=0;//variable como identificador de galleta 0 = false 1 = true
        $obj=new cmd();


        //Realizamor la transaccion para verificar si el registro existe en la base de datos
        //los valores son tomados por medio de name del objeto que pertenece al formulario de nominado name
        $sql= $obj->Validar("Credenciales_Estudiantes","'".$_POST['username']."'","'".$_POST['password']."'");
        $especial=$obj->Extraer_Parametro("Credenciales_Estudiantes WHERE(pass='".$_POST['password']."')", 7);
        if($sql==1)
                {
         


         if($_POST['password']=='software'){
            session_start();//Iniciamos una session cookie
            $_SESSION['nombre'] = $_POST['password'];//le asignamos el nombre a la session esto sera util para acceder a la session
         }


         if($_POST['password']!='software'){

         $caducidad=$obj->Extraer_Parametro("Credenciales_Estudiantes WHERE(pass='".$_POST['password']."')", 8);



      

        //echo '<br>dias transcurridos : '.$dias_cuantificados;
        //$segundos_transcurridos=(60*60*24*$dias_cuantificados);
        //echo '<br>segundos transcurridos : '.$segundos_transcurridos;

        if(time()>=$caducidad){
            //echo '<br>Inactivo';
            $obj->Modificar('Credenciales_Estudiantes',"Estado='Inactivo'",'pass',"'".$_POST['password']."'");
        }
        elseif(time()<=$caducidad){
            //echo '<br>activo';
            $estado=$obj->Extraer_Parametro("Credenciales_Estudiantes WHERE(pass='".$_POST['password']."')", 6);
                if($estado=='Activo'){
                    session_start();//Iniciamos una session cookie
                    $_SESSION['nombre'] = $_POST['password'];//le asignamos el nombre a la session esto sera util para acceder a la session
                }
        }


}





          if (isset($_REQUEST['check1']))
          {
            $varr=1;
            setcookie('galleta', $_SESSION['nombre'], time() + $this->colapso); //(60*60*24*365) one year
          }
          $valor= $obj->Existencia("Instancias","'".$_SESSION['nombre']."'");
          if($valor==0){
            $obj->Insertar("Instancias","'".$obj->Ip_Visitante()."','".$_SESSION['nombre']."','".time()."',".$varr);
          }
          if($valor>=1){
            //echo '<script language="javascript">alert("Se modificara la entidad");</script>';
            $obj->Modificar("Instancias","Inicio_De_Instancia='".time()."',Galleta='".$varr."'","Huesped","'".$_SESSION['nombre']."'");
          }
        }    
        if(isset($_SESSION['nombre'])|isset($_COOKIE['galleta'])){//Si se logra crear la galleta entonces iniciara la aplicacion
        //require_once './theme/index.php';//cargamos el archivo impidiendo la carga de un mismo archivo más de una vez
        
       
        if($_SESSION['nombre']=="software"){header("location: ./admin/index.php");}
        if(($especial=='verdadero')&&($_SESSION['nombre']!="software")){header("location: ./theme/psicopedagogical/games");}
        if(($especial=='falso')&&($_SESSION['nombre']!="software")){header("location: ./theme/index.php");}



        //Asignamos texto que estara en un div que sera accesible por medio de su "id"
        //echo '<script language="javascript">$("#session").text("Session: '.$_SESSION['username'].'");</script>';
        }


        if(isset($_COOKIE['galleta'])){//Si se logra crear la galleta entonces iniciara la aplicacion
          //echo '<script language="javascript">$("#session").text("Session: '.$_COOKIE['galleta'].'");</script>';
        
        if($_SESSION['nombre']=="software"){header("location: ./admin/index.php");}
        if(($especial=='verdadero')&&($_SESSION['nombre']!="software")){header("location: ./theme/psicopedagogical/games");}
        if(($especial=='falso')&&($_SESSION['nombre']!="software")){header("location: ./theme/index.php");}
        
        }


        if(!isset($_SESSION['nombre'])&!isset($_COOKIE['galleta'])){
          header("location: index.php");
        }
        }//fin InitSession
            


        public function Logout($locacion){
          session_start();
          //echo $_SESSION['nombre']."  ";
          //echo $_COOKIE['galleta']."  ";
          $obj=new cmd();
          $valor= $obj->Existencia("Instancias","'".$_SESSION['nombre']."'");
          if($valor>0){$obj->Eliminar("Instancias","Huesped","'".$_SESSION['nombre']."'","=");}
          setcookie('galleta', $_SESSION['nombre'], time() - $this->colapso); 
          session_destroy();
          header('Location: '.$locacion);

        }//logout


        public function Instancia(){
        session_start();
        //echo $_COOKIE['galleta'];
        //echo ($_SESSION['nombre']);
        if(isset($_COOKIE['galleta'])&!isset($_SESSION['nombre'])){
          echo "si existe galleta ";
          session_start();
          $_SESSION['nombre'] = $_COOKIE['galleta'];
          echo $_SESSION['nombre']." ";
          header('Location: ./theme/');
        }

        if(isset($_SESSION['nombre'])){
          echo "si existe session";
          header('Location: ./theme/');
        }
        }//fin de la instancia


        public function Proteccion($locc){
          session_start();
          //echo $_SESSION['nombre'];
          

          if(!isset($_SESSION['nombre'])&!isset($_COOKIE['galleta'])){
              header('Location: '.$locc);
          }
          
          
        }//fin del metodo proteccion



        public function Proteccion_especial($locc){
          session_start();
          $obj=new cmd();
          $especial=$obj->Extraer_Parametro("Credenciales_Estudiantes WHERE(pass='".$_SESSION['nombre']."')", 7);
          //echo $_SESSION['nombre'];
          

          if(!isset($_SESSION['nombre'])&!isset($_COOKIE['galleta'])){
              header('Location: '.$locc);
          }
          else{
            if($especial=='falso'){header('Location: '.$locc);}
          }
  
          
          
        }//fin del metodo proteccion


        public function ProteccionB($locc){
          session_start();
          //echo $_SESSION['nombre'];
          if($_SESSION['nombre']!='software'){
          header('Location: '.$locc);
          }
        }//fin del metodo proteccion

        public function Verificacion(){
          $obj=new cmd();
          //session_start();
          //echo $_SESSION['nombre']."  ";
          $valor= $obj->Existencia("Instancias","'".$_SESSION['nombre']."'");
          //echo getcwd() . "<br>";
          if($valor==0)
          {
        //echo "Lo sentimos su cuenta sera cerrada";
        //echo $_SESSION['nombre']."  ";
        //echo $_COOKIE['galleta']."  ";
        
        setcookie('galleta', $_SESSION['nombre'], time() - $this->colapso); 
        session_destroy();
        echo '<script language="javascript">window.location.href = "../index.php";</script>';   

          }
        }//fin del metodo verificacion

        public function fun(){echo $this->colapso;}
         
        
        public function Admin($op){
                
          $obj=new cmd();

          if($op==0){
        $hora = time();
        $limite = $hora-1440;
        //echo $limite;
        $obj->Eliminar("Instancias","Inicio_De_Instancia","'".$limite."'","<");
        echo $obj->Extraer("Instancias","Ip,Huesped,Inicio_De_Instancia,Galleta",4);
          }
          if($op==1){
         echo "Instancia del super administrador<br>";
        $valor= $obj->ExistenciaB("Colapso","Objeto","'clock'");
        //echo $valor;
        //echo getcwd() . "<br>";
        if($valor==0)
        {
          $transcurso=time();
          $inicio=$transcurso;
          $obj->Insertar("Colapso","'clock','".$inicio."',0");
        }
        if($valor>0)
        {
          $inn=$obj->Extraer_Parametro("Colapso",1);
          //echo $inn;
          echo date("d/m/y h:m:s")."<br>";
          echo time()."<br>";
          echo "Tiempo restante para las sessiones: ";
          echo 1440-(time()-$inn)."<br>";
          if(time()-$inn>=1440){
            $obj->Modificar("Colapso","Inicio='".time()."'","Objeto","'clock'");
          }
        }
          }
        }//Fin del metodo Admin



        public function Ip_Visitante(){
        if( $_SERVER['HTTP_X_FORWARDED_FOR'] != '' )
        {
          $client_ip = 
          ( !empty($_SERVER['REMOTE_ADDR']) ) ? 
          $_SERVER['REMOTE_ADDR'] 
          : 
          ( ( !empty($_ENV['REMOTE_ADDR']) ) ? 
               $_ENV['REMOTE_ADDR'] 
               : 
               "unknown" );
 
      // los proxys van añadiendo al final de esta cabecera
      // las direcciones ip que van "ocultando". Para localizar la ip real
      // del usuario se comienza a mirar por el principio hasta encontrar 
      // una dirección ip que no sea del rango privado. En caso de no 
      // encontrarse ninguna se toma como valor el REMOTE_ADDR
 
      $entries = preg_split('/[, ]/', $_SERVER['HTTP_X_FORWARDED_FOR']);
 
      reset($entries);
      while (list(, $entry) = each($entries)) 
      {
         $entry = trim($entry);
         if ( preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $entry, $ip_list) )
         {
            // http://www.faqs.org/rfcs/rfc1918.html
            $private_ip = array(
                  '/^0\./', 
                  '/^127\.0\.0\.1/', 
                  '/^192\.168\..*/', 
                  '/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/', 
                  '/^10\..*/');
 
            $found_ip = preg_replace($private_ip, $client_ip, $ip_list[1]);
 
            if ($client_ip != $found_ip)
            {
               $client_ip = $found_ip;
               break;
            }
         }
      }
   }
   else
   {
      $client_ip = 
         ( !empty($_SERVER['REMOTE_ADDR']) ) ? 
            $_SERVER['REMOTE_ADDR'] 
            : 
            ( ( !empty($_ENV['REMOTE_ADDR']) ) ? 
               $_ENV['REMOTE_ADDR'] 
               : 
               "unknown" );
   }
 
   return $client_ip;
 
        }//fin del metodo ip real del visitante

            }//fin de mi class
        ?>
