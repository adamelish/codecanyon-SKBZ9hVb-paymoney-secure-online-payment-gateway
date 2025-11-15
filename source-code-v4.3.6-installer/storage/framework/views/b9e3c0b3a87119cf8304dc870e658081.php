

<?php $__env->startSection('title', __('Currencies')); ?>

<?php $__env->startSection('head_style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/dist/plugins/DataTables/DataTables/css/jquery.dataTables.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/dist/plugins/DataTables/Responsive/css/responsive.dataTables.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-title padding-bottom pull-left"><?php echo e(__('Currencies')); ?></div>
                </div>
                <?php if(Common::has_permission(auth('admin')->user()->id, 'add_currency')): ?>
                    <div class="col-md-4">
                        <a href="<?php echo e(url(config('adminPrefix') . '/settings/add_currency')); ?>" class="btn btn-theme pull-right f-14"><span class="fa fa-plus"> &nbsp;</span><?php echo e(__('Add Currency')); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="box-body">
            <!-- Main content -->
            <div class="row">
                <div class="col-md-12 f-14">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php echo $dataTable->table(['class' => 'table table-striped table-hover dt-responsive', 'width' => '100%', 'cellspacing' => '0']); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('extra_body_scripts'); ?>
    <script src="<?php echo e(asset('public/dist/plugins/DataTables/DataTables/js/jquery.dataTables.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/dist/plugins/DataTables/Responsive/js/dataTables.responsive.min.js')); ?>" type="text/javascript"></script>

    <?php echo $dataTable->scripts(); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\paymoney\resources\views/admin/currencies/view.blade.php ENDPATH**/ ?>