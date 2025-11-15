<div class="box box-primary">

    <div class="box-header with-border ps-3">
        <h3 class="box-title underline"><?php echo e(__('Payment Methods')); ?></h3>
    </div>
    <div class="box-body no-padding">
        <ul class="nav nav-pills nav-stacked flex-column">
			<?php if($currency->type == 'fiat'): ?>
                <li <?php echo e(isset($list_menu) && $list_menu == 'stripe' ? 'class=active' : ''); ?>>
                    <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/payment-methods/stripe/' . $currency->id)); ?>'><?php echo e(__('Stripe')); ?></a>
                </li>

                <li <?php echo e(isset($list_menu) && $list_menu == 'paypal' ? 'class=active' : ''); ?>>
                    <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/payment-methods/paypal/' . $currency->id)); ?>'><?php echo e(__('Paypal')); ?></a>
                </li>

                <li <?php echo e(isset($list_menu) && $list_menu == 'payUmoney' ? 'class=active' : ''); ?>>
                    <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/payment-methods/payUmoney/' . $currency->id)); ?>'><?php echo e(__('PayUMoney')); ?></a>
                </li>

                <li <?php echo e(isset($list_menu) && $list_menu == 'coinpayments' ? 'class=active' : ''); ?>>
                    <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/payment-methods/coinpayments/' . $currency->id)); ?>'><?php echo e(__('CoinPayments')); ?></a>
                </li>
                <li <?php echo e(isset($list_menu) && $list_menu == 'payeer' ? 'class=active' : ''); ?>>
                    <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/payment-methods/payeer/' . $currency->id)); ?>'><?php echo e(__('Payeer')); ?></a>
                </li>
                <li <?php echo e(isset($list_menu) && $list_menu == 'bank' ? 'class=active' : ''); ?>>
                    <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/payment-methods/bank/' . $currency->id)); ?>'><?php echo e(__('Banks')); ?></a>
                </li>
                <li <?php echo e(isset($list_menu) && $list_menu == 'flutterwave' ? 'class=active' : ''); ?>>
                    <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/payment-methods/flutterwave/' . $currency->id)); ?>'><?php echo e(__('Flutterwave')); ?></a>
                </li>
                <?php
                    $modules = addonPaymentMethods('Wallet');
                    $type = array_column($modules, 'type');
                ?>
                <?php if(array_filter($type)): ?>
                <li <?php echo e(isset($list_menu) && $list_menu == 'mts' ? 'class=active' : ''); ?>>
                    <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/payment-methods/mts/' . $currency->id)); ?>'><?php echo e(__('Wallet')); ?></a>
                </li>
                <?php endif; ?>

                <?php if(config('mobilemoney.is_active')): ?>
                    <li <?php echo e(isset($list_menu) && $list_menu == 'mobilemoney' ? 'class=active' : ''); ?>>
                        <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/payment-methods/mobilemoney/' . $currency->id)); ?>'><?php echo e(__('MobileMoney')); ?></a>
                    </li>
                <?php endif; ?>
			<?php elseif($currency->type == 'crypto'): ?>
                <li <?php echo e(isset($list_menu) && $list_menu == 'coinpayments' ? 'class=active' : ''); ?>>
                    <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/payment-methods/coinpayments/' . $currency->id)); ?>'><?php echo e(__('Coinpayments')); ?></a>
                </li>
                <?php
                    $modules = addonPaymentMethods('Wallet');
                    $type = array_column($modules, 'type');
                ?>
                <?php if(array_filter($type)): ?>
                <li <?php echo e(isset($list_menu) && $list_menu == 'mts' ? 'class=active' : ''); ?>>
                    <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/payment-methods/mts/' . $currency->id)); ?>'><?php echo e(__('Wallet')); ?></a>
                </li>
                <?php endif; ?>
			<?php endif; ?>
            <li <?php echo e(isset($list_menu) && $list_menu == 'coinbase' ? 'class=active' : ''); ?>>
                <a data-spinner="true" href='<?php echo e(url(config('adminPrefix') . '/settings/payment-methods/coinbase/' . $currency->id)); ?>'><?php echo e(__('Coinbase')); ?></a>
            </li>
        </ul>
    </div>
</div>
<?php /**PATH D:\wamp64\www\paymoney\resources\views/admin/common/paymentMethod_menu.blade.php ENDPATH**/ ?>