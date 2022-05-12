<?php $__env->startSection('content'); ?>
    <section class="container py-4">
        <div class="row">
            <div class="mx-auto col-10 text-center">
                <h2 class="text-uppercase"><?php echo e($title); ?></h2>
                <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, nobis!</p>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="mx-auto col-sm-10 col-md-6 col-lg-3">
                    <img src="<?php echo e(asset($product->image)); ?>" class="img-fluid">
                    <span class="d-block h6 text-center mt-3"><?php echo e($product->name); ?></span>
                    <div class="text-center">
                        <span class="text-muted">R$ <?php echo e($product->price); ?></span>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-primary btn-sm">Visualizar</a>
                        <a href="#" class="btn btn-secondary btn-sm">Comprar</a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.store', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_pi\resources\views/store/search.blade.php ENDPATH**/ ?>