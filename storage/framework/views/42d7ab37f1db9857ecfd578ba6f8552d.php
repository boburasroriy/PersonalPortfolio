<link rel="stylesheet" href="<?php echo e(asset('css/nav.css')); ?>">
<nav class="navbar container">
    <a  style="text-decoration:none" href="<?php echo e(route('home')); ?>">
        <div  class="logo">
            Your Name
        </div>
    </a>
    <div class="navbar-right">
        <button class="toggle-mode" id="toggle-theme-button"><i class="fas fa-sun"></i></button>
    <?php if(Route::has('login')): ?>
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(route('profile', auth()->user()->id)); ?>" class="login-link"><?php echo e(auth()->user()->first_name); ?></a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="login-link">Login</a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</nav>


<?php /**PATH C:\Users\Asus\Desktop\NoName\Personal\resources\views/components/layouts/nav.blade.php ENDPATH**/ ?>