@extends('plantilla1')
@section('titulo')
Home
@endsection

@section('contenido')
   <h1>Home</h1>
@endsection

<!--    
   Bienvenid@ {{$nombre ?? "invitado"}}
   Bienvenid@ <?php echo $nombre ?? "invitado"; echo "<script>alert('Hola2')</script>";?> <BR>
   Bienvenid@ {{$nombre ?? "invitado"}} {{"<script>alert('Hola')</script>"}}  Ataques XSS-->

