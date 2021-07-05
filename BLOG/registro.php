<?php


if(isset($_POST))
{
    session_start();
    
    require_once './includes/helpers.php';
    //conexion a la base de datos
    require_once './includes/conexion.php';
    
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
    var_dump($errores);

    if(count($errores) == 0 )
    {   
        $guardar_usuario = true;
        //encryptar el password
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        $password = $password_segura;
         
        //insertar usuario en DB
        $sql = "INSERT INTO usuarios VALUES (null,'$nombre','$apellido','$email','$password', CURDATE())";
        $guardar = mysqli_query($db,$sql);
        

        if ($guardar)
        {
            $_SESSION['completado'] = "Registro realizado con exito !";
            
                
        }
     
        
        else
        {
            $_SESSION['errores'] ['general'] = "Fallo al guardar el usuario";
                
        }
    

    }
    else
    {   
       //guardando errores en la session  
       //echo "error no guardo nada";
       $_SESSION['errores'] = $errores;
       header('Location:index.php');
       
    }

    
}

header('Location:index.php');



?>