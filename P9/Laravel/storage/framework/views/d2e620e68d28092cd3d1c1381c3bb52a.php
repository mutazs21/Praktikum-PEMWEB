<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $ar_staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card" style="width: 15rem;">
  <img src="<?php echo e(asset('images/profile.jpg')); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo e($row->nama); ?></h5>
    <p class="card-text"><?php echo e($row->nip); ?></p>
      <p class="card-text"><?php echo e($row->gender); ?></p>
    <a href="#" class="btn btn-primary">Detail</a>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/praktikum/pemweb1/P9/Laravel/resources/views/staff/index.blade.php ENDPATH**/ ?>