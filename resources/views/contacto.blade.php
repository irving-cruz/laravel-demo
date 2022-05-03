@extends('plantilla1')
@section('titulo')
Contacto
@endsection

@section('contenido')
   <h1>Contacto</h1>
    
   <form method="POST" action="{{route('contacto')}}">
         @csrf
         <input name="name" placeholder="Tu nombre ...." value="{{old('name')}}"><br>
         {!!$errors->first('name',':message<br>')!!}
         <input type="email" name="email" placeholder="Correo...." value="{{old('email')}}"><br>
         {!!$errors->first('email',':message<br>')!!}
         <input name="subject" placeholder="Asunto.... " value="{{old('subject')}}"><br>
         {!!$errors->first('subject',':message<br>')!!}
         <textarea name="message" placeholder="Mensaje ...">{{old('message')}}</textarea><br>
         {!!$errors->first('message',':message<br>')!!}
         <button>Enviar</button>
   </form>
@endsection
