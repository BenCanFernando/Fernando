@include('menu')
@include('app');
<div class="container">
<div class="jumbotron">
   <div class="form-row align-items-center">
    <div class="form-group col-md-12">
	<h1>Detalles del curso</h1>
	<form action="{{url('/cursos')}}" method="post" enctype="multipart/from-data">
	@csrf
	<label for="nombre">Nombre de alumno</label>
	<input type="text" class="form-control" name="nombre" id="nombre" value="{{$cursos->nombre}}" disabled="true">
	<label for="descripcion">Descripción</label>
	<input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$cursos->descripcion}}" disabled="true">
	<label for="fechainic">Fecha de inicio</label>
	<input type="date" class="form-control" name="fechainic" id="fechainic" value="{{$cursos->fechainic}}" disabled="true">
	<label for="fechafin">Fecha de finalización</label>
	<input type="date" class="form-control" name="fechafin" id="fechafin" value="{{$cursos->fechafin}}" disabled="true">
	<label for="estado">Estado</label>
	<input type="text" class="form-control" name="estado" id="estado" value="{{$cursos->estado}}" disabled="true">
	<br>
    <a class="pull-right" href="{{route('cursos.index')}} "><button type="button" class="btn btn-warning">Volver</button></a>
		
	</form>
</div>
</div>
</div>
</div>