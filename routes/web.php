<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SourceWebsiteController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/dashboard', function () {
    return view('crud');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

/*
    Passos:
        1. Migration [php artisan make:migration create_(nomeMigration)_table]
        2. Rotas
        3. Controller [php artisan make:controller] (nomeController) -> OBS: Utilize o padrão (nomeController)Controller, é necessario importar a controller para a rota
        4. Model [php atisan make:model] (nomeModel)
        5. View [Cria todo o html que será utilizado]
    // Se não existir o elemento, cria esse elemento/função
*/

Route::middleware(['auth', 'admin'])->group(function () {

    //Crud geral
    Route::get('/crud', function () {
        return view('crud');
    })->name('crud.index'); //armazena no banco

    //category
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index'); //armazena no banco
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create'); // Retorna a pagina para create novo dado
    Route::post('/category/create/', [CategoryController::class, 'store'])->name('category.store'); //armazena no banco
    Route::get('/category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy'); // "Apaga do banco"
    Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit'); // Vizualiza pagina para edit, já com os dados
    Route::put('/category/edit/{category}', [CategoryController::class, 'update'])->name('category.update'); // Atualiza no banco com as informações
    Route::get('/category/trash', [CategoryController::class, 'trash'])->name('category.trash'); //Vizualiza todos os itens com softdelete
    Route::get('/category/trash/restore/{category}', [CategoryController::class, 'restore'])->name('category.restore'); // Restaura do soft delete
    Route::get('/category/forceDelete/{category}', [CategoryController::class, 'forceDelete'])->name('category.forceDelete'); // Restaura do soft delete

    //class
    Route::get('/class', [ClassController::class, 'index'])->name('itemClass.index'); //armazena no banco
    Route::get('/class/create', [ClassController::class, 'create'])->name('itemClass.create'); // Retorna a pagina para create novo dado
    Route::post('/class/create/', [ClassController::class, 'store'])->name('itemClass.store'); //armazena no banco
    Route::get('/class/destroy/{itemClass}', [ClassController::class, 'destroy'])->name('itemClass.destroy'); // "Apaga do banco"
    Route::get('/class/edit/{itemClass}', [ClassController::class, 'edit'])->name('itemClass.edit'); // Vizualiza pagina para edit, já com os dados
    Route::put('/class/edit/{itemClass}', [ClassController::class, 'update'])->name('itemClass.update'); // Atualiza no banco com as informações
    Route::get('/class/trash', [ClassController::class, 'trash'])->name('itemClass.trash'); //Vizualiza todos os itens com softdelete
    Route::get('/class/trash/restore/{itemClass}', [ClassController::class, 'restore'])->name('itemClass.restore'); // Restaura do soft delete
    Route::get('/class/forceDelete/{sourceWebsite}', [ClassController::class, 'forceDelete'])->name('itemClass.forceDelete'); // Restaura do soft delete

    //sourceWebsites
    Route::get('/sourceWebsite', [SourceWebsiteController::class, 'index'])->name('sourceWebsite.index'); //armazena no banco
    Route::get('/sourceWebsite/create', [SourceWebsiteController::class, 'create'])->name('sourceWebsite.create'); // Retorna a pagina para create novo dado
    Route::post('/sourceWebsite/create/', [SourceWebsiteController::class, 'store'])->name('sourceWebsite.store'); //armazena no banco
    Route::get('/sourceWebsite/destroy/{sourceWebsite}', [SourceWebsiteController::class, 'destroy'])->name('sourceWebsite.destroy'); // "Apaga do banco"
    Route::get('/sourceWebsite/edit/{sourceWebsite}', [SourceWebsiteController::class, 'edit'])->name('sourceWebsite.edit'); // Vizualiza pagina para edit, já com os dados
    Route::put('/sourceWebsite/edit/{sourceWebsite}', [SourceWebsiteController::class, 'update'])->name('sourceWebsite.update'); // Atualiza no banco com as informações
    Route::get('/sourceWebsite/trash', [SourceWebsiteController::class, 'trash'])->name('sourceWebsite.trash'); //Vizualiza todos os itens com softdelete
    Route::get('/sourceWebsite/trash/restore/{sourceWebsite}', [SourceWebsiteController::class, 'restore'])->name('sourceWebsite.restore'); // Restaura do soft delete
    Route::get('/sourceWebsite/forceDelete/{sourceWebsite}', [SourceWebsiteController::class, 'forceDelete'])->name('sourceWebsite.forceDelete'); // Restaura do soft delete

    //product
    Route::get('/product', [ProductController::class, 'index'])->name('product.index'); //armazena no banco
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create'); // Retorna a pagina para create novo dado
    Route::post('/product/create/', [ProductController::class, 'store'])->name('product.store'); //armazena no banco
    Route::get('/product/destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy'); // "Apaga do banco"
    Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit'); // Vizualiza pagina para edit, já com os dados
    Route::put('/product/edit/{product}', [ProductController::class, 'update'])->name('product.update'); // Atualiza no banco com as informações
    Route::get('/product/trash', [ProductController::class, 'trash'])->name('product.trash'); //Vizualiza todos os itens com softdelete
    Route::get('/product/trash/restore/{product}', [ProductController::class, 'restore'])->name('product.restore'); // Restaura do soft delete
    Route::get('/product/forceDelete/{product}', [ProductController::class, 'forceDelete'])->name('product.forceDelete'); // Restaura do soft delete

});
