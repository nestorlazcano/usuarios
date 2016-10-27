@extends('layouts.master')

@section('title','Editar Rol')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb">
     <li href="{{url("/")}}"></li>
     <li class="active">Roles</li>
     <li class="active">Editar Rol</li>
   </ol>
   @include('partials.messages')
   <div class="page-header">
     <h1>Nuevo Rol</h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Editar Rol
           </div>
          <div class="panel-body">

            {!!Form::model($roles,['route'=>['roles.update',$roles->id_rol],'method'=>'PUT'])!!}
            {{ csrf_field() }}
              <div class="form-group">
                   {!!form::label('Nombre')!!}
                   {!!form::text('etiqueta',$roles->etiqueta,['id'=>'etiqueta','class'=>'form-control','placeholder'=>'Escriba el nombre del rol...'])!!}
              </div>
             

                  {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
                  <button type="button" id='cancelar' name='cancelar' class="btn btn-default btn-sm m-t-10" >Cancelar</button>
                  {!!Form::close()!!}


          </div>
        </div>


     </div>
   </div>

 <script>
   $("#cancelar").click(function(event)
   {
       document.location.href = "{{ route('roles.index')}}";
   });

   $('div.alert').not('.alert-important').delay(3000).fadeOut(350);

 </script>

@endsection
