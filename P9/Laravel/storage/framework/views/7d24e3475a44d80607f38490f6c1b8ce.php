<!doctype html>
<html lang="en">
  <head>
    <title>My Laravel</title>
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>
  <body>
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
      <?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
      <?php echo $__env->make('layouts.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
		</div>
	</div>
    <br/>
	<div class="row">
		<div class="col-md-8">
      <?php echo $__env->yieldContent('content'); ?>
		</div>
		<div class="col-md-4">
      <?php echo $__env->make('layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
		</div>
	</div>
    <br/>
	<div class="row">
		<div class="col-md-12">
      <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
		</div>
	</div>
  </div>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
  </body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/praktikum/pemweb1/P9/Laravel/resources/views/layouts/index.blade.php ENDPATH**/ ?>