<li class="dropdown user user-menu">
    <a href="javascript:void(0)" class="f-14 text-decoration-none me-3" data-bs-toggle="dropdown">
        <img src=<?php echo e(image(auth('admin')->user()->picture, 'profile')); ?> class="user-image" alt="<?php echo e(__('User Image')); ?>">
        <span class="hidden-xs"><?php echo e(ucwords(getColumnValue(auth('admin')->user()))); ?></span>
    </a>

    <ul class="dropdown-menu mt-3">
        <li class="user-header">
            <img src=<?php echo e(image(auth('admin')->user()->picture, 'profile')); ?> class="img-circle mt-3" alt="<?php echo e(__('User Image')); ?>">
            <p>
                <small><?php echo e(__('Email')); ?>: <?php echo e(auth('admin')->user()->email); ?></small>
            </p>
        </li>

        <li class="user-footer py-3">
            <div class="pull-left">
                <a href="<?php echo e(url(config('adminPrefix').'/profile')); ?>" class="profile-btn"><?php echo e(__('Profile')); ?></a>
            </div>
            <div class="pull-right">
                <a href="<?php echo e(url(config('adminPrefix').'/adminlogout')); ?>" class="profile-btn"><?php echo e(__('Sign out')); ?></a>
            </div>
        </li>
    </ul>
</li>
<?php /**PATH D:\wamp64\www\paymoney\resources\views/admin/layouts/partials/nav_user-menu.blade.php ENDPATH**/ ?>