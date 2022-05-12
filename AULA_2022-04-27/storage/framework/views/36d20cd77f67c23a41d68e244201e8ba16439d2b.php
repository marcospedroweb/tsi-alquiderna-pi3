<?php $__env->startSection('content'); ?>
<a class="btn btn-lg btn-success float-end me-5" href="<?php echo e(route('tag.create')); ?>">Criar Tag</a>
<div class="container mt-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome da Tag</th>
                <th>Quantidade de Produtos</th>
                <th>Editar</th>
                <th>Apagar</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($tag->id); ?></td>
                <td><?php echo e($tag->name); ?></td>
                <td><?php echo e($tag->Products->count()); ?></td>
                <td><a href="<?php echo e(route('tag.edit', $tag->id)); ?>">Editar</a></td>
                <td><a href="<?php echo e(route('tag.destroy', $tag->id)); ?>">Apagar</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pi\resources\views/tag/index.blade.php ENDPATH**/ ?>