@include('menu')
@include('app');
<div class="container">
	<div class="jumbotron">
   <div class="form-row align-items-center">
    <div class="form-group col-md-12">
	<h1>Editar registro</h1>
	<br>
	<form action="{{url('/cursos/'.$cursos->id)}}" method="post" enctype="multipart/from-data">
	@csrf
	{{method_field('PATCH')}}
	<label for="nombre">Nombre de alumno</label>
	<input type="text" class="form-control" name="nombre" id="nombre" value="{{$cursos->nombre}}">
	<label for="descripcion">Descripción</label>
	<input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$cursos->descripcion}}">
	<label for="fechainic">Fecha de inicio</label>
	<input type="date" class="form-control" name="fechainic" id="fechainic" value="{{$cursos->fechainic}}">
	<label for="fechafin">Fecha de finalización</label>
	<input type="date" class="form-control" name="fechafin" id="fechafin" value="{{$cursos->fechafin}}">
	<label for="estado">Estado</label>
	<input type="text" class="form-control" name="estado" id="estado" value="{{$cursos->estado}}">
	<br>
    <input type="submit" class="btn btn-success" value="Guardar">
    <a class="pull-right" href="{{route('cursos.index')}} "><button type="button" class="btn btn-danger">Cancelar</button></a>
		
	</form>
</div>
</div>
</div>
</div>
