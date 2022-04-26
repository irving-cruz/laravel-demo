<?php
function setActive($ruta)
{
   return request()->routeIs('home') ? 'active' : '';
}
?>