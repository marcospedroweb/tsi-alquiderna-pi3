<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>E-commerce</title>
</head>

<body>
    <header>
        <nav class="nav navbar-light bg-light navbar-expand-sm">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('product.index')); ?>">
                            Produto
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('product.trash')); ?>">
                            Lixeira Produto
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('category.index')); ?>">
                            Categorias
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('category.trash')); ?>">
                            Lixeira Categorias
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('tag.index')); ?>">
                            Tag
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('tag.trash')); ?>">
                            Lixeira Tag
                        </a>
                    </li>
                    <li class="ms-auto">
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div>
            <?php echo e(session()->get('success')); ?>

        </div>
        <section>
            <?php echo $__env->yieldContent('content'); ?>
        </section>
    </main>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel_pi\resources\views/layouts/app.blade.php ENDPATH**/ ?>