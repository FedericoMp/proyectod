<?php
	class formulario{
		/* Variables del formulario */
		private $email;
		private $asunto;
		private $msj;
		
		/* Variables para envio de mail */
		private $destinatario1;
		private $destinatario2;
		
		/* Errores */
		private $errores;
		
		/* Validacion sintaxis */
		private $sintax ;
			
			public function __construct(){	/* Constructor para envio */
				
				$this->email = addslashes(htmlspecialchars($_POST["email"]));
				$this->asunto = addslashes(htmlspecialchars($_POST["asunto"])); 
				$this->msj = addslashes(htmlspecialchars($_POST["msj"]));
				
				$this->destinatario1 ="i.t.p@hotmail.com";
				$this->destinatario2 ="rvt_pompeya@hotmail.com";
				
				$this->errores = "";
				
				$this->sintax = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i";
			}
		
			public function validaDatos(){	/* Validacion de datos del formulario*/
				
				if( $this->email == "" ){
						$this->errores.= "<strong>* Ingrese su email por favor.</strong><br />";
					}else if( !preg_match($this->sintax,$this->email)){
						$this->errores.= "<strong>* Ingrese formato correcto de email</strong><br /> 'ej: nombre@dominio.com' .<br />";
					}
				
				if( $this->asunto == "" ){
						$this->errores.= "<strong>* Ingrese su asunto por favor. </strong><br />";
					}else if( strlen($this->asunto) > 20 ){
						$errores.= "<strong>* Escriba un asunto con menos caracteres. </strong><br />";
					}
							 
				if( $this->msj == "" ){
						$this->errores.= "<strong>* Ingrese su mensaje por favor. </strong><br />";
					}else if( strlen($this->msj) > 200 ){
					$this->errores.= "<strong>* Maximo permitido 200 caracteres. </strong><br />";
					}
			}
	
			public function response(){	/* Respuesta ante el envio */
			
				if( !empty($this->errores)){
					echo '<u>Lista de errores:</u> <br />';
					echo  $this->errores;
				}else{
					//mail($destinatario1, $asunto, $msj);
					//mail($destinatario2, $asunto, $msj);
					echo "Mensaje enviado con exito";
					echo "<script type='text/javascript'>  parent.document.formu.reset(); </script>";  
				}
			}
	
	}
	
	$resp_peticion = new formulario();	 /* Crea el formulario  */
	$resp_peticion->validaDatos();      /* Validacion de datos */
	$resp_peticion->response();		   /* 		Respuesta	  */
	
?>