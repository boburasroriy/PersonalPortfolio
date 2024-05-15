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
<form action="<?php echo e(route('comments.store')); ?>" method="post">

    <label for="comment"></label>
    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
    
    <button type="submit">Send</button>
</form>
</body>
</html>

<?php /**PATH C:\Users\Asus\Desktop\Personal Website\Personal\resources\views/Posts/comment.blade.php ENDPATH**/ ?>