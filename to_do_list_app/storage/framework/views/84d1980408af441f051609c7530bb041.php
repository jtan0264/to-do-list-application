<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <?php echo $__env->yieldContent('styles'); ?>
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body>
<nav class="navbar navbar-light bg-light">
    <?php if(auth()->guard()->check()): ?>
    <p>Congrats you are logged in.</p>
    <form action="/logout" method="POST">
      <?php echo csrf_field(); ?>
      <button>Log out</button>
    </form>
    <?php else: ?>
    <div >
      <h2>Register</h2>
      <form action="/register" method="POST">
        <?php echo csrf_field(); ?>
        <input name="name" type="text" placeholder="name">
        <input name="email" type="text" placeholder="email">
        <input name="password" type="password" placeholder="password">
        <button>Register</button>
      </form>
    </div>
    <div >
      <h2>Login</h2>
      <form action="/login" method="POST">
        <?php echo csrf_field(); ?>
        <input name="loginname" type="text" placeholder="name">
        <input name="loginpassword" type="password" placeholder="password">
        <button>Log in</button>
      </form>
    </div>
    <?php endif; ?>
</nav>

<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a href="<?php echo e(route('todos.index')); ?>"><span class="navbar-brand mb-0 h1">Todo</span></a>
    </div>
</nav>

<div class="container">

    <?php echo $__env->yieldContent('content'); ?>

</div>

</body>

</html><?php /**PATH C:\xampp\htdocs\to_do\to_do\resources\views/layouts/app.blade.php ENDPATH**/ ?>