<!-- coinPayments - Merchant Id -->
<div class="form-group row">
    <label class="col-sm-3 control-label mt-11 f-14 fw-bold text-md-end" for="coinPayments_merchant_id"><?php echo e(__('Merchant Id')); ?></label>
    <div class="col-sm-6">
        <input class="form-control f-14 coinpayments[merchant_id]" name="coinpayments[merchant_id]" type="text" placeholder="<?php echo e(__('CoinPayments Merchant Id')); ?>"
        value="<?php echo e(isset($currencyPaymentMethod->method_data) ? json_decode($currencyPaymentMethod->method_data)->merchant_id : ''); ?>" id="coinPayments_merchant_id">
        <?php if($errors->has('coinpayments[merchant_id]')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('coinpayments[merchant_id]')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>
<div class="clearfix"></div>

<!-- coinPayments - Public Key -->
<div class="form-group row">
    <label class="col-sm-3 control-label mt-11 f-14 fw-bold text-md-end" for="coinPayments_public_key"><?php echo e(__('Public Key')); ?></label>
    <div class="col-sm-6">
        <input class="form-control f-14 coinpayments[public_key]" name="coinpayments[public_key]" type="text" placeholder="<?php echo e(__('CoinPayments Public Key')); ?>"
        value="<?php echo e(isset($currencyPaymentMethod->method_data) ? json_decode($currencyPaymentMethod->method_data)->public_key : ''); ?>" id="coinPayments_public_key">
        <?php if($errors->has('coinpayments[public_key]')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('coinpayments[public_key]')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>
<div class="clearfix"></div>

<!-- coinPayments - Private Key -->
<div class="form-group row">
    <label class="col-sm-3 control-label mt-11 f-14 fw-bold text-md-end" for="coinPayments_private_key"><?php echo e(__('Private Key')); ?></label>
    <div class="col-sm-6">
        <input class="form-control f-14 coinpayments[private_key]" name="coinpayments[private_key]" type="text" placeholder="<?php echo e(__('CoinPayments Private Key')); ?>"
        value="<?php echo e(isset($currencyPaymentMethod->method_data) ? json_decode($currencyPaymentMethod->method_data)->private_key : ''); ?>" id="coinPayments_private_key">
        <?php if($errors->has('coinpayments[private_key]')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('coinpayments[private_key]')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>
<div class="clearfix"></div>

<div class="form-group row">
    <label class="col-sm-3 control-label mt-11 f-14 fw-bold text-md-end mt-11" for="webhook_url"><?php echo e(__('IPN URL')); ?></label>
    <div class="col-sm-6">
        <div class="d-flex justify-content-between">
            <input name="webhook_url" class="form-control f-14 coinpayments_ipn_url" type="text" readonly value="<?php echo e(url('gateway/payment-verify/coinpayments')); ?>" id="webhook_url">
            <button class="btn btn-md btn-primary coin-copy f-14" id="coinpayments_copy_button">
                <?php echo e(__('Copy')); ?>

            </button>
        </div>
        <small class="text-color f-12"><strong><?php echo __('Copy the above url and set it in :x field.', ['x' => '<a href="'. image(null, 'coinpayments_ipn') .'">'. __('Coinpayments IPN URL') .'</a>']); ?></strong></small>
    </div>
</div>
<div class="clearfix"></div>

<?php /**PATH D:\wamp64\www\paymoney\resources\views/admin/currencyPaymentMethod/coinpayments.blade.php ENDPATH**/ ?>