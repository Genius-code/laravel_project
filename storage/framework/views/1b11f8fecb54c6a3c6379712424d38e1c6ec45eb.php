<?php $__env->startSection('title'); ?>
    Delete | Services
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <?php echo $__env->make('includes.sidebar_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Icon</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;?>
                    <?php if(isset($services)): ?>
                        <?php if($services->count() > 0): ?>
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($service->name); ?></td>
                                    <td>
                                        <?php if(empty($service->icon)): ?>
                                            <span>No Icon</span>
                                        <?php else: ?>
                                            <?php echo e($service->icon); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td><a href="<?php echo e(route('services.edit',['id' => $service->id])); ?>" class="btn btn-warning">Edit</a></td>
                                    <td><a href="<?php echo e(route('services.delete',['id' => $service->id])); ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\Users\moham\Desktop\php\laravelPrpject\first-project\resources\views/backend/services/delete.blade.php ENDPATH**/ ?>