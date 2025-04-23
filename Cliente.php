<?php
 
 
 //error_reporting(E_ERROR | E_WARNING | E_PARSE); //Elimino los warning que aparecen.
 session_start(); 
 header('Cache-Control: no cache'); //no cache
 session_cache_limiter('private_no_expire'); // works
 include('utf.php');
 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  
#INICIO
 
$URL_SRV =  "https://github.com/hernanlanzillotta/piswd_tp1/blob/main/Servidor.php";  //"http://localhost/TP1/Servidor.php";//"http://www.c.byethost7.com/index.php";
  

 echo"<center><h1><u>CLIENTE DEL T.P. N° 1 <br> 'SEGURIDAD EN LOS SITIOS WEB'</u></h1><br><br><br><br><br>";
 echo "Enviando Petición GET al servidor<br>";
 echo "Respuesta del servidor : ";
 sendGet();
 sleep(10);

 /////////////////////////////////////////////
 echo "Enviando Petición PUT al servidor<br>";
 echo "Respuesta del servidor : ";
 sendPut();
 sleep(10);

 /////////////////////////////////////////////
 echo "Enviando Petición POST al servidor<br>";
 echo "Respuesta del servidor : ";
 sendPost();
 ////////////////////////////////////////////
 sleep(10);

 echo "Enviando Petición DELETE al servidor<br>";
 echo "Respuesta del servidor : ";
 sendDelete();
 
 

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  
#FUNCIONES
function sendPost()
	{
		
		try{
			global $URL_SRV;
			
			//datos a enviar
			$data = array("a" => "a,b,c,d");
			//url contra la que atacamos
			$ch = curl_init($URL_SRV);
			//a true, obtendremos una respuesta de la url, en otro caso, 
			//true si es correcto, false si no lo es
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//establecemos el verbo http que queremos utilizar para la petición
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			//enviamos el array data
			curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
			//obtenemos la respuesta
			//curl_setopt($ch, CURLOPT_POSTFIELDS, "postvar1=value1&postvar2=value2&postvar3=value3");
			$response = curl_exec($ch);
			// Se cierra el recurso CURL y se liberan los recursos del sistema
			curl_close($ch);
			var_dump ($response);
	 	   }
		   catch(exception $e)
		    {
			   MensajeError("POST");
		    }  	
			
		
	}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function sendPut()
	{
		try{
			global $URL_SRV;
			
			//datos a enviar
			$data = array("a" => "a");
			//url contra la que atacamos
			$ch = curl_init($URL_SRV);
			//a true, obtendremos una respuesta de la url, en otro caso, 
			//true si es correcto, false si no lo es
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//establecemos el verbo http que queremos utilizar para la petición
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
			//enviamos el array data
			curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
			//obtenemos la respuesta
			$response = curl_exec($ch);
			// Se cierra el recurso CURL y se liberan los recursos del sistema
			curl_close($ch);
			var_dump($response);
		    }
            catch(exception $e)
		    {
			    MensajeError("PUT");
		    }  			
			
	}
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
function sendGet()
	{
		try{
			global $URL_SRV;
			
			//datos a enviar
			$data = array("a" => "a");
			//url contra la que atacamos
			$ch = curl_init($URL_SRV);
			//a true, obtendremos una respuesta de la url, en otro caso, 
			//true si es correcto, false si no lo es
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//establecemos el verbo http que queremos utilizar para la petición
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
			//enviamos el array data
			curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
			//obtenemos la respuesta
			$response = curl_exec($ch);
			// Se cierra el recurso CURL y se liberan los recursos del sistema
			curl_close($ch);
			var_dump($response);
		   }
		catch(exception $e)
		   {
			 MensajeError("GET");
		   }
		
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

function sendDelete()
	{
		
		try{
			global $URL_SRV;
					
			//datos a enviar
			$data = array("a" => "a");
			//url contra la que atacamos
			$ch = curl_init($URL_SRV);
			//a true, obtendremos una respuesta de la url, en otro caso, 
			//true si es correcto, false si no lo es
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//establecemos el verbo http que queremos utilizar para la petición
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
			//enviamos el array data
			curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
			//obtenemos la respuesta
			$response = curl_exec($ch);
			// Se cierra el recurso CURL y se liberan los recursos del sistema
			curl_close($ch);
			var_dump($response);
		   }
		   catch(exception $e)
		   {
			 MensajeError("DELETE");
		   }
		   
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function MensajeError($str_peticion)
{
	 echo "ERROR PETICIÓN ".$str_peticion;

}

?>