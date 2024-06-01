<?php if (isset($component)) { $__componentOriginal8a240419d16b3c1a159498153f053ed2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a240419d16b3c1a159498153f053ed2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        Create Post
         <?php $__env->endSlot(); ?>

        <link rel="stylesheet" href="<?php echo e(asset('css/posts/create.css')); ?>">
        <form method="POST" action="<?php echo e(route('posts.store')); ?>" enctype="multipart/form-data" onsubmit="prepareHighlightedContent()">
            <h2>Create a new post</h2>
            <?php echo csrf_field(); ?>
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div>
                <label for="category">Category:</label>
                <select name="category_id" required>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div>
                <label for="text">Text:</label>
                <div contenteditable="true" class="contenteditable-div" id="Article"></div>
                <textarea id="hiddenTextarea" name="text" class="form-control" style="display:none;"></textarea>
            </div>
            <div>
                <button type="button" onclick="highlightSelectedText()">Highlight Selected Text</button>
            </div>

            <div>
                <label for="photo">Photo:</label>
                <input type="file" id="photo" name="photo" required>
            </div>

            <button type="submit">Create Post</button>
        </form>

        <h2>Preview</h2>
        <div id="preview" style="border:1px solid #ccc; padding: 10px; width: 80%;"></div>


        <script src="<?php echo e(asset('js/posts/create.js')); ?>"></script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $attributes = $__attributesOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__attributesOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $component = $__componentOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__componentOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Asus\Desktop\NoName\Personal\resources\views/Posts/create.blade.php ENDPATH**/ ?>