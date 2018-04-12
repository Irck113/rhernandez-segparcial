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
                        <h1>Alta de libros</h1>

                        <form action = "alta.php" method="post">
                                <legend>Formulario para el alta de libros</legend>
                                <label for="titulo"">Titulo: </label>
                                <input type="text" name="titulo"/>
                                <br/>
                                <label for="id_autor">Autor: </label>
                                <input type="text" name="id_autor"/>
                                <br/>
                                <label for="anio">A&ntilde;o de publicaci&oacute;n: </label>
                                <input type="text" name="anio"/>
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

