<?php $__env->startSection('title'); ?>
    Team | Show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('includes.sidebar_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><a href="<?php echo e(route('admin.index')); ?>" class="btn btn-secondary btn-lg">Dashboard</a></h1>
        </div>
        <div class="card text-center col-sm-6 mx-auto mb-2">
            <div class="card-header">
                <h5 class="card-title">Team Item</h5>
            </div>
            <div class="card-body">

                <a href="<?php echo e(route('teams.index')); ?>" class="btn btn-primary">Show All Team</a>
            </div>
        </div>
        <div class="table-responsive col-md-9 ml-sm-auto col-lg-10 mx-auto px-md-4">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Job</th>
                    <th>Twitter</th>
                    <th>Facebook</th>
                    <th>Linkedin</th>
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
                    <td><?php echo e($team->name); ?></td>
                    <td><?php echo e($team->job); ?></td>
                    <td><?php echo e($team->twitter_link); ?></td>
                    <td><?php echo e($team->facebook_link); ?></td>
                    <td><?php echo e($team->linkedin_link); ?></td>
                    <td><?php echo e($team->status); ?></td>
                    <td><?php echo e($team->created_at); ?></td>
                    <td><?php echo e($team->updated_at->diffForHumans()); ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\moham\Desktop\php\laravelPrpject\first-project\resources\views/backend/teams/show.blade.php ENDPATH**/ ?>