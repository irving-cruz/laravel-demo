<?php
function setActive($ruta)
{
   return request()->routeIs($ruta) ? 'active' : '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('titulo','IACM') </title>
   <style>
      .active a{
        color:red;
        text-decoration: none;
      }
    </style>
</head>
<body>
<nav>
  <ul>
    <li class="{{ setActive('home') }}"><a href="/">Inicio</a></li>
    <li class="{{ setActive('about') }}"><a href="/about">Acerca de</a></li>
    <li class="{{ setActive('proyectos') }}"><a href="/proyectos">Proyectos</a></li>
    <li class="{{ setActive('contacto') }}"><a href="/contacto">Contacto</a></li>
  </ul>
</nav>
@yield('contenido')
</body>
</html>
