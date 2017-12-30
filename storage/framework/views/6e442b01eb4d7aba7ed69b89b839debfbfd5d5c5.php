<?php $__env->startSection('content'); ?>



<div class ='full div1'>
<?php if(isset($service_id)): ?>
Accounts <a href = '/account/create/<?php echo e($service_id); ?>'> Add Accounts </a>
<?php else: ?>
Accounts <a href = '/account/create'> Add Accounts </a>
<?php endif; ?>


	</div>

<div class = 'full div1'>
	
	<?php if(count($accounts) > 0): ?>
	<?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
	<div class = 'full div1'>

		<div class ='display65'>
		<?php echo e($ac->name); ?>

		<?php echo e($ac->contact_name); ?>

		

		<?php echo e($ac->description); ?>

	<img src = 	"<?php echo e(URL::to('/')); ?>/imgs/thumb/<?php echo e($ac->logo); ?>" />
		</div>

	<div class ='display15' > 
		<a href = "account/edit/<?php echo e($ac->id); ?>"> &rsaquo; Edit </a> | 
			<a href = "account/show/<?php echo e($ac->id); ?>">  &rsaquo; Details </a>
		</div>

	
		<div class ='display15' >
			<?php echo e(Form::open(['route' => ['MyDelAccount.route', $ac->id], 'method' => 'delete'])); ?>





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