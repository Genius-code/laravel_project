<?php $__env->startSection('title'); ?>
    Edit | Pages
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <?php echo $__env->make('includes.sidebar_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-md-6 ml-sm-auto col-lg-9 mx-auto px-md-4 my-2">
                <!--Card Services -->
                <div class="card text-center my-2">
                    <div class="card-header">
                        Edit Pages
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Edit Pages</h5>
                        <p class="card-text">You can edit your Page as you like at table below.</p>
                        <a href="<?php echo e(route('pages.index')); ?>" class="btn btn-primary">View All Pages</a>
                    </div>
                </div>
                <!--Card Services -->
                <?php if(session('update')): ?>
                    <div class="alert alert-success text-center"><?php echo e(session('update')); ?></div>
                <?php endif; ?>
                <!-- Start Form Create Services -->
                <form method="post" action="<?php echo e(route('pages.update',['page' => $page->id])); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('PUT')); ?>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Page name" value="<?php echo e($page->name); ?>">
                    </div>
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Link :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="link" placeholder="Page Link" value="<?php echo e($page->link); ?>">
                    </div>
                    <?php $__errorArgs = ['link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Order :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="order" placeholder="Page order" value="<?php echo e($page->order); ?>">
                    </div>
                    <?php $__errorArgs = ['order'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                            <option value="select">Select</option>
                            <option value="on"<?php if($page->status === 'on'): ?> selected <?php else: ?> '' <?php endif; ?> >On</option>
                            <option value="off"<?php if($page->status === 'off'): ?> selected <?php else: ?> '' <?php endif; ?> >Off</option>
                        </select>
                    </div>
                    <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <!-- End Form Create Services -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\moham\Desktop\php\laravelPrpject\first-project\resources\views/backend/pages/edit.blade.php ENDPATH**/ ?>