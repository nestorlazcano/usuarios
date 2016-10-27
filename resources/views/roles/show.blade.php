@extends('layouts.master')

@section('title','Editar Rol')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb">
     <li href="{{url("/")}}"></li>
     <li class="active">Rol</li>
     <li class="active">Eliminar Rol</li>
   </ol>
   <div class="page-header">
     <h1>Eliminar Rol</h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Eliminar Rol
           </div>
          <div class="panel-body">

            {!!Form::open(['route'=>['roles.destroy',$roles->id_rol],'method'=>'DELETE'])!!}

             <div class="form-group">
               <label for="exampleInputPassword1">DESEA ELIMINAR ESTE REGISTRO:</label>
             </div>
             <div class="form-group">
                    {!!form::label('Clave:')!!}
                    {!!$roles->id_rol!!}
               </div>
               <div class="form-group">
                      {!!form::label('Nombre:')!!}
                      {!!$roles->etiqueta!!}
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
         document.location.href = "{{ route('roles.index')}}";
     });
   </script>

@endsection
