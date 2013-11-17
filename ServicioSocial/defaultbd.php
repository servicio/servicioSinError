<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>

<link rel='stylesheet' type='text/css' href='../fullcalendar/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='../css2/start/jquery-ui-1.10.3.custom.css' />
<link rel='stylesheet' type='text/css' href='../css/bootstrap.min.css' />
<link rel='stylesheet' type='text/css' href='../css/bootstrap-modal.css' />
<link rel='stylesheet' type='text/css' href='../fullcalendar/fullcalendar.print.css' media='print' />
<script type='text/javascript' src='../jquery/jquery-1.8.1.min.js'></script>
<!-- <script type='text/javascript' src='../jquery/jquery-ui-1.8.23.custom.min.js'></script> -->
<script type='text/javascript' src='../jquery/jquery-ui-1.10.1.custom.js'></script>
<script type='text/javascript' src='../fullcalendar/fullcalendar.min.js'></script>
<script type='text/javascript' src='../js/bootstrap.min.js'></script>
<script type='text/javascript' src='../js/bootstrap-modal.js'></script>
<script type='text/javascript' src='../js/bootstrap-modalmanager.js'></script>
<script type='text/javascript'>


	$(document).ready(function() {

	

		function Tratamiento(descripcion, precio) {
    		this.descripcion = descripcion;
    		this.precio = precio;
		}

		var $modal = $('#ajax-modal');

		$modal.on('click', '#btnAgregarTratamiento', function() {

			var quantity = $('#quantity').val();

			$modal.modal('loading');

			setTimeout(function() {

			  $modal.modal('loading');
			  for(var i = 0; i < quantity; i++) {
			  	$modal.find('.form-tratamiento')
			  	   .after('<div class="controls controls-row"><input type="text" id="tratamiento'+i+'" class="span3 txtDescripcionTratamiento" placeholder="Descripcion">' +
			  	   	      '<input type="text" class="span1 txtPrecioTratamiento" placeholder="Precio"></div>');
			  }
			}, 1000);
		});

		$modal.on('click', '.actualizar-cita', function() {

			var id_cita = $('#id_cita').val();

			$modal.modal('loading');
			setTimeout(function(){
			  $modal
			    .modal('loading')
			    .find('.modal-header h3')
			    	.html('Actualizar datos de cita')
			    	.end()
			    .find('.modal-body')
			      .html('<textarea class="input-block-level" id="txtComentarios" placeholder="Diagnostico"></textarea>' +
			            '<textarea class="input-block-level" id="txtNotasEvolucion" placeholder="Comentarios"></textarea>' +
			        	'<textarea class="input-block-level" id="txtObservaciones" placeholder="Observaciones"></textarea>' +
			        	'<div style="margin-bottom:8px" class="form-tratamiento well well-small"><input type="number" style="margin:0 5px 0 0" class="span1" id="quantity" min="1" max="5">' +
			        	'<button type="button" class="btn" id="btnAgregarTratamiento">Agregar tratamiento</button></div>' +
			        	'<input type="hidden" name="id_cita" id="id_cita" value="'+id_cita+'">')
			      .end()
			    .find('.modal-footer')
			    	.prepend('<button type="button" data-dismiss="modal" class="btn btn-primary actualizar-datos-cita">Actualizar</button>');
			}, 1000);
		});

		$modal.on('click', '.actualizar-status-cita', function() {

			var id_cita = $('#id_cita').val();

			$modal.modal('loading');
			setTimeout(function(){
			  $modal
			    .modal('loading')
			    .find('.modal-header h3')
			    	.html('Actualizar status')
			    	.end()
			    .find('.modal-body')
			      .html('<select class="input-block-level" name="status_cita" id="status_cita">' +
	  						'<option value="0">Seleccionar status...</option> ' +
	  						'<option value="Atendida">Atendida</option>' +
	  						'<option value="Reservada">Reservada</option>' +
	  						'<option value="CanceladaPorDoctor">Cancelada por Doctor</option>' +
	  						'<option value="CanceladaPorPaciente">Cancelada por Paciente</option>' +
						'</select>' +
						'<input type="hidden" name="id_cita" id="id_cita" value="'+id_cita+'">')
			      .end()
			    .find('.modal-footer')
			    	.prepend('<button type="button" data-dismiss="modal" class="btn btn-primary actualizar-status">Actualizar status</button>');
			}, 1000);
		});

		$modal.on('click', '.register', function() {
          var paci ="<?php 


           if (isset($_GET['paciente'])){
           	echo $_GET['paciente'];
           }else{
           	echo '';
           }
            ?>"
		  var start        = $('#start').val();
		  var end          = $('#end').val();
		  var resourceId   = $('#resourceId').val();

		  $modal.modal('loading');
		  setTimeout(function(){
		    $modal
		      .modal('loading')
		      .find('.modal-header h3')
		      	.html('Reservar tiempo')
		      	.end()
		      .find('.modal-body')
		        .html('<input type="text" id="paciente" class="input-block-level" value="'+paci+'">'+
		        	'<input type="text" id="description" class="input-block-level" placeholder="Descripcion de la cita...">' +
		          '<input type="text" id="resourceId" disabled class="input-block-level" value="'+resourceId+'" placeholder="Doctor...">' +
		          '<input type="text" id="start" disabled class="input-block-level" value="'+start+'" placeholder="Hora de comienzo...">' +
		          '<input type="text" id="end" disabled class="input-block-level" value="'+end+'" placeholder="Hora de finalizacion...">')
		        .end()
		      .find('.modal-footer')
		      	.prepend('<button type="button" data-dismiss="modal" class="btn btn-primary reservar-cita">Reservar</button>');
		  }, 1000);
		});

		$modal.on('click', '.actualizar-status', function() {

			var id_cita      = $('#id_cita').val();
			var status_cita  = $('#status_cita').val();

			$.ajax({
                type: 'POST',
                url: 'update.php',
                data: {
                	id_cita: id_cita,
                    status_cita: status_cita
                },
                dateType: 'json',
                success: function (resp) {
                    calendar.fullCalendar('refetchEvents');
                }
            });
		});

		$modal.on('click', '.actualizar-datos-cita', function() {
            var paciente     =$('#paciente').val();
			var id_cita              = $('#id_cita').val();
			var comentarios_cita     = $('#txtComentarios').val();
			var observaciones_cita   = $('#txtObservaciones').val();
			var notas_evolucion_cita = $('#txtNotasEvolucion').val();

			var listaTratamientos = new Array();

			$('.controls-row').each(function( index ) {

				var array = new Array();

				$(this).children().each(function() {
					array.push($(this).val());
				});
				var tratamiento = new Tratamiento(array[0],array[1]);
				listaTratamientos[listaTratamientos.length] = tratamiento;
			});


			var tratamientosJSON = JSON.stringify(listaTratamientos);

			$.ajax({
                type: 'POST',
                url: 'update.php',
                data: {
                	id_cita: id_cita,
                    actualizar_datos_cita: 1,
                    comentarios_cita: comentarios_cita,
                    observaciones_cita: observaciones_cita,
                    notas_evolucion_cita: notas_evolucion_cita,
                    tratamientos: tratamientosJSON
                },
                dateType: 'json',
                success: function (resp) {
                    calendar.fullCalendar('refetchEvents');
                    console.log(resp);
                }
            });
		});

		$modal.on('click', '.reservar-cita', function() {
               var paciente     =$('#paciente').val();
			var description  = $('#description').val();
			var start        = $('#start').val();
		  	var end          = $('#end').val();
		  	var resourceId   = $('#resourceId').val();

			$.ajax({
                type: 'POST',
                url: 'new.php',
                data: {
                	startDate: start,
                    endDate: end,
                    eventTitle: description,
                    paciente:paciente,
                    resourceId: resourceId
                },
                dateType: 'json',
                success: function (resp) {
                    calendar.fullCalendar('refetchEvents');
                }
            });
		});

		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();

		$('#datepicker').datepicker({

			/* Actualizar la fecha del calendario al seleccionar un día en específico */

			onSelect: function() {

				// Obtenemos la fecha del día seleccionado
				var defaultDate = $( '#datepicker' ).datepicker( 'getDate' );
				console.log(defaultDate);
				// Actualizamos el calendario con la fecha del día seleccionado
				$( '#calendar' ).fullCalendar( 'gotoDate', defaultDate )
			}
		});

		var calendar = $('#calendar').fullCalendar({
			editable: false,
			theme: true,
			selectable: true,
            selectHelper: true,

            // Al hacer clic en una cita, mostramos el modal para cambiar el status

            eventClick: function(calEvent) {

        		console.log(calEvent.title);
        		console.log(calEvent.id);
        		console.log(calEvent.start);
        		console.log(calEvent.end);
        		console.log(calEvent.resourceId);

        		var $modal = $('#ajax-modal');
            	$('body').modalmanager('loading');
            	setTimeout(function() {
            		$modal.load('modal-status.php', {id:calEvent.id}, function() {
            	    	$modal.modal();
            	    });
            	 }, 1000);


        		//$(this).css('border-color', 'red');
    		},

            // Cuando se haga una selección, cargamos la ventana modal vía Ajax

            select: function(start, end, allDay, event, resourceId) {/* esta funcion permite cargar el modal que se encuentra
            	en modal.php enviandole las variables para que se muestren*/ 

            	calendar.fullCalendar('unselect');

            	var startDateString = $.fullCalendar.formatDate(start, 'yyyy-MM-dd HH:mm:ss');
                var endDateString   = $.fullCalendar.formatDate(end, 'yyyy-MM-dd HH:mm:ss');


                var $modal = $('#ajax-modal');
            	$('body').modalmanager('loading');
            	setTimeout(function() {
            	     $modal.load('modal.php', {start:startDateString, end:endDateString, resourceId: resourceId}, function() {
            	      $modal.modal();
            	    });
            	  }, 1000);

            },

			header: {
				left: 'prev,next today',
				center: 'title',
				right: ''
			},
			defaultView: 'resourceDay',
			resources: [
                {
                    name: "<?php echo $_SESSION['usu'];  ?>",
                    id:	"<?php echo $_SESSION['id'];  ?>"
                }
            ],
			events: 'db.php'
		});

	});

</script>
<style type='text/css'>

	body {
		
		text-align: center;
		font-size: 14px;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		}

	#container {
		width: 900px;
		
	}

	#calendar {
		
		width: 600px;
	}
	#datepicker {
		
		width: 250px;
		padding-right: 100px;
	}

	tr > .ui-widget-content {
	}

</style>
</head>
<body>
	<div  class="span12" align="center"  style="float:none; margin:0 auto;padding-top:0px; width:80%; ">
   <div style="color:#FFF; text-align:right">
  <b style=" color: #033;">  <?php echo $_SESSION['tipo'];?> :&nbsp;  <?php echo $_SESSION['usu'] ;?>(<a href="../../../Logout.php">&nbsp;Salir&nbsp;</a>)</b>
   <div class="btn-group">
                  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><b><i class="icon-question-sign"></i> </b><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Cambiar contraseña</a></li>
                   
                    <li class="divider"></li>
                    <li><a href="../../../logout.php">Logout</a></li>
                  </ul>
                </div><!-- /btn-group --></div></div>
  <div  align="center"  style="float:none; margin:0 auto;padding-top:0px; width:80%;">
  
  <img src="../../../cody/personal_cody.jpg" class="img-rounded" style=" width:100%; height:300px">
  <div class="navbar">
  <div class="navbar-inner">
   <div class="container" >
   <ul class="nav" role="navigation">
	<li><a href="../../../index.php"><img src="../../../cody/codylogo.png"  title="Citas CODY" class="img-rounded" width="50px" height="50px"><b>CODY</b></a></li>
    <li class="dropdown"><!--Inicio opcion 1--> <!--class="dropdown hace que se tome como desplegable de ese item"-->
	  
	 	 <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown"  href="">
  		<img src="../../../cody/pacientes.png"  title="Citas CODY" class="img-rounded" width="50px" height="50px"> 		<b>Pacientes</b>
   	 	  <b class="caret"></b>
	  	</a>
 		 <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="text-align:left" >
      		<li >			
			<!-- Button to trigger modal -->
<a href="../../Pacientes3.php" ><i class="icon-user"></i> <b style="color: #000">&nbsp;Nuevo Paciente</b></a>
			</li>
	 		
			<li><a href="../../../Consulta_busqueda4.php"><i class="icon-search"></i><b style="color: #000">&nbsp;Buscar paciente</b></a></li>
            <li><a href="../../../Modificar_PAC2.php"><i class="icon-pencil"></i><b style="color: #000">&nbsp;Modificar de datos</b></a></li>
  		</ul>
	</li><!--Fin opcion 2-->
	    <li class="dropdown"><!--Inicio opcion 1--> <!--class="dropdown hace que se tome como desplegable de ese item"-->
	  
	 	 <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown"  href="">
  		<img src="../../../cody/citas.png" title="Pacientes CODY" class="img-rounded"  width="50px" height="50px">  <b>Agenda</b>
   	 	
          <b class="caret"></b>
	  	</a>
 		 <ul  class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="text-align:left">
     		<li><a href="#"><i class="icon-user"></i><b style="color: #000">&nbsp;Por doctor</b></a></li>
	 		<li><a href="../../../calendario2/demos/defaultbd.php"><i class="icon-user"></i><b style="color: #000">&nbsp;General</b></a></li>
  		</ul>
	</li><!--Fin opcion 3-->
	    <li class="dropdown"><!--Inicio opcion 1--> <!--class="dropdown hace que se tome como desplegable de ese item"-->
	  
	 	 <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown"  href="">
  		  <img src="../../../cody/personal.png" title="Personal CODY" class="img-rounded"  width="80px" height="80px"><b>Personal</b>
   	 	  <b class="caret"></b>
	  	</a>
 		 <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="text-align:left">
     	  	<li><a href="../../../Personal.php"><i class="icon-user"></i><b style="color: #000">&nbsp;Alta personal</b></a></li>
            <li><a href="../../../Consulta_PER.php"><i class="icon-user"></i><b style="color: #000">&nbsp;Busqueda</b></a></li>
            <li><a href="#"><i class="icon-user"></i><b style="color: #000">&nbsp;Baja personal</b></a></li>
	 	</ul>
	</li><!--Fin opcion 3-->
    
    <li class="dropdown"><!--Inicio opcion 4--> <!--class="dropdown hace que se tome como desplegable de ese item"-->
	  
	 	 <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown"  href="">
  		<img src="../../../cody/cita.gif"  title="Citas CODY" class="img-rounded" width="50px" height="50px"> 		<b>Citas</b>
   	 	  <b class="caret"></b>
	  	</a>
 		 <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="text-align:left" >
      		<li >			
<a href="Pacientes3.php" ><i class="icon-file"></i> <b style="color: #000">&nbsp;Nuevos Datos de Cita</b></a></li>
			<li><a href="../../../Consulta_citas.php"><i class="icon-search"></i><b style="color: #000">&nbsp;Buscar Cita</b></a></li>
            <li><a href="../../../Modificar_PAC2.php"><i class="icon-pencil"></i><b style="color: #000">&nbsp;Modificar Datos de Cita</b></a></li>
  		</ul>
	</li><!--Fin opcion 4-->
	
    </ul>
	</div>
  </div>
</div>  <!--Fin Menu-->
  </div>


<div id="container" style="float:none; margin:0 auto;padding-top:0px; width:80%;">

 
  
<div id='datepicker' style="position:absolute;padding-left: 700px;"></div>
<div id='calendar'></div>

<div id="ajax-modal" class="modal hide fade" tabindex="-1" data-width="400"></div>
<br />

 <div style="background: #2CB11D; text-shadow:#FFFFFF">
<font color="#FFFFFF" size="+1" style="font-style:oblique; text-shadow:#009900;">
CENTRAL ODONTOL&Oacute;GICO DE YUCAT&Aacute;N  &ldquo; CODY &quot;
<br> </font>
</div>

<div style="background:#1661B4; text-shadow:#429CE6">
<font color="#FFFFFF" size="+1" style="font-style:oblique; text-shadow:#009900;">

<br> Sistema de calendarizaci&oacute;n de citas m&eacute;dicas</font>
</div>
</div>

</body>
</html>
