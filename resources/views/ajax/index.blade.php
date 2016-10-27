@extends('layouts.master')

@section('title','Lista de Usuarios con Ajax')

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
     <div class="col-md-10">

        <div class="panel panel-default">
          <div class="panel-heading">
             Nuevo Usuario
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
             
            </p>
           </div>
          <div class="panel-body">

           <table class="table table-bordered">
            <thead>
               <th>Nombre Completo</th>
               <th>Usuario</th>
               <th>Tipo</th>
               <th>Correo</th>

             </thead>
             <tbody id="datos"> </tbody>
          </table>
  
                        
           </div>

          </div>
        </div>


     </div>
   </div>

   <script>
      $(document).ready(function(){
          var tablaDatos = $("#datos");
          var route = "{{url("listall")}}";
          
          $.get(route, function(res){
              $(res).each(function(key,value){
                   tablaDatos.append("<tr><td>"+value.nombre+" "+value.apellido_paterno+" "+value.apellido_materno+"</td>\n\
                   <td>"+value.usuario+"</td>\n\
                   <td>"+value.etiqueta+"</td>\n\
                   <td>"+value.correo+"</td></tr>");
              });
          });
      });
   </script>

@endsection
