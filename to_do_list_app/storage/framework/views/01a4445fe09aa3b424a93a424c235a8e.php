

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <h1>Create Post</h1>
 
                  <?php if($errors->any()): ?>
                      <div class="alert alert-danger">
                          <ul>
                              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <li><?php echo e($error); ?></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ul>
                      </div>
                  <?php endif; ?>
                  <form method= "post" action="<?php echo e(route('todos.store')); ?>">
                  <?php echo csrf_field(); ?>
                    <div class="mb-3">
                      <label class="form-label">Title</label>
                      <input type="text" name="title" class ="form-control">
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Description</label>
                      <textarea name="description"  class= "form-control" cols="5" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\to_do\to_do\resources\views/todos/create.blade.php ENDPATH**/ ?>