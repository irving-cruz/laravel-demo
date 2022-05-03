@extends('plantilla1')

@section('titulo','Proyectos')  {{-- Se puede omitir el cierre si se pasa como parámetro --}}

@section('contenido')
   <h1>Proyectos</h1>
   <ul>
      @forelse ($proyectos as $item)
          <li>{{$item->title}}<br>
             <small>{{ $item->description}}</small>
          </li>
      @empty
          <li>No hay proyectos para mostrar</li>
      @endforelse
   </ul>
{{--    <?php   
   if(!isset($proyectos) || empty($proyectos))
      echo "<li>No hay proyectos para mostrar</li>";
   else
      foreach ($proyectos as $item)
      echo "<li>".$item['titulo']."</li>";
   ?> --}}
   </ul>
@endsection