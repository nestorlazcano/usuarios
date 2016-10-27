@extends('layouts.master')

@section('title','Lista de Usuarios')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb">
     <li href="{{url("/")}}"></li>
     <li class="active">Usuarios</li>
   </ol>
   <div class="page-header">
     <h1>Usuarios <small>Actualizados hasta hoy</small></h1>
   </div>
   
   @include('partials.messages')
   <div class="row">
     <div class="col-md-11">

        <div class="panel panel-default">
          <div class="panel-heading">
             Nuevo Usuario
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
               <button type="button" class="btn btn-warning" id="nuevo" name="nuevo" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>
            </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
                  <th>Nombre Completo</th>
                  <th>Usuario</th>
                  <th>Tipo</th>
                  <th>Correo</th>
                  <th>Operación</th>
                </thead>
               <tbody>

                 @foreach($usuarios as $usuario)

                  <tr>
                     <td>
                         {{$usuario->nombre}} 
                         {{$usuario->apellido_paterno}} 
                         {{$usuario->apellido_materno}}
                     </td>
                     <td>{{$usuario->usuario}}</td>
                     <td>{{$usuario->etiqueta}}</td>
                     <td>{{$usuario->correo}}</td>
                     
                     <td>
                         {!!link_to_route('users.edit', $title = 'Editar', $parameters = $usuario->id_usuario, $attributes = ['class' => 'btn btn-primary btn-sm'])!!}
                         {!!link_to_route('users.show', $title = 'Eliminar', $parameters = $usuario->id_usuario, $attributes = ['class' => 'btn btn-danger btn-sm'])!!}
                     </td>
                  </tr>

                  @endforeach
               </tbody>
             </table>
             <div class="text-center">
                {{$usuarios->links()}}
             </div>

          </div>
        </div>


     </div>
   </div>

   <script>
     $("#nuevo").click(function(event)
     {
        document.location.href="{{route("users.create")}}";
     });
     $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
   </script>

@endsection
