<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('category.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    Nome da categoria: <input type="text" name="name">
    <button type="submit">Enviar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_pi\resources\views/category/create.blade.php ENDPATH**/ ?>