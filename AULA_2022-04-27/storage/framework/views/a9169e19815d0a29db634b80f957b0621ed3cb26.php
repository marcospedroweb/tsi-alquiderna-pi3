<?php $__env->startSection('content'); ?>
<a class="btn btn-lg btn-success float-end me-5" href="<?php echo e(route('product.create')); ?>">Criar Produto</a>
<div class="container mt-3">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Cat ID</th>
                <th>Categoria</th>
                <th>Tag</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Editar</th>
                <th>Apagar</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product->id); ?></td>
                <td><img src="<?php echo e(asset($product->image)); ?>" style="width:35px; height:35px;"></td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->description); ?></td>
                <td><?php echo e($product->Category->id); ?></td>
                <td><?php echo e($product->Category->name); ?></td>
                <td><?php $__currentLoopData = $product->Tags()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($tag->name); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td><?php echo e($product->stock); ?></td>
                <td><a href="<?php echo e(route('product.edit', $product->id)); ?>">Editar</a></td>
                <td><a href="<?php echo e(route('product.destroy', $product->id)); ?>">Apagar</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_pi\resources\views/product/index.blade.php ENDPATH**/ ?>