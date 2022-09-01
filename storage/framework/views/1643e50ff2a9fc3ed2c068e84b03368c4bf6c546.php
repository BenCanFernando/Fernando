
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/estilos.css')); ?>">


<div class="container text-center">
	<h1>Lista de Alumnos</h1>
	<br>
	<a class="pull-right" href="<?php echo e(route('alumnos.create')); ?> "><button type="button" class="btn btn-primary">Nuevo</button></a>
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
			<?php $__currentLoopData = $alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($a->nombre); ?></td>
				<td><?php echo e($a->apellido); ?></td>
				<td><?php echo e($a->edad); ?></td>
				<td><?php echo e($a->ci); ?></td>
				<td><?php echo e($a->telefono); ?></td>
				<td><?php echo e($a->direccion); ?></td>
				<td><?php echo e($a->gmail); ?></td>
				<td><?php echo e($a->profesion); ?></td>
				<td><?php echo e($a->genero); ?></td>
				<td><?php echo e($a->fechanac); ?></td>
			 <td><a href=""><input type="button" class="btn btn-success" value="Editar"></td>
            <td>
                <form method="POST" action="<?php echo e(url("alumnos/{$a->id}")); ?>">
			      <?php echo csrf_field(); ?>
			      <?php echo method_field('DELETE'); ?>
			      <button type="submit" class="btn btn-danger">Eliminar</button>
			    </form>
                </td>
            </tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
    <div class="d-flex justify-content-end">
    <?php echo e($alumnos->links()); ?>

    </div>
   </div> 
  </tbody>
 </div>
</div><?php /**PATH C:\Users\Dell\Documents\Laravel\Aplicacion\resources\views/alumnos/index.blade.php ENDPATH**/ ?>