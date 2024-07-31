<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <?php echo $__env->make("cdn", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
    <?php echo $__env->make("menu", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid">
        <?php if (isset($component)) { $__componentOriginale8446c98089b459da0d8f116e0c63ff3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale8446c98089b459da0d8f116e0c63ff3 = $attributes; } ?>
<?php $component = App\View\Components\Greetings::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('greetings'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Greetings::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale8446c98089b459da0d8f116e0c63ff3)): ?>
<?php $attributes = $__attributesOriginale8446c98089b459da0d8f116e0c63ff3; ?>
<?php unset($__attributesOriginale8446c98089b459da0d8f116e0c63ff3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale8446c98089b459da0d8f116e0c63ff3)): ?>
<?php $component = $__componentOriginale8446c98089b459da0d8f116e0c63ff3; ?>
<?php unset($__componentOriginale8446c98089b459da0d8f116e0c63ff3); ?>
<?php endif; ?>
        <h1 class="bg-primary text-white text-center p-5">Home Page</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At vel inventore possimus ipsam sint deserunt excepturi rerum, suscipit, debitis, quam quia repellat eius culpa ratione dolorum. Dignissimos quasi veritatis iste.Ut debitis animi corrupti voluptatem amet tenetur corporis soluta quasi cum ipsam molestias fugit nihil accusamus nam assumenda fugiat, nulla, incidunt quae repellat adipisci omnis porro obcaecati labore voluptatum! Provident!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At vel inventore possimus ipsam sint deserunt excepturi rerum, suscipit, debitis, quam quia repellat eius culpa ratione dolorum. Dignissimos quasi veritatis iste.Ut debitis animi corrupti voluptatem amet tenetur corporis soluta quasi cum ipsam molestias fugit nihil accusamus nam assumenda fugiat, nulla, incidunt quae repellat adipisci omnis porro obcaecati labore voluptatum! Provident!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At vel inventore possimus ipsam sint deserunt excepturi rerum, suscipit, debitis, quam quia repellat eius culpa ratione dolorum. Dignissimos quasi veritatis iste.Ut debitis animi corrupti voluptatem amet tenetur corporis soluta quasi cum ipsam molestias fugit nihil accusamus nam assumenda fugiat, nulla, incidunt quae repellat adipisci omnis porro obcaecati labore voluptatum! Provident!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At vel inventore possimus ipsam sint deserunt excepturi rerum, suscipit, debitis, quam quia repellat eius culpa ratione dolorum. Dignissimos quasi veritatis iste.Ut debitis animi corrupti voluptatem amet tenetur corporis soluta quasi cum ipsam molestias fugit nihil accusamus nam assumenda fugiat, nulla, incidunt quae repellat adipisci omnis porro obcaecati labore voluptatum! Provident!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At vel inventore possimus ipsam sint deserunt excepturi rerum, suscipit, debitis, quam quia repellat eius culpa ratione dolorum. Dignissimos quasi veritatis iste.Ut debitis animi corrupti voluptatem amet tenetur corporis soluta quasi cum ipsam molestias fugit nihil accusamus nam assumenda fugiat, nulla, incidunt quae repellat adipisci omnis porro obcaecati labore voluptatum! Provident!</p>
    </div>
</body>
</html><?php /**PATH F:\729_laravel\AuthDemo729\resources\views/home.blade.php ENDPATH**/ ?>