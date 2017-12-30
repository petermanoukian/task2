<?php $__env->startSection('content'); ?>




<?php echo Form::model($service, ['route' => ['ServiceUpdate.route', $service->id],
'method' => 'PATCH',
'class' => 'form',
]); ?>



<div class ='full div1'>Name

<input type="text" name="service_name" value = <?php echo e($service->service_name); ?>

class='input'>
<?php echo e($service->service_id); ?>

<?php echo e($service->service_name); ?>


</div>


<div class ='full div1'>
	
	
	<button type="submit" >
Update Service
</button>
</div>

<?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>