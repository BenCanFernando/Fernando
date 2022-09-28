@include('app')
@include('menu')
	@if (count($errors)>0)
<div class="alert alert-danger" role="aler">
	<u>
		@foreach ($errors->all() as $error)
		<li>
			{{$error}}
		</li>
		@endforeach
	</u>
@endif
</div></div>
<div class="container">

	<div class="jumbotron">
   <div class="form-row align-items-center">
    <div class="form-group col-md-12">
	<h1>Registrar curso</h1>
	<form action="{{url('/cursos')}}" method="post" enctype="multipart/from-data">
	@csrf
	<label for="nombre">Nombre de alumno</label>
	<input type="text" class="form-control" name="nombre" id="nombre">
	<label for="descripcion">Descripción</label>
	<input type="text" class="form-control" name="descripcion" id="descripcion">
	<label for="fechainic">Fecha de inicio</label>
	<input type="date" class="form-control" name="fechainic" id="fechainic">
	<label for="fechafin">Fecha de finalización</label>
	<input type="date" class="form-control" name="fechafin" id="fechafin">
	<label for="estado">Estado</label>
	<input type="text" class="form-control" name="estado" id="estado">
	<br>
    <input type="submit" class="btn btn-success" value="Guardar">
    <a class="pull-right" href="{{route('cursos.index')}} "><button type="button" class="btn btn-danger">Cancelar</button></a>
		
	</form>
</div>
</div>
</div>
</div>
