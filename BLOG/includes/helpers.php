<?php
require_once'conexion.php';

function MostrarError($errores,$campo)
{   
    
    $alerta ='';
    if(isset($errores[$campo]) && !empty($campo) )
    {
        $alerta = "<div class ='alerta-error'>".$errores[$campo].'</div>'; 
    }
    return $alerta;
}


function LimpiarDatos($string)

{
    //eliminar espacios.
    $string = trim($string);
    //eliminar caracteres html.
    $string = htmlspecialchars($string);
    //echo $string;
    return  $string;

}

function BorrarErrores()
{   
    //borrar los errores

    if(isset($_SESSION['errores']))
    {
        $_SESSION['errores'] = null;
        unset($_SESSION['errores']);
    }
     //borrar la notificacion de completado
     
    if(isset($_SESSION['completado']))

    {
        $_SESSION['completado'] = null;
        unset($_SESSION['completado']);
    }
}      

  
      


?>