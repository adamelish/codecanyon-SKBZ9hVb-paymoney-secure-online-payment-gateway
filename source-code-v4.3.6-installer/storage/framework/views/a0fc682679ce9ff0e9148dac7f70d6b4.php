<?php
$logo = settings('logo');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="paymoney">
    <title><?php echo e(__('Admin')); ?></title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/dist/libraries/bootstrap/css/bootstrap.min.css')); ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/dist/libraries/font-awesome/css/font-awesome.min.css')); ?>">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/admin/templates/adminLte/AdminLTE.min.css')); ?>">

    <!-- iCheck -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/dist/plugins/iCheck/square/blue.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/admin/templates/css/style.min.css')); ?>">

    <!---favicon-->
    <?php if(!empty(settings('favicon'))): ?>
        <link rel="shortcut icon" href="<?php echo e(image(settings('favicon'), 'favicon')); ?>" />
    <?php endif; ?>


</head>

<body class="hold-transition login-page bg-ec">
<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo e(url(config('adminPrefix').'/')); ?>"><?php echo getSystemLogo('img-responsive log-img'); ?></a>
    </div>

    <div class="login-box-body login-design">

        <?php if(Session::has('message')): ?>
            <div class="alert <?php echo e(Session::get('alert-class')); ?> text-center">
                <strong><?php echo e(Session::get('message')); ?></strong>
                <a class="cursor-pointer close h5 ms-3" data-dismiss="alert" aria-hidden="true">&times;</a>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(url(config('adminPrefix').'/adminlog')); ?>" method="POST" id="admin_login_form">
            <?php echo e(csrf_field()); ?>


            <div class="form-group has-feedback position-relative <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                <label class="control-label sr-only" for="email"><?php echo e(__('Email')); ?></label>
                <input type="email" class="form-control f-14" placeholder="<?php echo e(__('Email')); ?>" name="email" id="email"
                
                <?php if(checkDemoEnvironment()): ?>
                    value="<?php echo e(old('email', 'admin@techvill.net')); ?>"
                <?php endif; ?>

                required="" data-value-missing="<?php echo e(__('This field is required.')); ?>">
                <span class="fa fa-envelope form-control-feedback position-absolute mail-log"></span>

                <?php if($errors->has('email')): ?>
                    <span class="help-block"><strong><?php echo e($errors->first('email')); ?></strong></span>
                <?php endif; ?>
            </div>

            <div class="form-group has-feedback position-relative <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                <label class="control-label sr-only" for="password"><?php echo e(__('Password')); ?></label>
                <input type="password" class="form-control f-14" placeholder="<?php echo e(__('Password')); ?>" name="password" id="password"
                <?php if(checkDemoEnvironment()): ?>
                    value="<?php echo e(old('password', '123456')); ?>"
                <?php endif; ?>
                required="" data-value-missing="<?php echo e(__('This field is required.')); ?>">
                <span class="fa fa-lock f-24 form-control-feedback position-absolute mail-log"></span>

                <?php if($errors->has('password')): ?>
                    <span class="help-block"><strong><?php echo e($errors->first('password')); ?></strong></span>
                <?php endif; ?>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label class="f-14">
                            <input type="checkbox"> <?php echo e(__('Remember Me')); ?>

                        </label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-theme f-14 btn-block" id="admin-login-submit-btn">
                        <i class="fa fa-spinner fa-spin d-none"></i>
                        <span id="admin-login-submit-btn-txt"><?php echo e(__('Sign In')); ?></span>
                    </button>
                </div>
            </div>
        </form>
        <!-- /.social-auth-links -->
        <a href="<?php echo e(url(config('adminPrefix').'/forget-password')); ?>" class="f-14"><?php echo e(__('I forgot my password')); ?></a><br>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery  -->
<script src="<?php echo e(asset('public/dist/libraries/jquery/dist/jquery.min.js')); ?>" type="text/javascript"></script>

<!-- Bootstrap-->
<script src="<?php echo e(asset('public/dist/libraries/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>

<script src="<?php echo e(asset('public/dist/plugins/html5-validation/validation.min.js')); ?>" type="text/javascript"></script>

<!-- iCheck -->
<script src="<?php echo e(asset('public/dist/plugins/iCheck/icheck.min.js')); ?>" type="text/javascript"></script>

<script>
    'use strict';
    let loginButtonText= "<?php echo e(__('Signing In...')); ?>";

    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });

    $(document).ready(function () {
        const urlParams = new URLSearchParams(window.location.search);
        const isDemo = urlParams.get('demo') === 'true';

        if (isDemo) {
            $('#admin-login-submit-btn-txt').text(loginButtonText);
            $('#admin-login-submit-btn').attr("disabled", true);
            $('.fa-spin').removeClass('d-none');
            $('#admin_login_form').trigger('submit');
        }
    });

    $('#admin_login_form').on('submit', function (e) {
        $('#admin-login-submit-btn-txt').text(loginButtonText);
        $('#admin-login-submit-btn').attr("disabled", true);
        $('.fa-spin').removeClass('d-none');
    })
</script>
</body>
<?php /**PATH D:\wamp64\www\paymoney\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>