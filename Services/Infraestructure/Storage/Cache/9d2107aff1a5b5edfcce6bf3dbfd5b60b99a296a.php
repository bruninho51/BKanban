<?php /* /var/www/public/Kanban/Services/Application/View/template.blade.php */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo e($title); ?></title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php if(isset($stylesheets)): ?>
            <?php $__currentLoopData = $stylesheets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $css): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <link rel="stylesheet" href="/Services/Application/View/Resources/CSS/<?php echo e($css); ?>.css">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </head>
    <body>
        <?php echo $__env->yieldContent('navbar'); ?>
        
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <script
            src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
            integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
            crossorigin="anonymous">
        </script>
        <?php if(isset($scripts)): ?>
            <?php $__currentLoopData = $scripts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $js): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <script type="text/javascript" src="/Services/Application/View/Resources/JavaScript/<?php echo e($js); ?>.js"></script>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </body>
</html>