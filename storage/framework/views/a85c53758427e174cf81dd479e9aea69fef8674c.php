<?php $__env->startSection('content'); ?>



<div class ='full div1'>
Services <a href = '/service/create'> Add Services </a>
	</div>

<div class = 'full div1'>
	
	<?php if(count($services) > 0): ?>
	<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
	<div class = 'full div1'>

		<div class ='display55'>
		<?php echo e($service->service_name); ?>



			<a href = "account/create/<?php echo e($service->id); ?>"> Add Account</a>
		|  <a href = "account/<?php echo e($service->id); ?>"> View This accounts</a>

		</div>

	<div class ='display15'> 
		<a href = "service/edit/<?php echo e($service->id); ?>"> Edit </a>
	
		</div>

	
		<div class ='display15'>
			<?php echo e(Form::open(['route' => ['MyDelService.route', $service->id], 'method' => 'delete'])); ?>





			<?php echo Form::submit('Delete', array('class'=>'btn',
			'Onclick' => 'return ConfirmDelete();')); ?>



				<?php echo Form::close(); ?>

		</div>
	</div>
	
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php else: ?>
    No Services
    
    
    
	<?php endif; ?>
	
	
</div>

<?php $__env->stopSection(); ?>


<script>
function ConfirmDelete()
{
var x = confirm("Are you sure you want to delete?");
if (x)
return true;
else
return false;
}
</script>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>