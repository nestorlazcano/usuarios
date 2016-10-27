@extends('layouts.master')

@section('title','Lista de Modulos')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb">
     <li href="{{url("/")}}"></li>
     <li class="active">Modulos</li>
   </ol>
   <div class="page-header">
     <h1>Modulos <small>Actualizados hasta hoy</small></h1>
   </div>
   
   <div class="row">
     <div class="col-md-5">

        <div class="panel panel-default">
          <div class="panel-heading">
             Modulos
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
                  <th>Nombre</th>
                  <th>Descripción</th>
                </thead>
               <tbody>

                 @foreach($modulos as $modulo)

                  <tr>
                     <td>{{$modulo->etiqueta}}</td>
                     <td>{{$modulo->descripcion}}</td>
                     
                  </tr>

                  @endforeach
               </tbody>
             </table>
             <div class="text-center">
                {{$modulos->links()}}
             </div>

          </div>
        </div>


     </div>
   </div>

@endsection
