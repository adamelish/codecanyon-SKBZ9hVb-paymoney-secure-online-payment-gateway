<script src="<?php echo e(asset('public/dist/js/popper.min.js')); ?>" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="<?php echo e(asset('public/dist/libraries/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<!-- Select2 -->
<script src="<?php echo e(asset('public/dist/plugins/select2/js/select2.full.min.js')); ?>" type="text/javascript"></script>
<!-- moment -->
<script src="<?php echo e(asset('public/dist/js/moment.min.js')); ?>" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('public/admin/templates/js/app.min.js')); ?>" type="text/javascript"></script>

<script type="text/javascript">
    "use strict";
    var url = "<?php echo e(url('change-lang')); ?>";
    var token = "<?php echo e(csrf_token()); ?>";
 </script>
<script src="<?php echo e(asset('public/admin/customs/js/body_script.min.js')); ?>"></script>
<?php echo $__env->yieldContent('body_script'); ?>
<?php /**PATH D:\wamp64\www\paymoney\resources\views/admin/layouts/partials/body_script.blade.php ENDPATH**/ ?>