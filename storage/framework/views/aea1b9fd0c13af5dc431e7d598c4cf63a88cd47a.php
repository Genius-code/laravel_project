
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo e(route('admin.index')); ?>">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('services.index')); ?>">
                    <span data-feather="shopping-cart"></span>
                    Services
                </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('pages.index')); ?>">
                <span data-feather="shopping-cart"></span>
                Pages
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('teams.index')); ?>">
                    <span data-feather="shopping-cart"></span>
                    Team
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Customers
                </a>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH C:\Users\moham\Desktop\php\laravelPrpject\first-project\resources\views/includes/sidebar_admin.blade.php ENDPATH**/ ?>