<div class="box box-primary">
    <div class="box-header with-border ps-3">
        <h3 class="box-title underline"><?php echo e(__('Transaction Type')); ?> </h3>
    </div>
    <div class="box-body no-padding">
        <ul class="nav nav-pills nav-stacked flex-column">
            <li <?php echo e(isset($list_menu) && $list_menu == 'deposit' ? 'class=active' : ''); ?>>
                <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/feeslimit/deposit/' . $currency->id)); ?>'><?php echo e(__('Deposit')); ?></a>
            </li>
            <li <?php echo e(isset($list_menu) && $list_menu == 'withdrawal' ? 'class=active' : ''); ?>>
                <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/feeslimit/withdrawal/' . $currency->id)); ?>'><?php echo e(__('Withdraw')); ?></a>
            </li>
            <li <?php echo e(isset($list_menu) && $list_menu == 'transfer' ? 'class=active' : ''); ?>>
                <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/feeslimit/transfer/' . $currency->id)); ?>'><?php echo e(__('Transfer')); ?></a>
            </li>
            <li <?php echo e(isset($list_menu) && $list_menu == 'request_payment' ? 'class=active' : ''); ?>>
                <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/feeslimit/request_payment/' . $currency->id)); ?>'><?php echo e(__('Request
                    Payment')); ?></a>
            </li>
            <?php if($currency->type == 'fiat'): ?>
                <li <?php echo e(isset($list_menu) && $list_menu == 'exchange' ? 'class=active' : ''); ?>>
                    <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/feeslimit/exchange/' . $currency->id)); ?>'><?php echo e(__('Exchange')); ?></a>
                </li>
            <?php endif; ?>

            <?php $__currentLoopData = getCustomModules(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!empty(config($module->get('alias') . '.fees_limit_settings'))): ?>
                    <?php $__currentLoopData = config($module->get('alias') . '.' . 'fees_limit_settings'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $transactionType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(empty($transactionType['transaction_type'])): ?> <?php continue; ?> <?php endif; ?>
                        <li <?php echo e(isset($list_menu) && $list_menu == strtolower($transactionType['transaction_type']) ? 'class=active' : ''); ?> >
                            <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/feeslimit/'. strtolower($transactionType['transaction_type']) .'/' . $currency->id)); ?>'><?php echo e($transactionType['display_name']); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php /**PATH D:\wamp64\www\paymoney\resources\views/admin/common/currency_menu.blade.php ENDPATH**/ ?>