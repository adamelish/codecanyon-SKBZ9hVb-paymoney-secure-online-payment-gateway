<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="MTS">
        <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(settings('name')); ?></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"><!-- for ajax -->

        <script type="text/javascript">
            var SITE_URL = "<?php echo e(url('/')); ?>";
            var ADMIN_PREFIX = "<?php echo e(config('adminPrefix')); ?>";
            var ADMIN_URL = SITE_URL + '/' + ADMIN_PREFIX;
            var FIATDP = "<?php echo number_format(0, preference('decimal_format_amount', 2)); ?>";
            var CRYPTODP = "<?php echo number_format(0, preference('decimal_format_amount_crypto', 8)); ?>";
        </script>

        <!---favicon-->
        <link rel="shortcut icon" href="<?php echo e(faviconPath()); ?>" />

        <?php echo $__env->make('admin.layouts.partials.head_style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.layouts.partials.head_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper_custom">
            <?php echo $__env->make('admin.layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- sidebar -->
            <aside class="main-sidebar">
                <section class="sidebar">
                    <?php echo $__env->make('admin.layouts.partials.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </section>
            </aside>

            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php echo $__env->yieldContent('page_content'); ?>
                </section>
            </div>

            <!-- footer -->
            <footer class="main-footer">
                <?php echo $__env->make('admin.layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </footer>
            <div class="control-sidebar-bg"></div>
        </div>

        <!-- body_script -->
        <?php echo $__env->make('admin.layouts.partials.body_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldPushContent('extra_body_scripts'); ?>
    </body>
</html>
<?php /**PATH D:\wamp64\www\paymoney\resources\views/admin/layouts/master.blade.php ENDPATH**/ ?>