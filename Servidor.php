<?php
 
 error_reporting(E_ERROR | E_WARNING | E_PARSE); //Elimino los warning que aparecen.
 session_start(); 
 header('Cache-Control: no cache'); //no cache
 session_cache_limiter('private_no_expire'); // works
 include('utf.php');
 

 echo "<center><h1><u>SERVIDOR DEL T.P. N° 1 <br> 'SEGURIDAD EN LOS SITIOS WEB'</u></h1><br><br><br><br><br>";
 echo "<div style='border:ridge 10px;background-color:yellow'>Estoy recibiendo una petición del tipo : <b>{$_SERVER['REQUEST_METHOD']}</b><br><br>";
 echo "La cabecera del mensaje es : <b>{$_SERVER['SERVER_SOFTWARE']}</b><br><br>";
 echo "Tu dirección IP es: <b>{$_SERVER['REMOTE_ADDR']}</b><br><br>";
 echo "El servidor es: <b>{$_SERVER['SERVER_NAME']}</b><br><br>"; 
 echo "Te has conectado usando el puerto: <b>{$_SERVER['REMOTE_PORT']}</b><br><br>"; 
 echo "El agente de usuario de tu navegador es: <b>{$_SERVER['HTTP_USER_AGENT']}</b><br><br></div></center>";

  

 
  /*
  echo '<table border="1">';
    foreach($_SERVER as $k => $v) {
        echo '<tr><td>'.$k.'</td><td>'.$v.'</td></tr>';
    }
    echo '</table>';
*/
?>

 
