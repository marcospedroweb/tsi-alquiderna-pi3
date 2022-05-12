<?php $__env->startSection('content'); ?>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Album example</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator,
                    etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>

    <section class="container">
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

<?php echo $__env->make('layouts.store', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_pi\resources\views/welcome.blade.php ENDPATH**/ ?>