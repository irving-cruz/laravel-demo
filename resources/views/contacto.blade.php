@extends('plantilla1')
@section('titulo')
Contacto
@endsection

@section('contenido')
   <h1>Contacto</h1>
   <form method="POST" action="{{route('contacto')}}">
         @csrf
         <input name="name" placeholder="Tu nombre ...."><br>
         <input type="email" name="email" placeholder="Correo...."><br>
         <input name="subject" placeholder="Asunto...."><br>
         <textarea name="contenido" placeholder="Mensaje ..."></textarea><br>
         <button>Enviar</button>
   </form>
@endsection


