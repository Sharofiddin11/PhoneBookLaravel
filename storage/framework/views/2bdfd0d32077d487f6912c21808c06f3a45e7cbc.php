<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New People</h3>
      </div>
    </div>

    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    <?php endif; ?>

    <form action="<?php echo e(route('people.store')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <div class="row">
        <div class="col-md-12">
          <strong>Name people:</strong>
          <input type="text" name="name" class="form-control" placeholder="Name People">
        </div>
        <div class="col-md-12">
          <strong>Phone number</strong>
          <input type="text" name="phone_number" class="form-control" placeholder="Phone number">
        </div>
        <div class="col-md-12">
          <strong>email</strong>
          <input type="text" name="email" class="form-control" placeholder="email">
        </div>
        <div class="col-md-12">
          <strong>address</strong>
          <input type="text" name="address" class="form-control" placeholder="address">
        </div>



        <div class="col-md-12">
          <strong>Chose Otdel :</strong>
          <select class="form-control" name="otdel_id">
            <?php $__currentLoopData = $deperdatas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deperdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
              <optgroup label = "<?php echo e($deperdata->name); ?>:"></optgroup>
              <?php $__currentLoopData = $otdeldates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $otdeldata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                    <?php if($otdeldata->department_id == $deperdata->id): ?>
                       <option><?php echo e($otdeldata->name); ?></option>
                    <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div> 
        
        <br>
        <br>
        <br>

        <div class="col-md-12">
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServer\OSPanel\domains\phonebook3\resources\views/peopledate/create.blade.php ENDPATH**/ ?>