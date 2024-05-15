<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
<p>Create a new post</p>
<form method="POST" action="<?php echo e(route('posts.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
    </div>
    <select name="category_id" >
         <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($category->id); ?>"> <?php echo e($category->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <div>
        <label for="text">Text:</label>
        <textarea id="text" name="text" required></textarea>
    </div>
    <div>
        <label for="photo">Photo:</label>
        <input type="file" id="photo" name="photo" required>
    </div>
    <button type="submit">Create Post</button>
</form>

</body>
</html>
<?php /**PATH C:\Users\Asus\Desktop\Personal Website\Personal\resources\views/Posts/create.blade.php ENDPATH**/ ?>