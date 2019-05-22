<?php

define('RUTA', 'http://localhost/CursoPHP/juancarlos/blog'); //Así tenemos la ruta principal disponible


$bd_config = array(
	'basedatos' => 'blog',
	'usuario' => 'root',
	'pass' => '123456'
);

$blog_config = array(
	'post_por_pagina'=> '2', //Puedes cambiar los blog por pagina
	'carpeta_imagenes' => 'imagenes/' //Podemos cambiar la ruta de la carpeta, debe tener el mismo nombre que en el host
);

$blog_admin = array( //Guardamos los datos del administrador, investigar para crear un login con la base de datos
	'usuario' => 'admin',
	'password' => 'admin'
);

?>
