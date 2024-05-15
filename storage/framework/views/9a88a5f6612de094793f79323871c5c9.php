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
<div style="height: 500px;width: 100%;">
<img style="height: 100%" src="<?php echo e(asset('storage/' . $post->photo)); ?> " alt="photos">
</div>
<p><?php echo e($post->category->name); ?></p>
<h2><?php echo e($post->title); ?></h2>
<p><?php echo e($post->text); ?></p>

<?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div style="color: #a0aec0;">
    <p><strong><?php echo e($comment->user->first_name); ?></strong> commented at <?php echo e($comment->created_at); ?></p>
    <p><?php echo e($comment->content); ?></p>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<form action="<?php echo e(route('posts.comments.store', $post->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="content"></label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>

    <button type="submit">Send</button>
</form>

</body>
</html>
<?php /**PATH C:\Users\Asus\Desktop\Personal Website\Personal\resources\views/Posts/show.blade.php ENDPATH**/ ?>