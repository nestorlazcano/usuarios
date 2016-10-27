@if (count($errors)>0)
	<div class='alert alert-danger' roler='alert'>
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Errores:</strong>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>

	</div>
@endif
@if (Session::has('update'))
    <div class="alert alert-success" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{Session::get('update')}}</strong> Se ha actualizado correctamente.
    </div>
@endif
@if (Session::has('delete'))
    <div class="alert alert-success" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{Session::get('delete')}}</strong> Se ha eliminado correctamente.
    </div>
@endif
@if (Session::has('save'))
    <div class="alert alert-success" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{Session::get('save')}}</strong> Se ha registrado correctamente.
    </div>
@endif
