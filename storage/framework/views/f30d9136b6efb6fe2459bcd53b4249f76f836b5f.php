<?php $__env->startSection('title'); ?>
     Index | Services
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.sidebar_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><a href="<?php echo e(route('admin.index')); ?>" class="btn btn-secondary btn-lg">Dashboard</a></h1>
        </div>
        <div class="card text-center col-sm-6 mx-auto mb-2">
            <div class="card-header">
                <h5 class="card-title">Services List</h5>
            </div>
            <div class="card-body">

                <a href="<?php echo e(route('services.create')); ?>" class="btn btn-primary">Create New Service</a>
            </div>
        </div>
        <?php if(session('success')): ?>
            <div class="alert alert-success text-center"><strong><?php echo e(session('success')); ?></strong></div>
        <?php elseif(session('update')): ?>
            <div class="alert alert-info text-center"><strong><?php echo e(session('update')); ?></strong></div>
        <?php elseif(session('msg')): ?>
            <div class="alert alert-danger text-center"><strong><?php echo e(session('msg')); ?></strong></div>
        <?php endif; ?>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Icon</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $id = 1;
                    ?>
                    <?php if(isset($services)): ?>
                        <?php if($services->count() > 0): ?>
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($id++); ?></td>
                                    <td><?php echo e($service->name); ?></td>
                                    <td>
                                        <?php if(empty($service->icon)): ?>
                                            <span>No Icon</span>
                                        <?php else: ?>
                                            <?php echo e($service->icon); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td><a href="<?php echo e(route('services.show',['id' => $service->id])); ?>" class="btn btn-success">Show</a></td>
                                    <td><a href="<?php echo e(route('services.edit',['id' => $service->id])); ?>" class="btn btn-warning">Edit</a></td>
                                    <td>
                                        <form action="<?php echo e(route('services.delete',['id' => $service->id])); ?>" method="post" >
                                            <?php echo csrf_field(); ?>
                                            <?php echo e(method_field('DELETE')); ?>

                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\moham\Desktop\php\laravelPrpject\first-project\resources\views/backend/services/index.blade.php ENDPATH**/ ?>