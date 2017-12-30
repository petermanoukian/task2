<?php $__env->startSection('content'); ?>



<?php echo Form::open([  'route' => ['AddAccountImaged.route'],
  'method' => 'post' ,
'files' => true]); ?>



<div class ='full div1'>
<?php if(isset($serviceid) && $serviceid != ""): ?>
<?php echo Form::select('service_id', $services, $serviceid ); ?>

<?php else: ?>
<?php echo Form::select('service_id', $services, null ); ?>

<?php endif; ?>
</div>


<div class ='full div1'>Name

<input type="text" name="name" value="<?php echo e(old('name')); ?>"
class='input' required = 'required' >


</div>

<div class ='full div1'>
	

<input type = 'file' name = 'logo' required>
</div>



<div class ='full div1'>
Contact Name <input type="text" name="contact_name" value="<?php echo e(old('contact_name')); ?>"
class='input'>

</div>



<div class ='full div1'>
<p> Details </p>
<?php echo e(Form::textarea('description')); ?>

</div>



<div class ='full div1'>
	
	
	<button type="submit" >
Add Account
</button>
</div>

<?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>