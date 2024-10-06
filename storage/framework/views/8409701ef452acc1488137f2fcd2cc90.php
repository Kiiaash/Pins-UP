




<?php $__env->startSection('mainbody'); ?>
<div class="container shadow-md" style="width:400px; height:130px; float:right; margin:15px 20px;
background:linear-gradient(180deg,#ebebeb,#dbdbdb); border-radius:10px; box-shadow:2px 3px 5px #dbdbdb;">
    <form method="post" action="<?php echo e(route('go.search')); ?>">
        <?php echo csrf_field(); ?>
        <input type="text" name="searchbar" lass="form-control-sm d-block ml-5 position-relative shadow p-3 mb-5 rounded" 
    style="margin:15px 20px; width:350px; border-radius:10px; border:none; height:40px;">
    <?php $__errorArgs = ['searchbar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div style="margin:0px 20px; color:red; font-size:0.8rem;"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input type="submit" name="search" value="Search" class="btn btn-primary btn-sm mx-4">
    </form>
</div>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a href="#">
    <div class="mid-sec">
        <div class="job-bored">
            <h6 class="mt-3"><?php echo e($post->id); ?></h6>
            <h4><?php echo e($post->job_title); ?></h4>
        </div>
        <div>
            <span><img src="<?php echo e(asset('images/heart-empty.png')); ?>" width="30" height="30"></span>
            <span><?php echo e($post->likes); ?></span>
            <span><img src="<?php echo e(asset('images/pin1.png')); ?>" width="30" height="30"></span>

            <ul>
                <a href="#"><img src="<?php echo e(asset('images/avatar.png')); ?>" width="80" height="80"></li></a>
                <span><?php echo e($post->job_poster); ?></span>
            </ul>
            <form method="post" action="<?php echo e(route('destroyer',$post->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <button type="submit" name="delete" class="btn btn-danger btn-sm m-10 d-block position-relative" 
                style="left:-40px; top:-60px;float: right;">X</button>
            </form>
            <form method="GET" action="<?php echo e(route('show.show',$post->id)); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-primary btn-sm position-relative" 
                style="left:-80px; top:-60px;float: right;">View</button>
            </form>
        </div>
    </div>
</a>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div style="position: relative; left:350px;">
    <?php echo e($posts->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('switches/switch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\Laravel course\pinsup\resources\views//dashbored.blade.php ENDPATH**/ ?>