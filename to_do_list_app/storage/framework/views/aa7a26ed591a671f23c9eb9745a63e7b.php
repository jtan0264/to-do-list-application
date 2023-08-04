<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo App</title>

    <?php echo Html::style('css/bootstrap.min.css'); ?>

    <?php echo Html::style('css/style.css'); ?>

</head>
<body>
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo Html::script('js/jquery.min.js'); ?>

<?php echo Html::script('js/bootstrap.min.js'); ?>

<?php echo Html::script('js/script.js'); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\to_do\to_do\resources\views/layouts/master.blade.php ENDPATH**/ ?>