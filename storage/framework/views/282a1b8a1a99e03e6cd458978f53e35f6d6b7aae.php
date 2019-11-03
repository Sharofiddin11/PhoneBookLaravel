<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="/search" method="post" role="search">
            <?php echo csrf_field(); ?>
            <div class="input-group" style = "left: 40px;">
                <input type="text" class="form-control" name="q" placeholder="Search users"> 
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            Search
                        </button>
                    </span>

                  <select name = "ST1" class="form-control" style = "width: 300px; height: 35px;">
                        <option>Chose otdels on department</option>
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
        </form>
        <div class="container">
            <?php if(isset($details)): ?>
            <h2>Search result:</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                          <td><?php echo e($user->name); ?></td>
                          <td><?php echo e($user->phone_number); ?></td>
                          <td><?php echo e($user->email); ?></td>
                          <td><?php echo e($user->address); ?></td>
                          <td><a class="btn btn-sm btn-success" href="<?php echo e(route('people.show',$user->id)); ?>">Detail</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php elseif(isset($message)): ?>
            <p><?php echo e($message); ?></p>
            <?php endif; ?>
        </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServer\OSPanel\domains\phonebook3\resources\views/searchdata/index.blade.php ENDPATH**/ ?>