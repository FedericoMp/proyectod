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

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
              <a class="navbar-brand" href="index.php" style="color:white;">
				<img class="img-circle" src="http://creditosparaauto.com.ar/files/2016/01/index.png" width="50" height="50" style="margin-top:-15px;" alt="logo" />
			  </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.php">Inicio</a></li>
                <li><a href="pages/revision.php">Revision</a></li>
                <!--<li><a href="pages/normativa.php">Normativa</a></li>-->
                <li class="dropdown">
                  <a href="requisitos.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Requisitos <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="pages/revision.php">Transporte de carga</a></li>
                    <li><a href="pages/revision.php">Transporte de pasajeros</a></li>
                    <li><a href="pages/revision.php">Vehiculo particular</a></li>
                  </ul>
                </li>
				 <li><a href="pages/contacto.php">Contacto</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


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
          <img class="first-slide" src="https://guiaclasificadoscolombia.com/wp-content/uploads/2015/08/015.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-justify">
              <h1>Vehículos Particulares</h1><br />
				<p>
					Se realizará la revisión técnica a partir de los 3 años tomando como referencia la fecha de inscripción en el registro automotor. Hasta los 7 
					años de antiguedad la vigencia será de 2 años, pasados los 7 años de antiguedad la vigencia será de 1 año.
				</p><br />
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="http://cosmotrans.com.co/images/bg/servicios/vans3.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption text-justify">
              <h1>Vehículos de Pasajeros</h1><br />
              <p>
				Se debe realizar la revisión técnica desde 0Km hasta los 10 años de antiguedad cada 6 meses, pasados los 10 años de antiguedad se realizará cada 
				4 meses, hasta el vencimiento de la prorroga.
			 </p><br />             
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="https://subocol.files.wordpress.com/2013/09/camiones.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-justify">
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
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="http://gelga.com.mx/img/sip00.png" alt="Generic placeholder image" width="200" height="200">
          <h2>Revision</h2>
			<p class="text-justify">Le mostramos los aspectos técnicos tenidos en 
			cuenta al momento de revisar su unidad. El pasar por todas estas 
			inspecciones, le indicará que su vehículo se encuentra en óptimas condiciones de circulación
			</p>
          <p><a class="btn btn-success" href="pages/revision.php" role="button">Seguir leyendo &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
       
	   <!--<div class="col-lg-4">
          <img class="img-circle" src="http://www.correodelorinoco.gob.ve/wp-content/uploads/2012/02/Firma-presidencial.jpg" width="200" height="200">
          <h2>Normativa</h2>
			 <p class="text-justify">Normativas que regulan la Revisión técnica.
			 En cada uno de los botones encontrará las leyes 
			 que regulan cada uno de los diferentes tipos de vehículos 
			 para su circulación y uso comercial.
			 </p>
          <p><a class="btn btn-success" href="pages/normativa.php" role="button">Seguir leyendo &raquo;</a></p>
        </div> /.col-lg-4 -->
		
		<div class="col-lg-4">
          <img class="img-circle" src="http://www.informaticosbarcelona.com/wp-content/uploads/2015/12/img-01_inicio-300x300.jpg" width="200" height="200">
          <h2>Contacto</h2>
			 <p class="text-justify">En la sección de contacto, complete el 
			 formulario con sus datos. Ante cualquier duda o 
			 consulta puede enviarnos un email y le responderemos
			 a la brevedad.
			 </p>
          <p><a class="btn btn-success" href="pages/contacto.php" role="button">Seguir leyendo &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
       
	   <div class="col-lg-4">
          <img class="img-circle" src="http://www.adipiscor.com/img/uploads/images/fuente_lanacion_cl.jpg" width="200" height="200">
          <h2>Requisitos</h2>
			<p class="text-justify">Estos son los requisitos y la documentación a presentar para realizar la
			verificación técnica de vehículos de transporte interjurisdiccional de cargas, transporte de
			pasajeros y de vehiculos particulares.
			</p>
          <p><a class="btn btn-success" href="pages/requisitos.php" role="button">Seguir leyendo &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
		
		 <div class="row featurette">
        <div class="col-md-12" style="margin-bottom:50px;">
          <h2 class="featurette-heading text-center">¿Porqué hacer la Revisión Técnica?</h2>
			</div>
		</div>
		
      <div class="row featurette">
        <div class="col-md-7">
          <h3 class="featurette-heading" style="font-size:43px;">Es tan solo un certificado</h3>
			  <br /><p class="lead text-justify">
				Generalmente se piensa que la revisión técnica es tan solo un certificado, 
				un mero papel que el transportista tiene que tener obligado porque lo exigen
				en la calle. Hay que diferenciar entre certificado y revisión técnica. Hacer 
				una revisión técnica periódica significa hacer una auditoria técnica del vehiculo, para que 
				el vehiculo no quede fuera de servicio o en el peor de los casos no provoque un accidente. 				
			  </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="http://neoauto.com/noticias/wp-content/uploads/2015/05/auto-usado-revision-mecanica.jpg" width="500" height="500" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h3 class="featurette-heading" style="font-size:43px;">Servicio técnico</h3>
			<br /><p class="lead text-justify"> 
				Cuando usted lleva el vehiculo a la revisión técnica tenga en cuenta que paga por un 
				servicio técnico en el que se evaluaran todos los aspectos de seguridad, y se le darán 
				orientaciones para prevenir futuras eventualidades. Tener el documento que certifica que 
				su unidad esta en condiciones es tan importante como que su unidad este realmente en 
				condiciones, si usted paga por un servicio de revisión técnica no debe dejarse vender un
				mero certificado.
			</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="http://www.autofrance.com.ar/wp-content/uploads/2016/01/foto_0000000120150312105508.jpg" width="500" height="500" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h3 class="featurette-heading" style="font-size:43px;">Revisión técnica a conciencia</h3>
			<br /><p class="lead text-justify">
				No sirve tener el certificado de aprobado y el vehiculo en un taller por
				un determinado tiempo lo que provoca importantes desembolsos. Realizar una revisión técnica
				a conciencia aumente la vida útil del vehiculo. Tenga en cuenta que el costo de la revisión 
				técnica es en todos los casos muy inferior al costo de cualquier reparación previsible por
				haber efectuado una revisión técnica conciente.
			</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="http://www.periodicolaguia.com.ar/wp-content/uploads/2015/01/11.jpg" width="500" height="500" alt="Generic placeholder image">
        </div>
      </div>

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