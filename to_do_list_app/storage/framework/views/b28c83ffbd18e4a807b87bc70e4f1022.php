<?php $__env->startSection('content'); ?>
  <?php if(auth()->guard()->check()): ?>
  <p>Congrats you are logged in.</p>
  <form action="/logout" method="POST">
    <?php echo csrf_field(); ?>
    <button>Log out</button>
  </form>


  <?php else: ?>
  <div style="border: 3px solid black;">
    <h2>Register</h2>
    <form action="/register" method="POST">
      <?php echo csrf_field(); ?>
      <input name="name" type="text" placeholder="name">
      <input name="email" type="text" placeholder="email">
      <input name="password" type="password" placeholder="password">
      <button>Register</button>
    </form>
  </div>
  <div style="border: 3px solid black;">
    <h2>Login</h2>
    <form action="/login" method="POST">
      <?php echo csrf_field(); ?>
      <input name="loginname" type="text" placeholder="name">
      <input name="loginpassword" type="password" placeholder="password">
      <button>Log in</button>
    </form>
  </div>
  <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\to_do\to_do\resources\views/welcome.blade.php ENDPATH**/ ?>