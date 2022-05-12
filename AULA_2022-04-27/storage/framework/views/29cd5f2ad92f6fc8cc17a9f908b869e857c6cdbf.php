<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>E-commerce</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    e-Commerce
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarCategoria" role="button" data-bs-toggle="dropdown">Categorias</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarCategoria">
                                <?php $__currentLoopData = \App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="dropdown-item" href="<?php echo e(route('serach-category', $category->id)); ?>"><?php echo e($category->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarTag" role="button" data-bs-toggle="dropdown">Tags</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarTag">
                                <?php $__currentLoopData = \App\Models\Tag::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="dropdown-item" href="<?php echo e(route('serach-tag', $tag->id)); ?>"><?php echo e($tag->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto">
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>">Registrar</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarUser" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?>

                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarUser">
                                    <a href="#" class="dropdown-item">Meu Perfil</a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="py-4 container">
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success"><?php echo e(session()->get('success')); ?></div>
        <?php endif; ?>
        <?php if(session()->has('error')): ?>
            <div class="alert alert-danger"><?php echo e(session()->get('error')); ?></div>
        <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer class="container p-5 bg-primary text-white">
        <div class="row">
            <div class="col-sm-8 mb-5">
                <h2 class="h4">Localização:</h2>
                <address>Rua Lorem, ipsum dolor, 386<br>
                Lorem, ipsum - Lorem, LR<br>
                CEP: 00000-000<br>
                Telefone: (11) 8888-8888
                </address>
            </div>
            <div class="col-sm-4">
                <h2 class="h4">Horario de Funcionamento para loja fisica</h2>
                <ul class="list-unstyled">
                    <li>Segunda - Sexta: 9:00 - 20:00</li>
                    <li>Sábado - 9:00 - 16:00</li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel_pi\resources\views/layouts/store.blade.php ENDPATH**/ ?>