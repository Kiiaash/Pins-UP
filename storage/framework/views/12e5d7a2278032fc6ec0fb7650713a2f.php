

<?php $__env->startSection('mainbody'); ?>

    <h1>this is the user profile</h1>
    <?php $__currentLoopData = $pages->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="#">
        <div class="mid-sec">
            <div class="job-bored">
                <h6 class="mt-3"><?php echo e($page->user_id); ?></h6>
                <h4><?php echo e($page->job_title); ?></h4>
            </div>
            <div>
                <span><img src="<?php echo e(asset('images/heart-empty.png')); ?>" width="30" height="30"></span>
                <span><?php echo e($user->likes); ?></span>
                <span><img src="<?php echo e(asset('images/pin1.png')); ?>" width="30" height="30"></span>
    
                <ul>
                    <a href="#"><img src="<?php echo e(asset('images/avatar.png')); ?>" width="80" height="80"></li></a>
                    <span><?php echo e($user->job_poster); ?></span>
                </ul>
                <?php if(auth()->guard()->check()): ?>
                <form method="post" action="<?php echo e(route('destroyer',$user->user_id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" name="delete" class="btn btn-danger btn-sm m-10 d-block position-relative" 
                    style="left:-40px; top:-60px;float: right;">X</button>
                </form>
                <?php endif; ?>
                <form method="GET" action="<?php echo e(route('show.show',$user->user_id)); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-primary btn-sm position-relative" 
                    style="left:-80px; top:-60px;float: right;">View</button>
                </form>
               
            </div>
        </div>
    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('switches.switch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\Laravel course\pinsup\resources\views/userprofile/showprofile.blade.php ENDPATH**/ ?>