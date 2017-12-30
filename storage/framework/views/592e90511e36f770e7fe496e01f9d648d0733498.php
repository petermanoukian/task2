<?php $__env->startSection('content'); ?>


<?php echo e($acc->id); ?>



<?php echo Form::model($acc, ['route' => ['AccountUpdate.route', $acc->id],
'method' => 'PATCH',
'files' => true,
]); ?>



<div class ='full div1'>



<?php echo Form::select('service_id', $servicesdrop, $serviceid ); ?>


</div>


<div class ='full div1'>Name

<input type="text" name="name" value = "<?php echo e($acc->name); ?>"
class='input' required = 'required' >


</div>

<div class ='full div1'>
	<?php echo Form::file('logo', null,
['required']); ?>


<input type = 'text' name = 'logo1' value = "<?php echo e($acc->logo); ?>" />
</div>



<div class ='full div1'>
Contact Name <input type="text" name="contact_name" value = "<?php echo e($acc->contact_name); ?>"
class='input'>

</div>



<div class ='full div1'>
<p> Details </p>
<?php echo e(Form::textarea('description')); ?>

</div>



<div class ='full div1'>
	
	
	<button type="submit" >
Edit Account
</button>
</div>

<?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>