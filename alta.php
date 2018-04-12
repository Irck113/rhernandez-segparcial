<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Alta de registros</title>
	</head>
	
	<body>
	<h1>Alta de registros</h1>
<?php
include_once("conexion.php");

$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$apaterno = filter_var($_POST['apaterno'], FILTER_SANITIZE_STRING);
$amaterno = filter_var($_POST['amaterno'], FILTER_SANITIZE_STRING);
$usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
$constrasenia = filter_var($_POST['contrasenia'], FILTER_SANITIZE_STRING);

$titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRING);
$id_autor = filter_var($_POST['id_autor'], FILTER_SANITIZE_STRING, [1-9]);
$anio = filter_var($_POST['anio'], FILTER_SANITIZE_STRING);

$nombre_autor = filter_var($_POST['nombre_autor'], FILTER_SANITIZE_STRING);
$apaterno_autor = filter_var($_POST['apaterno_autor'], FILTER_SANITIZE_STRING);
$amaterno_autor = filter_var($_POST['amaterno_autor'], FILTER_SANITIZE_STRING);
$nacionalidad = filter_var($_POST['nacionalidad'], FILTER_SANITIZE_STRING);

if(!empty($nombre)||!empty($apaterno)||!empty($amaterno)||!empty($usuario)||!empty($contrasenia)){
        $comentario = "insert into usuarios(nombre,apaterno,amaterno,usuario,contrasenia) values('$nombre','$apaterno','$amaterno','$usuario','$contrasenia');
        $guarda_comentario = consulta($comentario);
        if($guarda_comentario == false){
                echo "Gracias por ingresar tus datos";
        }else{
                echo "Hubo un error al intentar guardar tus datos, intenta más tarde";
        }

}else if(!empty($titulo)||!empty($id_autor)||!empty($anio)){
	$comentario = "insert into libros (titulo, id_autor, anioPublicacion) values('$titulo','$id_autor','$anio');
        $guarda_comentario = consulta($comentario);
        if($guarda_comentario == false){
                echo "Gracias por ingresar tus datos";
        }else{
                echo "Hubo un error al intentar guardar tus datos, intenta más tarde";
        }

}else if(!empty($nombre_autor)||!empty($apaterno_autor)||!empty($amaterno_autor)||!empty($nacionalidad)){
	$comentario = "insert into autores (nombre, apaterno, amaterno, nacionalidad) values('$nombre_autor','$apaterno_autor','$amaterno_autor','$nacionalidad');
        $guarda_comentario = consulta($comentario);
        if($guarda_comentario == false){
                echo "Gracias por ingresar tus datos";
        }else{
                echo "Hubo un error al intentar guardar tus datos, intenta más tarde";
        }
}
else{
        echo "Los valores ingresados no son válidos";
}
?>
	<a href="menu.php">Regresar al men&uacute;</a>
	</body>
</html>

