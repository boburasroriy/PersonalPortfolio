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
<form method="POST" action="<?php echo e(route('projectPosts.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div>
        <label for="portfolio_title">Portfolio title:</label>
        <input type="text" id="portfolio_title" name="portfolio_title" required>
    </div>
    <div>
        <label for="portfolio_text">Text:</label>
        <textarea id="portfolio_text" name="portfolio_text" required></textarea>
    </div>
    <div>
        <label for="portfolio_photo">Portfolio_photo:</label>
        <input type="file" id="portfolio_photo" name="portfolio_photo" required>
    </div>
    <button type="submit">Create Project Post</button>
</form>

</body>
</html>
<?php /**PATH C:\Users\Asus\Desktop\Personal Website\Personal\resources\views/Projects/create.blade.php ENDPATH**/ ?>