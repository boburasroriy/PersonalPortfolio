<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/auth/login.css')); ?>">
</head>
<body>
<div class="container">
    <h1>Login</h1>
    <form method="POST" action="<?php echo e(route('singIn')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group remember-me" >
            <input  type="checkbox" id="remember" name="remember">
            <label   for="remember">Remember Me</label>
        </div>
        <div class="btn">
            <button class="btn" type="submit">Login</button>
        </div>
        <?php if(Session::has('error')): ?>
            <div style="color: red" class="alert alert-danger">
                <?php echo e(Session::get('error')); ?>

            </div>
        <?php endif; ?>
        <div class="register-link">
            Don't have an account? <a href="<?php echo e(route('register')); ?>">Create one</a>
        </div>
    </form>
</div>
</body>
</html>
<?php /**PATH C:\Users\Asus\Desktop\NoName\Personal\resources\views/AuthView/login.blade.php ENDPATH**/ ?>