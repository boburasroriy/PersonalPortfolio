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

<form method="POST" action="<?php echo e(route('projectPosts.update', ['projectPost' => $projectPost->id])); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <img src="<?php echo e(asset('storage/' . $projectPost->portfolio_photo)); ?> " alt="photos">

    <div>
        <label for="portfolio_photo">New Photo:</label>
        <input type="file" id="portfolio_photo" name="portfolio_photo">
    </div>

    <div>
        <label for="portfolio_title">Title:</label>
        <input type="text" id="portfolio_title" name="portfolio_title" value="<?php echo e($projectPost->portfolio_title); ?>">
    </div>

    <div>
        <label for="portfolio_text">Text:</label>
        <textarea id="portfolio_text" name="portfolio_text"><?php echo e($projectPost->portfolio_text); ?></textarea>
    </div>

    <button type="submit">Update Post</button>
</form>
</body>
</html>

<?php /**PATH C:\Users\Asus\Desktop\Personal Website\Personal\resources\views/Projects/edit.blade.php ENDPATH**/ ?>