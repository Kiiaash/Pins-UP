<?php if(session()->has('post')): ?>
<div class="alert alert-primary"><?php echo e(session('post')); ?></div>
<?php endif; ?>
<?php if(session()->has('del')): ?>
<div class="alert alert-danger"><?php echo e(session('del')); ?></div>
<?php endif; ?>
<?php if(session()->has('edit')): ?>
<div class="alert alert-info"><?php echo e(session('edit')); ?></div>
<?php endif; ?>
<?php if(session()->has('usercreate')): ?>
<div class="alert alert-success" role="alert"><?php echo e(session('usercreate')); ?></div>
<?php endif; ?>
<?php if(session()->has('comseccessful')): ?>
<div class="alert alert-success" role="alert"><?php echo e(session('comseccessful')); ?></div>
<?php endif; ?>
<?php if(session()->has('login')): ?>
<div class="alert alert-info" role="alert"><?php echo e(session('login')); ?></div>
<?php endif; ?><?php /**PATH F:\wamp64\www\Laravel course\pinsup\resources\views/switches/messege-alert.blade.php ENDPATH**/ ?>