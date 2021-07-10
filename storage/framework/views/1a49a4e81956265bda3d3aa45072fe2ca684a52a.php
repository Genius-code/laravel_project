<?php $__env->startSection('title'); ?>
    Show | Services
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.sidebar_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><a href="<?php echo e(route('admin.index')); ?>" class="btn btn-secondary btn-lg">Dashboard</a></h1>
        </div>
        <div class="card text-center col-sm-6 mx-auto mb-2">
            <div class="card-header">
                <h5 class="card-title">Services Item</h5>
            </div>
            <div class="card-body">

                <a href="<?php echo e(route('services.index')); ?>" class="btn btn-primary">Show All Services</a>
            </div>
        </div>
    <div class="table-responsive col-md-9 ml-sm-auto col-lg-10 mx-auto px-md-4">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Icon</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $id = 1;
            ?>
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
                <td><?php echo e($service->description); ?></td>
                <td><?php echo e($service->status); ?></td>
                <td><?php echo e($service->created_at); ?></td>
                <td><?php echo e($service->updated_at->diffForHumans()); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\moham\Desktop\php\laravelPrpject\first-project\resources\views/backend/services/show.blade.php ENDPATH**/ ?>