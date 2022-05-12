<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('category.update', $category->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    Nome da Categoria: <input type="text" name="name" value="<?php echo e($category->name); ?>">
    <button type="submit">Enviar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pi\resources\views/category/edit.blade.php ENDPATH**/ ?>