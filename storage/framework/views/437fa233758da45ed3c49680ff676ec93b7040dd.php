

<?php $__env->startSection('head'); ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets01/fonts/icomoon/style.css">
    <link rel="stylesheet" href="assets01/css/style.css">
<link rel="stylesheet" href="assets01/scss/style.scss">

    <link rel="stylesheet" href="assets01/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets01/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="assets01/css/login.css">
</head>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('assets01/images/kemitraan1.jpg');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                <b> <?php echo e(session('error')); ?> </b>
                            </div>
                            <?php endif; ?>
                        <h3>Login <br><strong>MOMO CHEESETEA</strong></h3>
                        <form action="actionlogin" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group first">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="your-email@gmail.com"
                                    id="email" required>
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
                            </div>

                            <input type="submit" value="Log In" class="btn btn-block btn-primary">

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</body>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

    <script src="assets01/js/login.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home\homepage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Momo\resources\views/home\login.blade.php ENDPATH**/ ?>