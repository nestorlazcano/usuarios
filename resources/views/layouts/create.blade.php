@extends('layouts.master')

@section('title','Nuevo Usuario')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb">
     <li href="{{url("/")}}"></li>
     <li class="active">Usuarios</li>
     <li class="active">Nuevo Usuario</li>
   </ol>
   @include('partials.messages')
   <div class="page-header">
     <h1>Nuevo Usuario</h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Nuevo Usuario
           </div>
          <div class="panel-body">

            {!!Form::open(['route'=>'users.store','method'=>'POST'])!!}
            {{ csrf_field() }}
              <div class="form-group">
                   {!!form::label('Nombre(s)')!!}
                   {!!form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Escriba el(los) nombre(s)...'])!!}
              </div>
              <div class="form-group">
                     {!!form::label('Apellido Paterno')!!}
                     {!!form::text('apellido_paterno',null,['id'=>'apellido_paterno','class'=>'form-control','placeholder'=>'Escriba el primer apellido...'])!!}
              </div>
              <div class="form-group">
                     {!!form::label('Apellido Materno')!!}
                     {!!form::text('apellido_materno',null,['id'=>'apellido_materno','class'=>'form-control','placeholder'=>'Escriba el segundo apellido...'])!!}
              </div>
              <div class="form-group">
                     {!!form::label('Usuario')!!}
                     {!!form::text('usuario',null,['id'=>'usuario','class'=>'form-control','placeholder'=>'Escriba el nombre de usuario...'])!!}
              </div>
              <div class="form-group">
                {!!form::label('Tipo')!!}
                {!!form::select('id_rol',$roles,null,['id'=>'id_rol','class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                     {!!form::label('Correo')!!}
                     {!!form::text('correo',null,['id'=>'correo','class'=>'form-control','placeholder'=>'Escriba el correo...'])!!}
              </div>
              <div class="form-group">
                     {!!form::label('Contraseña')!!}
                     {!!form::password('password',['id'=>'password','class'=>'form-control','placeholder'=>'Escriba la contraseña...'])!!}
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
       document.location.href = "{{ route('users.index')}}";
   });

   $('div.alert').not('.alert-important').delay(3000).fadeOut(350);

 </script>

@endsection
