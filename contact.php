<?php 


	//recibo los datos de texto y selects
@$fechaHoy = date("Y-m-d H:i:s",time());
$date = new DateTime($fechaHoy, new DateTimeZone('America/Mexico_City'));
date_default_timezone_set('America/Mexico_City');
$zonahoraria = date_default_timezone_get();
@$fechaHoy=date("Y-m-d H:i:s",time());
				
				$subject1 = $_POST['subject'];
				$name = $_POST['name'];
				$email = $_POST['email'];
				$message1 = $_POST['message'];


						 header('Location: index.html');
		
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $email;
    $to = "contacto@ikaant.com.mx";
    $subject = $subject1;
    $message = $menssage1 ."<br> Enviado el:". $fechaHoy;
    $headers = "From: " . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";

				
 ?>




