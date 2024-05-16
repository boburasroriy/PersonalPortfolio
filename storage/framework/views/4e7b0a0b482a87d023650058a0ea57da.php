<?php if($paginator->hasPages()): ?>
    <style>
        :root {
            --background-color : #090d1f;
            --while-color: #ffff;
            --purple-color: #6941C6;
            --red-color: #C11574;
            --green-color: #026AA2;
            --green-color-2:  #027A48;
            --font-color: #090d1f;
        }
        body .pagination{
            display: flex;
            justify-content: center;
            font-size: 16px;
        }
        body .pagination li a {
            text-decoration: none; /* Remove underline */
            color: white;
        }

        body .pagination li {
            display: inline-block; /* Prevent links from appearing in one line */
            margin-right: 5px; /* Add space between links */
            color: #007bff;
            justify-content: center;
            }

        body.light-mode .pagination li a {
            color: var(--background-color); /* Light text color */
        }
        body.dark-mode .pagination li {
            color: #007bff; /* Light text color */
        }

        body.dark-mode .navbar {
            background-color: var(--background-color); /* Dark mode navbar color */
        }
    </style>
    <nav>
        <ul class="pagination">
            
            <?php if($paginator->onFirstPage()): ?>
                <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">&lsaquo;</a>
                </li>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li class="page-item active" aria-current="page"><span class="page-link"><?php echo e($page); ?></span></li>
                        <?php else: ?>
                            <li class="page-item"><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">&rsaquo;</a>
                </li>
            <?php else: ?>
                <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH C:\Users\Asus\Desktop\NoName\Personal\resources\views/vendor/pagination/bootstrap-4.blade.php ENDPATH**/ ?>