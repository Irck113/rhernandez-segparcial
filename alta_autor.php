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
                        <h1>Alta de autores</h1>

                        <form method="post" action="alta.php">
                                <legend>Formulario para el alta de autores</legend>
                                <label for="nombre_autor">Nombre: </label>
                                <input type="text" name="nombre_autor"/>
                                <br/>
                                <label for="apaterno_autor">Apellido paterno: </label>
                                <input type="text" name="apaterno_autor"/>
                                <br/>
                                <label for="amaterno_autor">Apellido materno: </label>
                                <input type="text" name="amaterno_autor"/>
                                <br/>
                                <label for="nacionalidad">Nacionalidad: </label>
                                <input type="text" name="nacionalidad"/>
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
