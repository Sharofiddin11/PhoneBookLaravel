<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail of Otdel</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Name Otdel : </strong> <?php echo e($otdeldata->name); ?>

        </div>
      </div>
      <?php $__currentLoopData = $otdeldata->otdel_peoples; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $otdel_people): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-12">

        <div class="form-group">
            <strong>Name of People: </strong> <?php echo e($otdel_people->name); ?>

        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-12">
        <a href="<?php echo e(route('otdel.index')); ?>" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServer\OSPanel\domains\phonebook3\resources\views/otdeldate/detail.blade.php ENDPATH**/ ?>