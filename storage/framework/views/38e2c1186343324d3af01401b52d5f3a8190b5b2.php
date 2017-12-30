<?php $__env->startSection('content'); ?>

<div class ='full div1'>
<?php echo e($acs->name); ?> is created with <?php echo e($acs->id); ?>

 | <a href = '/account'> View Account</a>
 
  | <a href = '/account/create'> Add Account</a>
</div>
<div class ='full div1'>
<?php echo e($acs->description); ?>

</div>

<div class ='full div1'>
Service <?php echo e($acs->services->service_name); ?>

</div>


<div class ='full div1'>
<img src = 	"<?php echo e(URL::to('/')); ?>/imgs/<?php echo e($acs->logo); ?>" />
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>