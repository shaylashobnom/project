

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Teacher </h2>
            </div>
            <div style="margin-top: 10px;">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('teachers.create')); ?>" title="Create a project"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered table-responsive-lg">
        <tr>
    
            <th>Teacher ID</th>
            <th>Teacher Name</th>
            <th>Teacher Mobile</th>
            <th>Teacher Email</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            
                <td><?php echo e($teacher->teacherId); ?></td>
                <td><?php echo e($teacher->teacher_name); ?></td>
                <td><?php echo e($teacher->teacher_mobile); ?></td>
                <td><?php echo e($teacher->teacher_email); ?></td>

                <td>
                    <form action="<?php echo e(route('teachers.destroy', $teacher->id)); ?>" method="POST">


                        <a href="<?php echo e(route('teachers.edit', $teacher->id)); ?>">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('teachers.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel\friends\ankhi\teacher_store\resources\views/teachers/index.blade.php ENDPATH**/ ?>