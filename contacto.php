<?php
$nombre = $_POST['nombrephp'];
$de = $_POST['correophp'];
$mensaje = $_POST['mensajephp'];


$para = "prueba2@hectoralbeldano.260mb.net";
$asunto = "$nombre: ".$_POST['correophp'];
$mensajote ='
De: '.$nombre.' , '.$de.'
Mensaje: '.$mensaje.'

';

$desde = 'From' .$de.'Tu mail aqui';
ini_set (sendmail_from, 'Tu mail aqui2');

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <prueba2@hectoralbeldano.260mb.net>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";


if(mail($para,$asunto,$mensajote,$headers))

	
?>



<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Héctor Albeldaño | Diseño Gráfico</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
<link href="fonts.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script src="jquery.js"></script>
<!--<script type="text/javascript">$(document).ready(function(){alert("hola"); });</script> prueba-->
</head>

<body>

<header>
	<nav class="menu">
        <div class="logotipo">
            <a href="index.html"><img src="images/logo.png" width="35" height="35" alt=""/><span>Héctor Albeldaño</span></a>
    	</div>
		
        <ul class="desplegablea">
            <li><a><span class="icon-paragraph-justify"></span></a>
                <ul class="desplegableb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="portafolio.html">Portafolio</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                </ul>
            </li>
        </ul>        
    </nav>
    
    <div class="responsive">
    	<span class="screen1250">1250px</span>
        <span class="screen1000">1000px</span>
        <span class="screen850">850px</span>
        <span class="screen700">700px</span>
    </div>
    
    
</header>

<!--===============================================================================-->

<main><h1>Contacto.</h1></main>

<section class="sociales">
    <a><span class="icon-facebook3"></span></a>
	<a><span class="icon-twitter3"></span></a>
    <a><span class="icon-facebook3"></span></a>
	<a><span class="icon-twitter3"></span></a>
</section>