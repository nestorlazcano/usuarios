@extends('layouts.master')

@section('title','Editar Usuario')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb">
     <li href="{{url("/")}}"></li>
     <li class="active">Usuarios</li>
     <li class="active">Editar Usuario</li>
   </ol>
   @include('partials.messages')
   
   <div class="page-header">
     <h1>Editar Usuario</h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Editar Usuario
           </div>
          <div class="panel-body">

            {!!Form::model($usuarios,['route'=>['users.update',$usuarios->id],'method'=>'PUT'])!!}

 	           <div class="form-group">
                   {!!form::label('Nombre(s)')!!}
                   {!!form::text('nombre',$datos->nombre,['id'=>'nombre','class'=>'form-control','placeholder'=>'Escriba el(los) nombre(s)...'])!!}
              </div>
              <div class="form-group">
                     {!!form::label('Apellido Paterno')!!}
                     {!!form::text('apellido_paterno',$datos->apellido_paterno,['id'=>'apellido_paterno','class'=>'form-control','placeholder'=>'Escriba el primer apellido...'])!!}
              </div>
              <div class="form-group">
                     {!!form::label('Apellido Materno')!!}
                     {!!form::text('apellido_materno',$datos->apellido_materno,['id'=>'apellido_materno','class'=>'form-control','placeholder'=>'Escriba el segundo apellido...'])!!}
              </div>
              <div class="form-group">
                     {!!form::label('Usuario')!!}
                     {!!form::text('usuario',$usuarios->name,['id'=>'usuario','class'=>'form-control','readonly'=>'readonly','placeholder'=>'Escriba el(los) nombre(s)...'])!!}
              </div>
              <div class="form-group">
                {!!form::label('Tipo')!!}
                {!!Form::select('id_rol',$roles,null,['id'=>'id_rol','class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                     {!!form::label('Correo')!!}
                     {!!form::text('correo',$usuarios->email,['id'=>'correo','class'=>'form-control','readonly'=>'readonly','placeholder'=>'Escriba el correo...'])!!}
              </div>
              <div class="form-group">
                     {!!form::label('Contraseña')!!}
                     {!!form::password('password',['id'=>'password','class'=>'form-control','placeholder'=>'Escriba la contraseña...'])!!}
              </div>


                  {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-primary btn-sm m-t-10'])!!}
                  <button type="button" id='cancelar' name='cancelar' class="btn btn-default btn-sm m-t-10" >Cancelar</button>
                  {!!Form::close()!!}

          </div>
        </div>


     </div>
   </div>
 <script>
   $("#cancelar").click(function(event)
   {
       document.location.href = "{{ route('users.index')}}";
   });

   $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
 </script>

@endsection
