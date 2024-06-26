<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
</head>
<body>
<h2>Edit Post</h2>

<!-- Form for editing post -->
<form method="POST" action="<?php echo e(route('posts.update', ['post' => $post->id])); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <!-- Display current photo -->
    <img src="<?php echo e(asset('storage/' . $post->photo)); ?>" alt="Current Photo">

    <!-- Input field for new photo -->
    <div>
        <label for="photo">New Photo:</label>
        <input type="file" id="photo" name="photo">
    </div>

    <!-- Input field for updating title -->
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo e($post->title); ?>">
    </div>

    <!-- Input field for updating text -->
    <div>
        <label for="text">Text:</label>
        <textarea id="text" name="text"><?php echo e($post->text); ?></textarea>
    </div>

    <!-- Submit button -->
    <button type="submit">Update Post</button>
</form>
</body>
</html>
<?php /**PATH C:\Users\Asus\Desktop\Personal Website\Personal\resources\views/Posts/edit.blade.php ENDPATH**/ ?>