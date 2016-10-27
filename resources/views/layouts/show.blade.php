@extends('layouts.master')

@section('title','Editar Usuario')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb">
     <li href="{{url("/")}}"></li>
     <li class="active">Usuarios</li>
     <li class="active">Eliminar Usuario</li>
   </ol>
   <div class="page-header">
     <h1>Eliminar Usuario</h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Eliminar Usuario
           </div>
          <div class="panel-body">

            {!!Form::open(['route'=>['users.destroy',$usuarios->id_usuario],'method'=>'DELETE'])!!}

             <div class="form-group">
               <label for="exampleInputPassword1">DESEA ELIMINAR ESTE REGISTRO:</label>
             </div>
             <div class="form-group">
                    {!!form::label('Nombre completo:')!!}
                    {!!$usuarios->nombre!!} {!!$usuarios->apellido_paterno!!} {!!$usuarios->apellido_materno!!}
               </div>
               <div class="form-group">
                      {!!form::label('Usuario:')!!}
                      {!!$usuarios->usuario!!}
               </div>
               <div class="form-group">
                      {!!form::label('Tipo:')!!}
                      {!!$usuarios->etiqueta!!}
               </div>
               <div class="form-group">
                      {!!form::label('Correo:')!!}
                      {!!$usuarios->correo!!}
               </div>
                 {!!form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger btn-sm m-t-10'])!!}

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
   </script>

@endsection
