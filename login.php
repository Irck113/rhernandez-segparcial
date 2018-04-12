<?php
        session_start();
        $_SESSION['pag']=1;
?>
<!DOCTYPE html>

<html>
        <head>
                <meta charset = "utf-8"/>
                <meta name = "viewport" content = "width=device-width"/>
                <link rel = "stylesheet" href = "css/examen2.css"/>
        </head>

        <body>
		<h1>Segundo Examen Parcial</h1>
                <form action = "menu.php" method="post">
                        <legend>Inicio de sesion</legend>
                        <label for="usuario">Nombre: </label>
                        <input type="text" name="usuario"/>
			<br/>
			<label for="contrasenia">Contrase&ntilde;a: </label>
                        <input type="text" name="contrasenia"/>
			<br/>
                        <input type="submit" name="enviar" value="Enviar"/>
                </form>
        </body>
</html>

