<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e(config('app.name')); ?></title>
    <link href="../../css/main.css" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
</head>

<body>
   <header>
        <nav class="navbar">
            <ul>
                <li><img src="<?php echo e(asset('images/logo 2 white.png')); ?>" width="80" height="80"></li>
                <li><a href="<?php echo e(asset('/home')); ?>">Home</a></li>
                <li><a href="<?php echo e(asset('/terms')); ?>">Terms</a></li>
                <li><a href="<?php echo e(asset('/setting')); ?>">Setting</a></li>
            </ul>
            <?php if(auth()->guard()->check()): ?>
            <div class="userprofile">
                <ul>
                    <li class="creat-post"><a href="<?php echo e(asset('/create')); ?>">Create a post</a></li>
                    <li class="profile"><a href="<?php echo e(route('profile.show')); ?>" class="text-center"><?php echo e(Auth::user()->email); ?></a></li> 
                    <form action="<?php echo e(route('session.destroy')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button class="log-out" type="submit">Log out</button>
                    </form>
                </ul>
            </div>
            <?php endif; ?>
            <?php if(auth()->guard()->guest()): ?>
            <div class="userprofile-small">
                <ul>
                    <li class="profile-guest"><a href="<?php echo e(asset('/login')); ?>">Login</a></li>
                    <li class="profile-guest"><a href="<?php echo e(asset('/register')); ?>">Register</a></li>
                </ul>
            </div>
            <?php endif; ?>
        </nav>
   </header>
   <main>
        <?php echo $__env->make('switches.messege-alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('mainbody'); ?>
   </main>
</body>
</html><?php /**PATH F:\wamp64\www\Laravel course\pinsup\resources\views/switches/switch.blade.php ENDPATH**/ ?>