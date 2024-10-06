<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <h1><?php echo e($user["user"]); ?></h1>
   <h1><?php echo e($user["age"]); ?></h1>
   <hr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH F:\wamp64\www\Laravel course\pinsup\resources\views/newpage.blade.php ENDPATH**/ ?>