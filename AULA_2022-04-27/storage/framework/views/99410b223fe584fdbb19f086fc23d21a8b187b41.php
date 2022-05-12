<?php $__env->startSection('content'); ?>
<a class="btn btn-lg btn-success float-end me-5" href="<?php echo e(route('category.create')); ?>">Criar Categoria</a>
<div class="container mt-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome da Categoria</th>
                <th>Quantidade de Produtos na Categoria</th>
                <th>Editar</th>
                <th>Apagar</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($category->id); ?></td>
                <td><?php echo e($category->name); ?></td>
                <td><?php echo e($category->Products->count()); ?>

                <td><a href="<?php echo e(route('category.edit', $category->id)); ?>">Editar</a></td>
                <td><a href="<?php echo e(route('category.destroy', $category->id)); ?>">Apagar</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pi\resources\views/category/index.blade.php ENDPATH**/ ?>