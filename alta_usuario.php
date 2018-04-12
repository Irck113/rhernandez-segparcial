<?php
        session_start();
        if($_SESSION['pag']==1){
        ?>
        <!DOCTYPE html>
        <html>
                <head>
                        <meta charset = "utf-8"/>
                        <meta name = "viewport" content = "width=device-width"/>
                        <link rel = "stylesheet" href = "css/examen2.css"/>
                </head>

                <body>
                        <h1>Alta de usuarios</h1>
			
			<form action = "alta.php" method="post">
                        	<legend>Formulario para el alta de usuarios</legend>
				<label for="nombre">Nombre: </label>
                                <input type="text" name="nombre"/>
                                <br/>
				<label for="apaterno">Apellido paterno: </label>
                                <input type="text" name="apaterno"/>
                                <br/>
				<label for="amaterno">Apellido materno: </label>
                                <input type="text" name="amaterno"/>
                                <br/>
                        	<label for="usuario">Usuario: </label>
                        	<input type="text" name="usuario"/>
                        	<br/>
                        	<label for="contrasenia">Contrase&ntilde;a: </label>
                        	<input type="password" name="contrasenia"/>
                        	<br/>
                        	<input type="submit" name="enviar" value="Enviar"/>
                	</form>
			<footer>
        	                <a href = "creditos.php">Creditos</a>
	                </footer>

                </body>
        </html>
        <?php
        } else {
                header("location: login.php");
        }
?>

