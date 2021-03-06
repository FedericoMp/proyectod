<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Inspecciones Técnias Pompeya S.R.L. tiene como objetivo promover 
	el mantenimiento de las condiciones mecánicas de seguridad a lo largo de la vida útil de los vehículos y 
    reduccir los accidentes de tránsito causados por fallas técnicas.">
    <meta name="author" content="Inspecciones Técnias Pompeya S.R.L.">
    <link rel="icon" href="img/favicon.ico">

    <title>Home</title>

   <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Bootstrap Flexboxgrid CSS -->
    <link href="css/flexboxgrid.min.css" rel="stylesheet">
	
	<!-- My styles CSS -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
		
        <nav class="navbar navbar-inverse navbar-static-top" style="margin-bottom:0;">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">
				<img src="img/logo.png"  style="margin-top:-12px;" alt="logo" />
			  </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.php">Inicio</a></li>
                <!--<li><a href="pages/revision.php">Revision</a></li>
                <li><a href="pages/normativa.php">Normativa</a></li>-->
                <li class="dropdown">
                  <a href="requisitos.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Institución<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="pages/revision.php">Revision</a></li>
					<li role="separator" class="divider"></li>
                    <li><a href="pages/normativa.php">Normativa</a></li>
					<li role="separator" class="divider"></li>
                    <li><a href="pages/requisitos.php">Requisitos</a></li>
                  </ul>
                </li>
				 <li><a href="pages/contacto.php">Contacto</a></li>
              </ul>
            </div>
          </div>
        </nav>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img id="img_galery" class="first-slide" src="img/galeria/particular.PNG" alt="First slide"> 
          <div class="container">
            <div id="txt_galery" class="carousel-caption text-justify">
              <h1>Vehículos Particulares</h1><br />
				<p>
					Se realizará la revisión técnica a partir de los 3 años tomando como referencia la fecha de inscripción en el registro automotor. Hasta los 7 
					años de antiguedad la vigencia será de 2 años, pasados los 7 años de antiguedad la vigencia será de 1 año.
				</p><br />
            </div>
          </div>
        </div>
        <div class="item">
          <img id="img_galery" class="second-slide" src="img/galeria/transporte.PNG" alt="Second slide">
          <div class="container">
            <div id="txt_galery" class="carousel-caption text-justify">
              <h1>Vehículos de Pasajeros </h1><br />
              <p>
				Se debe realizar la revisión técnica desde 0Km hasta los 10 años de antiguedad cada 6 meses, pasados los 10 años de antiguedad se realizará cada 
				4 meses, hasta el vencimiento de la prorroga.
			 </p><br />             
            </div>
          </div>
        </div>
        <div class="item">
          <img id="img_galery" class="third-slide" src="img/galeria/carga.jpg" alt="Third slide">
          <div class="container">
            <div id="txt_galery" class="carousel-caption text-justify">
              <h1>Vehículos de Carga</h1><br />
				<p>
					Se realizará la revisión técnica a partir del primer año de antiguedad desde la fecha de inscripción en el registro automotor. Hasta los 20 años
					de antiguedad, la vigencia será de 1 año, pasados los 20 años de antiguedad, la vigencia será de 6 meses.
				</p><br />
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row  center-xs middle-xs">
	  
        <div class="col-md-6">
          <img class="img-circle" src="img/index/revision.png" alt="Generic placeholder image" width="180" height="180">
          <h2>Revision</h2>
			<p class="text-justify" style="padding:10px;">Mostramos los aspectos técnicos tenidos en 
			cuenta al momento de revisar su unidad. Pasar por todas estas 
			inspecciones, le indicará que su vehículo se encuentra en óptimas condiciones de circulación.
			</p>
          <p><a class="btn btn-success" href="pages/revision.php" role="button">Seguir leyendo &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
       
	   <div class="col-md-6">
          <img class="img-circle" src="img/index/reqisito.jpg" width="180" height="180">
          <h2>Requisitos</h2>
			<p class="text-justify" style="padding:10px;">Estos son los requisitos y la documentación a presentar para realizar la
			verificación técnica de vehículos de transporte interjurisdiccional de cargas, transporte de
			pasajeros y de vehiculos particulares.
			</p>
          <p><a class="btn btn-success" href="pages/requisitos.php" role="button">Seguir leyendo &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
	   
	   <div class="col-md-6">
          <img class="img-circle" src="img/index/normativa.jpg" width="180" height="180">
          <h2>Normativa</h2>
			 <p class="text-justify" style="padding:10px;">Normativas que regulan la Revisión técnica.
			 En cada uno de los botones encontrará las leyes 
			 que regulan cada uno de los diferentes tipos de vehículos 
			 para su circulación y uso comercial.
			 </p>
          <p><a class="btn btn-success" href="pages/normativa.php" role="button">Seguir leyendo &raquo;</a></p>
        </div> 
		            
	  <div class="col-md-6">
          <img class="img-circle" src="img/index/contacto.jpg" width="180" height="180">
          <h2>Contacto</h2>
			 <p class="text-justify" style="padding:10px;">En la sección de contacto, complete el 
			 formulario con sus datos: nombre, asunto y su email. Ante cualquier duda o 
			 consulta puede enviarnos un email y le responderemos
			 a la brevedad.
			 </p>
          <p><a class="btn btn-success" href="pages/contacto.php" role="button">Seguir leyendo &raquo;</a></p>
        </div> <!--/.col-lg-4 -->
		
	  </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
		
		
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Ir arriba</a></p>
        <p>2016 - Inspecciones Técnicas Pompeya SRL.</p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>