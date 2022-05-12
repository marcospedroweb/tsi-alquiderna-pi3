<form action="<?php echo e(route('product.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    Nome do Produto: <input type="text" name="name">
    Drescrição: <input type="text" name="description">
    Preço: <input type="number" step="0.1" name="price">
    Estoque: <input type="number" name="stock">
    Selecione uma categoria:
    <select name="category_id">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <select multiple name="tags[]">
        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <button type="submit">Enviar</button>
</form>
<?php /**PATH C:\xampp\htdocs\pi\resources\views/product/create.blade.php ENDPATH**/ ?>