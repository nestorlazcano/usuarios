@extends('layouts.master')

@section('title','Lista de Productos')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header">
     <h1>Productos <small>Actualizados hasta hoy</small></h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Lista
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <button type="button" class="btn btn-warning navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>
             </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Marca</th>
                  <th>Acción</th>
                </thead>
               <tbody>

                 @foreach($products as $product)

                  <tr>
                     <td>{{$product->product}}</td>
                     <td>{{$product->price}}</td>
                     <td>{{$product->mark}}</td>
                     <td><a href="#">[Editar]</a><a href="#">[Eliminar]</a></td>
                  </tr>

                  @endforeach
               </tbody>


             </table>


          </div>
        </div>


     </div>
   </div>


@endsection
