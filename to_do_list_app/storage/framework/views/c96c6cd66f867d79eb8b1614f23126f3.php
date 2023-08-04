

<?php $__env->startSection('styles'); ?>
<style>
  #outer
{
    width:auto;
    text-align: center;
}
.inner
{
    display: inline-block;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <?php if(Session::has('alert-success')): ?>
                    <div class="alert alert-success" role="alert">
                      <?php echo e(Session::get('alert-success')); ?>

                    </div>
                  <?php endif; ?>
                  <?php if(Session::has('alert-info')): ?>
                    <div class="alert alert-info" role="alert">
                      <?php echo e(Session::get('alert-info')); ?>

                    </div>
                  <?php endif; ?>
                  
                  <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo e(Session::get('error')); ?>

                    </div>
                  <?php endif; ?>
                  
              
                  <a class ="btn btn-sm btn-info" href="<?php echo e(route('todos.create')); ?>">Create task</a>
                  <?php if(count($todos)>0): ?>
                  <table class="table">
                    <thead>
                      <tr>
                        <th >CreatedBy</th>
                        <th >Title</th>
                        <th >Description</th>
                        <th >Status</th>
                        <th >Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td>
                          <?php echo e($todo->user->name); ?>

                        </td>
                        <td>
                          <?php echo e($todo->title); ?>

                        </td>
                        <td>
                          <?php echo e($todo->description); ?>

                        </td>
                        <td>
                          <?php if($todo -> isCompleted ==1): ?>
                            <a class ="btn btn-sm btn-success" href="">Completed</a>
                          <?php else: ?>
                          <a class ="btn btn-sm btn-danger" href="">Incompleted</a>
                          <?php endif; ?>
                        </td>
                        <td id='outer'>                
                          <a class ="btn btn-sm btn-info" href="<?php echo e(route('todos.edit',$todo->id)); ?>">Edit</a>
                          
                          <form   method = 'POST' class="inner" action="<?php echo e(route("todos.destroy")); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <input type="hidden" name="todo_id" value="<?php echo e($todo ->id); ?>">
                            <input type="submit" class='btn btn-sm btn-danger' value = 'Delete'>
                          </form>
                        </td>
                        
                      </tr>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                  <?php else: ?>
                  <h4>No to-do task created.</h4>
                  <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\to_do\to_do\resources\views/todos/index.blade.php ENDPATH**/ ?>