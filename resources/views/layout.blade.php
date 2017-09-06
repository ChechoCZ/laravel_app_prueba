<!DOCTYPE html>
<html>
	<head>
		<title>Prueba</title>		
	</head>
	<body>

	{!!Html::script('/js/jquery-3.2.1.js')!!}	
	{!!Html::style('/css/bootstrap.min.css')!!}		

	<script type="text/javascript">

        $(document).ready(function() 
        {
		    $("#form_cedula").change(function() {

				$("#cedula_error_message").hide();			
				var error_cedula = false;	

				var cedula = $(this).val(); 							

		    	if (isNaN($('#form_cedula').val()) == true) {
					$("#cedula_error_message").html("Campo cedula sólo acepta números");
					$("#cedula_error_message").show();
					$("#boton").attr("disabled", true);
					error_cedula = true;					
				} else {
					$("#cedula_error_message").hide();
					$("#boton").attr("disabled", false);
				}
			});	

			$("#form_telefono").change(function() {
				if (isNaN($('#form_telefono').val()) == true) {
					$("#telefono_error_message").html("Campo telefono sólo acepta números");
					$("#telefono_error_message").show();
					$("#boton").attr("disabled", true);
					error_number = true;
				} else {
					$("#telefono_error_message").hide();
					$("#boton").attr("disabled", false);
				}	
			});

			$("#form_email").change(function() {				

				var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);				
			
				if(pattern.test($("#form_email").val())) {					
					$("#email_error_message").hide();
					$("#boton").attr("disabled", false);
				} else {					
					$("#email_error_message").html("Formato de correo invalido");
					$("#email_error_message").show();
					$("#boton").attr("disabled", true);
					error_email = true;
				}
			
			});  
		});		   

    </script>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    	

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="{{ route('lista') }}">Lista</a></li>
	        <li><a href="{{ route('crear') }}">Crear Usuario</a></li>	        	        
	      </ul>           
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	@yield('contenido')

	<div class="container">
	  <div class="row">
	    <hr>
	    Desarrollado por: Sergio Cuadros
	  </div>
	</div>



