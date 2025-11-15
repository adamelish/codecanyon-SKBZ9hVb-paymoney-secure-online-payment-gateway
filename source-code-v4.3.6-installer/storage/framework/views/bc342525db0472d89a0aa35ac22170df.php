
<?php $__env->startSection('title', __('Fees & Limits')); ?>

<?php $__env->startSection('head_style'); ?>
    <!-- custom-checkbox -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/admin/customs/css/custom-checkbox.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public\admin\customs\css\feeslimit.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="box box-default">
        <div class="box-body ps-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar-title padding-bottom"><?php echo e(__('Fees Limits')); ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="box-body ps-3">

            <div class="row align-items-center">
                <div class="col-md-2">
                    <div class="dropdown pull-left">
                        <button class="btn btn-default dropdown-toggle f-14" type="button" data-bs-toggle="dropdown"><?php echo e(__('Currency')); ?> :
                            <span class="currencyName"><?php echo e($currency->name); ?></span>
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu xss f-14 p-0">
                            <?php $__currentLoopData = $currencyList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currencyItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="listItem px-2 py-1" data-type="<?php echo e($currencyItem->type); ?>"  data-rel="<?php echo e($currencyItem->id); ?>"
                                    data-default="<?php echo e($currencyItem->default); ?>">
                                    <a class="px-2 py-1 d-block" href="#"><?php echo e($currencyItem->name); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 offset-md-8 defaultCurrencyDiv dis-none">
                    <h4 class="form-control-static f-14 text-sm-end mb-0"><span class="label label-success f-14"><?php echo e(__('Default Currency')); ?></span>
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?php echo $__env->make('admin.common.currency_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="col-md-9">
            <div class="box box-info">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">

                        <?php if(isset($displayName)): ?>
							<?php echo e(__(':x Settings', ['x' => $displayName])); ?>

						<?php elseif($list_menu == 'withdrawal'): ?>
                            <?php echo e(__('Payout Settings')); ?>

                        <?php else: ?>
                            <?php echo e(ucwords(str_replace('_', ' ', $list_menu))); ?> <?php echo e(__('Settings')); ?>

                        <?php endif; ?>
                    </h3>
                </div>

                <form action='<?php echo e(url(config('adminPrefix') . '/settings/feeslimit/update-deposit-limit')); ?>'
                    class="form-horizontal" method="POST" id="deposit_limit_form">
                    <?php echo csrf_field(); ?>


                    <input type="hidden" value="<?php echo e($currency->id); ?>" name="currency_id" id="currency_id">
                    <input type="hidden" value="<?php echo e($currency->type); ?>" name="type" id="type">
                    <input type="hidden" value="<?php echo e($transaction_type); ?>" name="transaction_type" id="transaction_type">
                    <input type="hidden" value="<?php echo e($list_menu); ?>" name="tabText" id="tabText">
                    <input type="hidden" value="<?php echo e($moduleAlias); ?>" name="module_alias" id="module_alias">
                    <input type="hidden" value="<?php echo e($currency->default); ?>" name="defaultCurrency" id="defaultCurrency">

                    <div class="box-body">
                        <div>
                            <div class="panel-group" id="accordion">
                                <?php $__currentLoopData = $payment_methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <input type="hidden" name="payment_method_id[]" value="<?php echo e($method->id); ?>">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-bs-toggle="collapse" data-parent="#accordion"
                                                    href="#collapse<?php echo e($method->id); ?>">
                                                    <?php echo e(isset($method->name) && $method->name == 'Mts' ? settings('name') : $method->name); ?></a>
                                            </h4>
                                        </div>
                                        <div id="collapse<?php echo e($method->id); ?>" class="panel-collapse collapse">
                                            <div class="panel-body">

                                                <!-- has_transaction -->
                                                <div class="form-group row">
                                                    <label class="col-sm-3 control-label f-14 fw-bold text-sm-end default_currency_label" for="has_transaction_<?php echo e($method->id); ?>"><?php echo e(__('Is Activated')); ?></label>
                                                    <div class="col-sm-5">
                                                        <label class="checkbox-container">
                                                            <input type="checkbox" class="has_transaction f-14"
                                                                data-method_id="<?php echo e($method->id); ?>"
                                                                name="has_transaction[<?php echo e($method->id); ?>]" value="Yes"
                                                                <?php echo e(isset($method->fees_limit?->has_transaction) && $method->fees_limit?->has_transaction == 'Yes' ? 'checked' : ''); ?>

                                                                <?php echo e($currency->default == 1 ? 'disabled="disabled"' : ' '); ?>

                                                                id="has_transaction_<?php echo e($method->id); ?>">
                                                            <span class="checkmark"></span>
                                                        </label>

                                                        <?php if($errors->has('has_transaction')): ?>
                                                            <span class="help-block">
                                                                <strong><?php echo e($errors->first('has_transaction')); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <p class="mb-0"><span class="default_currency_side_text f-14"><?php echo e(__('Default currency is always active')); ?></span></p>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>

                                                <?php if((isset($minAmountRequired) && $minAmountRequired) || !isset($minAmountRequired)): ?>
                                                    <!-- Minimum Limit -->
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 control-label f-14 fw-bold text-sm-end mt-11" for="min_limit_<?php echo e($method->id); ?>"><?php echo e(__('Minimum Limit')); ?></label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control f-14 min_limit" name="min_limit[]" type="text"
                                                                value="<?php echo e(isset($method->fees_limit->min_limit) ? number_format((float) $method->fees_limit->min_limit, $preference, '.', '') : number_format((float) 1.0, $preference, '.', '')); ?>"
                                                                id="min_limit_<?php echo e($method->id); ?>"
                                                                <?php echo e(isset($method->fees_limit->has_transaction) && $method->fees_limit->has_transaction == 'Yes' ? '' : 'readonly'); ?>

                                                                onkeypress="return isNumberOrDecimalPointKey(this, event);"
                                                                oninput="restrictNumberToPrefdecimalOnInput(this)">

                                                            <small
                                                                class="form-text text-muted f-12"><strong><?php echo e(allowedDecimalPlaceMessage($preference)); ?></strong></small>
                                                            <?php if($errors->has('min_limit')): ?>
                                                                <span class="help-block">
                                                                    <strong><?php echo e($errors->first('min_limit')); ?></strong>
                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <p class="mb-0 f-14 mt-11"><?php echo e(__('If not set, minimum limit is :x', ['x' => number_format((float) 1.0, $preference, '.', '') ])); ?>

                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                <?php endif; ?>
                                                
                                                <?php if((isset($maxAmountRequired) && $maxAmountRequired) || !isset($minAmountRequired)): ?>
                                                    <!-- Maximum Limit -->
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 control-label f-14 fw-bold text-sm-end mt-11" for="max_limit_<?php echo e($method->id); ?>"><?php echo e(__('Maximum
                                                            Limit')); ?></label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control f-14 max_limit" name="max_limit[]" type="text"
                                                                value="<?php echo e(isset($method->fees_limit->max_limit) ? number_format((float) $method->fees_limit->max_limit, $preference, '.', '') : ''); ?>"
                                                                id="max_limit_<?php echo e($method->id); ?>"
                                                                <?php echo e(isset($method->fees_limit->has_transaction) && $method->fees_limit->has_transaction == 'Yes' ? '' : 'readonly'); ?>

                                                                onkeypress="return isNumberOrDecimalPointKey(this, event);"
                                                                oninput="restrictNumberToPrefdecimalOnInput(this)">
                                                            <small
                                                                class="form-text text-muted f-12"><strong><?php echo e(allowedDecimalPlaceMessage($preference)); ?></strong></small>
                                                            <?php if($errors->has('max_limit')): ?>
                                                                <span class="help-block">
                                                                    <strong><?php echo e($errors->first('max_limit')); ?></strong>
                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <p class="mb-0 f-14 mt-11"><?php echo e(__('If not set, maximum limit is infinity')); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                <?php endif; ?>

                                                <!-- Charge Percentage -->
                                                <div class="form-group row">
                                                    <label class="col-sm-3 control-label f-14 fw-bold text-sm-end mt-11" for="charge_percentage_<?php echo e($method->id); ?>"><?php echo e(__('Charge Percentage')); ?></label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control f-14 charge_percentage"
                                                            name="charge_percentage[]" type="text"
                                                            value="<?php echo e(isset($method->fees_limit->charge_percentage) ? number_format((float) $method->fees_limit->charge_percentage, $preference, '.', '') : number_format((float) 0.0, $preference, '.', '')); ?>"
                                                            id="charge_percentage_<?php echo e($method->id); ?>"
                                                            <?php echo e(isset($method->fees_limit->has_transaction) && $method->fees_limit->has_transaction == 'Yes' ? '' : 'readonly'); ?>

                                                            onkeypress="return isNumberOrDecimalPointKey(this, event);"
                                                            oninput="restrictNumberToPrefdecimalOnInput(this)">
                                                        <small
                                                            class="form-text text-muted f-12"><strong><?php echo e(allowedDecimalPlaceMessage($preference)); ?></strong></small>
                                                        <?php if($errors->has('charge_percentage')): ?>
                                                            <span class="help-block">
                                                                <strong><?php echo e($errors->first('charge_percentage')); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <p class="mb-0 f-14 mt-11"><?php echo e(__('If not set, charge percentage is :x', ['x' => number_format((float) 0.0, $preference, '.', '')])); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>

                                                <!-- Charge Fixed -->
                                                <div class="form-group row">
                                                    <label class="col-sm-3 control-label f-14 fw-bold text-sm-end mt-11" for="charge_fixed_<?php echo e($method->id); ?>"><?php echo e(__('Charge
                                                        Fixed')); ?></label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control f-14 charge_fixed" name="charge_fixed[]"
                                                            type="text"
                                                            value="<?php echo e(isset($method->fees_limit->charge_fixed) ? number_format((float) $method->fees_limit->charge_fixed, $preference, '.', '') : number_format((float) 0.0, $preference, '.', '')); ?>"
                                                            id="charge_fixed_<?php echo e($method->id); ?>"
                                                            <?php echo e(isset($method->fees_limit->has_transaction) && $method->fees_limit->has_transaction == 'Yes' ? '' : 'readonly'); ?>

                                                            onkeypress="return isNumberOrDecimalPointKey(this, event);"
                                                            oninput="restrictNumberToPrefdecimalOnInput(this)">
                                                        <small
                                                            class="form-text text-muted f-12"><strong><?php echo e(allowedDecimalPlaceMessage($preference)); ?></strong></small>
                                                        <?php if($errors->has('charge_fixed')): ?>
                                                            <span class="help-block">
                                                                <strong><?php echo e($errors->first('charge_fixed')); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <p class="mb-0 f-14 mt-11"><?php echo e(__('If not set, charge fixed is :x', ['x' => number_format((float) 0.0, $preference, '.', '')])); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="<?php echo e(url(config('adminPrefix') . '/settings/currency')); ?>"
                                class="btn btn-theme-danger f-14 me-1"><?php echo e(__('Cancel')); ?></a>
                            <button type="submit" class="btn btn-theme f-14" id="deposit_limit_update">
                                <i class="fa fa-spinner fa-spin d-none"></i> <span
                                    id="deposit_limit_update_text"><?php echo e(__('Update')); ?></span>
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('extra_body_scripts'); ?>

<?php echo $__env->make('common.restrict_number_to_pref_decimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('common.restrict_character_decimal_point', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(asset('public/dist/plugins/jquery-validation/dist/jquery.validate.min.js')); ?>" type="text/javascript"></script>

    <script>
        'use strict';
        let decimalFormat = ($('#type').val() == 'fiat') ? "<?php echo preference('decimal_format_amount', 2); ?>" : "<?php echo preference('decimal_format_amount_crypto', 8); ?>";
        let depositLimitUpdateText = "<?php echo e(__('Updating...')); ?>";
        let failedText = "<?php echo e(__('Failed')); ?>";
        let isActivated = "<?php echo e(__('Is Activated')); ?>";
        let defaultCurrencyActive = "<?php echo e(__('Default currency is always active')); ?>";
        let csrfToken = "<?php echo e(csrf_token()); ?>";


    </script>

    <script src="<?php echo e(asset('public/admin/customs/js/feeslimit/multiple-fees-limit.min.js')); ?>" type="text/javascript"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\paymoney\resources\views/admin/feeslimits/deposit_limit.blade.php ENDPATH**/ ?>