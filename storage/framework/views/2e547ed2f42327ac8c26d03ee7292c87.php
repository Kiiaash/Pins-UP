

<?php $__env->startSection('mainbody'); ?>
    <h1>this is registration</h1>
    <form action="<?php echo e(route('user.signup')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label class="form-label mx-4">Name:</label> 
            <input type="text" class="form-control mx-4 w-50" name="name">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div style="margin:15px 20px; color:red; font-size:0.8rem;"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label class="form-label mx-4">Email:</label>
            <input type="email" class="form-control mx-4 w-50" name="email">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div style="margin:15px 20px; color:red; font-size:0.8rem;"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
        </div>
        <div class="mb-3">
            <label class="form-label mx-4">Password:</label>
            <input type="password" class="form-control mx-4 w-50" name="password">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div style="margin:15px 20px; color:red; font-size:0.8rem;"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  
        </div>
        <div class="mb-3">
            <label class="form-label mx-4">Confirm Password:</label>
            <input type="password" class="form-control mx-4 w-50" name="password_confirmation">
            <?php $__errorArgs = ['conpass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div style="margin:15px 20px; color:red; font-size:0.8rem;"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  
        </div>
        <input type="submit" class="btn btn-primary btn-primary-lg mx-4" name="adduser" value="Sign Up">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('switches/switch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\Laravel course\pinsup\resources\views/userfiles/register.blade.php ENDPATH**/ ?>