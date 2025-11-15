<!-- Stripe - Secret Key -->
<div class="form-group row">
    <label class="col-sm-3 control-label mt-11 f-14 fw-bold text-md-end" for="stripe_secret_key"><?php echo e(__('Secret Key')); ?></label>
    <div class="col-sm-6">

        <input class="form-control f-14" name="stripe[secret_key]" type="text" placeholder="<?php echo e(__('Stripe Secret Key')); ?>"
        value="<?php echo e(isset($currencyPaymentMethod->method_data) ? json_decode($currencyPaymentMethod->method_data)->secret_key : ''); ?>" id="stripe_secret_key">

        <?php if($errors->has('stripe[secret_key]')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('stripe[secret_key]')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>
<div class="clearfix"></div>

<!-- Stripe - Publishable Key -->
<div class="form-group row">
    <label class="col-sm-3 control-label mt-11 f-14 fw-bold text-md-end" for="stripe_publishable_key"><?php echo e(__('Publishable Key')); ?></label>
    <div class="col-sm-6">

        <input class="form-control f-14" name="stripe[publishable_key]" type="text" placeholder="<?php echo e(__('Stripe Publishable Key')); ?>"
        value="<?php echo e(isset($currencyPaymentMethod->method_data) ? json_decode($currencyPaymentMethod->method_data)->publishable_key : ''); ?>" id="stripe_publishable_key">

        <?php if($errors->has('stripe[publishable_key]')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('stripe[publishable_key]')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>
<div class="clearfix"></div>
<?php /**PATH D:\wamp64\www\paymoney\resources\views/admin/currencyPaymentMethod/stripe.blade.php ENDPATH**/ ?>