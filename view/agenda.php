<?php
session_start();
//error_reporting(0);
require_once('../controller/c_funciones.php');
if (!valida_logueo()){
  die('Inicia Sesion');
}
require_once('../model/conexion.php');
$sql = "SELECT id, nombre, dni,start ,hora_i,hora_f,color,paquete FROM clases ";
$req = $dbh->prepare($sql);
$req->execute();
$events = $req->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clases</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href='../css/fullcalendar.css' rel='stylesheet' />

</head>

<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Agenda</a></li>
      <li class="active"><a href="../view/panelarticulos.php">Nuevo Articulo</a></li>
      <li class="active"><a href="../controller/c_acciones.php?accion=panel">Nueva Foto</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../controller/c_acciones.php?accion=salir"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
    </ul>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pull-right form-inline"><br>
                    <button class="btn btn-info" data-toggle='modal' data-target='#ModalAdd'>Añadir Clase</button>
                </div>
                <!---->
                <script>
                var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                var f=new Date();
                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                </script>
                <div id="calendar" class="col-centered"></div>
            </div>
        </div>   
        <div class="pull-right form-inline"><br>
            <button class="btn btn-info"><a href="Admin2.php">Volver</a></button>
        </div>
        <!-- /.row -->

        <!-- Modal ========================================================-->

        <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form class="form-horizontal" method="POST" action="../controller/c_nuevaClase.php">
            
            <div class="modal-header" style="background-color:skyblue;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="color: white;">Registrar Clase</h4>
            </div>
              <div class="modal-body">
                <span class="label label-info" style="font-size: 18px;">Estudiante:</span>
                  <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" name="nombre" class="form-control" id="nombre" required="required">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="dni" class="col-sm-2 control-label">DNI</label>
                    <div class="col-sm-10">
                        <input type="text" name="dni" id="dni" class="form-control" required="required">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="start" class="col-sm-2 control-label">Fecha </label>
                    <div class="col-sm-10">
                      <input type="date" name="start" class="form-control" id="start" required="required" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="dni" class="col-sm-2 control-label">Hora Inicial</label>
                    <div class="col-sm-10">
                      <input type="time" name="hora_i" class="form-control" id="hora_i"  required="required">
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="dni" class="col-sm-2 control-label">Hora Final</label>
                    <div class="col-sm-10">
                      <input type="time" name="hora_f" class="form-control" id="hora_f" >
                    </div>
                    </div>

                    <!--<div class="form-group">
                    <label for="tipo" class="col-sm-2 control-label">Tipo</label>
                    <div class="col-sm-10">
                    <select class="form-control" id="sel1" required="required" name="tipo">
                      <option></option>
                      <option value="basico">Basico</option>
                      <option value="intermedio">Intermedio</option>
                      <option value="avanzado">Avanzado</option>
                    </select>
                    </div>
                    </div>-->
                    <div class="form-group">
                    <label for="color" class="col-sm-2 control-label">Tipo</label>
                    <div class="col-sm-10">
                      <select name="color" class="form-control" id="color">
                        <option value="">Seleccionar</option>
                        <option style="color:#008000;" value="#008000">&#9724; Basico</option>             
                        <option style="color:#FFD700;" value="#FFD700">&#9724; Intermedio</option>
                        <option style="color:#FF0000;" value="#FF0000">&#9724; Avanzado</option>
                        
                      </select>
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="paquete" class="col-sm-2 control-label">Paquete de Estudios</label>
                    <div class="col-sm-10">
                    <select class="form-control" id="sel1" required="required" name="paquete">
                      <option></option>
                      <option value="clase de ingles personalizado">clase de ingles personalizado</option>
                      <option value="clase de reforzamiento">clase de reforzamiento</option>
                      <option value="preparacion de examenes internacionales">preparacion de examenes internacionales</option>
                      <option value="Conversacion">Conversacion</option>
                    </select>
                    </div>
                    </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" name="btnGuardar" id="btnGuardar">Guardar</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        
        
        
        <!-- Modal =======================================-->

        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            

            <form class="form-horizontal" method="POST" action="#">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-nombre" id="myModalLabel">Detalle de Clase </h4>
              </div>
              <div class="modal-body">
                
                  <div class="form-group">
                    <label for="paquete" class="col-sm-2 control-label">Paquete</label>
                    <div class="col-sm-10">
                      <input type="text" name="paquete" class="form-control" id="paquete" disabled="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="dni" class="col-sm-2 control-label">DNI</label>
                    <div class="col-sm-10">
                      <input type="text" name="dni" id="dni" class="form-control" disabled="true">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="hora_f" class="col-sm-2 control-label">Hora final</label>
                    <div class="col-sm-10">
                      <input type="time" name="hora_f" id="hora_f" class="form-control" disabled="true">
                    </div>
                  </div>
                  
                  <input type="hidden" name="id" class="form-control" id="id">
                
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
              </div>

            </form>
            

            </div>
          </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    
    <!-- FullCalendar -->
    <script src='../js/moment.min.js'></script>
    <script src='../js/fullcalendar/fullcalendar.min.js'></script>
    <script src='../js/fullcalendar/fullcalendar.js'></script>
    <script src='../js/fullcalendar/locale/es.js'></script>
    
    
    <script>

    $(document).ready(function() {

       var date = new Date();
       var yyyy = date.getFullYear().toString();
       var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
       var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();
        
        $('#calendar').fullCalendar({
            header: {
                language: 'es',
                left: 'prev,next today',
                center: 'nombre',
                right: 'month,basicWeek,basicDay',

            },
            defaultDate: yyyy+"-"+mm+"-"+dd,
            eventLimit: true,
            selectable: true,
            selectHelper: true,
            select: function(start) {
                
                $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD'));
                $('#ModalAdd').modal('show');
            },
            eventRender: function(event, element) {
                element.bind('dblclick', function() {
                    $('#ModalEdit #id').val(event.id);
                    $('#ModalEdit #nombre').val(event.title);
                    $('#ModalEdit #dni').val(event.dni);
                    $('#ModalEdit #hora_i').val(event.hora_i);
                    $('#ModalEdit #hora_f').val(event.hora_f);
                    $('#ModalEdit #color').val(event.color);
                    $('#ModalEdit #paquete').val(event.paquete);
                    $('#ModalEdit').modal('show');
                });
            },
            eventDrop: function(event, delta, revertFunc) { // si changement de position

                edit(event);

            },
            eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

                edit(event);

            },
            events: [
            <?php foreach($events as $event): 
            
                $start = explode(" ", $event['start']);
                if($start[1] == '00:00:00'){
                    $start = $start[0];
                }else{
                    $start = $event['start'];
                }

            ?>
                {
                    id: '<?php echo $event['id']; ?>',
                    title: '<?php echo $event['hora_i'];echo " ";echo $event['nombre']; ?>',
                    dni: '<?php echo $event['dni']; ?>',
                    start: '<?php echo $start; ?>',
                    hora_i: '<?php echo $event['hora_i']; ?>',
                    hora_f: '<?php echo $event['hora_f']; ?>',  
                    color: '<?php echo $event['color']; ?>',  
                    paquete: '<?php echo $event['paquete']; ?>',              
                },
            <?php endforeach; ?>
            ]
        });
        
    });

</script>

</body>

</html>
