<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Information of People</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Name People: </strong> <?php echo e($peopledata->name); ?>

        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Phone numbers: </strong> <?php echo e($peopledata->phone_number); ?>

        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Email: </strong> <?php echo e($peopledata->email); ?>

        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Address: </strong> <?php echo e($peopledata->address); ?>

        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Name of Otdel: </strong> <?php echo e($otdeldata->name); ?>

        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Name of Department: </strong> <?php echo e($deperdata->name); ?>

        </div>
      </div>

      <div class="col-md-12">
        <a href="<?php echo e(route('otdel.index')); ?>" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServer\OSPanel\domains\phonebook3\resources\views/peopledate/detail.blade.php ENDPATH**/ ?>