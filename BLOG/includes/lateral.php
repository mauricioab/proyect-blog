<!-- BARRA LATERAL-->
<?php require_once 'includes/helpers.php'; ?>

<aside id="sidebar" >
            <div id="login" class="bloque">
                <h3>Log In </h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email1"/>

                    <label for="password">Password</label>
                    <input type="password" name="password1"/>

                    <input type="submit" name="submit" value="Entrar"/>
                </form>
            </div>
            
            
            <div id="register" class="bloque">
                
                <h3>Registrarse </h3>
                <!-- Mostrar errores -->
                
                <?php if(isset($_SESSION['completado'])):?>
                               
                    <div class="alerta-exito" >                
                <?php echo $_SESSION['completado'];?>
                    </div> 

                <?php elseif (isset($_SESSION['errores']['general']) ):?>
                    <div class="alerta-error"> 
                     
                    <?php echo $_SESSION['errores']['general'];?>

                    </div> 
                <?php endif;?>

                <form action="registro.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre"/>
                    <?php echo  isset($_SESSION['errores']) ? MostrarError($_SESSION['errores'],'nombre'):'';?>

                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido"/>
                    <?php echo isset($_SESSION['errores']) ? MostrarError($_SESSION['errores'],'apellido'):'';?>

                    <label for="email">Email</label>
                    <input type="text" name="email"/>
                    <?php echo  isset($_SESSION['errores']) ? MostrarError($_SESSION['errores'],'email'):'';?>
                    <?php echo  isset($_SESSION['email_exist']) ? MostrarError($_SESSION['errores'],'email'):'';?>
                

                    <label for="password">Password</label>
                    <input type="password" name="password"/>
                    <?php echo  isset($_SESSION['errores']) ? MostrarError($_SESSION['errores'],'password'):'';?>

                    <input type="submit" name="submit" value="Registrar"/>
                                      
                        
                </form>
                <?php BorrarErrores(); ?>
               
            </div>
           
        </aside>    