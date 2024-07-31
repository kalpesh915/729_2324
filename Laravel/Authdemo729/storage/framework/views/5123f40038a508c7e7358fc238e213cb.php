<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <?php echo $__env->make("cdn", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-center text-white p-5">Login Page</h1>
        <?php if(session("error")): ?>
            <div class="alert alert-danger alert-dismissible">
                <button class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Error : </strong> <?php echo e(session("error")); ?>

            </div>
        <?php elseif(session("success")): ?>
            <div class="alert alert-success alert-dismissible">
                <button class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Success : </strong> <?php echo e(session("success")); ?>

            </div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger alert-dismissible">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="/loginprocess" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-floating my-3">
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required value="<?php echo e(old("email")); ?>">
                <label class="form-label" for="email">Enter Email Address</label>
            </div>
            <div class="form-floating my-3">
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Email Password" required>
                <label class="form-label" for="password">Enter Email Password</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Login" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
                <a href="/singup" class="btn btn-dark">Singup</a>
            </div>
        </form>
    </div>
</body>
</html><?php /**PATH F:\729_laravel\AuthDemo729\resources\views/login.blade.php ENDPATH**/ ?>