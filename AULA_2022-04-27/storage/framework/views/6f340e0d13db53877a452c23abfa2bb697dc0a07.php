<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('product.update', $product->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    Nome do Produto: <input type="text" name="name" value="<?php echo e($product->name); ?>">
    Drescrição: <input type="text" name="description"  value="<?php echo e($product->description); ?>">
    Preço: <input type="number" step="0.1" name="price"  value="<?php echo e($product->price); ?>">
    Estoque: <input type="number" name="stock"  value="<?php echo e($product->stock); ?>">
    Imagem: <input type="file" name="image">
    Selecione uma categoria:
    <select name="category_id">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($category->id); ?>"
            <?php echo e($product->category_id == $category->id ? 'selected' : ''); ?>>
            <?php echo e($category->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <select multiple name="tags[]">
        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($tag->id); ?>"
            <?php echo e($product->hasTag($tag->id) ? 'selected' : ''); ?>

            ><?php echo e($tag->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <button type="submit">Enviar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_pi\resources\views/product/edit.blade.php ENDPATH**/ ?>