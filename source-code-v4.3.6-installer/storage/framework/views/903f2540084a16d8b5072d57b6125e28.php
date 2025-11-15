<?php
	$extensions = json_encode(getFileExtensions(7));
?>

<?php $__env->startSection('title', __('Currency Payment Methods')); ?>

<?php $__env->startSection('head_style'); ?>
	<!-- sweetalert -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/dist/libraries/sweetalert/sweetalert.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/admin/customs/css/currency_payment_methods/list.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/admin/customs/css/custom-checkbox.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
	<div class="box box-default">
		<div class="box-body ps-2">
			<div class="row">
				<div class="col-md-12">
					<div class="top-bar-title padding-bottom"><?php echo e(__('Currency Payment Methods')); ?></div>
				</div>
			</div>
		</div>
	</div>

	<div class="box">
		<div class="box-body ps-3">
			<div class="dropdown">
				<button class="btn btn-default dropdown-toggle f-14" type="button" data-bs-toggle="dropdown"><?php echo e(__('Currency')); ?> : <span class="currencyName"><?php echo e($currency->name); ?></span>
				<span class="caret"></span></button>
				<ul class="dropdown-menu xss f-14 p-0">
					<?php $__currentLoopData = $currencyList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currencyItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="listItem px-2 py-1" data-rel="<?php echo e($currencyItem->id); ?>">
							<a class="px-2 py-1 d-block" href="#"><?php echo e($currencyItem->name); ?></a>
						</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3">
			<?php echo $__env->make('admin.common.paymentMethod_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>

		<div class="col-md-9">
			<div class="box box-info">
				<div class="box-header with-border text-center">
					<h3 class="box-title">
						<?php if($paymentMethod ==  Bank): ?>
							<?php echo e($paymentMethodName); ?> <?php echo e(__('Details')); ?>

						<?php elseif(config('mobilemoney.is_active') && $paymentMethod == (defined('MobileMoney') ? MobileMoney : '')): ?>
							<?php echo e($paymentMethodName); ?> <?php echo e(__('Details')); ?>

						<?php elseif($paymentMethod == Mts): ?>
							<?php echo e(__('Wallet')); ?>

						<?php else: ?>
							<?php echo e($paymentMethodName); ?> <?php echo e(__('Credentials')); ?>

						<?php endif; ?>
					</h3>
				</div>

				<form action='<?php echo e(url(config('adminPrefix').'/settings/payment-methods/update-paymentMethod-Credentials')); ?>' class="form-horizontal" method="POST" id="currencyPaymentMethod_form">
					<?php echo csrf_field(); ?>


					<input type="hidden" value="<?php echo e(isset($currencyPaymentMethod->id) ? $currencyPaymentMethod->id : ''); ?>" name="id" id="id">
					<input type="hidden" value="<?php echo e($currency->id); ?>" name="currency_id" id="currency_id">
					<input type="hidden" value="<?php echo e($paymentMethod); ?>" name="paymentMethod" id="paymentMethod">
					<input type="hidden" value="<?php echo e($list_menu); ?>" name="tabText" id="tabText">

					<div class="box-body">

						<?php
							$paymentMethodBlade = $list_menu == 'mts' ? 'admin.currencyPaymentMethod.wallet' : 'admin.currencyPaymentMethod.'.strtolower($list_menu);
						?>
						<?php if($list_menu != 'bank'): ?>
							<?php echo $__env->make($paymentMethodBlade, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							<?php echo $__env->make('admin.currencyPaymentMethod.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php endif; ?>
					</div>
				</form>

				<?php if($list_menu == 'bank'): ?>
					<?php echo $__env->make('admin.currencyPaymentMethod.bank', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php endif; ?>



				<?php if(config('mobilemoney.is_active') && $list_menu == 'mobilemoney'): ?>
					<?php echo $__env->make('admin.common.mobile-money', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('extra_body_scripts'); ?>
	<script src="<?php echo e(asset('public/dist/plugins/jquery-validation/dist/jquery.validate.min.js')); ?>" type="text/javascript"></script>
	<script src="<?php echo e(asset('public/dist/plugins/jquery-validation/dist/additional-methods.min.js')); ?>" type="text/javascript"></script>
	<script src="<?php echo e(asset('public/dist/libraries/sweetalert/sweetalert.min.js')); ?>" type="text/javascript"></script>
	<script>
		'use strict';
		var bankLogo = "<?php echo e(image(null, 'bank')); ?>";
		var isActiveMobileMoney = "<?php echo config('mobilemoney.is_active'); ?>";
		var modeRequire = "<?php echo e(__('Please select a mode.')); ?>";
		var updateText = "<?php echo e(__('Updating...')); ?>";
		var titleText = "<?php echo e(__('Success')); ?>";
		var failedText = "<?php echo e(__('Failed')); ?>";
		var errorTitle = "<?php echo e(__('Oops...')); ?>";
		var errorText = "<?php echo e(__('Something went wrong with ajax.')); ?>";
		var deleteTitle = "<?php echo e(__('Deleted')); ?>";
		var deleteAlert = "<?php echo e(__('Are you sure you want to delete?')); ?>";
		var alertText = "<?php echo e(__('You won\'t be able to revert this.')); ?>";
		var confirmBtnText = "<?php echo e(__('Yes, delete it.')); ?>";
		var cancelBtnText = "<?php echo e(__('Cancel')); ?>";
		var cancelTitle = "<?php echo e(__('canceled')); ?>";
		var cancelAlert = "<?php echo e(__('You have cancelled it')); ?>";
		var copyTitle = "<?php echo e(__('Copied')); ?>";
		var copyText = "<?php echo e(__('IPN URL link copied.')); ?>";
		var flutterwaveCopyText = "<?php echo e(__('Webhook URL link copied.')); ?>";
		var noResponseText = "<?php echo e(__('No response.')); ?>";
		var yesText = "<?php echo e(__('Yes')); ?>";
		var noText = "<?php echo e(__('No')); ?>";
		var activeText = "<?php echo e(__('Active')); ?>";
		var inactiveText = "<?php echo e(__('Inactive')); ?>";
		var submitText = "<?php echo e(__('Submitting...')); ?>";
		var extensions = JSON.parse(<?php echo json_encode($extensions, 15, 512) ?>);
		var extensionsValidationRule = extensions.join('|');
		var extensionsValidation = extensions.join(', ');
		var errorMessage = '<?php echo e(__("Please select (:x) file.")); ?>';
		var extensionsValidationMessage = errorMessage.replace(':x', extensionsValidation);
	</script>
	<script src="<?php echo e(asset('public/admin/customs/js/currency_payment_methods/list.min.js')); ?>" type="text/javascript"></script>
	<?php if(config('mobilemoney.is_active') && $list_menu == 'mobilemoney'): ?>
		<script>
			'use strict';
			var defaultImagePath = "<?php echo asset('public/uploads/userPic/default-image.png'); ?>";
		</script>
		<script src="<?php echo e(asset('public/dist/js/mobile-money.min.js')); ?>"></script>
	<?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\paymoney\resources\views/admin/currencyPaymentMethod/list.blade.php ENDPATH**/ ?>