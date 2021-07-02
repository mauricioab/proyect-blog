<?php

require_once 'funciones.php';



//desde notebook git

if(isset($_POST))
{
    //Recoger valores
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;


    //array errores
    $errores = array();


    //validar datos

    //validar campo nombre

    if(!empty ($nombre) && !is_numeric ($nombre) && !preg_match ("/[0-9]/",$nombre))
    {
        LimpiarDatos($nombre);
        $nombre_validado = true;
    }
    else
    {   
        $nombre_validado = false;
        $errores ['nombre'] = "Nombre no valido";
    }

    //validar campo apellido

    if(!empty ($apellido) && !is_numeric ($apellido) && !preg_match ("/[0-9]/",$apellido))
    {
        LimpiarDatos($apellido);
        $apellido_validado = true;
    }
    else
    {   
        $apellido_validado = false;
        $errores ['apellido'] = "Apellido no valido";
    }

    //validar campo email

    if(!empty ($email) && filter_var($email, FILTER_VALIDATE_EMAIL )  )
    {
        LimpiarDatos($email);
        $email_validado = true;
    }
    else
    {   
        $email_validado = false;
        $errores ['email'] = "Email no valido";
    }
    //validar campo password

    if(!empty ($password) )
    {
        
        $password_validado = true;
    }
    else
    {   
        $password_validado = false;
        $errores ['password'] = "Password no puede estar vacio";
    }
    
    $guardar_usuario = false;

    if(count($errores) == 0 )
    {   
        $guardar_usuario = true;
        //insertar usuario en DB


    }
    


}


?>