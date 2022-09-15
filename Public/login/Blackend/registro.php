<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	
	$errors = array();
	
	if(!empty($_POST)){
		$nombre = $mysqli->real_escape_string($_POST['nombre']);
		$usuario = $mysqli->real_escape_string($_POST['usuario']);
		$password = $mysqli->real_escape_string($_POST['password']);
		$con_password = $mysqli->real_escape_string($_POST['con_password']);
		$email = $mysqli->real_escape_string($_POST['email']);

		$activo = 0;
		$tipo_usuario = 2;
		
       
		if(isNull($nombre,$usuario,$password,$con_password,$email)){
             
			$errors[]= '"Complete los campos"';
		}

		if(!isEmail($email)){
             
			$errors[]='"El correo no es valido"';
		}

		if(!validaPassword($password,$con_password)){
             
			$errors[]='"Las contraseñas no coinciden"';
		}
		if(usuarioExiste($usuario)){
			$errors[]='"El usuario $usuario ya existe"';
		}
		if(emailExiste($email)){
			$errors[]='"El correo $email ya existe"';
		}
		if(strlen(trim($password)) < 5){
			$errors[]='"La contarseña no valida 5 caracteres min"';
		}
		
		if(strlen(trim($nombre)) < 4 || strlen(trim($usuario)) < 4){
			$errors[]='"Asegurese que el nombre y el usuario se an correcrtos"';
		}

		if(count($errors) == 0){
	
                $pass_hash = hashPassword($password);
				$token = generateToken();
				$registro = registraUsuario($usuario, $pass_hash, $nombre, $email, $activo, $token, $tipo_usuario);

                if($registro > 0){
                   
                   $url = 'http://'.$_SERVER["SERVER_NAME"].'/NemiV0.2/Public/login/activar.php?id='.$registro.'&val='.$token;

				   $asunto = 'Activa cuenta - sistemas usuarios';
				   $cuerpo = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
				   <html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office'>
				   
				   <head>
					   <meta charset='UTF-8'>
					   <meta content='width=device-width, initial-scale=1' name='viewport'>
					   <meta name='x-apple-disable-message-reformatting'>
					   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
					   <meta content='telephone=no' name='format-detection'>
					   <title>Nemi</title>
				   
				   </head>
				   
				   <body>
					   <div class='es-wrapper-color'>
						   <!--[if gte mso 9]>
							   <v:background xmlns:v='urn:schemas-microsoft-com:vml' fill='t'>
								   <v:fill type='tile' color='#f8f9fd'></v:fill>
							   </v:background>
						   <![endif]-->
						   <table class='es-wrapper' width='100%' cellspacing='0' cellpadding='0'>
							   <tbody>
								   <tr>
									   <td class='esd-email-paddings' valign='top'>
										   <table cellpadding='0' cellspacing='0' class='es-content esd-header-popover' align='center'>
											   <tbody>
												   <tr>
													   <td class='esd-stripe' align='center' bgcolor='#f8f9fd' style='background-color: #f8f9fd;'>
														   <table bgcolor='#ffffff' class='es-content-body' align='center' cellpadding='0' cellspacing='0' width='600'>
															   <tbody>
																   <tr>
																	   <td class='esd-structure es-p10t es-p15b es-p30r es-p30l' align='left'>
																		   <table cellpadding='0' cellspacing='0' width='100%'>
																			   <tbody>
																				   <tr>
																					   <td width='540' class='esd-container-frame' align='center' valign='top'>
																						   <table cellpadding='0' cellspacing='0' width='100%'>
																							   <tbody>
																								   <tr>
																									   <td align='center' class='esd-block-image' style='font-size: 25px;'><a target='_blank'><img src='https://lh3.googleusercontent.com/hWN5tV7W0tWfRk-trTI7lIXUGZ3qQzJFdgmLU_6pDUj9HEMZcsPHXCsIAMnGLqcAIcu479gp6W8J1wAhRxJlXEhBOIpwOl-Vv_KFmASQle9rf5T6uNFpfXEExpF2Itjb1DYotEIqAw=w152-h70-p-k' alt style='display: block;' width='130'></a></td>
																								   </tr>
																							   </tbody>
																						   </table>
																					   </td>
																				   </tr>
																			   </tbody>
																		   </table>
																	   </td>
																   </tr>
															   </tbody>
														   </table>
													   </td>
												   </tr>
											   </tbody>
										   </table>
										   <table cellpadding='0' cellspacing='0' class='es-content' align='center'>
											   <tbody>
												   <tr>
													   <td class='esd-stripe' align='center' bgcolor='#f8f9fd' style='background-color: #f8f9fd;'>
														   <table bgcolor='transparent' class='es-content-body' align='center' cellpadding='0' cellspacing='0' width='600' style='background-color: transparent;'>
															   <tbody>
																   <tr>
																	   <td class='esd-structure es-p20t es-p10b es-p20r es-p20l' align='left'>
																		   <table cellpadding='0' cellspacing='0' width='100%'>
																			   <tbody>
																				   <tr>
																					   <td width='560' class='esd-container-frame' align='center' valign='top'>
																						   <table cellpadding='0' cellspacing='0' width='100%'>
																							   <tbody>
																								   <tr>
																									   <td align='center' class='esd-block-text es-p10b'>
																										   <h1>¡Bienvenido a Nemi!</h1>
																									   </td>
																								   </tr>
																								   <tr>
																									   <td align='center' class='esd-block-text es-p10t es-p10b'>
																										   <p>En donde encontraras los mejores lugares de recreación<br>y zonas verdes de la zona oriental&nbsp;de El Salvador.</p>
																									   </td>
																								   </tr>
																							   </tbody>
																						   </table>
																					   </td>
																				   </tr>
																			   </tbody>
																		   </table>
																	   </td>
																   </tr>
																   <tr>
																	   <td class='esd-structure es-p15t es-m-p15t es-m-p0b es-m-p0r es-m-p0l' align='left'>
																		   <table cellpadding='0' cellspacing='0' width='100%'>
																			   <tbody>
																				   <tr>
																					   <td width='600' class='esd-container-frame' align='center' valign='top'>
																						   <table cellpadding='0' cellspacing='0' width='100%'>
																							   <tbody>
																								   <tr>
																									   <td align='center' class='esd-block-image' style='font-size: 0px;'><a target='_blank'><img class='adapt-img' src='https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/3991592481152831.png' alt style='display: block;' width='600'></a></td>
																								   </tr>
																							   </tbody>
																						   </table>
																					   </td>
																				   </tr>
																			   </tbody>
																		   </table>
																	   </td>
																   </tr>
															   </tbody>
														   </table>
													   </td>
												   </tr>
											   </tbody>
										   </table>
										   <table cellpadding='0' cellspacing='0' class='es-content esd-footer-popover' align='center'>
											   <tbody>
												   <tr>
													   <td class='esd-stripe' align='center' bgcolor='#71cc49' style='background-color: #71cc49; background-image: url(https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/33971592408649468.png); background-repeat: no-repeat; background-position: center center;' background='https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/33971592408649468.png'>
														   <table bgcolor='#ffffff' class='es-content-body' align='center' cellpadding='0' cellspacing='0' width='600'>
															   <tbody>
																   <tr>
																	   <td class='esd-structure es-p40t es-p40b es-m-p40t es-m-p40b es-m-p20r es-m-p20l' align='left'>
																		   <table cellpadding='0' cellspacing='0' width='100%'>
																			   <tbody>
																				   <tr>
																					   <td width='600' class='esd-container-frame' align='center' valign='top'>
																						   <table cellpadding='0' cellspacing='0' width='100%' bgcolor='#f0f3fe' style='background-color: #f0f3fe; border-radius: 20px; border-collapse: separate;'>
																							   <tbody>
																								   <tr>
																									   <td align='left' class='esd-block-text es-p25t es-p10b es-p20r es-p20l'>
																										   <h1 style='text-align: center; line-height: 150%;'>Hola $nombre,&nbsp;haz&nbsp;clic&nbsp;en el&nbsp;botón&nbsp;para poder activar tu cuenta de&nbsp;nemi.</h1>
																									   </td>
																								   </tr>
																								   <tr>
																									   <td align='center' class='esd-block-button es-p10t es-p25b es-p20r es-p20l es-m-p15t es-m-p20b es-m-p20r es-m-p20l'><span class='es-button-border es-button-border-1623681486611' style='background: #71cc49;'><a href='$url' class='es-button es-button-1623680401090' target='_blank' style='border-width: 20px 30px; background: #71cc49; border-color: #71cc49;'>ACTIVAR
																												   <!--[if !mso]><!-- --><img src='https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/32371592816290258.png' alt='icon' width='16' class='esd-icon-right' align='absmiddle' style='margin-left:10px;'>
																												   <!--<![endif]--></a></span></td>
																								   </tr>
																							   </tbody>
																						   </table>
																					   </td>
																				   </tr>
																			   </tbody>
																		   </table>
																	   </td>
																   </tr>
															   </tbody>
														   </table>
													   </td>
												   </tr>
											   </tbody>
										   </table>
									   </td>
								   </tr>
							   </tbody>
						   </table>
					   </div>
				   </body>
				   
				   </html>";

				   if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
					 
					$errors[]='"Hemos enviado un email a $email Para poder activar tu cuenta! "';

					echo '
					<script type="text/javascript">
					alert("Hemos enviado un correo electrónico a tu email para poder activar tu cuenta! ");
					window.location.href="index.php";
					</script>';
					  exit;

				   }else{
					$errors[]='"El correo no se pudo enviar"';
				   }

				}else{
					$errors[]='"Error al registrar"';
				}
		}
	
	}
	
?>