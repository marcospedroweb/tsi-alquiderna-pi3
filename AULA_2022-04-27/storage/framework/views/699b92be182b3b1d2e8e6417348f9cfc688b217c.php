<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('tag.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    Nome da tag: <input type="text" name="name">
    <button type="submit">Enviar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pi\resources\views/tag/create.blade.php ENDPATH**/ ?>