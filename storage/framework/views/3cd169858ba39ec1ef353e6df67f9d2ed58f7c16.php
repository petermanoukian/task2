<?php $__env->startSection('content'); ?>

<?php echo Form::open(['url' => '/service/add']); ?>



<div class ='full div1'>Name

<input type="text" name="service_name" value="<?php echo e(old('service_name')); ?>"
class='input'>


</div>


<div class ='full div1'>
	
	
	<button type="submit" >
Add Service
</button>
</div>

<?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>