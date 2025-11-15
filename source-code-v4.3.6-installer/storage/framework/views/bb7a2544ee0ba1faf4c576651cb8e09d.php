<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e(__('Page Not Found | :x', ['x' => settings('name')])); ?></title>

    <script src="<?php echo e(asset('public/frontend/templates/js/flashesh-dark.min.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('public/dist/libraries/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/templates/css/prism.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/templates/css/style.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/templates/css/owl-css/owl.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/templates/css/404.min.css')); ?>">

    <link rel="shortcut icon" href="<?php echo e(faviconPath()); ?>" />
</head>

<body>
	<div class="position-relative vh-100 log-bg d-flex flex-column align-items-center pb-11 overflow-auto">
        <img class="mt-54p w-[175px] h-[42px]" src="<?php echo e(image(settings('logo'), 'logo')); ?>" alt="brand-logo">
        <div class="mt-14 relative flex flex-col items-center">
            <p class="error-code gilroy-Semibold"><?php echo e(__('404')); ?></p>
            <p class="error-message text-center gilroy-medium mb-5"><?php echo e(__('The page you’re looking for appears to have been moved, deleted or doesn’t exist. We apologize for the inconveniences.')); ?></p>
            <a href="<?php echo e(route('home')); ?>" class="border d-flex align-items-center justify-content-center log-btn rounded ml-60 mt-n4p mt-54p m-auto">
                <span class="text-lg homepage-link gilroy-medium color-white text-uppercase"><?php echo e(__('Go to Home')); ?></span> 
            </a>
        </div>
    </div>

    <!-- Footer section -->
    <script src="<?php echo e(asset('public/dist/libraries/jquery/dist/jquery.min.js')); ?>"></script>  
    <script src="<?php echo e(asset('public/frontend/templates/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/dist/libraries/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/user/templates/js/main.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/templates/js/prism.min.js')); ?>"></script>
</body>

</html><?php /**PATH D:\wamp64\www\paymoney\resources\views/errors/404.blade.php ENDPATH**/ ?>