@extends('layouts.master')

@section('title','Lista de Roles')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb">
     <li href="{{url("/")}}"></li>
     <li class="active">Roles</li>
   </ol>
   <div class="page-header">
     <h1>Roles <small>Actualizados hasta hoy</small></h1>
   </div>
   
   @include('partials.messages')
   <div class="row">
     <div class="col-md-6">

        <div class="panel panel-default">
          <div class="panel-heading">
             Nuevo Rol
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
               <button type="button" class="btn btn-warning navbar-btn" id="nuevo" name="nuevo" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>
            </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
                  <th>Clave</th>
                  <th>Tipo</th>
                  @if(Auth::user()->admin())
                    <th>Operación</th>
                  @endif
                </thead>
               <tbody>

                 @foreach($roles as $rol)

                  <tr>
                     <td>{{$rol->id_rol}}</td>
                     <td>{{$rol->etiqueta}}</td>
                      @if(Auth::user()->admin())
                        <td>
                             {!!link_to_route('roles.edit', $title = 'Editar', $parameters = $rol->id_rol, $attributes = ['class' => 'btn btn-primary btn-sm'])!!}
                             {!!link_to_route('roles.show', $title = 'Eliminar', $parameters = $rol->id_rol, $attributes = ['class' => 'btn btn-danger btn-sm'])!!}
                        </td>
                      @endif
                     
                  </tr>

                  @endforeach
               </tbody>
             </table>
             <div class="text-center">
                {{$roles->links()}}
             </div>

          </div>
        </div>


     </div>
   </div>

   <script>
     $("#nuevo").click(function(event)
     {
        document.location.href="{{route("roles.create")}}";
     });
     $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
   </script>

@endsection
