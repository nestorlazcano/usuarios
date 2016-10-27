@extends('layouts.master')

@section('title','Historial')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb">
     <li href="{{url("/")}}"></li>
     <li class="active">Historial</li>
   </ol>
   <div class="page-header">
     <h1>Historial <small>Actualizado hasta hoy</small></h1>
   </div>
   
   @include('partials.messages')
   <div class="row">
     <div class="col-md-12">

        <div class="panel panel-default">
          <div class="panel-heading">
            Historial del Sistema
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
                  <th>Operación</th>
                  <th>Descripción</th>
                  <th>Fecha</th>
                  <th>Registro Afectado</th>
                  <th>Valor Anterior</th>
                  <th>Valor Nuevo</th>
                  <th>Clave del Modulo</th>
                  <th>Clave del Usuario</th>
                </thead>
               <tbody>

                
                 @foreach($historial as $historials)

                  <tr>
                     <td>{{$historials->operacion}}</td>
                     <td>{{$historials->descripcion}}</td>
                     <td>{{$historials->fecha}}</td>
                     <td>{{$historials->registro_afectado}}</td>
                     <td>{{$historials->valor_anterior}}</td>
                     <td>{{$historials->valor_nuevo}}</td>
                     <td>{{$historials->id_modulo}}</td>
                     <td>{{$historials->id_users}}</td>
                     
                  </tr>

                  @endforeach
               </tbody>
             </table>
             <div class="text-center">
                {{$historial->links()}}
             </div>

          </div>
        </div>


     </div>
   </div>

   
@endsection
