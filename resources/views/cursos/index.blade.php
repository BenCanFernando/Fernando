@include('app')
@include('menu')
<div class="text-center">
	@include('flash::message')
	<h1>Lista de Cursos</h1>
</div>
<div class="container">
	<a class="inline my-2 my-lg-3 float-left" href=""><button type="button" class="btn btn-success">Nuevo</button></a>
		<form class="form-inline my-2 my-lg-0 float-right">
              <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
              <button class="btn btn-primary" type="submit">Buscar</button>
              </form>
              <br>
<div class="table-responsive">
	<table class="table table-hover" id="tabla">
		<thead>
		<tr class="table-secondary">
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Fecha de inicio</th>
				<th>Fecha fin</th>
				<th>Estado</th>
				<th>Opciones</th>				
			</tr>
		</thead>
		<tbody>
			@foreach ($cursos as $a)
			<tr>
				<td>{{$a->nombre}}</td>
				<td>{{$a->descripcion}}</td>
				<td>{{$a->fecha_inicio}}</td>
				<td>{{$a->fecha_fin}}</td>
				<td>{{$a->estado}}</td>
				
			 <td>
			 <div class="btn-group">
				 <a href="{{route('alumnos.show', $a->id )}}"><input type="submit" class="btn btn-info" value="Ver"> </a>
			 	<a href="{{url('/alumnos/'.$a->id.'/edit')}}">
			 	<input type="submit"  class="btn btn-warning mr-1 ml-1" value="Editar">
			 	</a>
                <form method="POST" action="{{ url("alumnos/{$a->id}") }}">
			      @csrf
			      @method('DELETE')
			      <input type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro?')" value="Borrar">
			    </form>
                </div>
                </td>
            </tr>
			@endforeach
		</tbody>
	</table>

   </div> 
  </tbody>
 </div>
</div>