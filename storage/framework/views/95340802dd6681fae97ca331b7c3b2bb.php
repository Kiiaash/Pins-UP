

<?php $__env->startSection('mainbody'); ?>
    <h1 style="margin:15px 20px;">Add your Job here</h1>
    <form action="<?php echo e(route('formvalid')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <!-- using the route name -->
        <label class="form-label-lg d-block position-relative " style="margin:15px 20px;">Job Title</label>
        <input type="text" name="jobtitle" class="form-control-sm d-block ml-5 position-relative" style="margin:15px 20px;">
        <?php $__errorArgs = ['jobtitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div style="margin:15px 20px; color:red; font-size:0.8rem;"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <label class="form-label-lg d-block position-relative " style="margin:15px 20px;">Job poster</label>
        <input type="text" name="jobposter" class="form-control-sm d-block ml-5 position-relative" style="margin:15px 20px;">
        <?php $__errorArgs = ['jobposter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div style="margin:15px 20px; color:red; font-size:0.8rem;"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <label class="form-label-lg d-block position-relative" style="left:20px;">Description</label>
        <textarea name="jobdes" class="form-control-lg d-block position-relative fs-6" style="margin:15px 20px; width:550px;
        height:150px;"></textarea>
        <?php $__errorArgs = ['jobdes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div style="margin:15px 20px; color:red; font-size:0.8rem;"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <label class="form-label-lg d-block position-relative" style="left:20px;">Requierments</label>
        <textarea name="requirments" class="form-control-lg d-block position-relative text-sm fs-6" style="margin:15px 20px;
        width:550px; height:150px;"></textarea>
        <?php $__errorArgs = ['requirments'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div style="margin:15px 20px; color:red; font-size:0.8rem;"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input type="submit" name="register" value="add" class="btn btn-primary d-block" style="margin:15px 20px;">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('switches/switch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\Laravel course\pinsup\resources\views/privacy.blade.php ENDPATH**/ ?>