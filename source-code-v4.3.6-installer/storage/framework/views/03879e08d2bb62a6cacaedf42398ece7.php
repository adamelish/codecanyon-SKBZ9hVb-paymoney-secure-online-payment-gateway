<ul class="sidebar-menu mt-20">
    <li class="treeview <?php echo e(isset($menu) && $menu == 'dashboard' ? 'active' : ''); ?>">
        <a href="<?php echo e(url(config('adminPrefix').'/home')); ?>">
            <i class="fa fa-dashboard"></i><span><?php echo e(__('Dashboard')); ?></span>
        </a>
    </li>

    <!--users-->
    <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_user') || Common::has_permission(auth()->guard('admin')->id(), 'view_admins')): ?>
        <li class="treeview <?php echo e((isset($menu) && $menu == 'users') ? 'menu-open active' : ''); ?>">
            <a href="#">
                <i class="fa fa-user"></i><span><?php echo e(__('Users')); ?></span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_user')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'users_list' ? 'active' : ''); ?>">
                        <a href="<?php echo e(url(config('adminPrefix').'/users')); ?>">
                            <i class="fa fa-user-circle-o"></i><span><?php echo e(__('Users')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_merchant')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'merchant_details' ? 'active' : ''); ?>">
                        <a href="<?php echo e(url(config('adminPrefix').'/merchants')); ?>">
                            <svg id="ewRag1jxG3b1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" class="svgicon" stroke="currentColor" viewBox="0 0 477.867000 477.867000" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                                <path id="ewRag1jxG3b2" d="M476.996000,114.074000L442.863000,11.674000C440.541000,4.701000,434.016000,-0.002000,426.667000,0L51.200000,0C43.851000,-0.002000,37.326000,4.701000,35.004000,11.674000L0.870000,114.074000C0.344000,115.668000,0.050000,117.329000,0,119.006000C0,119.177000,0,119.296000,0,119.467000L0,136.534000C0.062000,163.274000,12.707000,188.426000,34.133000,204.425000C34.133000,204.562000,34.133000,204.664000,34.133000,204.800000L34.133000,426.667000C34.133000,454.944000,57.056000,477.867000,85.333000,477.867000L392.533000,477.867000C420.810000,477.867000,443.733000,454.944000,443.733000,426.667000L443.733000,204.800000C443.733000,204.663000,443.733000,204.561000,443.733000,204.425000C465.159000,188.426000,477.805000,163.274000,477.866000,136.534000L477.866000,119.467000C477.866000,119.296000,477.866000,119.177000,477.866000,119.006000C477.816000,117.328000,477.523000,115.667000,476.996000,114.074000ZM358.400000,34.133000L414.362000,34.133000L437.129000,102.400000L358.400000,102.400000L358.400000,34.133000ZM256,34.133000L324.267000,34.133000L324.267000,102.400000L256,102.400000L256,34.133000ZM153.600000,34.133000L221.867000,34.133000L221.867000,102.400000L153.600000,102.400000L153.600000,34.133000ZM63.505000,34.133000L119.467000,34.133000L119.467000,102.400000L40.738000,102.400000L63.505000,34.133000ZM273.067000,443.733000L204.800000,443.733000L204.800000,307.200000L273.067000,307.200000L273.067000,443.733000ZM409.600000,426.667000C409.600000,436.093000,401.959000,443.734000,392.533000,443.734000L307.200000,443.734000L307.200000,290.134000C307.200000,280.708000,299.559000,273.067000,290.133000,273.067000L187.733000,273.067000C178.307000,273.067000,170.666000,280.708000,170.666000,290.134000L170.666000,443.734000L85.333000,443.734000C75.907000,443.734000,68.266000,436.093000,68.266000,426.667000L68.266000,220.160000C92.217000,225.077000,117.123000,219.361000,136.533000,204.493000C166.999000,226.869000,208.467000,226.869000,238.933000,204.493000C269.399000,226.869000,310.867000,226.869000,341.333000,204.493000C360.743000,219.362000,385.649000,225.077000,409.600000,220.160000L409.600000,426.667000ZM392.533000,187.733000C377.774000,187.724000,363.759000,181.250000,354.184000,170.018000C347.982000,162.921000,337.200000,162.195000,330.103000,168.397000C329.527000,168.900000,328.985000,169.442000,328.482000,170.018000C309.505000,191.198000,276.953000,192.983000,255.773000,174.007000C254.372000,172.751000,253.040000,171.420000,251.784000,170.018000C245.105000,162.921000,233.937000,162.581000,226.839000,169.261000C226.579000,169.506000,226.326000,169.758000,226.082000,170.018000C207.106000,191.198000,174.553000,192.983000,153.373000,174.007000C151.971000,172.751000,150.640000,171.420000,149.384000,170.018000C142.705000,162.921000,131.536000,162.581000,124.439000,169.261000C124.179000,169.506000,123.926000,169.758000,123.682000,170.018000C114.107000,181.250000,100.093000,187.724000,85.333000,187.733000C57.056000,187.733000,34.133000,164.810000,34.133000,136.533000L443.733000,136.533000C443.733000,164.810000,420.810000,187.733000,392.533000,187.733000Z"></path>
                            </svg>
                            <span><?php echo e(__('Merchants')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_admins')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'admin_users_list' ? 'active' : ''); ?>">
                        <a href="<?php echo e(url(config('adminPrefix').'/admin_users')); ?>">
                            <i class="fa fa-user-md"></i><span><?php echo e(__('Admins')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </li>
    <?php endif; ?>

    <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_deposit') || Common::has_permission(auth()->guard('admin')->id(), 'view_withdrawal') || Common::has_permission(auth()->guard('admin')->id(), 'view_transfer') || Common::has_permission(auth()->guard('admin')->id(), 'view_exchange') || Common::has_permission(auth()->guard('admin')->id(), 'view_request_payment') || Common::has_permission(auth()->guard('admin')->id(), 'view_transaction')): ?>
        <li class="treeview <?php echo e((isset($menu) && $menu == 'transaction') ? 'menu-open active' : ''); ?>">
            <a href="#">
                <svg id="e1WnpxAjyv41" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" class="svgicon" stroke="currentColor" viewBox="0 -20 512 512" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                    <path id="e1WnpxAjyv42" stroke-width="2" d="M452,0L60,0C26.914062,0,0,26.914062,0,60L0,412C0,445.085938,26.914062,472,60,472L452,472C485.085938,472,512,445.085938,512,412L512,60C512,26.914062,485.085938,0,452,0ZM60,40L452,40C463.027344,40,472,48.972656,472,60L472,120L40,120L40,60C40,48.972656,48.972656,40,60,40ZM452,432L60,432C48.972656,432,40,423.027344,40,412L40,160L472,160L472,412C472,423.027344,463.027344,432,452,432ZM70,80C70,68.953125,78.953125,60,90,60C101.046875,60,110,68.953125,110,80C110,91.046875,101.046875,100,90,100C78.953125,100,70,91.046875,70,80ZM140,80C140,68.953125,148.953125,60,160,60C171.046875,60,180,68.953125,180,80C180,91.046875,171.046875,100,160,100C148.953125,100,140,91.046875,140,80ZM346.640625,185.859375L416.785156,256L346.640625,326.140625L318.359375,297.859375L340.214844,276L235,276L235,236L340.214844,236L318.359375,214.140625ZM171.785156,316L275,316L275,356L171.785156,356L193.640625,377.859375L165.359375,406.140625L95.214844,336L165.359375,265.859375L193.640625,294.140625ZM171.785156,316"></path>
                </svg>
                <span><?php echo e(__('Transactions')); ?></span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <!-- transactions -->
                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_transaction')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'transactions' ? 'active' : ''); ?>">
                        <a href="<?php echo e(url(config('adminPrefix').'/transactions')); ?>"><i class="fa fa-history"></i><span><?php echo e(__('All Transactions')); ?></span></a>
                    </li>
                <?php endif; ?>
                <!-- deposits -->
                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_deposit')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'deposits' ? 'active' : ''); ?>">
                        <a href="<?php echo e(url(config('adminPrefix').'/deposits')); ?>"><i class="fa fa-arrow-down"></i><span><?php echo e(__('Deposits')); ?></span></a>
                    </li>
                <?php endif; ?>

                <!-- Payouts -->
                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_withdrawal')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'withdrawals' ? 'active' : ''); ?>">
                        <a href="<?php echo e(url(config('adminPrefix').'/withdrawals')); ?>"><i class="fa fa-arrow-up"></i><span><?php echo e(__('Withdrawals')); ?></span></a>
                    </li>
                <?php endif; ?>

                <!-- transfers -->
                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_transfer')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'transfers' ? 'active' : ''); ?>">
                        <a href="<?php echo e(url(config('adminPrefix').'/transfers')); ?>"><i class="fa fa-exchange"></i><span><?php echo e(__('Transfers')); ?></span></a>
                    </li>
                <?php endif; ?>

                <!-- exchanges -->
                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_exchange')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'exchanges' ? 'active' : ''); ?>">
                        <a href="<?php echo e(url(config('adminPrefix').'/exchanges')); ?>"><i class="fa fa-money"></i><span><?php echo e(__('Currency Exchange')); ?></span></a>
                    </li>
                <?php endif; ?>

                <!-- request_payments -->
                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_request_payment')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'request_payments' ? 'active' : ''); ?>">
                        <a href="<?php echo e(url(config('adminPrefix').'/request_payments')); ?>"><i class="fa fa-calculator"></i><span><?php echo e(__('Request Payments')); ?></span></a>
                    </li>
                <?php endif; ?>

                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_merchant_payment')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'merchant_payments' ? 'active' : ''); ?>">
                        <a href="<?php echo e(url(config('adminPrefix').'/merchant_payments')); ?>">
                            <i class="fa fa-money"></i><span><?php echo e(__('Merchant Payments')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_crypto_transactions')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'crypto-sent-transactions' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.crypto_sent_transaction.index')); ?>">
                            <i class="fa fa-angle-double-right"></i><span><?php echo e(__('Crypto Sent')); ?></span>
                        </a>
                    </li>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'crypto-received-transactions' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.crypto_received_transaction.index')); ?>">
                            <i class="fa fa-angle-double-left"></i><span><?php echo e(__('Crypto Received')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_token_transactions')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'token-sent-transactions' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.token_sent_transaction.index')); ?>">
                            <i class="fa fa-chevron-circle-right"></i><span><?php echo e(__('Token Sent')); ?></span>
                        </a>
                    </li>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'token-received-transactions' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.token_received_transaction.index')); ?>">
                            <i class="fa fa-chevron-circle-left"></i><span><?php echo e(__('Token Received')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>


            </ul>
        </li>
    <?php endif; ?>

    <!-- revenues -->
    <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_revenue')): ?>
        <li class="<?php echo e(isset($menu) && $menu == 'revenues' ? 'active' : ''); ?>">
            <a href="<?php echo e(url(config('adminPrefix').'/revenues')); ?>"><i class="fa fa-book"></i><span><?php echo e(__('Revenues')); ?></span></a>
        </li>
    <?php endif; ?>

    <!-- Disputes -->
    <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_disputes')): ?>
        <li class="<?php echo e(isset($menu) && $menu == 'dispute' ? 'active' : ''); ?>">
            <a href="<?php echo e(url(config('adminPrefix').'/disputes')); ?>"><i class="fa fa-ticket"></i><span><?php echo e(__('Disputes')); ?></span></a>
        </li>
    <?php endif; ?>

    <!-- Tickets -->
    <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_tickets')): ?>
        <li class="<?php echo e(isset($menu) && $menu == 'ticket' ? 'active' : ''); ?>">
            <a href="<?php echo e(url(config('adminPrefix').'/tickets/list')); ?>"><i class="fa fa-spinner"></i><span><?php echo e(__('Tickets')); ?></span></a>
        </li>
    <?php endif; ?>

    <!-- activity_logs -->
    <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_activity_log')): ?>
        <li class="<?php echo e(isset($menu) && $menu == 'activity_logs' ? 'active' : ''); ?>">
            <a href="<?php echo e(url(config('adminPrefix').'/activity_logs')); ?>"><i class="fa fa-eye"></i><span><?php echo e(__('Activity Logs')); ?></span></a>
        </li>
    <?php endif; ?>

    <!--verifications-->
    <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_kyc_provider') || Common::has_permission(auth()->guard('admin')->id(), 'view_kyc_verification') || Common::has_permission(auth()->guard('admin')->id(), 'view_kyc_setting')): ?>
        <li class="treeview <?php echo e((isset($menu) && $menu == 'kyc_verification') ? 'menu-open active' : ''); ?>">
            <a href="#">
                <i class="fa fa-check-square-o"></i><span><?php echo e(__('Verifications')); ?></span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_kyc_provider')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'kyc_providers' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.kyc.providers.index')); ?>">
                            <i class="fa fa-shield"></i><span><?php echo e(__('Providers')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_kyc_verification')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'kyc_verifications' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.kyc.verifications.index')); ?>">
                            <i class="fa fa-check"></i><span><?php echo e(__('Verifications')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_kyc_setting')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && ($sub_menu == 'kyc_settings' || $sub_menu == 'credential_settings') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.kyc.settings.create')); ?>">
                            <i class="fa fa-cogs"></i><span><?php echo e(__('Settings')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </li>
    <?php endif; ?>

    <p class="pl-4 configuration"><?php echo e(__('Configurations')); ?></p>

     <!-- Currencies & Fees -->
     <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_currency')): ?>
        <li class="<?php echo e(isset($menu) && $menu == 'currency' ? 'active' : ''); ?>">
            <a href="<?php echo e(url(config('adminPrefix').'/settings/currency')); ?>"><i class="fa fa-money"></i><span><?php echo e(__('Currencies')); ?></span></a>
        </li>
    <?php endif; ?>

    <!-- Crypto Providers -->
    <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_crypto_provider')): ?>
    <li class="child <?php echo e(isset($menu) && $menu == 'crypto_providers' ? 'active' : ''); ?>">
        <a href="<?php echo e(route('admin.crypto_providers.list', 'TatumIo')); ?>">
            <i class="fa fa-btc"></i><span><?php echo e(__('Crypto Providers')); ?></span>
            <span class="pull-right-container"></span>
        </a>
    </li>
    <?php endif; ?>

    <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_crypto_token')): ?>
    <li class="child <?php echo e(isset($menu) && $menu == 'crypto_token' ? 'active' : ''); ?>">
        <a href="<?php echo e(route('admin.tatumio.token')); ?>">
            <i class="fa fa-try"></i><span><?php echo e(__('Crypto Token')); ?></span>
            <span class="pull-right-container"></span>
        </a>
    </li>
    <?php endif; ?>

    <!-- Templates -->
    <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_email_template') || Common::has_permission(auth()->guard('admin')->id(), 'view_sms_template')): ?>
        <li class="child <?php echo e((isset($menu) && $menu == 'templates') ? 'menu-open active' : ''); ?>">
            <a href="#">
                <i class="fa fa-newspaper-o"></i><span><?php echo e(__('Templates')); ?></span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <!-- email_template -->
                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_email_template')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'email_template' ? 'active' : ''); ?>">
                        <a href="<?php echo e(url(config('adminPrefix').'/template')); ?>">
                            <i class="fa fa-envelope"></i><span><?php echo e(__('Email Templates')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <!-- sms_template -->
                <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_sms_template')): ?>
                    <li class="child <?php echo e(isset($sub_menu) && $sub_menu == 'sms_template' ? 'active' : ''); ?>">
                        <a href="<?php echo e(url(config('adminPrefix').'/sms-template')); ?>">
                            <i class="fa fa-mobile f-24"></i><span><?php echo e(__('SMS Templates')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </li>
    <?php endif; ?>

    <!-- settings -->
    <li class="treeview <?php echo e(isset($menu) && $menu == 'settings' ? 'active' : ''); ?>">
        <a href="<?php echo e(url(config('adminPrefix').'/settings')); ?>">
            <i class="fa fa-wrench"></i><span><?php echo e(__('Settings')); ?></span>
            <span class="pull-right-container"></span>
        </a>
    </li>
    <!-- System Update -->
    <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_system_upgrader')): ?>
        <li class="<?php echo e(isset($menu) && $menu == 'system-update' ? 'active' : ''); ?>">
            <a href="<?php echo e(url(config('adminPrefix') . '/system-update')); ?>"><i class="fa fa-cloud-upload" aria-hidden="true"></i><span><?php echo e(__('System Update')); ?></span></a>
        </li>
    <?php endif; ?>

    <p class="pl-4 configuration"><?php echo e(__('Addons')); ?></p>

    <!-- Custom Addons -->
    <?php $__currentLoopData = getAddons(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(isActive($addon) && view()->exists(strtolower($addon) . '::admin.partials.sidebar')): ?>
            <?php echo $__env->make(strtolower($addon) . '::admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- Addon Manager -->
    <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_addon_manager')): ?>
    <li class="<?php echo e(isset($menu) && $menu == 'addon-manager' ? 'active' : ''); ?>">
        <a href="<?php echo e(url(config('adminPrefix') . '/module-manager/addons')); ?>"><i class="fa fa-puzzle-piece"></i><span><?php echo e(__('Addon Manager')); ?></span></a>
    </li>
    <?php endif; ?>

    <!-- Cache Clear -->
    <?php if(Common::has_permission(auth()->guard('admin')->id(), 'view_cache_clear')): ?>
    <li>
        <a href="<?php echo e(route('clear.cache')); ?>"><i class="fa fa-trash"></i><span><?php echo e(__('Cache Clear')); ?></span></a>
    </li>
    <?php endif; ?>
</ul><?php /**PATH D:\wamp64\www\paymoney\resources\views/admin/layouts/partials/sidebar_menu.blade.php ENDPATH**/ ?>