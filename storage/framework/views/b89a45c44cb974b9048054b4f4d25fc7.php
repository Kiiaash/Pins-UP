

<?php $__env->startSection('mainbody'); ?>
<div class="mid-sec">
    <div class="job-show">
        <h6><?php echo e($idd->id); ?></h6>
        <h4><?php echo e($idd->job_title); ?></h4>
        <p><?php echo e($idd->description); ?></p>
        <p><?php echo e($idd->requirments); ?></p>
    </div>
    <div>
        <span><img src="<?php echo e(asset('images/heart-empty.png')); ?>" width="30" height="30"></span>
        <span><?php echo e($idd->likes); ?></span>
        <span><img src="<?php echo e(asset('images/pin1.png')); ?>" width="30" height="30"></span>

        <ul>
            <a href="#"><img src="<?php echo e(asset('images/avatar.png')); ?>" width="80" height="80"></li></a>
            <span><?php echo e($idd->job_poster); ?></span>
        </ul>
    </div>
    <?php if(auth()->guard()->check()): ?>
        <a  href="<?php echo e(route('editr.edit',$idd->id)); ?>" class="btn mx-3 btn-primary btn-sml mt-3 position-relative" style="left:40px;
        top:-20px; text-decoration:none; color:#fff;">EDIT</a>
   
</div>
<div style="width:700px; min-height:150px; background-color:#ebebeb; border-radius:10px;
margin:30px 95px;">
    <form action="<?php echo e(route('job.comments.store',$idd->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <textarea name="comment" class="form-control fs-4"></textarea>
            <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div style="margin:15px 20px; color:red; font-size:0.8rem;"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input type="submit" class="btn btn-primary btn-sm mx-1 mt-2">
    </form>
    <?php $__currentLoopData = $idd->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div  style="width:90%; height:150px; border-top:solid 1px #555;
    margin:10px auto;">
        <p><?php echo e($coms->comment); ?></p>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('switches/switch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\Laravel course\pinsup\resources\views/jobs.blade.php ENDPATH**/ ?>