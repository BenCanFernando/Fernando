
<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">


<div class="container text-center">
	<h1>Lista de Alumnos</h1>
	<br>
	<a class="pull-right" href="{{route('alumnos.create')}} "><button type="button" class="btn btn-primary">Nuevo</button></a>
<div class="table-responsive-sm">
<br>
	<table class="table table-striped table-dark" id="tabla">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Edad</th>
				<th>ci</th>
				<th>Telefono</th>
				<th>Direccion</th>
				<th>Gmail</th>
				<th>Profesion</th>
				<th>Genero</th>
				<th>Fecha de nacimineto</th>
				<th></th>
				<th></th>				
			</tr>
		</thead>
		<tbody>
			@foreach ($alumnos as $a)
			<tr>
				<td>{{$a->nombre}}</td>
				<td>{{$a->apellido}}</td>
				<td>{{$a->edad}}</td>
				<td>{{$a->ci}}</td>
				<td>{{$a->telefono}}</td>
				<td>{{$a->direccion}}</td>
				<td>{{$a->gmail}}</td>
				<td>{{$a->profesion}}</td>
				<td>{{$a->genero}}</td>
				<td>{{$a->fechanac}}</td>
			 <td><a href=""><input type="button" class="btn btn-success" value="Editar"></td>
            <td>
                <form method="POST" action="{{ url("alumnos/{$a->id}") }}">
			      @csrf
			      @method('DELETE')
			      <button type="submit" class="btn btn-danger">Eliminar</button>
			    </form>
                </td>
            </tr>
			@endforeach
		</tbody>
	</table>
    <div class="d-flex justify-content-end">
    {{ $alumnos->links() }}
    </div>
   </div> 
  </tbody>
 </div>
</div>