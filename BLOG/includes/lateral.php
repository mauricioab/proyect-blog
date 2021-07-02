<!-- BARRA LATERAL-->

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
                <form action="registro.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre"/>

                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido"/>

                    <label for="email">Email</label>
                    <input type="text" name="email"/>

                    <label for="password">Password</label>
                    <input type="password" name="password"/>

                    <input type="submit" name="submit" value="Registrar"/>
                    
                        
                </form>
            </div>
        </aside>