<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Department</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Name Department : </strong> <?php echo e($deperdata->name); ?>

        </div>
      </div>
      <?php $__currentLoopData = $deperdata->department_otdels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department_otdel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-12">

        <div class="form-group">
            <strong>Name Otdels: </strong> <?php echo e($department_otdel->name); ?>

        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-12">
        <a href="<?php echo e(route('department.index')); ?>" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServer\OSPanel\domains\phonebook3\resources\views/depdata/detail.blade.php ENDPATH**/ ?>