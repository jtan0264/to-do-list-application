

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <h4>Edit Form</h4>
                  <form method='post' action="<?php echo e(route('todos.update')); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <input type="hidden" name = 'todo_id' value="<?php echo e($todo->id); ?>">
                    <div class="mb-3">
                      <label class="form-label">Title</label>
                      <input type="text" name="title" class ="form-control" value ="<?php echo e($todo ->title); ?>">
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Description</label>
                      <textarea name="description"  class= "form-control" cols="5" rows="5">
                        <?php echo e($todo ->description); ?>

                      </textarea>
                      <div class="mb-3">
                        <label for="">Status</label>
                        <select name="isCompleted" class="form-control">
                          <option disabled selected>Select Option</option>
                          <option value="1">Completed</option>
                          <option value="0">Incompleted</option>

                        </select>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\to_do\to_do\resources\views/todos/edit.blade.php ENDPATH**/ ?>