@include('app')
@include('menu')
<div class="text-center">
	@include('flash::message')
	<h1>Lista de Cursos</h1>
</div>
<div class="container">
	<a class="inline my-2 my-lg-3 float-left" href="{{route('cursos.create')}}"><button type="button" class="btn btn-success">Nuevo</button></a>
		<form class="form-inline my-2 my-lg-0 float-right">
              <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
              <button class="btn btn-primary" type="submit">Buscar</button>
              </form>
              <br>
<div class="table-responsive-sm">
	<table class="table table-hover" id="tabla">
		<thead>
		<tr class="table-secondary">
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Fecha de inicio</th>
				<th>Fecha fin</th>
				<th>Estado</th>
				<th></th>				
			</tr>
		</thead>
		<tbody>
			@foreach ($cursos as $a)
			<tr>
				<td>{{$a->nombre}}</td>
				<td>{{$a->descripcion}}</td>
				<td>{{$a->fecha_inicio}}</td>
				<td>{{$a->fecha_fin}}</td>
				<td>@switch(true)
				@case($a->estado =='En curso')
				<span class="badge badge-success">{{$a->estado}}</span>
				@break</td>
				@case($a->estado =='Terminado')
				<span class="badge badge-danger">{{$a->estado}}</span>
				@break</td>
				@case($a->estado =='Proximamente')
				<span class="badge badge-primary">{{$a->estado}}</span>
				@break</td>
				@endswitch
				<td>
			 <div class="btn-group">
				 <a href="{{route('cursos.show', $a->id )}}"><input type="submit" class="btn btn-info" value="Ver"> </a>
			 	<a href="{{url('/cursos/'.$a->id.'/edit')}}">
			 	<input type="submit"  class="btn btn-warning mr-1 ml-1" value="Editar">
			 	</a>
                <form method="POST" action="{{ url("cursos/{$a->id}") }}">
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
   </div> 
  </tbody>
 </div>
</div>