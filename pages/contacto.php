<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Contacto</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	
	<!-- My styles CSS -->
    <link href="../css/styles.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="index.php">
				<img src="../img/logo.png"  style="margin-top:-12px;" alt="logo" />
			  </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="revision.php">Revision</a></li>
               <li><a href="normativa.php">Normativa</a></li>
                <li class="dropdown">
                  <a href="requisitos.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Requisitos <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="requisitos.php">Transporte de carga</a></li>
                    <li><a href="requisitos.phpphp">Transporte de pasajeros</a></li>
                    <li><a href="requisitos.php">Vehiculo particular</a></li>
                  </ul>
                </li>
				 <li class="active"><a href="contacto.php">Contacto</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->

		
		<div class="row featurette" >
			<div class="col-md-12" >
			  <h2 class="featurette-heading text-center">Contacto</h2>
			</div>
		</div>
		
	<div class="container marketing" >
			<div class="row">
					<div class="col-md-12" >
						<form role="form" id="formu" name="formu" method="post">
										  
							  <div class="form-group">
								   <label for="email">Email:</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email">
							   </div>
												
							  <div class="form-group">
								   <label for="asunto">Asunto:</label>
										<input type="text" class="form-control" id="asunto"name="asunto" placeholder="Ingrese el asutno">
							   </div>
												
							   <div class="form-group">
						     		<label for="commentario">Mensaje:</label>
										<textarea class="form-control noresize" rows="5" id="commentario" name="msj" placeholder="Ingrese su mensaje..."></textarea>
							  </div>
												
								<input class="btn btn-success" type="button" value="Enviar mensaje" id="enviar" name="enviar"/>
							</form><br />
										  
							 <div id="resultado" name="resultado">
							</div><br /><br />
					</div>						
			
			
			 <h2 class="featurette-heading text-center" style="margin-bottom: 50px;">Ubicación</h2>
			<!-- Mapa de google maps -->
					<div class="col-md-3 col-sm-5" style="height:320px;background-color:#CC2719;color:white;padding:20px 0 20px 20px;">
						<p><span class="glyphicon glyphicon-map-marker"></span> Ubicación: </p>
							<p>Gregorio Pomar 3850 (esq. Av. Saenz)</p>
							<p style="padding-left:20px;">Localidad Nueva Pompeya</p>
						<p><span class="glyphicon glyphicon-earphone"></span> Teléfono:</p>
							<p style="padding-left:20px;"> 011 4912-0138</p>
						<p><span class="glyphicon glyphicon-time"></span>  Horarios:</p>
							<p style="padding-left:20px;">Lunes a Viernes de 8:00 a 18:00 hs.</p>
							<p style="padding-left:20px;"> Sábados de 8:00 a 12:00 hs.</p>
						<p><span class="glyphicon glyphicon-envelope"></span>  E-mail:</p>
							<p style="padding-left:20px;">i.t.p@hotmail.com</p>
					</div>
					<div class="col-md-9" id="googleMap" style="height:320px;"></div>
					
			</div>
			
			 <hr class="featurette-divider">
			<!-- FOOTER -->
		  <footer id="foot">
			<p class="pull-right"><a href="#">Ir arriba</a></p>
			<p>2016 - Inspecciones Técnicas Pompeya SRL.</p>
		  </footer>
	  
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- JQuery Form -->
        <script type="text/javascript">
           			
				$("#enviar").click(verifica);	
				
				function verifica(){
					
						$('html, body').animate({
							scrollTop: $("#formu").offset().top
						}, 3000);
						
						$("#resultado").hide();
						
						var data = $("#formu").serializeArray();
						
						$.ajax({
								type: "post",
								url: "func/valida_po.php",
								data: data, 
								beforeSend: function () {   
													  $("#resultado").html("Procesando, espere por favor...");
														},
								success: function(msj){
													   
													   $("#resultado").attr("class","alert alert-danger");
													   $("#resultado").slideToggle("slow",function(){ 
																								$("#resultado").html(msj);																				
																								});
													   }
												 
							});
					}				
        </script>
        
        <!-- Google maps -->
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>
            var myCenter= new google.maps.LatLng(-34.6404437, -58.416108699999995);
            
            function initialize() {
                var mapProp = {
                  center:myCenter,
                  zoom: 17,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);

                var marker=new google.maps.Marker({
                  position:myCenter,
                  });

                marker.setMap(map);
            }

            // Carga el mapa
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
  </body>
</html>