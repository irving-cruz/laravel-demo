@extends('plantilla1')
@section('titulo','Acerca de')  {{-- Se puede omitir el cierre si se pasa como parámetro --}}

@section('contenido')
   <h1>Acerca de</h1>
   <?php
   $lipsum = file_get_contents("https://www.lipsum.com/feed/html");
   echo $lipsum; 
   ?>
@endsection

