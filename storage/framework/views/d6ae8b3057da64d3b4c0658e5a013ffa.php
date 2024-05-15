<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
<img src="<?php echo e(asset('storage/' . $projectPost->portfolio_photo)); ?> " alt="photos">
<h2><?php echo e($projectPost->portfolio_title); ?></h2>
<p><?php echo e($projectPost->portfolio_text); ?></p>

</body>
</html>

<?php /**PATH C:\Users\Asus\Desktop\Personal Website\Personal\resources\views/Projects/show.blade.php ENDPATH**/ ?>