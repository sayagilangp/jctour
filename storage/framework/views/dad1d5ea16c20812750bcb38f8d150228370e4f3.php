<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <?php echo $__env->make('includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldPushContent('prepend-style'); ?>
  <?php echo $__env->yieldPushContent('addon-style'); ?>
</head>

<body>

  <?php echo $__env->make('includes.navbar-alternate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

  <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldPushContent('prepend-script'); ?>

  <?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldPushContent('addon-script'); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\travel\resources\views/layouts/checkout.blade.php ENDPATH**/ ?>