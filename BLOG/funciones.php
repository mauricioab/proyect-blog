<?php

function LimpiarDatos($string)

{
    //eliminar espacios.
    $string = trim($string);
    //eliminar caracteres html.
    $string = htmlspecialchars($string);
    //echo $string;
    return  $string;

}


?>