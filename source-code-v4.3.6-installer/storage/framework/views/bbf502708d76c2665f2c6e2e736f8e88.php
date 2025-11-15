<?php
    $paymentMethod = $list_menu == 'mts' ? 'Wallet' : ucfirst($list_menu);
    $modules = collect(addonPaymentMethods($paymentMethod))->sortBy('type')->reverse()->toArray();


?>

<?php if($list_menu != 'mts'): ?>
    <!-- processing_time -->
    <div class="form-group row">
        <label class="col-sm-3 control-label  mt-11 f-14 fw-bold text-md-end" for="processing_time"><?php echo e(__('Processing Time')); ?> (<?php echo e(__('days')); ?>) </label>
        <div class="col-sm-6">
            <input class="form-control f-14 processing_time" name="processing_time" type="text" placeholder="<?php echo e(__(':X Processing Time', ['X' => $paymentMethod])); ?>"
            value="<?php echo e(isset($currencyPaymentMethod->processing_time) ? $currencyPaymentMethod->processing_time : ''); ?>" id="processing_time">

            <?php if($errors->has('processing_time')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('processing_time')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="clearfix"></div>
<?php endif; ?>

<!-- Activated for -->
<div class="form-group row">
							
    <label class="col-lg-3 control-label f-14 fw-bold text-md-end mb-7p"><?php echo e(__('Activate For')); ?> </label>

    <div class="col-lg-6">
        <div class="row gap-2">
            <?php if($list_menu != 'mts'): ?>
                <div class="pr-customize">
                    <div class="check-parent-div flex-for-column px-2 pt-2 pb-0">
                        <label class="checkbox-container">
                            <input type="checkbox" name="transaction_type[]" value="deposit" <?php echo e(isset($currencyPaymentMethod->activated_for)  && in_array('deposit' , explode(':', str_replace(['{', '}', '"', ','], '',  $currencyPaymentMethod->activated_for)) ) ? 'checked': ""); ?> class="view_checkbox">
                            <p class="px-1 f-property mb-unset"><?php echo e(__('Deposit')); ?> </p>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            <?php endif; ?>

            <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($module['type']) < 2): ?>
                    <div class="pr-customize">
                            <?php $__currentLoopData = $module['type']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="check-parent-div flex-for-column px-2 pt-2 pb-0">
                                <label class="checkbox-container">
                                    <input type="checkbox" name="transaction_type[]" value="<?php echo e($type); ?>" <?php echo e(isset($currencyPaymentMethod->activated_for)  && in_array($type , explode(':', str_replace(['{', '}', '"', ','], '',  $currencyPaymentMethod->activated_for)) ) ? 'checked': ""); ?> class="view_checkbox">
                                    <p class="px-1 f-property mb-unset"><?php echo e(str_replace('_', ' ', ucfirst($type))); ?> </p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                    <div>
                        <div class="check-parent-div flex-for-column px-2 pt-2 pb-0">
                            <p class="font-bold"><?php echo e($module['name']); ?></p>
                            <?php $__currentLoopData = $module['type']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                   
                                <label class="checkbox-container">
                                    <input type="checkbox" name="transaction_type[]" value="<?php echo e($type); ?>" class="view_checkbox" <?php echo e(isset($currencyPaymentMethod->activated_for) && in_array($type , explode(':', str_replace(['{', '}', '"', ','], '',  $currencyPaymentMethod->activated_for)) ) ? 'checked': ""); ?> >
                                    <p class="px-1 f-property mb-unset"><?php echo e(str_replace('_', ' ', ucfirst($type))); ?></p>
                                    <span class="checkmark"></span>
                                </label>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>	
    </div>
</div> 

<div class="row">
    <div class="col-md-6 offset-md-3">
        <a id="cancel_anchor" href="<?php echo e(url(config('adminPrefix')."/settings/currency")); ?>" class="btn btn-theme-danger f-14 me-1"><?php echo e(__('Cancel')); ?></a>
        <button type="submit" class="btn btn-theme f-14" id="paymentMethodList_update">
            <i class="fa fa-spinner fa-spin d-none"></i> <span id="paymentMethodList_update_text"><?php echo e(__('Update')); ?></span>
        </button>
    </div>
</div><?php /**PATH D:\wamp64\www\paymoney\resources\views/admin/currencyPaymentMethod/common.blade.php ENDPATH**/ ?>