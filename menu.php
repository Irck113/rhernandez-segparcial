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
			<h1>Men&uacute;</h1>
			<div class="links">
				<a href="alta_usuario.php">Dar de alta usuarios</a>
				<br/>
				<a href="alta_autor.php">Dar de alta autores</a>
				<br/>
				<a href="alta_libro.php">Dar de alta libros</a>
			</div>
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

