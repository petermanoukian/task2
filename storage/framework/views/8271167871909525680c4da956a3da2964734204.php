<?php $__env->startSection('content'); ?>

<div class ='full div1'>
<?php echo e($service->service_name); ?> is created with <?php echo e($service->id); ?>

 | <a href = '/service'> View Services</a>
 
  | <a href = '/service/create'> Add Services</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>